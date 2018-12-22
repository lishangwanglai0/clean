<?php if( !defined("IN_IA") )
{
    exit( "Access Denied" );
}

class Homesamll_EweiShopV2Page extends WebPage
{
    //首页小图展示
    public function main()
    {

        //查询数据
        $homeda=pdo_getall('abfuwu_home',array('type' => 1),array('id','name','img','content'),'id DESC');
        $edit=1;

        include($this->template("/fuwu/homepage"));
    }

    //新增图片
    public function add()
    {
        $this->post();
    }
    public function post()
    {
        global $_W;
        global $_GPC;
        if( !$_GPC["name"] ){
            $data['content']=1;
            include($this->template("fuwu/homeadd"));
        }else{

            if(empty($_GPC['name'])){
                show_json(0,'图片名称不能为空');
            }
            if(empty($_GPC['img'])){
                show_json(0,'图片不能为空');
            }
            if(empty($_GPC['content'])){
                show_json(0,'简述不能为空');
            }
            $arr=['name'=>$_GPC['name'],'img'=>$_GPC['img'],'content'=>$_GPC['content'],'type'=>1];
            $resul=pdo_insert('abfuwu_home',$arr);
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('fuwu.homesamll.add', '添加图片 ID: ' . $id);
                show_json(1, array('url' => webUrl('fuwu.homesamll')));
            }
        }
    }

    public function edit(){
        global $_GPC;
        global $_W;
        $id=$_GPC['id'];
        if(!$_GPC['name']){
            $data=pdo_get('abfuwu_home',array('id'=>$id),array('id','name','img','content'));
            include($this->template("fuwu/homeadd"));
        }else{
            if(empty($_GPC['name'])){
                show_json(0,'图片名称不能为空');
            }
            if(empty($_GPC['img'])){
                show_json(0,'图片不能为空');
            }
            if(empty($_GPC['content'])){
                show_json(0,'简述不能为空');
            }
            $arr=['name'=>$_GPC['name'],'img'=>$_GPC['img'],'content'=>$_GPC['content']];
            $resul=pdo_update('abfuwu_home',$arr);
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('fuwu.add', '添加图片 ID: ' . $id);
                show_json(1, array('url' => webUrl('fuwu.homesamll')));
            }
        }
    }

    //删除
    public function delete()
    {
        global $_GPC;
        $id = $_GPC['id'] ? intval($_GPC["id"]) : 0;
        pdo_delete("abfuwu_home", array( "id" => $id ));
        plog("goods.edit", "从回收站彻底删除商品<br/>ID: ". $id  );

        show_json(1, array( "url" => webUrl('fuwu.homesamll') ));

    }
}