<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="rewrite">
	<h3 class="rewrite-head">
		伪静态需要管理员手动设置，设置教程如下：
	</h3>
	<div class="rewrite-box">
		<div class="rewrite-box-head">
			设置访问模块
		</div>
		<div class="rewrite-box-body">
			<p>
				配置伪静态前，请务必设置默认访问模块，若未设置  <a href="<?php  echo url('webapp/bind-domain')?>" class="color-default">去设置 ></a>
			</p>
			<p>
				配置好伪静态后，访问地址为：<?php  if($url) { ?><?php  echo $url;?><?php  } else { ?>未配置，<a href="<?php  echo url('webapp/bind-domain')?>" class="color-default">去设置 ></a><?php  } ?>
			</p>
		</div>
	</div>
	<div class="rewrite-box">
		<div class="rewrite-box-head">
			配置服务器
		</div>
		<div class="rewrite-box-body rewrite-rule">
			<p>如果您的服务器支持.htaccess，请将下面的规则复制，然后粘贴到.htaccess文件中。</p>
			<span>规则如下</span>
			<div class="alert alert-info">
				<code>
RewriteEngine On&#10; <br>
RewriteBase / &#10; <br>
RewriteRule ^([0-9]+)-([0-9]+).html$ /app/index.php?i=$1&a=webapp&c=entry&eid=$2 &#10; <br>
				</code>
				<a href="javascript:;" id="copy-0" class="btn btn-primary" clipboard-rewrite supported="supported" text="1231" on-copied="success('1')">复制代码</a>
			</div>
			<h4>Apache服务器</h4>
			<p>Apache 1.x 的用户请检查 conf/httpd.conf 中是否存在如下两段代码：</p>
			<pre>
LoadModule rewrite_module libexec/mod_rewrite.so
AddModule mod_rewrite.c</pre>
			<p>Apache 2.x 的用户请检查 conf/httpd.conf 中是否存在如下一段代码： </p>
			<pre>
LoadModule rewrite_module modules/mod_rewrite.so</pre>
			<p>如果存在，且以#开头，请删除#。</p>
			<p>后在配置文件 <b>（通常就是 conf/httpd.conf或者conf/extra/httpd-vhosts.conf）</b>中加入如下代码。此时请务必注意，如果网站使用通过虚拟主机来定义，请务必加到虚拟主机配置中去，如果加在虚拟主机配置外部将可能无法使用。改好后然后将 Apache 重启。</p>
			<span>规则如下</span>
			<div class="alert alert-info">
				<code>
RewriteEngine On <br />
RewriteBase / <br />
RewriteRule ^([0-9]+)-([0-9]+).html$ /app/index.php?i=$1&a=webapp&c=entry&eid=$2 <br />
				</code>
				<a href="javascript:;" clipboard-rewrite class="btn btn-primary">复制代码</a>
			</div>
			<h4>Nginx服务器</h4>
			<span>规则如下</span>
			<div class="alert alert-info">
				<code>
rewrite ^/([0-9]+)-([0-9]+).html$ /app/index.php?i=$1&a=webapp&c=entry&eid=$2;<br>
				</code>
				<a href="javascript:;" clipboard-rewrite class="btn btn-primary">复制代码</a>
			</div>
			<h4>IIS7服务器</h4>
			<p>配置请参考<a href="https://jingyan.baidu.com/article/63f23628556b2f0209ab3d6b.html" target="_blank" class="color-default"> 这里</a></p>
			<span>规则如下</span>
			<div class="alert alert-info">
				<code>
RewriteEngine On <br />
RewriteBase / <br />
RewriteRule ^([0-9]+)-([0-9]+).html$ /app/index.php?i=$1&a=webapp&c=entry&eid=$2 <br />
				</code>
				<a href="javascript:;" clipboard-rewrite class="btn btn-primary">复制代码</a>
			</div>
		</div>
	</div>
</div>
<script>
	require(['clipboard'], function(Clipboard){
		var clipboardRewrite = new Clipboard("[clipboard-rewrite]", {
			text: function(v) {
				return $(v).prev('code').text();
			}
		});
		clipboardRewrite.on('success', function(e) {
			if (!$(e.trigger).next('.cope-info').length) {
				$(e.trigger).after('<a class="cope-info" style=" margin-left: 5px; vertical-align: middle;">复制成功, 粘贴到配置文件并重启网站服务器</a>')
			}
			setTimeout(function() {
				$(e.trigger).next('.cope-info').remove()
			}, 100110)
			e.clearSelection()
		})
	})
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>