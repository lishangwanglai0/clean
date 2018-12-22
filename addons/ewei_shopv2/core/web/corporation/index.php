<?php if( !defined("IN_IA") )
{
    exit( "Access Denied" );
}

class Index_EweiShopV2Page extends WebPage
{
    //公司介绍
    public function main()
    {
        //查询数据
        $homeda=pdo_getall('abfuwu_company',array(),array('id','name','created_at'),'id DESC');

        include($this->template("fuwu/introduce"));
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
            include($this->template("fuwu/introduceadd"));
        }else{

            if(empty($_GPC['name'])){
                show_json(0,'公司名称不能为空');
            }
            if(empty($_GPC['content'])){
                show_json(0,'公司简介不能为空');
            }
           

            $arr=$_POST;
            $resul=pdo_insert('abfuwu_company',$arr);
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('corporation.add', '新增公司介绍 ID: ' . $id);
                show_json(1, array('url' => webUrl('corporation')));
            }
        }
    }

    public function edit(){
        global $_GPC;
        global $_W;
        $id=$_GPC['id'];

        if(!$_GPC['name']){

            $data=pdo_get('abfuwu_company',array('id'=>$id),array('id','name','content'));
//
            include($this->template("fuwu/introduceadd"));
        }else{
            if(empty($_GPC['name'])){
                show_json(0,'公司名称不能为空');
            }
            if(empty($_GPC['content'])){
                show_json(0,'公司简介不能为空');
            }
           
            $arr=$_POST;
            $resul=pdo_update('abfuwu_company',$arr,array('id'=>$id));
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('corporation.add', '添加公司介绍 ID: ' . $id);
                show_json(1, array('url' => webUrl('corporation')));
            }
        }


    }
    //删除
    public function delete()
    {
        global $_GPC;
        $id = $_GPC['id'] ? intval($_GPC["id"]) : 0;

        pdo_delete("abfuwu_company", array( "id" => $id ));
        plog("corporation.delete", "删除公司介绍<br/>ID: ". $id  );

        show_json(1, array('url' => webUrl('corporation')));

    }

}