<?php
if (!defined('ES_PATH')) {
    exit('Access Denied');
}

class HompageController extends Controller
{
    public function index()
    {
//        var_dump(123);die;die
        //首页
        $home=pdo_getall('abfuwu_home',array(),array(),'',array('id','DESC'),array());
        //出彩托管
        $trusteeship=pdo_getall('abfuwu_trusteeship',array(),array(),'',array('id','DESC'),array(0,3));
        //常见问题
        $faq=pdo_getall('abfuwu_faq',array(),array(),'',array('id','DESC'),array(0,10));
        //成功案例
        $successful=pdo_getall('abfuwu_successful',array(),array(),'',array('id','DESC'),array(0,10));
        //合作伙伴
        $basicset = $this->basicset();
        include $this->template('hompage/index');

    }
}