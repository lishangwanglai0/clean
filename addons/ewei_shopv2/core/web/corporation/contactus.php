<?php if( !defined("IN_IA") )
{
    exit( "Access Denied" );
}

class Contactus_EweiShopV2Page extends WebPage
{
    //联系我们
    public function main()
    {
        //查询数据
        $homeda=pdo_getall('abfuwu_contactus',array(),array('id','address','after_sale'),'id DESC');

        include($this->template("fuwu/relation"));
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
            include($this->template("fuwu/relationadd"));
        }else{

            if(empty($_GPC['address'])){
                show_json(0,'标题不能为空');
            }
            if(empty($_GPC['after_sale'])){
                show_json(0,'内容不能为空');
            }


            $arr=$_POST;
            $resul=pdo_insert('abfuwu_contactus',$arr);
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('corporation.contactus.add', '新增联系我们 ID: ' . $id);
                show_json(1, array('url' => webUrl('corporation/contactus')));
            }
        }
    }

    public function edit(){
        global $_GPC;
        global $_W;
        $id=$_GPC['id'];

        if(!$_GPC['name']){

            $data=pdo_get('abfuwu_contactus',array('id'=>$id),array());
//
            include($this->template("fuwu/relationadd"));
        }else{
            if(empty($_GPC['address'])){
                show_json(0,'地址不能为空');
            }
            if(empty($_GPC['after_sale'])){
                show_json(0,'售后电话不能为空');
            }

            $arr=$_POST;
            $resul=pdo_update('abfuwu_contactus',$arr,array('id'=>$id));
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('corporation.contactus.add', '添加联系我们 ID: ' . $id);
                show_json(1, array('url' => webUrl('corporation/contactus')));
            }
        }


    }
    //删除
    public function delete()
    {
        global $_GPC;
        $id = $_GPC['id'] ? intval($_GPC["id"]) : 0;

        pdo_delete("abfuwu_contactus", array( "id" => $id ));
        plog("corporation.contactus.delete", "删除联系我们<br/>ID: ". $id  );

        show_json(1, array('url' => webUrl('corporation/contactus')));

    }

}