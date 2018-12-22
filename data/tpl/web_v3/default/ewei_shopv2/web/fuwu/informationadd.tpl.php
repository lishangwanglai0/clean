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
    当前位置：<span class="text-primary"><?php  if($data['name']) { ?>编辑<?php  } else { ?>新增<?php  } ?>人员招聘</small>
    </span>
</div>

<div class="page-content">
    <?php if(cv('fuwu.homepage.add')) { ?>
    <div class="page-sub-toolbar">
        <a class="btn btn-primary btn-sm" href="<?php  echo webUrl('corporation/recruit/add')?>"><?php  if($data['name']) { ?>编辑<?php  } else { ?>新增<?php  } ?>人员招聘</a>
    </div>
    <?php  } ?>

    <form action="<?php  if(empty($data)) { ?><?php  echo webUrl('corporation/recruit/add')?><?php  } else { ?><?php  echo webUrl('corporation/recruit/edit')?><?php  } ?>" method="post" class="form-horizontal form-validate" enctype="multipart/form-data">
        <?php  if(!empty($data['id'])) { ?>
        <input type="hidden" name="id" value="<?php  echo $data['id'];?>"/>
        <?php  } ?>
        <div class="form-group">
            <label class="col-lg control-label must">职位名称</label>
            <div class="col-sm-9 col-xs-12">

                <input type="text" name="position" class="form-control" value="<?php  if($data['id']) { ?><?php  echo $data['position'];?><?php  } ?>"
                       data-rule-required="true"/>

            </div>
        </div>

        <div class="form-group">
            <label class="col-lg control-label must">招聘人数</label>
            <div class="col-sm-9 col-xs-12">

                <input type="text" name="numbers" class="form-control" value="<?php  if($data['id']) { ?><?php  echo $data['numbers'];?><?php  } ?>"
                       data-rule-required="true"/>

            </div>
        </div>
        <div class="form-group">
            <label class="col-lg control-label must">工作地点</label>
            <div class="col-sm-9 col-xs-12">

                <input type="text" name="address" class="form-control" value="<?php  if($data['id']) { ?><?php  echo $data['address'];?><?php  } ?>"
                       data-rule-required="true"/>

            </div>
        </div>
        <div class="form-group">
            <label class="col-lg control-label must">主要职责</label>
            <div class="col-sm-9 col-xs-12">

                <input type="text" name="responsibilities" class="form-control" value="<?php  if($data['id']) { ?><?php  echo $data['responsibilities'];?><?php  } ?>"
                       data-rule-required="true"/>

            </div>
        </div>
        <div class="form-group">
            <label class="col-lg control-label must">任职要求</label>
            <div class="col-sm-9 col-xs-12">

                <input type="text" name="requirements" class="form-control" value="<?php  if($data['id']) { ?><?php  echo $data['requirements'];?><?php  } ?>"
                       data-rule-required="true"/>

            </div>
        </div>
        <div class="form-group">
            <label class="col-lg control-label must">截止时间</label>
            <div class="col-sm-9 col-xs-12">

                <input type="text" name="end_time" class="form-control" value="<?php  if($data['id']) { ?><?php  echo $data['end_time'];?><?php  } ?>"
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