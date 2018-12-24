<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/_header', TEMPLATE_INCLUDEPATH)) : (include template('common/_header', TEMPLATE_INCLUDEPATH));?>

<div class="list-container">
    <div class="lynn-login-container">
        <form action="" method="post">
            <table width="100%" class="lynn-register-table">
                <tr>
                    <td class="left must"></td>
                    <td style="font-size:18px;padding-left:140px;">
                        帐号登录
                    </td>
                </tr>
                <tr>
                    <td class="left must">用户名：</td>
                    <td>
                        <input type="text" name="username" class="register-input" placeholder="请输入用户名" value="">
                        <span style="color:red;font-size: 12px;display: inline-block;" id="username-span"></span>
                    </td>
                </tr>
                <tr>
                    <td class="left">密码：</td>
                    <td>
                        <input type="password" name="password" class="register-input" placeholder="请输入密码" value="">
                        <span style="color:red;font-size: 12px;display: inline-block;" id="password-span"></span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="button" id="register-submit" class="register-btn" value="登录">
                        <span style="color:red;font-size: 12px;display: block;padding:10px 0;" id="system-span"></span>
                    </td>
                </tr>
                <?php  if(!empty($setting['register']['open'])) { ?>
                <tr>
                    <td></td>
                    <td style="padding-left:230px;">没有帐号？<a href="<?php  echo webUrl('register/index')?>">立即注册</a></td>
                </tr>
                <?php  } ?>

            </table>
        </form>
    </div>
    <div style="clear:both;"></div>
</div>
<script type="text/javascript">
    $(function(){
        $(":input[name='username'],:input[name='password']").keydown(function(e){
            var e = e || event,
                    keycode = e.which || e.keyCode;
            if (keycode==13) {
                $("#register-submit").trigger("click");
            }
        });

        $("#register-submit").on("click",function(){
            var username = $("input[name='username']").val();
            var password = $("input[name='password']").val();
            if(username == ''){
                $("#username-span").html("用户名不能为空！");
            }
            if(password == ''){
                $("#password-span").html("密码不能为空！");
            }
            if(username != '' && password != ''){
                $('#register-submit').val('正在登录...');
                $.ajax({
                    url:"<?php  echo webUrl('login/check')?>",// 跳转到 action
                    data:{
                        username : username,
                        password : password
                    },
                    type:'post',
                    cache:false,
                    dataType:'json',
                    success:function(data) {
                        $('#register-submit').val('登录');
                        if(data.msg =="true" ){

                            window.location.href=data.url;
                        }else{
                            $("#"+data.name+"-span").html(data.msg);
                        }
                    },
                    error : function() {
                        alert("异常！");
                    }
                });
            }

        })
    })
</script>
</body>
</html>