<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/_header', TEMPLATE_INCLUDEPATH)) : (include template('common/_header', TEMPLATE_INCLUDEPATH));?>


<style type="text/css">
    .list-container{padding:20px 0;}
    .register-main{background: #f6f6f6;padding:20px;-webkit-box-shadow: 0 0 10px 2px #ddd;}
</style>
<div class="list-container">
    <div class="register-main">
        <div class="lynn-register-top">
            册帐户
            <span style="float:right;">我已注册，现在就<a href="<?php  echo webUrl('login/index')?>">登录</a></span>
            <div style="clear:both;"></div>
        </div>
        <div class="lynn-register-container">
            <form action="" method="post">
                <table width="100%" class="lynn-register-table">
                    <tr>
                        <td class="left must">用户名<span style="color:red">*</span></td>
                        <td>
                            <input type="text" name="username" class="register-input" placeholder="请输入用户名" value="">
                            <span style="color:red;font-size: 12px;display: inline-block;" id="username-span"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="left">密码<span style="color:red">*</span></td>
                        <td>
                            <input type="password" name="password" class="register-input" placeholder="请输入不少于8位的密码" value="">
                            <span style="color:red;font-size: 12px;display: inline-block;" id="password-span"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="left">确认密码<span style="color:red">*</span></td>
                        <td>
                            <input type="password" name="repassword" class="register-input" placeholder="请再次输入不少于8位的密码" value="">
                            <span style="color:red;font-size: 12px;display: inline-block;" id="repassword-span"></span>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="button" id="submit" class="register-btn" value="注册">
                            <span style="color:red;font-size: 12px;display: block;padding:10px 0;" id="success-span"></span></td>
                    </tr>
                </table>
            </form>
        </div>
        <div style="clear:both;"></div>
        <script type="text/javascript">
            $(function(){

                $(":input").keydown(function(e){
                    var e = e || event,
                            keycode = e.which || e.keyCode;
                    if (keycode==13) {
                        $("#submit").trigger("click");
                    }
                });


                $(".register-input").focus(function(){
                    $(this).next().html('');
                })
                $("#submit").on("click",function(){
                    var username = $("input[name='username']").val();
                    var password = $("input[name='password']").val();
                    var repassword = $("input[name='repassword']").val();
                    /*var nickname = $("input[name='nickname']").val();
                     var realname = $("input[name='realname']").val();
                     var qq = $("input[name='qq']").val();*/
                    if(username == ''){
                        $("#username-span").html("用户名不能为空！");
                    }
                    if(password == ''){
                        $("#password-span").html("密码不能为空！");
                    }
                    if(repassword == ''){
                        $("#repassword-span").html("确认密码不能为空！");
                    }
                    if(repassword != '' && password != repassword){
                        $("#repassword-span").html("两次输入密码不一致，请重新输入！");
                        $("input[name='repassword']").val('');
                    }
                    /*if(nickname == ''){
                     $("#nickname-span").html("昵称不能为空！");
                     }
                     if(realname == ''){
                     $("#realname-span").html("真实姓名不能为空！");
                     }*/
                    if(username != '' && password != '' && repassword != '' && password == repassword){
                        $('#submit').val('正在注册...');
                        $.ajax({
                            url:"<?php  echo webUrl('register/check')?>",// 跳转到 action
                            data:{
                                username : username,
                                password : password
                                /*nickname : nickname,
                                 realname : realname,
                                 qq : qq*/
                            },
                            type:'post',
                            cache:false,
                            dataType:'json',
                            success:function(data) {
                                $('#submit').val('注册');
                                if(data.msg =="true" ){
                                    console.log(data.name);
                                    $("#"+data.name+"-span").html("注册成功，正在跳转到登录页面...");
                                    setTimeout(function(){
                                        window.location.href="<?php  echo webUrl('login/index')?>";
                                    },"3000");

                                    //window.location.href="<?php  echo webUrl(array('register/register','username'=>'"+data.content.username+"','password'=>'"+data.content.password+"','nickname'=>'"+data.content.nickname+"','realname'=>'"+data.content.realname+"','qq'=>'"+data.content.qq+"'))?>";
                                    /*window.location.href="{php echo webUrl(array('register/register','username'=>"+data.content.username+",'password'=>"+data.content.password+"," +
                                     "'nickname'=>"+data.content.nickname+",'realname'=>"+data.content.realname+",'qq'=>"+data.content.qq+",))}";*/
                                }else{
                                    $("#"+data.name+"-span").html(data.msg);
                                    //view(data.msg);
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
    </div>
</div>
</body>
</html>