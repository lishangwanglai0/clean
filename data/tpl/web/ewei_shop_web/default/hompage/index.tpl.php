<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<!-- saved from url=(0027) -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>杭州公司保洁外包-杭州保洁公司-杭州出彩保洁服务有限公司</title>
    <meta name="description" content="杭州出彩,是一家专注办公室保洁灵活托管及后勤综合托管服务的创业公司。这是一种针对公司办公室保洁托管的全新服务模式。最低只要1500元/月（含税）解决您公司一个月的日常保洁问题。真正为中小企业客户做到省时、省钱、省心。不仅是日常保洁托管，更有地毯清洗、开荒保洁、甲醛治理、直饮水机、桶装水、办公用品等企业后勤一站式服务。">
    <meta name="keywords" content="杭州出彩保洁服务有限公司,杭州出彩,保洁服务,杭州保洁公司,杭州保洁外包,杭州保洁托管,杭州办公室保洁,杭州开荒保洁,杭州写字楼保洁外包,杭州钟点工,公司保洁阿姨,杭州公司保洁托管">
    <link href="./static/home_files/css.css" rel="stylesheet" type="text/css">
    <link href="./static/home_files/reset.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->
    <link href="./static/home_files/comm.css" rel="stylesheet" type="text/css">
    <script src="./static/home_files/jquery-1.7.2.min.js.下载" type="text/javascript"></script>
    <script type="text/javascript" src="./static/home_files/SuperSlide.2.1.js.下载"></script>
    <script src="./static/home_files/zzsc.js.下载" type="text/javascript"></script>
    <link href="./static/home_files/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="./static/home_files/work.js.下载"></script>
    <link rel="stylesheet" href="./static/home_files/index.css">
    <script type="text/javascript" src="./static/home_files/index.js.下载"></script>

</head>

<body>
<div class="header_da">
    <header class="header clearfix">
        <div class="headerbox">
            <!--nav-->
            <div class="logo"><a href=""><img src="./static/home_files/logo_02.png" width="207" height="102"></a></div>
            <div class="sevicebox">
                <!---->
                <div class="navbg">
                    <div class="col960">
                        <ul id="navul" class="cl">

                            <li class=""><a href="">出彩服务<font>&nbsp;▼</font></a>

                                <ul>

                                    <li><a href="chucaituoguanfuwu/">出彩托管服务</a></li>

                                    <li><a href="plus/list.php?tid=21">出彩专项服务</a></li>

                                    <li><a href="ccfw/">出彩开荒服务</a></li>

                                </ul>
                            </li>

                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <!---->
            </div>
            <!---->
            <div class="toprg2">
                <a class="aaa1" href="#">
                    <img src="./static/home_files/bico3_03.png" width="41" height="35">
                    <p><img src="./static/home_files/erweima.jpg" style="text-align:top;"></p>
                </a>
                <div class="clear"></div>
            </div>
            <div class="telbox"><!-- <img src="/templets/pc/images/tel_02.png" width="198" height="102"/> -->
                <p style="background:url(/templets/pc/images/tel_02.png) no-repeat;font-size:26px;line-height:102px;text-indent:42px;width:208px;height:102px;color:#78c936">400-829-8851</p>
            </div>
            <!---->
            <div class="navbar">
                <ul class="nav">
                    <li class="m on"><a href="" title="网站首页">网站首页<br>
                        <span>HOME</span></a></li>


                    <li class="m"><a href="#" onclick="openlayer(&#39;layer-bg&#39;,&#39;layer&#39;);return false;" title="快速预约">快速预约<br><span>RESERVATION</span>
                    </a> </li>

                    <li class="m"><a href="gsjj/" title="关于我们">关于我们<br>
                        <span>ABOUT AS</span></a> </li>

                    <li class="m"><a href="cgal/" title="成功案例">成功案例<br>
                        <span>CASE</span></a> </li>

                    <li class="m"><a href="cjwt/" title="常见问题">常见问题<br>
                        <span>PROBLEMS</span></a> </li>


                    <li class="block" style="left: 0px;"></li>
                    <script type="text/javascript">
                        var ind = 0;
                    </script>
                </ul>
            </div>

            <div class="clear"></div>
            <!--nav-->
        </div>
    </header>
</div>
<div class="clear"></div>

<!--页头结束-->
<!--banner-->
<div id="banner">
    <!---->
    <div class="swiper-container slide-bg">
        <div class="swiper-wrapper slide-wp">
            <?php  if(is_array($home)) { foreach($home as $item) { ?>
            <?php  if(empty($item['type'])) { ?>
            <div class="swiper-slide">
                <img src="/attachment/<?php  echo $item['img'];?>" alt="" />
            </div>
            <?php  } ?>
            <?php  } } ?>
        </div>
        <!-- 如果需要分页器 -->
        <div class="swiper-pagination"></div>
    </div>
</div>


<div id="F1box">
    <div class="F1box" id="F1box">
        <?php  if(is_array($home)) { foreach($home as $item) { ?>
        <?php  if(!empty($item['type'])) { ?>
        <div class="leftF1box">
            <div class="pic"><a href="#"><img src="./static/home_files/1-150RQ61441646.png" width="155" height="155"></a></div>
            <p style="font-size:24px; padding-top:20px; color:#000;"><?php  echo $item['name'];?></p>
            <p><?php  echo $item['content'];?></p>
        </div>
        <?php  } ?>
        <?php  } } ?>
        <div class="clear"></div>
    </div>
</div>

<script type="text/javascript">
    var F1box=document.getElementById('F1box');
    var leftF1boxs=F1box.getElementsByTagName('div');
    leftF1boxs[3].style.margin='0 0 0 80px';
    leftF1boxs[5].style.float='right';
</script>

<div id="F2box">
    <div class="leftF2box">
        <div class="bt"><span><a href="ccfw/">更多&nbsp;<img src="./static/home_files/icos_03.png"></a></span>服务产品&nbsp; /&nbsp;<font><b>P</b>roducts</font></div>
        <div class="leftF2boxpic">
            <ul>
                <?php  if(is_array($trusteeship)) { foreach($trusteeship as $item) { ?>
                <li>
                    <a href="chucaituoguanfuwu/37.html">
                        <div class="imglist"><img src="/attachment/<?php  echo $item['img'];?>" width="189" height="142"></div>
                        <div class="picbt">价格：<?php  echo $item['schedule'];?>：<?php  echo $item['money'];?></div>
                        <div class="picdtext">
                            <p>参考面积: <?php  echo $item['acreage'];?> 日常服务范围： <?php  echo $item['scope'];?></p>
                        </div>
                    </a>
                </li>
                <?php  } } ?>


                <div class="clear"></div>
            </ul>
        </div>

    </div>
    <div class="rightF2box">
        <div class="bt"><span><a href="cjwt/">更多&nbsp;<img src="./static/home_files/icos_03.png"></a></span>常见问题&nbsp;/&nbsp;problem</div>
        <ul id="listtext">
            <?php  if(is_array($successful)) { foreach($successful as $item) { ?>
            <li><span><?php  echo $item['created_at'];?></span><a href="cjwt/"><font>·</font><?php  echo $item['name'];?></a></li>
            <?php  } } ?>
        </ul>
    </div>
    <div class="clear"></div>
</div>


<div id="F3box">
    <div class="bt"><a href="cgal/">成功案例</a></div>
    <div class="ebt">Successful Case</div>
    <div class="linb" style="width:100%; height:1px; background:#ddd; margin-top:10px;"></div>
    <div class="content">
        <ul class="contentbox">
            <li class="con">
                <img src="./static/home_files/1-160612154Z10-L.jpg" alt="con1">
                <div class="txt">
                    <h3><a href="cgal/135.html">百年老店毛源昌</a></h3>
                    <p>毛源昌眼镜始创于清同治元年（1862年），是中国眼镜行...</p>
                </div>
            </li>
            <li class="con">
                <img src="./static/home_files/1-16042Q30H10-L.jpg" alt="con1">
                <div class="txt">
                    <h3><a href="cgal/124.html">杭州光云科技有限公司</a></h3>
                    <p>杭州光云科技公司成立于2009年7月，一直秉承一切以用户...</p>
                </div>
            </li>
            <li class="con">
                <img src="./static/home_files/1-1F303013311494-lp.jpg" alt="con1">
                <div class="txt">
                    <h3><a href="cgal/179.html">   猎聘网</a></h3>
                    <p>猎聘网-职业经理人和猎头实名制互动网站(SNS)，凭借其创...</p>
                </div>
            </li>
            <li class="con">
                <img src="./static/home_files/1-15102Q016390-L.jpg" alt="con1">
                <div class="txt">
                    <h3><a href="cgal/60.html">杭州远石科技有限公司</a></h3>
                    <p>公司成立于2005，员工均为IP通信领域的技术专家或资深市...</p>
                </div>
            </li>


        </ul>
        <div class="clear"></div>
    </div>
</div>

<div id="contactbox">
    <div class="contactbox">
        <div class="leftcontactbox"></div>
        <!--message-->
        <!--[if lt IE 9]>
        <script type="text/javascript">
            $(function(){
                $(".about_list li").hover(function(){
                    $("img",this).stop().animate({"width":"108%",height:"108%",marginLeft:"-4%",marginTop:"-4%"},200)
                },function(){
                    $("img",this).stop().animate({"width":"100%",height:"100%",marginLeft:"0",marginTop:"0"},200)
                })
            })
        </script>
        <![endif]-->


        <div class="message">
            <h3>告诉我们您的问题</h3>
            <h4>Please leave your comments.</h4>
            <form action="plus/diy.php" enctype="multipart/form-data" method="post" id="form1">
                <input type="hidden" name="action" value="post">
                <input type="hidden" name="diyid" value="2">
                <input type="hidden" name="do" value="2">

                <div class="message_form">
                    <input type="text" name="username" id="username" value="请输入您的姓名" onblur="this.value=(this.value==&#39;&#39;)?&#39;请输入您的姓名&#39;:this.value" onfocus="this.value=(this.value==&#39;请输入您的姓名&#39;)?&#39;&#39;:this.value" class="message_name">
                    <input type="text" name="qq" id="qq" class="message_tel" value="请输入您的手机号" onblur="this.value=(this.value==&#39;&#39;)?&#39;请输入您的手机号&#39;:this.value" onfocus="this.value=(this.value==&#39;请输入您的手机号&#39;)?&#39;&#39;:this.value" onkeyup="value=value.replace(/\D+/g,&#39;&#39;)">
                    <div class="clear" style="height:20px;"></div>
                    <textarea class="message_content" name="problem" id="problem" placeholder="简洁明了的表述，我们能更高效的处理您的问题，谢谢您的配合"></textarea>
                    <div class="clear" style="height:25px;"></div>
                    <input type="hidden" name="dede_fields" value="username,text;qq,text;problem,multitext">
                    <input type="hidden" name="dede_fieldshash" value="baad996f6d3e808842f1fd047031a650">
                    <input type="submit" value="" class="message_btn">
                    <span class="message_about">我们将在1个工作日内回复，资料会保密处理。</span> </div>
            </form>
        </div>
        <!--message-->
        <div class="clear"></div>
    </div>
</div>

<script type="text/javascript">
    $('#form1').submit(function ()
    {
        if($('#username').val()=="" || $('#username').val()=="请输入您的姓名"){
            $('#username').focus();
            alert("请填写姓名！");
            return false;
        }

        if($('#qq').val()=="" || $('#qq').val()=="请输入您的QQ")
        {
            $('#qq').focus();
            alert("请填写qq！");
            return false;
        }

        if($('#problem').val()=="")
        {
            $('#problem').focus();
            alert("问题描述不能为空！");
            return false;
        }

    })
</script>


<div id="F4box">
    <div class="bt">合作伙伴&nbsp; /&nbsp;<font><b>L</b>inks</font></div>
    <!--list-->
    <div class="mr_frbox">
        <img class="mr_frBtnL prev" src="./static/home_files/mfrL.jpg" width="28" height="46">
        <div class="mr_frUl">
            <div class="tempWrap" style="overflow:hidden; position:relative; width:552px"><ul style="width: 2070px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -1062.56px;"><li class="clone" style="float: left; width: 125px;"><a href="http://www.jzsec.com/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G21609321T58.jpg" width="123" height="52"></a><a href="http://krspace.cn/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216093231506.png" width="123" height="52"></a></li>
                <li style="float: left; width: 125px;"><a href="http://www.pingan.com/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216095309321.jpg" width="123" height="52"></a><a href="http://www.cnpc.com.cn/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216095324417.jpg" width="123" height="52"></a></li>
                <li style="float: left; width: 125px;"><a href="http://www.egiraffe.cn/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216095153T5.jpg" width="123" height="52"></a><a href="https://www.smartstudy.com/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216095205429.png" width="123" height="52"></a></li>
                <li style="float: left; width: 125px;"><a href="https://www.youzan.com/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216095010593.png" width="123" height="52"></a><a href="" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G2160950194Y.png" width="123" height="52"></a></li>
                <li style="float: left; width: 125px;"><a href="http://www.szqkjx.cn/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216094K3923.png" width="123" height="52"></a><a href="http://www.yafco.com/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216094P2Z8.jpg" width="123" height="52"></a></li>
                <li style="float: left; width: 125px;"><a href="http://www.sinosig.com/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216094551S0.jpg" width="123" height="52"></a><a href="https://www.ybren.com/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216094604194.jpg" width="123" height="52"></a></li>
                <li style="float: left; width: 125px;"><a href="http://hzxnl.alibole.com/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216094421A8.jpg" width="123" height="52"></a><a href="https://www.shinemo.com/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G2160944301E.jpg" width="123" height="52"></a></li>
                <li style="float: left; width: 125px;"><a href="https://www.chinalife.com.cn/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216094301236.jpg" width="123" height="52"></a><a href="http://www.tigermed.net/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216094311V3.png" width="123" height="52"></a></li>
                <li style="float: left; width: 125px;"><a href="https://www.zheyy.cn/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216094103523.jpg" width="123" height="52"></a><a href="http://www.mygymchina.com.cn/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216094113343.jpg" width="123" height="52"></a></li>
                <li style="float: left; width: 125px;"><a href="http://www.libertymutual.com.cn/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G2160940023G.png" width="123" height="52"></a><a href="https://www.liepin.com/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216094012929.png" width="123" height="52"></a></li>
                <li style="float: left; width: 125px;"><a href="http://www.jzsec.com/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G21609321T58.jpg" width="123" height="52"></a><a href="http://krspace.cn/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216093231506.png" width="123" height="52"></a></li>


                <li class="clone" style="float: left; width: 125px;"><a href="http://www.pingan.com/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216095309321.jpg" width="123" height="52"></a><a href="http://www.cnpc.com.cn/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216095324417.jpg" width="123" height="52"></a></li><li class="clone" style="float: left; width: 125px;"><a href="http://www.egiraffe.cn/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216095153T5.jpg" width="123" height="52"></a><a href="https://www.smartstudy.com/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216095205429.png" width="123" height="52"></a></li><li class="clone" style="float: left; width: 125px;"><a href="https://www.youzan.com/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216095010593.png" width="123" height="52"></a><a href="" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G2160950194Y.png" width="123" height="52"></a></li><li class="clone" style="float: left; width: 125px;"><a href="http://www.szqkjx.cn/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216094K3923.png" width="123" height="52"></a><a href="http://www.yafco.com/" target="_blank" rel="nofollow"><img src="./static/home_files/1-1G216094P2Z8.jpg" width="123" height="52"></a></li></ul></div>
        </div>
        <img class="mr_frBtnR next" src="./static/home_files/mfrR.jpg" width="28" height="46">
    </div>
    <script language="javascript">
        $(".mr_frUl ul li img").hover(function(){$(this).css("border-color","#2fba9e");},function(){$(this).css("border-color","#d8d8d8")});
        jQuery(".mr_frbox").slide({titCell:"",mainCell:".mr_frUl ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:4});
    </script>

</div>
<!--list-->


﻿<!--页尾开始-->
<div class="clear"></div>
<footer class="footer clearfix">
    <div class="footertext">
        Copyright © 2003-2015 杭州出彩保洁服务有限公司 www.color-renew.com 版权所有                  &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp;       &nbsp;               浙ICP备15026855号 <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id=cnzz_stat_icon_1256761221%3E%3C/span%3E%3Cscript src=" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1256761221%26show%3Dpic type=text/javascript%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_1256761221"><a href="http://www.cnzz.com/stat/website.php?web_id=1256761221" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="./static/home_files/pic.gif"></a></span><script src="./static/home_files/z_stat.php" type="text/javascript"></script><script src="./static/home_files/core.php" charset="utf-8" type="text/javascript"></script>                                                                                              <span>优化支持 ：杭州四为信息 </span>
    </div>
</footer>
<div class="clear"></div>
<script language="javascript" type="text/javascript" src="./static/home_files/base.js.下载"></script>
<div class="layer" id="layer">
    <div class="title"><span class="name">快速预约/RESERVATION</span><i class="icon close-btn" onclick="closelayer(&#39;layer-bg&#39;,&#39;layer&#39;)"></i></div>
    <div class="text-box" style="height:300px; overflow-y:auto;">
        <!---->
        <div class="con_ny">

            <script type="text/javascript">
                $(document).ready(function(){

                    $(".side ul li").hover(function(){
                        $(this).find(".sidebox").stop().animate({"width":"124px"},200).css({"opacity":"1","filter":"Alpha(opacity=100)","background":"#ae1c1c"})
                    },function(){
                        $(this).find(".sidebox").stop().animate({"width":"54px"},200).css({"opacity":"0.8","filter":"Alpha(opacity=80)","background":"#000"})
                    });

                });

                //回到顶部
                function goTop(){
                    $('html,body').animate({'scrollTop':0},600);
                }
            </script>
            <script src="./static/home_files/jquery.slides.min.js.下载"></script>
            <script type="text/javascript" src="./static/css/swiper-4.4.1.min.js"></script>
            <link rel="stylesheet" href="./static/css/swiper.min.css">
            <script type="text/javascript">
                var mySwiper = new Swiper ('.swiper-container', {
                    // loop: true, // 循环模式选项
                    autoplay: true,
                    speed:300,
                    // 如果需要分页器
                    pagination: {
                        el: '.swiper-pagination',
                    },
                })

                // $(function() {
                //     $('#slides').slidesjs({
                //         play:{
                //             active: false,
                //             effect: "fade",
                //             auto: true,
                //             interval: 4000
                //         },
                //         effect: {
                //             fade: {
                //                 speed: 1500,
                //                 crossfade: true
                //             }
                //         },
                //         pagination: {
                //             active: true
                //         },
                //         navigation:{
                //             active: false
                //         }
                //     });
                // });
            </script>



            <style type="text/css">
                /*在线留言 message*/

                .message-form{ margin:10px 0px; width:600px; float:left;}
                .message-form .faqline{ width:600px; float:left; margin:5px 0px;}
                .message-form .faqline .faqtit{ width:150px; float:left;display:block; height:28px; line-height:28px; padding-left:20px; font-size:14px; color:#666;}
                .message-form .faqline input{ border:1px solid #CCC; height:30px; line-height:30px; text-align:left; font-size:14px;width:418px;}
                .message-form .faqline textarea{ border:1px solid #CCC;line-height:30px; text-align:left; font-size:14px;}
                .message-form .faqline .submit{border:1px solid #CCC; background:#F5F5F5; color:#666; text-align:center; font-size:14px; font-weight:bold; padding-bottom:20px; padding-left:10px; padding-right:10px;vertical-align:middle; float:left; margin-left:170px;margin-top:10px;width:100px; cursor:pointer}
                .message-form .faqline .cimg{vertical-align:bottom;margin-left:5px;}

                .message-display{ margin:20px 0px; width:630px; float:left;}
                .message-top{ background-color:#ebebeb; padding:0px 10px;}
                .message-display h1{ font-family:"微软雅黑"; font-size:15px; color:#BE2327; border-bottom:1px solid #D7D7D7; margin-bottom:10px; line-height:30px; padding-left:15px;}
                .message-info{ margin:10px 0px; line-height:25px;}
                .message-left{ font-size:14px; font-weight:bold; color:#BE2327;float:left; margin-right:5px;}
                .message-right{ color:#999;float:right;}
                .message-nr,.message-reply{ padding:0px 10px;}
                .message-nr span,.message-reply span{ color:#888;}
            </style>
            <script type="text/javascript">

            </script>



            <form action="plus/diy.php" enctype="multipart/form-data" method="post" id="form" class="registerform">
                <input type="hidden" name="action" value="post">
                <input type="hidden" name="diyid" value="1">
                <input type="hidden" name="do" value="2">
                <div class="message-form">
                    <div class="faqline">
                        <span class="faqtit">服务类型：</span>
                        保洁托管&nbsp;<input style="width:auto;" type="radio" name="service_type" value="保洁托管" checked="">
                        &nbsp;&nbsp;开荒服务&nbsp;<input style="width:auto;" type="radio" name="service_type" value=" 开荒服务">
                        &nbsp;&nbsp;专项保洁&nbsp;<input style="width:auto;" type="radio" name="service_type" value="专项保洁">

                    </div>
                    <div class="faqline">
                        <span class="faqtit">公司名称：</span>
                        <input name="company_name" id="company_name" datatype="*" type="text">
                    </div>
                    <div class="faqline">
                        <span class="faqtit">公司地址：</span>
                        <input name="company_address" id="company_address" datatype="m" type="text">
                        <font color="#FF0000">*</font>
                    </div>
                    <div class="faqline">
                        <span class="faqtit">您的姓名：</span>
                        <input name="user_name" id="user_name" datatype="*" type="text">
                        <font color="#FF0000">*</font>
                    </div>
                    <div class="faqline">
                        <span class="faqtit">手机号码：</span>
                        <input name="phone" id="phone" datatype="*" type="text">
                        <font color="#FF0000">*</font>
                    </div>


                    <div class="faqline">
                        <span class="faqtit">Q Q号码：</span>
                        <input name="qq" id="qq" datatype="" type="text">
                        <font color="#FF0000"></font>
                    </div>

                    <div class="faqline submit">
                        <input type="hidden" name="dede_fields" value="service_type,radio;company_name,text;company_address,text;user_name,text;phone,text;qq,text">
                        <input type="hidden" name="dede_fieldshash" value="c9b4c7660e7383cedd65d6706cc264d0">
                        <input type="submit" value="提交" class="submit">
                        <input type="reset" value="重置" class="submit">
                    </div>
                </div>
            </form><div class="clear"></div>
            <script type="text/javascript">
                $('#form').submit(function ()
                {
                    if($('#user_name').val()==""){
                        $('#username').focus();
                        alert("用户名不能为空！");
                        return false;
                    }


                    if($('#company_address').val()=="")
                    {
                        $('#company_address').focus();
                        alert("公司地址不能为空！");
                        return false;
                    }
                    if($('#phone').val()=="")
                    {
                        $('#phone').focus();
                        alert("手机号码不能为空！");
                        return false;
                    }

                })
            </script>

            <!--内容-->
        </div>
        <!---->
    </div>
    <div class="bot-bar"><a href="#" class="btn w120" onclick="closelayer(&#39;layer-bg&#39;,&#39;layer&#39;);return false;">关闭</a></div>
</div>
<div class="layer-bg" id="layer-bg"></div>


<div class="side">
    <ul>
        <li><a href="chucaituoguanfuwu/"><div class="sidebox"><img src="./static/home_files/side_icon01.png">出彩服务</div></a></li>
        <li><a href="cgal/"><div class="sidebox"><img src="./static/home_files/side_icon02.png">成功案例</div></a></li>
        <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1729862818&amp;site=qq&amp;menu=yes"><div class="sidebox"><img src="./static/home_files/side_icon04.png">QQ客服</div></a></li>
        <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=3601298353&amp;site=qq&amp;menu=yes"><div class="sidebox"><img src="./static/home_files/side_icon04.png">QQ客服</div></a></li>

        <li style=" right:0;background:#333;">

            <!---->
            <div class="toprg2" style="margin-top:0px;">
                <a class="aaa1" href="#">
                    <img src="./static/home_files/side_icon03.png">
                    <p style="top:-36px; left:-150px;"><img src="./static/home_files/erweima.jpg" style="text-align:top;"></p>
                </a>
                <div class="clear"></div>
            </div>
            <!---->


        </li>
        <li style="border:none; right:0;"><a href="javascript:goTop();" class="sidetop"><img src="./static/home_files/side_icon05.png"></a></li>
    </ul>
</div>
<script type="text/javascript">
    var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1272111033'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1272111033' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_1272111033"><a href="http://www.cnzz.com/stat/website.php?web_id=1272111033" target="_blank" title="站长统计">站长统计</a></span><script src="./static/home_files/z_stat(1).php" type="text/javascript"></script><script src="./static/home_files/core(1).php" charset="utf-8" type="text/javascript"></script>




<a href="sitemap.html">百度地图</a> <a href="sitemap.xml">谷歌地图</a>
友情链接:



</body></html>