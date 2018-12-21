<?php if( !defined("IN_IA") )
{
    exit( "Access Denied" );
}

class Index_EweiShopV2Page extends WebPage
{
    //常见问题
    public function main()
    {

        //查询数据
        $homeda=pdo_getall('abfuwu_faq',array(),array('id','name','created_at'),'id DESC');

        include($this->template("fuwu/faq"));
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
            include($this->template("fuwu/faqadd"));
        }else{

            if(empty($_GPC['name'])){
                show_json(0,'标题不能为空');
            }
            if(empty($_GPC['content'])){
                show_json(0,'内容不能为空');
            }
            $arr=['name'=>$_GPC['name'],'content'=>$_GPC['content']];
            $resul=pdo_insert('abfuwu_faq',$arr);
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('fuwu.add', '添加图片 ID: ' . $id);
                show_json(1, array('url' => webUrl('faq')));
            }
        }
    }

    public function edit(){
        global $_GPC;
        global $_W;
        $id=$_GPC['id'];
        if(!$_GPC['name']){
            $data=pdo_get('abfuwu_faq',array('id'=>$id),array('id','name','content'));
            include($this->template("fuwu/faqadd"));
        }else{
            if(empty($_GPC['name'])){
                show_json(0,'标题不能为空');
            }
            if(empty($_GPC['content'])){
                show_json(0,'内容不能为空');
            }
            $arr=['name'=>$_GPC['name'],'content'=>$_GPC['content']];
            $resul=pdo_update('abfuwu_faq',$arr,array('id'=>$id));
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('fuwu.add', '添加图片 ID: ' . $id);
                show_json(1, array('url' => webUrl('faq')));
            }
        }


    }
    //删除
    public function delete()
    {
        global $_GPC;
        $id = $_GPC['id'] ? intval($_GPC["id"]) : 0;

        pdo_delete("abfuwu_faq", array( "id" => $id ));
        plog("goods.edit", "从回收站彻底删除商品<br/>ID: ". $id  );

        show_json(1, array('url' => webUrl('fuwu')));

    }

}