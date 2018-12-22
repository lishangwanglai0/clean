<?php if( !defined("IN_IA") )
{
    exit( "Access Denied" );
}

class Dynamics_EweiShopV2Page extends WebPage
{
    //公司动态
    public function main()
    {
        //查询数据
        $homeda=pdo_getall('abfuwu_condition',array(),array('id','name','created_at'),'id DESC');

        include($this->template("fuwu/condition"));
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
            include($this->template("fuwu/conditionadd"));
        }else{

            if(empty($_GPC['name'])){
                show_json(0,'标题不能为空');
            }
            if(empty($_GPC['content'])){
                show_json(0,'动态内容不能为空');
            }


            $arr=$_POST;
            $resul=pdo_insert('abfuwu_condition',$arr);
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('corporation.dynamics.add', '新增公司动态 ID: ' . $id);
                show_json(1, array('url' => webUrl('corporation/dynamics')));
            }
        }
    }

    public function edit(){
        global $_GPC;
        global $_W;
        $id=$_GPC['id'];

        if(!$_GPC['name']){

            $data=pdo_get('abfuwu_condition',array('id'=>$id),array('id','name','content','source'));
//
            include($this->template("fuwu/conditionadd"));
        }else{
            if(empty($_GPC['name'])){
                show_json(0,'标题不能为空');
            }
            if(empty($_GPC['content'])){
                show_json(0,'动态内容不能为空');
            }

            $arr=$_POST;
            $resul=pdo_update('abfuwu_condition',$arr,array('id'=>$id));
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('corporation.dynamics.add', '添加公司动态 ID: ' . $id);
                show_json(1, array('url' => webUrl('corporation/dynamics')));
            }
        }


    }
    //删除
    public function delete()
    {
        global $_GPC;
        $id = $_GPC['id'] ? intval($_GPC["id"]) : 0;

        pdo_delete("abfuwu_condition", array( "id" => $id ));
        plog("corporation.dynamics.delete", "删除公司动态<br/>ID: ". $id  );

        show_json(1, array('url' => webUrl('corporation/dynamics')));

    }

}