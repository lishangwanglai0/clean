<?php if( !defined("IN_IA") )
{
    exit( "Access Denied" );
}

class Index_EweiShopV2Page extends WebPage
{
    //首页大图展示
    public function main()
    {

        //查询数据
        $homeda=pdo_getall('abfuwu_successful',array(),array('id','name','created_at'),'id DESC');
//        var_dump(1231);die;
        include($this->template("fuwu/success"));
    }
    //新增图片
    public function add()
    {
        global $_GPC;

        $this->post();
    }
    public function post()
    {
        global $_W;
        global $_GPC;
        if( !$_GPC["name"] ){
            include($this->template("fuwu/successadd"));
        }else{

            if(empty($_GPC['name'])){
                show_json(0,'公司名称不能为空');
            }
            if(empty($_GPC['content'])){
                show_json(0,'公司介绍不能为空');
            }

            if(empty($_GPC['img']) || !is_array($_GPC['img'])){
                show_json(0,'图片不能为空');
            }
            $arr=['name'=>$_GPC['name'],'content'=>$_GPC['content']];
            $resul=pdo_insert('abfuwu_successful',$arr);
            if(!empty($resul)){
                $id = pdo_insertid();
                /** 保存图片 */

                    foreach ($_GPC['img'] as $v){

                        $arra=['img'=>$v,'success_id'=>$id];
                        pdo_insert('abfuwu_successimg',$arra);
                    }

                plog('success.add', '添加成功案例 ID: ' . $id);
                show_json(1, array('url' => webUrl('success')));
            }
        }
    }

    public function edit(){
        global $_GPC;
        global $_W;
        $id=$_GPC['id'];
        if(!$_GPC['name']){
            $data=pdo_get('abfuwu_successful',array('id'=>$id),array('id','name','content'));
            $image=pdo_getall('abfuwu_successimg',array('success_id'=>$id),array('img'));
            include($this->template("fuwu/successadd"));
        }else{
            if(empty($_GPC['name'])){
                show_json(0,'公司名称不能为空');
            }
            if(empty($_GPC['content'])){
                show_json(0,'公司介绍不能为空');
            }
            if(empty($_GPC['img'])){
                show_json(0,'图片不能为空');
            }
            $arr=['name'=>$_GPC['name'],'content'=>$_GPC['content']];
            $resul=pdo_update('abfuwu_successful',$arr,array('id'=>$id));
            if(!empty($resul)){
                $id = pdo_insertid();
                foreach ($_GPC['img'] as $v){
                    $arr=['img'=>$v,'success_id'=>$id];
                    pdo_insert('abfuwu_successimg',$arr);
                }

                plog('success.add', '修改成功案例 ID: ' . $id);
                show_json(1, array('url' => webUrl('success')));
            }
        }


    }
    //删除
    public function delete()
    {
        global $_GPC;
        $id = $_GPC['id'] ? intval($_GPC["id"]) : 0;

        pdo_delete("abfuwu_successful", array( "id" => $id ));
        pdo_delete('abfuwu_successimg',array('success_id' => $id ));
        plog("goods.edit", "从回收站彻底删除商品<br/>ID: ". $id  );

        show_json(1, array('url' => webUrl('success')));

    }

}