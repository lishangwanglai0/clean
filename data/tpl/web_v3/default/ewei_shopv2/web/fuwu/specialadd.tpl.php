<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>
<script type="text/javascript" src="../addons/ewei_shopv2/static/js/dist/area/cascade.js"></script>
<style>
    .checkbox-inline{
        display: block;
    }    .btns a i{
             display: inline-block;
             width: 100%;
             height: 20px;
             background: #f95959;
         }
    .btn-color {
        width: 25px;
        height: 25px;
        border: 1px solid #fff;
        margin: 2px;
        padding: 0;
    }

</style>
<div class="page-header">
    当前位置：<span class="text-primary"><?php  if($data['name']) { ?>编辑<?php  } else { ?>新增<?php  } ?>出彩专项服务</small>
    </span>
</div>

<div class="page-content">
    <?php if(cv('fuwu.homepage.add')) { ?>
    <div class="page-sub-toolbar">
        <a class="btn btn-primary btn-sm" href="<?php  echo webUrl('brilliant/special/add')?>"><?php  if($data['name']) { ?>编辑<?php  } else { ?>新增<?php  } ?>出彩专项服务</a>
    </div>
    <?php  } ?>

    <form action="<?php  if(empty($data)) { ?><?php  echo webUrl('brilliant/special/add')?><?php  } else { ?><?php  echo webUrl('brilliant/special/edit')?><?php  } ?>" method="post" class="form-horizontal form-validate" enctype="multipart/form-data">
        <?php  if(!empty($data['id'])) { ?>
        <input type="hidden" name="id" value="<?php  echo $data['id'];?>"/>
        <?php  } ?>
        <div class="form-group">
            <label class="col-lg control-label must">服务标题</label>
            <div class="col-sm-9 col-xs-12">

                <input type="text" name="name" class="form-control" value="<?php  if($data['id']) { ?><?php  echo $data['name'];?><?php  } ?>"
                       data-rule-required="true"/>

            </div>
        </div>

        <div class="form-group">
            <label class="col-lg control-label must">价格</label>
            <div class="col-sm-9 col-xs-12">

                <input type="textarea" name="money" class="form-control" value="<?php  if($data['id']) { ?><?php  echo $data['money'];?><?php  } ?>"
                       data-rule-required="true"/>

            </div>
        </div>
        <div class="form-group">
            <label class="col-lg control-label must">特惠价格</label>
            <div class="col-sm-9 col-xs-12">

                <input type="textarea" name="discounts_money" class="form-control" value="<?php  if($data['id']) { ?><?php  echo $data['money'];?><?php  } ?>"
                       data-rule-required="true"/>

            </div>
        </div>
        <div class="form-group">
            <label class="col-lg control-label must">服务对象</label>
            <div class="col-sm-9 col-xs-12">

                <input type="textarea" name="service_object" class="form-control" value="<?php  if($data['id']) { ?><?php  echo $data['schedule'];?><?php  } ?>"
                       data-rule-required="true"/>

            </div>
        </div>
        <div class="form-group">
            <label class="col-lg control-label must">服务面积</label>
            <div class="col-sm-9 col-xs-12">

                <input type="textarea" name="acreage" class="form-control" value="<?php  if($data['id']) { ?><?php  echo $data['acreage'];?><?php  } ?>"
                       data-rule-required="true"/>

            </div>
        </div>
        <div class="form-group">
            <label class="col-lg control-label must">服务概述</label>
            <div class="col-sm-9 col-xs-12">

                <input type="textarea" name="summarize" class="form-control" value="<?php  if($data['id']) { ?><?php  echo $data['scope'];?><?php  } ?>"
                       data-rule-required="true"/>

            </div>
        </div>
        <div class="form-group">
            <label class="col-lg control-label must">服务特色</label>
            <div class="col-sm-9 col-xs-12">

                <input type="textarea" name="feature" class="form-control" value="<?php  if($data['id']) { ?><?php  echo $data['feature'];?><?php  } ?>"
                       data-rule-required="true"/>

            </div>
        </div>

        <div class="form-group"></div>
        <div class="form-group">
            <label class="col-lg control-label"></label>
            <div class="col-sm-9 col-xs-12">

                <input type="submit" value="提交" class="btn btn-primary"/>

                <input type="button" name="back" onclick='history.back()' style='margin-left:10px;' value="返回列表" class="btn btn-default" />
            </div>
        </div>
    </form>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_footer', TEMPLATE_INCLUDEPATH)) : (include template('_footer', TEMPLATE_INCLUDEPATH));?>