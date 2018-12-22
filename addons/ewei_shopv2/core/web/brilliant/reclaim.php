<?php if( !defined("IN_IA") )
{
    exit( "Access Denied" );
}

class Reclaim_EweiShopV2Page extends WebPage
{
    //出彩开荒服务
    public function main()
    {

        //查询数据
        $homeda=pdo_getall('abfuwu_wasteland',array(),array('id','name','money','acreage'),'id DESC');

        include($this->template("fuwu/reclaim"));
    }
    //新增
    public function add()
    {
        $this->post();
    }
    public function post()
    {
        global $_W;
        global $_GPC;
        if( !$_GPC["name"] ){
            include($this->template("fuwu/reclaimadd"));
        }else{

            if(empty($_GPC['name'])){
                show_json(0,'标题不能为空');
            }
            if(empty($_GPC['money'])){
                show_json(0,'价格不能为空');
            }
            if(empty($_GPC['acreage'])){
                show_json(0,'服务面积不能为空');
            }
            if(empty($_GPC['recommend'])){
                show_json(0,'服务介绍不能为空');
            }

            $arr=$_POST;
            $resul=pdo_insert('abfuwu_wasteland',$arr);
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('brilliant.reclaim.add', '新增出彩开荒服务 ID: ' . $id);
                show_json(1, array('url' => webUrl('brilliant/reclaim')));
            }
        }
    }

    public function edit(){
        global $_GPC;
        global $_W;
        $id=$_GPC['id'];

        if(!$_GPC['name']){

            $data=pdo_get('abfuwu_wasteland',array('id'=>$id));
//            var_dump($id);die;die
            include($this->template("fuwu/reclaimadd"));
        }else{
            if(empty($_GPC['name'])){
                show_json(0,'标题不能为空');
            }
            if(empty($_GPC['money'])){
                show_json(0,'价格不能为空');
            }
            if(empty($_GPC['acreage'])){
                show_json(0,'服务面积不能为空');
            }
            if(empty($_GPC['acreage'])){
                show_json(0,'服务时间不能为空');
            }
            $arr=$_POST;
            $resul=pdo_update('abfuwu_wasteland',$arr,array('id'=>$id));
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('brilliant.reclaim.add', '修改出彩开荒服务 ID: ' . $id);
                show_json(1, array('url' => webUrl('brilliant/reclaim')));
            }
        }


    }
    //删除
    public function delete()
    {
        global $_GPC;
        $id = $_GPC['id'] ? intval($_GPC["id"]) : 0;

        pdo_delete("abfuwu_wasteland", array( "id" => $id ));
        plog("brilliant.reclaim.delete", "删除出彩开荒服务<br/>ID: ". $id  );

        show_json(1, array('url' => webUrl('brilliant.reclaim')));

    }

}