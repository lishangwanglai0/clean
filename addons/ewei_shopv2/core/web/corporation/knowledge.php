<?php if( !defined("IN_IA") )
{
    exit( "Access Denied" );
}

class Knowledge_EweiShopV2Page extends WebPage
{
    //保洁知识
    public function main()
    {
        //查询数据
        $homeda=pdo_getall('abfuwu_keeping',array(),array('id','name','created_at'),'id DESC');

        include($this->template("fuwu/keeping"));
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
            include($this->template("fuwu/keepingadd"));
        }else{

            if(empty($_GPC['name'])){
                show_json(0,'标题不能为空');
            }
            if(empty($_GPC['content'])){
                show_json(0,'内容不能为空');
            }


            $arr=$_POST;
            $resul=pdo_insert('abfuwu_keeping',$arr);
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('corporation.knowledge.add', '新增保洁知识 ID: ' . $id);
                show_json(1, array('url' => webUrl('corporation/knowledge')));
            }
        }
    }

    public function edit(){
        global $_GPC;
        global $_W;
        $id=$_GPC['id'];

        if(!$_GPC['name']){

            $data=pdo_get('abfuwu_keeping',array('id'=>$id),array('id','name','content','source'));
//
            include($this->template("fuwu/keepingadd"));
        }else{
            if(empty($_GPC['name'])){
                show_json(0,'标题不能为空');
            }
            if(empty($_GPC['content'])){
                show_json(0,'内容不能为空');
            }

            $arr=$_POST;
            $resul=pdo_update('abfuwu_keeping',$arr,array('id'=>$id));
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('corporation.knowledge.add', '添加保洁知识 ID: ' . $id);
                show_json(1, array('url' => webUrl('corporation/knowledge')));
            }
        }


    }
    //删除
    public function delete()
    {
        global $_GPC;
        $id = $_GPC['id'] ? intval($_GPC["id"]) : 0;

        pdo_delete("abfuwu_keeping", array( "id" => $id ));
        plog("corporation.knowledge.delete", "删除保洁知识<br/>ID: ". $id  );

        show_json(1, array('url' => webUrl('corporation/knowledge')));

    }

}