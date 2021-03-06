<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>
<div class="page-header">当前位置：<span class="text-primary">会员卡信息</span> </div>
<div class="page-content">
    <div class="tabs-container">
        <form id="cardmanageform" action="" method="post" class="form-horizontal form-validate">
            <div class="alert alert-primary">
                <p>添加会员卡之后 , 只有 <b style="color: #f00">排序,状态,库存和使用须知</b> 可以修改 , 其他选项不支持修改! </p>
                <?php  if(!empty($_GPC['id'])) { ?>
                <p>会员卡删除请谨慎 , 一旦删除 , 已经购买领取的用户也将不能再显示和使用该会员卡!</p>
                <?php  } ?>
            </div>
            <input type="hidden" id="tab" name="tab" value="<?php  echo $_GPC['tab'];?>" />
            <ul class="nav nav-tabs" id="myTab">
                <li  <?php  if(empty($_GPC['tab']) || $_GPC['tab']=='basic') { ?>class="active"<?php  } ?>><a href="#tab_basic">基本信息</a></li>
                <li  <?php  if($_GPC['tab']=='set') { ?>class="active"<?php  } ?> ><a href="#tab_set">领取设置</a></li>
                <?php if(cv('membercard.cardmanage.delete')) { ?>
                <?php  if(!empty($_GPC['id'])) { ?>
                <li style="float: right;">
                    <span class="btn btn-default btn-sm cutlist-card"><i class='icow icow-shanchu1'></i>删除</span>
                </li>
                <?php  } ?>
                <?php  } ?>
            </ul>
            <div class="tab-content ">
                <div class="tab-pane <?php  if(empty($_GPC['tab']) || $_GPC['tab']=='basic') { ?>active<?php  } ?>" id="tab_basic">
                    <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('membercard/cardmanage/basic', TEMPLATE_INCLUDEPATH)) : (include template('membercard/cardmanage/basic', TEMPLATE_INCLUDEPATH));?>
                </div>
                <div class="tab-pane <?php  if($_GPC['tab']=='set') { ?>active<?php  } ?>" id="tab_set">
                    <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('membercard/cardmanage/set', TEMPLATE_INCLUDEPATH)) : (include template('membercard/cardmanage/set', TEMPLATE_INCLUDEPATH));?>
                </div>
            </div>
            <?php if(cv('membercard.cardmanage.edit')) { ?>
            <div class="form-group">
                <label class="col-lg control-label"></label>
                <div class="col-sm-9 col-xs-12">
                    <input type="submit"  value="提交" class="btn btn-primary" />
                    <a class="btn btn-default " href="<?php  echo webUrl('membercard.cardmanage')?>">返回列表</a>
                </div>
            </div>
            <?php  } ?>
        </form>
    </div>
</div>
<script language='javascript'>
    $('.cutlist-card').click(function () {
        tip.confirm('确认删除此会员卡吗?<br/>一旦删除 , 已经购买领取的用户也将不能再显示和使用该会员卡!', function () {
            var templatename = prompt('请在输入框输入"删除"完成操作');
            if (!templatename) {
                return false;
            }
            if (templatename != '删除') {
                tip.msgbox.err('删除失败');
                return false;
            }
            $.ajax({
                type : 'post',
                dataType:"json",
                url : "<?php  echo webUrl('membercard/cardmanage/delete', array('id' => $_GPC['id']))?>",
                success : function(res){
                    if(res.status == 0) {
                        tip.msgbox.err(res.result.message);
                    }else if(res.status == 1){
                        tip.msgbox.suc("操作成功");
                        setTimeout(
                            window.location.href = "<?php  echo webUrl('membercard/cardmanage', array())?>"
                        ,1500);
                        return false;
                    }
                }
            });
        })
    })
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_footer', TEMPLATE_INCLUDEPATH)) : (include template('_footer', TEMPLATE_INCLUDEPATH));?>