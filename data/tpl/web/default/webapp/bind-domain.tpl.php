<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="alert alert-info">
	<p><i class="fa fa-exclamation-circle"></i> 绑定域名后，访问PC将使用绑定的域名；</p>
	<p><i class="fa fa-exclamation-circle"></i> 如访问微站链接为<span class="color-gray"><?php  echo $_W['siteroot'];?>app/index.php?i=<?php  echo $_W['uniacid'];?>&a=webapp&c=entry&eid=1</span>，<br>&nbsp;&nbsp;&nbsp;&nbsp;绑定bang.baidu.com后，访问微站链接就成为<span class="color-gray">http://bang.baidu.com/app/index.php?i=<?php  echo $_W['uniacid'];?>&a=webapp&c=entry&eid=1</span></p>
	<p><i class="fa fa-exclamation-circle"></i> 绑定域名，只支持一级域名和二级域名；</p>
	<p><i class="fa fa-exclamation-circle"></i> 请注意一定要将绑定的域名解析到本服务器IP并绑定到系统网站目录；</p>
	<p><i class="fa fa-exclamation-circle"></i> 请注意选择一个PC要访问的模块，否则域名绑定不生效。</p>
</div>

<div id="js-bind-domain" ng-controller="bindDomainCtrl" ng-cloak>
	<table class="table we7-table table-hover table-form wechat-menu">
		<col width="140px " />
		<col />
		<col width="150px" />
		<tr><th class="text-left" colspan="3">域名访问设置</th></tr>
		
			<tr>
				<td class="table-label">域名</td>
				<td ng-bind="account.setting.bind_domain"></td>
				<td ng-if="account.setting.bind_domain">
					<div class="link-group">
						<a href="javascript:;" data-toggle="modal" data-target="#domain">修改</a>
						<a href="<?php  echo url('webapp/bind-domain/delete');?>" ng-if="account.setting.bind_domain">删除</a>
					</div>
				</td>
				<td ng-if="!account.setting.bind_domain"><div class="link-group"><a href="javascript:;" data-toggle="modal" data-target="#domain">添加域名</a></div></td>
			</tr>
		
		<tr>
			<td class="table-label">访问模块</td>
			<td ng-if="account.setting.default_module"><div><img ng-src="{{moduleList[account.setting.default_module].logo}}" width="50px" height="50px"> <span ng-bind="moduleList[account.setting.default_module].title"></span></div></td>
			<td ng-if="!account.setting.default_module" class="table-label">暂无访问模块</td>
			<td ng-if="account.setting.default_module"><div class="link-group"><a href="javascript:;" data-toggle="modal" data-target="#add_module">修改访问模块</a></div></td>
			<td ng-if="!account.setting.default_module"><div class="link-group"><a href="javascript:;" data-toggle="modal" data-target="#add_module">添加访问模块</a></div></td>
		</tr>
	</table>
	
	<div class="modal fade" id="domain" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="we7-modal-dialog modal-dialog we7-form">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<div class="modal-title">修改绑定域名</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="text" ng-model="middleAccount.bind_domain" class="form-control" placeholder="请输入要绑定的域名，以http://或https://开头" />
						<span class="help-block"></span>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal" ng-click="httpChange()">确定</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="uploader-modal modal fade module" id="add_module"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog  modal-dialog modal-lg we7-modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">添加模块(点击添加)</h4>
				</div>
				<div class="modal-body material-content clearfix" ng-if="moduleList">
					<div class="material-body">
						<div class="row">
							<div class="col-sm-2 select-module" ng-repeat="module in moduleList" ng-click="selectModule(module.name)">
								<div class="item"  ng-class="{true:'active',false:''}[module.selected]">
									<img ng-src="{{ module.logo }}"  alt="" class="icon" ng-if="module.main_module == ''"/>
									<span class="img" ng-if="module.main_module != ''">
										<img ng-src="{{ module.logo }}" alt="子应用icon" class="plugin-img"/>
										<img ng-src="{{ module.main_module_logo }}" alt="主应用icon" class="module-img"/>
									</span>
									<div class="name">{{ module.title }}</div>
									<div class="mask">
										<span class="wi wi-right"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-body material-content clearfix" ng-if="!moduleList">
					<div class="material-body text-center">暂无数据</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" ng-click="changeModule()">确定</button>
					<button type="button" class="btn btn-default" ng-click="cancelModule()">取消</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	angular.module('webApp').value('config', {
		account: <?php echo !empty($_W['account']) ? json_encode($_W['account']) : 'null'?>,
		modulelist : <?php echo !empty($modulelist) ? json_encode($modulelist) : 'null'?>,
		token: <?php echo !empty($_W['token']) ? json_encode($_W['token']) : 'null'?>,
		links: {
			postDomain: "<?php  echo url('webapp/bind-domain')?>",
			postModule: "<?php  echo url('webapp/bind-domain/default_module')?>",
		},
	});
	angular.bootstrap($('#js-bind-domain'), ['webApp']);
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>