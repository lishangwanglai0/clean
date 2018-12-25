<?php
if (!defined('ES_PATH')) {
    exit('Access Denied');
}

class CompanyController extends Controller
{
    //关于我们
    //公司介绍
    public function intro()
    {
        $about=pdo_getall('abfuwu_company',array(),array(),'','id DESC',array(0,1));

        include $this->template('company/about');
    }

    /**
     * 公司动态
     */
    public function dynamic()
    {
        $data=pdo_getall('abfuwu_condition',array(),array(),'','id DESC',array(0,10));
        include $this->template('company/dynamic');
    }

    /**
     * 保洁知识
     */
    public function knowledge()
    {
        $data=pdo_getall('abfuwu_keeping',array(),array(),'','id DESC',array(0,10));
        include $this->template('company/knowledge');

    }
    /**
     * 人员招聘
     */
    public function recruit()
    {
        $data=pdo_getall('abfuwu_employment',array(),array(),'','id DESC',array(0,10));

        include $this->template('company/recruit');

    }
    /**
     * 联系我们
     */
    public function relation()
    {
        $data=pdo_getall('abfuwu_contactus',array(),array(),'','id DESC',array(0,1));
        include $this->template('company/relation');

    }
}