<?php
if (!defined('ES_PATH')) {
    exit('Access Denied');
}

class HompageController extends Controller
{
    //首页
    public function index()
    {
//        var_dump(123);die;die
        //首页
        $home=pdo_getall('abfuwu_home',array(),array(),'',array('id','DESC'),array());
        //出彩托管
        $trusteeship=pdo_getall('abfuwu_trusteeship',array(),array(),'','id DESC',array(0,3));
//        var_dump($trusteeship);die;
        //常见问题
        $faq=pdo_getall('abfuwu_faq',array(),array("UNIX_TIMESTAMP(created_at),id,name,content"),'','id DESC',array(0,10));
        //成功案例
        $successimg=pdo_getall('abfuwu_successimg',array(),array(),'','id DESC',array(0,4));
        $successful=pdo_getall('abfuwu_successful',array(),array(),'','id DESC',array(0,4));
        //合作伙伴
        $basicset = $this->basicset();
        include $this->template('home/index');

    }

    /**
     * 成功案例
     *
     */
    public function prosperity()
    {
        $data=pdo_fetchall("select * from ims_abfuwu_successful as a LEFT JOIN ims_abfuwu_successimg as b on a.id=b.success_id",array());
        include $this->template('home/prosperity');
//        var_dump($data);die;
    }

    /**
     * 常见问题
     */
    public function problem()
    {
        $data=pdo_getall('abfuwu_faq',array(),array(),'','id DESC',array(0,20));
        include $this->template('home/problem');

    }

    /**
     * 出彩托管服务
     */
    public function trusteeship()
    {
        global $_GPC;

        if($_GPC['id']){
//            var_dump($_GPC['id']);die;
            $data=pdo_get('abfuwu_trusteeship',array('id'=>$_GPC['id']),array());
            include $this->template('brilliant/truparticulars');
        }else{
            $data=pdo_getall('abfuwu_trusteeship',array(),array(),'','id DESC',array(0,20));
            include $this->template('brilliant/trusteeship');
        }
    }
    /**
     * 出彩专项服务
     */
        public function special()
    {
        global $_GPC;

        if($_GPC['id']){
            $data=pdo_get('abfuwu_special',array('id'=>$_GPC['id']),array());
            include $this->template('brilliant/spedetails');
        }else{
            $data=pdo_getall('abfuwu_special',array(),array(),'','id DESC',array(0,20));
            include $this->template('brilliant/special');
        }
    }
    /**
     * 出彩开荒服务
     */
    public function reclaim()
    {
        global $_GPC;

        if($_GPC['id']){

            $data=pdo_get('abfuwu_wasteland',array('id'=>$_GPC['id']),array());
            include $this->template('brilliant/reclparticulars');
        }else{
            $data=pdo_getall('abfuwu_wasteland',array(),array(),'','id DESC',array(0,20));
            include $this->template('brilliant/reclaim');
        }
    }
}