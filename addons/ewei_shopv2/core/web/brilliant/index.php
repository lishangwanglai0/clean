<?php if( !defined("IN_IA") )
{
    exit( "Access Denied" );
}

class Index_EweiShopV2Page extends WebPage
{
    //出彩托管服务
    public function main()
    {

        //查询数据
        $homeda=pdo_getall('abfuwu_trusteeship',array(),array('id','name','money','acreage'),'id DESC');

        include($this->template("fuwu/trust"));
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
            include($this->template("fuwu/trustadd"));
        }else{

            if(empty($_GPC['name'])){
                show_json(0,'标题不能为空');
            }
            if(empty($_GPC['money'])){
                show_json(0,'薪资不能为空');
            }
            if(empty($_GPC['acreage'])){
                show_json(0,'服务面积不能为空');
            }
            if(empty($_GPC['acreage'])){
                show_json(0,'服务时间不能为空');
            }

            $arr=$_POST;
            $resul=pdo_insert('abfuwu_trusteeship',$arr);
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('brilliant.add', '新增出彩托管服务 ID: ' . $id);
                show_json(1, array('url' => webUrl('brilliant')));
            }
        }
    }

    public function edit(){
        global $_GPC;
        global $_W;
        $id=$_GPC['id'];

        if(!$_GPC['name']){

            $data=pdo_get('abfuwu_trusteeship',array('id'=>$id),array('id','name','money','schedule','acreage','scope','feature','standard'));
//            var_dump($id);die;die
            include($this->template("fuwu/trustadd"));
        }else{
            if(empty($_GPC['name'])){
                show_json(0,'标题不能为空');
            }
            if(empty($_GPC['money'])){
                show_json(0,'薪资不能为空');
            }
            if(empty($_GPC['acreage'])){
                show_json(0,'服务面积不能为空');
            }
            if(empty($_GPC['acreage'])){
                show_json(0,'服务时间不能为空');
            }
            $arr=$_POST;
            $resul=pdo_update('abfuwu_trusteeship',$arr,array('id'=>$id));
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('brilliant.add', '添加图片 ID: ' . $id);
                show_json(1, array('url' => webUrl('brilliant')));
            }
        }


    }
    //删除
    public function delete()
    {
        global $_GPC;
        $id = $_GPC['id'] ? intval($_GPC["id"]) : 0;

        pdo_delete("abfuwu_trusteeship", array( "id" => $id ));
        plog("brilliant.delete", "从回收站彻底删除商品<br/>ID: ". $id  );

        show_json(1, array('url' => webUrl('brilliant')));

    }

}