<?php if( !defined("IN_IA") )
{
    exit( "Access Denied" );
}

class Recruit_EweiShopV2Page extends WebPage
{
    //人员招聘
    public function main()
    {
        //查询数据
        $homeda=pdo_getall('abfuwu_employment',array(),array(),'id DESC');

        include($this->template("fuwu/information"));
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
        if( !$_GPC["address"] ){
            include($this->template("fuwu/informationadd"));
        }else{

            if(empty($_GPC['position'])){
                show_json(0,'职位名称不能为空');
            }
            if(empty($_GPC['numbers'])){
                show_json(0,'招聘人数不能为空');
            }
            $arr=$_POST;
            $resul=pdo_insert('abfuwu_employment',$arr);
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('corporation.recruit.add', '新增人员招聘 ID: ' . $id);
                show_json(1, array('url' => webUrl('corporation/recruit')));
            }
        }
    }

    public function edit(){
        global $_GPC;
        global $_W;
        $id=$_GPC['id'];

        if(!$_GPC['address']){

            $data=pdo_get('abfuwu_employment',array('id'=>$id),array());
//
            include($this->template("fuwu/informationadd"));
        }else{
            if(empty($_GPC['position'])){
                show_json(0,'职位名称不能为空');
            }
            if(empty($_GPC['numbers'])){
                show_json(0,'招聘人数不能为空');
            }

            $arr=$_POST;
            $resul=pdo_update('abfuwu_employment',$arr,array('id'=>$id));
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('corporation.recruit.add', '添加人员招聘 ID: ' . $id);
                show_json(1, array('url' => webUrl('corporation/recruit')));
            }
        }


    }
    //删除
    public function delete()
    {
        global $_GPC;
        $id = $_GPC['id'] ? intval($_GPC["id"]) : 0;

        pdo_delete("abfuwu_employment", array( "id" => $id ));
        plog("corporation.recruit.delete", "删除人员招聘<br/>ID: ". $id  );

        show_json(1, array('url' => webUrl('corporation/recruit')));

    }

}