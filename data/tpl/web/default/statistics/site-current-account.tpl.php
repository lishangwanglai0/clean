<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="we7-page-tab">
	<li class="active"><a href="<?php  echo url('statistics/site/current_account');?>">所有访问统计信息</a></li>
	<li><a href="<?php  echo url('statistics/app');?>">app端访问统计信息</a></li>
	<li><a href="<?php  echo url('statistics/setting');?>">访问统计设置</a></li>
</ul>
<div class="api" id="js-statistics-current-account" ng-controller="CurrentAccountCtrl" ng-cloak>
	<div class="panel we7-panel api-target">
		<div class="panel-heading">今日/昨日关键指标</div>
		<div class="panel-body we7-padding-vertical">
			<div class="col-sm-4 text-center">
				<div class="title">总访问数</div>
				<div>
					<span class="today"><?php  echo $today + 1;?></span>
					<span class="yesterday">/ <?php  echo $yesterday;?></span>
				</div>
			</div>
		</div>
	</div>
	<div class="panel we7-panel">
		<div class="panel-body data-view">
			<div class="tab-bar-time clearfrix">
				<span class="we7-margin-right">时间</span>
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-default" ng-class="{'active': accountTimeType == 'week'}" ng-click="getModuleApi('week')">周统计</button>
					<button type="button" class="btn btn-default" ng-class="{'active': accountTimeType == 'month'}" ng-click="getModuleApi('month')">月统计</button>
					<div class="btn-group" role="group">
						<button class="btn btn-default daterange daterange-date" we7-date-range-picker ng-model="accountDateRange"><span>{{accountDateRange.startDate}} </span>至<span> {{accountDateRange.endDate}}</span> <i class="fa fa-calendar"></i></button>
					</div>
				</div>
			</div>
			<div class="col-sm-12" id="chart-line" style="height:500px"></div>
		</div>
	</div>
</div>
<script>
require(['daterangepicker'], function() {
	angular.module('statisticsApp').value('config', {
		'links': {
			'accountApi': "<?php  echo url('statistics/site/get_account_api')?>",
		},
	});
	angular.bootstrap($('#js-statistics-current-account'), ['statisticsApp']);
})
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>