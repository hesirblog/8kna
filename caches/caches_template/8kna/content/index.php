<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="shortcut icon" type="image/ico" href="css/favicon.ico" />
<link href="<?php echo SKIN_PATH;?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo SKIN_PATH;?>/css/sexylightbox.css" rel="stylesheet" type="text/css" />
<?php include template("content","inc_common_js"); ?>
</head>
<body>
<?php include template("content","inc_header"); ?>
    <div class="header_bom">
      <div class="header_js">
        <div class="headerjs_flash">
                <div style="position:relative;">
                        <a href="" target="_blank">
                            <img src="<?php echo SKIN_PATH;?>/images/130104195951237.jpg" width="1680" height="510" /></a>
                            <!--<span style="display:block; width:941px; height:383px; position:absolute; top:88px; z-index:100; left:365px;"> <embed width="941" height="383" wmode="transparent" type="application/x-shockwave-flash" src="/weiya"> </span>-->
                            
                     </div>
                </div>

        </div>
        <div class="header_jsul png"> </div>
      </div>
    </div>
    <div class="header_address">
      <div class="hedaer_tel">
        <div class="header_telleft">
          <ul>
            <li><a href="" title="太庙1" class=""> <span> <img src="<?php echo SKIN_PATH;?>/images/header_imgbg1.gif" /></span>
            <img class='tel_color1' src="<?php echo SKIN_PATH;?>/images/red_img.jpg" width='184' height='184' /></a></li>
            <li><a href="" title="" class=""> <span> <img src="<?php echo SKIN_PATH;?>/images/header_imgbg2.gif" /></span></a></li>
            <li><a href="" title="" class=""> <span> <img src="<?php echo SKIN_PATH;?>/images/header_imgbg3.gif" /></span></a></li>
            <li><a href="" title="韩派实景--风情街" class=""> <span> <img src="<?php echo SKIN_PATH;?>/images/header_imgbg4.gif" /></span>
            <img class='tel_color4' src="<?php echo SKIN_PATH;?>/images/green_img.jpg" width='184' height='184' /></a></li>
            <li><a href="" title="蓝绿配" class=""> <span> <img src="<?php echo SKIN_PATH;?>/images/header_imgbg5.gif" /></span>
            <img class='tel_color5' src="<?php echo SKIN_PATH;?>/images/blue_img.jpg" width='184' height='184' /></a></li>
            <li><a href="" title="" class=""> <span> <img src="<?php echo SKIN_PATH;?>/images/header_imgbg6.gif" /></span></a></li>
            <li><a href="" title="朝阳公园" class=""> <span> <img src="<?php echo SKIN_PATH;?>/images/header_imgbg7.gif" /></span>
            <img class='tel_color7' src="<?php echo SKIN_PATH;?>/images/white_img.jpg" width='184' height='184' /></a></li>
            <li><a href="" title="情人" class="tel_colorblack"> <span> <img src="<?php echo SKIN_PATH;?>/images/header_imgbg8.gif" /></span>
            <img class='tel_color8' src="<?php echo SKIN_PATH;?>/images/black_img.jpg" width='184' height='184' /></a></li>
          </ul>
        </div>
        <div class="header_telright"> <span><b><a href="" rel="sexylightbox[group1]"

                        class="png"> <img src="<?php echo SKIN_PATH;?>/images/header_qq.png" class="png" /></a></b></span> </div>
      </div>
    </div>
  </div>
  <div class="clear"> </div>
</div>
<!--头部公用部分结束-->
<script type="text/javascript">

    $(function () {

        var href = window.location.href.split('/')[window.location.href.split('/').length - 1].substr(0, 4).toLowerCase();

        var flag=true;

        if (href.length > 0) {

            $("ul.nav li").each(function () {

                if ($(this).find("a[href*=" + href + "]").length > 0) {

                    

                    if(flag)

                    {

                         $(this).find("a").eq(0).addClass("hover");

                    }

                   

                  

                    flag=false;

                   

                }

            });

        }

    });

</script>





<!--头部代码-->
<div class="content">
<div class="contenter">
<div class="contenter_case">
<div class="contenter_caseleft">
<div class="contenter_caselefter1"> 
<span><b> 2013</b></span> 
<strong style="background-color:#d20001;"> <img src="<?php echo SKIN_PATH;?>/images/date21.jpg"/></strong> 
<samp><i>Jan</i></samp> 
</div>
<div class="contenter_caselefter2"> <a href="" class="a_xs"> <img src="<?php echo SKIN_PATH;?>/images/contenter_xsbg.gif" /></a> </div>
<div class="contenter_caselefter3"> 
<span>
<iframe src="http://m.weather.com.cn/m/pn5/weather.htm?id=101010100T " width="200" height="20" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>
</span> 
</div>
<div class="contenter_caselefter4"> 
<a href="" title="【【最新优惠活动.】】">
<span><i> Oct 10,2012</i></span> <samp> <i>【【最新优惠活动.】】 </i></samp> <small><i>    北京BOBO摄影【年终尾牙.燕舞新春】     活动详...</i></small> </a> 
</div>
</div>
<div class="contenter_casein">
<div class="contenter_caseintop"> <span> <img src="<?php echo SKIN_PATH;?>/images/content_casetopimg.gif" /></span></div>
<div class="contenter_caseinbom">
<div class="contenter_casejs">
<ul>
<li>
<a href="">
<span><strong><b>showcase</b><i>热带雨林 </i>
<div class="clear"> </div>
</strong><em> Nov 11,2012</em><small>0</small></span><samp>
<img src="<?php echo SKIN_PATH;?>/images/121114162027260.jpg" width="250" height="156" /></samp>
</a>
<a href="">
<span><strong><b>showcase</b><i>小亲亲 </i>
<div class="clear"> </div>
</strong><em> Nov 11,2012</em><small>0</small></span><samp>
<img src="<?php echo SKIN_PATH;?>/images/121114163135384.jpg" width="250" height="156" /></samp>
</a>
</li>
<li><a href="">
<span><strong><b>showcase</b><i>韩城攻略（二） </i>
<div class="clear"> </div>
</strong><em> Aug 08,2012</em><small>0</small></span><samp>
<img src="<?php echo SKIN_PATH;?>/images/120815152926535.jpg" width="250" height="156" /></samp>
</a>
<a href="">
<span><strong><b>showcase</b><i>恋爱季节 </i>
<div class="clear"> </div>
</strong><em> Aug 08,2012</em><small>0</small></span><samp>
<img src="<?php echo SKIN_PATH;?>/images/121114165621439.jpg" width="250" height="156" /></samp>
</a>
</li>
<li><a href="">
<span><strong><b>showcase</b><i>韩古灵精怪 </i>
<div class="clear"> </div>
</strong><em> Aug 08,2012</em><small>0</small></span><samp>
<img src="<?php echo SKIN_PATH;?>/images/121114165545360.jpg" width="250" height="156" /></samp>
</a>
<a href="">
<span><strong><b>showcase</b><i>宫廷恋曲 </i>
<div class="clear"> </div>
</strong><em> Aug 08,2012</em><small>0</small></span><samp>
<img src="<?php echo SKIN_PATH;?>/images/12081515354158.jpg" width="250" height="156" /></samp>
</a>
</li>
<li><a href="">
<span><strong><b>showcase</b><i>威尼斯小熊老公 </i>
<div class="clear"> </div>
</strong><em> Aug 08,2012</em><small>0</small></span><samp>
<img src="<?php echo SKIN_PATH;?>/images/121114164147252.jpg" width="250" height="156" /></samp>
</a>
<a href="">
<span><strong><b>showcase</b><i>80年代 </i>
<div class="clear"> </div>
</strong><em> Aug 08,2012</em><small>0</small></span><samp>
<img src="<?php echo SKIN_PATH;?>/images/121114165428199.jpg" width="250" height="156" /></samp>
</a>
</li> 
</ul>
</div>
<span>
<ul class="navi">
<li class="current"> </li>
<li> </li>
<li> </li>
<li > </li>
</ul>
</span> </div>
</div>
<div class="contenter_caseright">
<span>
<a href="" title="婚纱摄影作品展示">
<img src="<?php echo SKIN_PATH;?>/images/121111163236348.jpg" width="430" height="480" alt="清新自然" />
</a>

<samp style="right:10px; top:10px;">
<a href="">
<img src="<?php echo SKIN_PATH;?>/images/content_more.gif" /></a></samp>
</span>

</div>
</div>
<div style="width:980px; margin:0 auto 38px auto; text-align:center;"><a href="" target="_blank"><img src="<?php echo SKIN_PATH;?>/images/121114175220600.jpg" alt="清新自然" /></a></div>
<div class="sale_case">
<h2 class="contenter_showcasetop"> <span> <img src="<?php echo SKIN_PATH;?>/images/t1.gif" /></span> <samp> <a href=""> <img src="<?php echo SKIN_PATH;?>/images/content_more.gif" /></a></samp> </h2>
<ul>
<li>
<p><a href="" title="倾城一笑"> <img src="<?php echo SKIN_PATH;?>/images/121114154116351.jpg" width="212" height="330" /></a></p>
<span><a href="" title="倾城一笑">倾城一笑</a></span><i>2012/11/14</i></li>
<li>
<p><a href="" title="水晶恋"> <img src="<?php echo SKIN_PATH;?>/images/120808191127168.jpg" width="212" height="330" /></a></p>
<span><a href="" title="水晶恋">水晶恋</a></span><i>2012/08/08</i></li>
<li>
<p><a href="" title="太庙"> <img src="<?php echo SKIN_PATH;?>/images/120805131806427.jpg" width="212" height="330" /></a></p>
<span><a href="" title="太庙">太庙</a></span><i>2012/08/05</i></li>
<li>
<p><a href="" title="中国风之画牡丹"> <img src="<?php echo SKIN_PATH;?>/images/120803175825188.jpg" width="212" height="330" /></a></p>
<span><a href="" title="中国风之画牡丹">中国风之画牡丹</a></span><i>2012/08/04</i></li>
</ul>
</div>
<!--热卖产品-->
<div class="contenter_showcase">
<div class="contenter_showcasetop"> <span> <img src="<?php echo SKIN_PATH;?>/images/t6.gif" /></span> <samp> <a href=""> <img src="<?php echo SKIN_PATH;?>/images/content_more.gif" /></a></samp> </div>
<div class="contenter_showcasebom">
<ul>
<li class=" "><a href="" title="风起时想起你"><span><b> 风起时想起你</b><i>2012/11/19</i></span> <img src="<?php echo SKIN_PATH;?>/images/121119232911578.jpg" width="70" height="70" alt="风起时想起你" /> </a></li>
<li class=" "><a href="" title="暖"><span><b> 暖</b><i>2012/11/19</i></span> <img src="<?php echo SKIN_PATH;?>/images/121119144813898.jpg" width="70" height="70" alt="暖" /> </a></li>
<li class=" "><a href="" title="简单幸福"><span><b> 简单幸福</b><i>2012/11/19</i></span> <img src="<?php echo SKIN_PATH;?>/images/121119095922346.jpg" width="70" height="70" alt="简单幸福" /> </a></li>
<li class=" "><a href="" title="舞动"><span><b> 舞动</b><i>2012/11/14</i></span> <img src="<?php echo SKIN_PATH;?>/images/12081114541737.jpg" width="70" height="70" alt="舞动" /> </a></li>
<li class=" "><a href="" title="紫色秋季"><span><b> 紫色秋季</b><i>2012/11/14</i></span> <img src="<?php echo SKIN_PATH;?>/images/121114173520525.jpg" width="70" height="70" alt="紫色秋季" /> </a></li>
<li class=" "><a href="" title="一生相守"><span><b> 一生相守</b><i>2012/11/08</i></span> <img src="<?php echo SKIN_PATH;?>/images/121108150956706.jpg" width="70" height="70" alt="一生相守" /> </a></li>
<li class=" "><a href="" title="假日花海"><span><b> 假日花海</b><i>2012/10/10</i></span> <img src="<?php echo SKIN_PATH;?>/images/121104181113356.jpg" width="70" height="70" alt="假日花海" /> </a></li>
<li class=" "><a href="" title="假日乐趣"><span><b> 假日乐趣</b><i>2012/10/10</i></span> <img src="<?php echo SKIN_PATH;?>/images/121010134356970.jpg" width="70" height="70" alt="假日乐趣" /> </a></li>
<li class=" "><a href="" title="韩城攻略（-）"><span><b> 韩城攻略（-）</b><i>2012/08/15</i></span> <img src="<?php echo SKIN_PATH;?>/images/120815142619162.jpg" width="70" height="70" alt="韩城攻略（-）" /> </a></li>
<li class=" "><a href="" title="韩派实景--俏皮主题"><span><b> 韩派实景--俏皮主题</b><i>2012/08/08</i></span> <img src="<?php echo SKIN_PATH;?>/images/120808182025310.jpg" width="70" height="70" alt="韩派实景--俏皮主题" /> </a></li>
<li class=" "><a href="" title="韩派实景--书房"><span><b> 韩派实景--书房</b><i>2012/08/08</i></span> <img src="<?php echo SKIN_PATH;?>/images/120808170030271.jpg" width="70" height="70" alt="韩派实景--书房" /> </a></li>
<li class=" "><a href="" title="韩派实景--风情街"><span><b> 韩派实景--风情街</b><i>2012/08/08</i></span> <img src="<?php echo SKIN_PATH;?>/images/120808141421100.jpg" width="70" height="70" alt="韩派实景--风情街" /> </a></li>
<li class=" "><a href="" title="钢琴恋曲"><span><b> 钢琴恋曲</b><i>2012/08/08</i></span> <img src="<?php echo SKIN_PATH;?>/images/120808132009206.jpg" width="70" height="70" alt="钢琴恋曲" /> </a></li>
<li class=" "><a href="" title="油菜花"><span><b> 油菜花</b><i>2012/08/08</i></span> <img src="<?php echo SKIN_PATH;?>/images/12080714343933.jpg" width="70" height="70" alt="油菜花" /> </a></li>
<li class=" "><a href="" title="缤纷秋季"><span><b> 缤纷秋季</b><i>2012/08/07</i></span> <img src="<?php echo SKIN_PATH;?>/images/121114164428567.jpg" width="70" height="70" alt="缤纷秋季" /> </a></li>
<li class=" "><a href="" title="温榆河"><span><b> 温榆河</b><i>2012/08/06</i></span> <img src="<?php echo SKIN_PATH;?>/images/120807135349725.jpg" width="70" height="70" alt="温榆河" /> </a></li>
<li class=" "><a href="" title="童话牧马"><span><b> 童话牧马</b><i>2012/08/05</i></span> <img src="<?php echo SKIN_PATH;?>/images/120805124539629.jpg" width="70" height="70" alt="童话牧马" /> </a></li>
<li class=" "><a href="" title="幸福约定"><span><b> 幸福约定</b><i>2012/08/05</i></span> <img src="<?php echo SKIN_PATH;?>/images/121114165210608.jpg" width="70" height="70" alt="幸福约定" /> </a></li>
<li class=" "><a href="" title="朝阳公园"><span><b> 朝阳公园</b><i>2012/08/04</i></span> <img src="<?php echo SKIN_PATH;?>/images/120804204538349.jpg" width="70" height="70" alt="朝阳公园" /> </a></li>
<li class=" "><a href="" title="薰衣草香"><span><b> 薰衣草香</b><i>2012/08/04</i></span> <img src="<?php echo SKIN_PATH;?>/images/121114172325634.jpg" width="70" height="70" alt="薰衣草香" /> </a></li>
</ul>
<div class="clear"> </div>
</div>
</div>
<!--作品展示-->
<div style="width:980px; margin:0 auto 38px auto; text-align:center;"><a href="" target="_blank"><img  src="<?php echo SKIN_PATH;?>/images/t5.jpg" /></a></div>
<div class="sale_case">
<h2 class="contenter_showcasetop"> <span> <img src="<?php echo SKIN_PATH;?>/images/t4.gif" /></span> <samp> <a href=""> <img src="<?php echo SKIN_PATH;?>/images/content_more.gif" /></a></samp> </h2>
<ul>
<li>
<p><a href="" title="唐丽珍夫妇朝阳公园+798"> <img src="<?php echo SKIN_PATH;?>/images/121010191107535.jpg" width="212" height="330" /></a></p>
<span><a href="" title="唐丽珍夫妇朝阳公园+798">唐丽珍夫妇朝阳公园+798</a></span><i>2012/10/10</i></li>
<li>
<p><a href="" title="吕蒙夫妇"> <img src="<?php echo SKIN_PATH;?>/images/120810151423173.jpg" width="212" height="330" /></a></p>
<span><a href="" title="吕蒙夫妇">吕蒙夫妇</a></span><i>2012/08/10</i></li>
<li>
<p><a href="" title="徐磊夫妇-世界公园"> <img src="<?php echo SKIN_PATH;?>/images/120815164309849.jpg" width="212" height="330" /></a></p>
<span><a href="" title="徐磊夫妇-世界公园">徐磊夫妇-世界公园</a></span><i>2012/08/06</i></li>
<li>
<p><a href="" title="张鑫夫妇--纯色画意"> <img src="<?php echo SKIN_PATH;?>/images/120805190435145.jpg" width="212" height="330" /></a></p>
<span><a href="" title="张鑫夫妇--纯色画意">张鑫夫妇--纯色画意</a></span><i>2012/08/05</i></li>
</ul>
</div>
<!--婚纱礼服-->
<div class="contenter_weddingnews">
<div class="contenter_weddingnewstop"> <img src="<?php echo SKIN_PATH;?>/images/content_weddingnewstop.gif" /></div>
<div class="contenter_weddingnewsbom">
<dl class="wedding_width1 clearfix">
<dt class="wedding_width1"><span> <img src="<?php echo SKIN_PATH;?>/images/contnet_weddingnewsnav1.gif" /></span><samp><a href=""><img

src="<?php echo SKIN_PATH;?>/images/content_more2.gif" /></a></samp></dt>
<dd> <a href="" title="白领结婚，如何省钱"> 白领结婚，如何省钱</a></dd>
<dd> <a href="" title="『BOBO摄影影棚秉承』最原汁原味韩风派"> 『BOBO摄影影棚秉承』最原汁原味韩风派</a></dd>
<dd> <a href="" title="『BOBO摄影』体型较胖的新娘怎么选婚纱和礼服"> 『BOBO摄影』体型较胖的新娘怎么选婚纱和礼服</a></dd>
<dd> <a href="" title="『BOBO摄影』从拍摄风格选择婚礼跟拍摄....."> 『BOBO摄影』从拍摄风格选择婚礼跟拍摄.....</a></dd>
<dd> <a href="" title="『BOBO摄影』让新娘时刻保持胸前完美身材四大秘诀"> 『BOBO摄影』让新娘时刻保持胸前完美身材四大秘诀</a></dd>
<dd> <a href="" title="『BOBO摄影特色秉承』八大承诺服务"> 『BOBO摄影特色秉承』八大承诺服务</a></dd>
</dl>
<dl class="clearfix">
<dt><span> <img src="<?php echo SKIN_PATH;?>/images/contnet_weddingnewsnav2.gif" /></span><samp><a href=""><img

src="<?php echo SKIN_PATH;?>/images/content_more2.gif" /></a></samp></dt>
<dd> <a href="" title="现代人该结婚以否的分析"> 现代人该结婚以否的分析</a></dd>
<dd> <a href="" title="爱情长跑的最好结局"> 爱情长跑的最好结局</a></dd>
<dd> <a href="" title="婚礼颜色的搭配你了解了吗？"> 婚礼颜色的搭配你了解了吗？</a></dd>
<dd> <a href="" title="BOBO摄影服务说明"> BOBO摄影服务说明</a></dd>
<dd> <a href="" title="BOBO摄影服务流程"> BOBO摄影服务流程</a></dd>
<dd> <a href="" title="BOBO摄影拍摄前准备"> BOBO摄影拍摄前准备</a></dd>
</dl>
<dl class="wedding_width3 clearfix">
<dt class="wedding_width3"><span> <img src="<?php echo SKIN_PATH;?>/images/contnet_weddingnewsnav3.gif" /></span><samp><a href=""><img src="<?php echo SKIN_PATH;?>/images/content_more2.gif" /></a></samp></dt>

<dd><a href="" target="_blank">&middot; 拍婚纱照面对镜头如何轻松自如?</a></dd>
<dd><a href="" target="_blank">&middot; 新人必知的婚纱照拍摄全程建议</a></dd>
<dd><a href="" target="_blank">&middot; 北京服装拍摄最好的摄影机构教您秋天婚纱拍...</a></dd>
<dd><a href="" target="_blank">&middot; 没经验的新人怎么拍摄婚纱照？</a></dd>
<dd><a href="" target="_blank">&middot; 北京口碑最好的婚纱摄影教您胖体型新娘婚纱...</a></dd>
<dd><a href="" target="_blank">&middot; 冬天来了，完美新娘必知</a></dd>

</dl>
</div>
</div>
</div>
</div>
<!--主体部分内容结束-->

<script src="<?php echo SKIN_PATH;?>/js/jquery.tools.min.js" type="text/javascript"></script>
<script src="<?php echo SKIN_PATH;?>/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?php echo SKIN_PATH;?>/js/sexylightbox.v2.3.jquery.js" type="text/javascript"></script>
<script src="<?php echo SKIN_PATH;?>/js/jquery.lazyload.js" type="text/javascript"></script>
<script src="<?php echo SKIN_PATH;?>/js/cd.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo SKIN_PATH;?>/js/swfobject.js"></script>
<SCRIPT type="text/javascript">
  $(document).ready(function(){ 
  SexyLightbox.initialize({ color:'white', dir: 'http://www.iaviva.com/theme/bg'});
 });
</SCRIPT>

<script type="text/javascript">

$(function(){ 

$("a").attr("target","_blank");

});

</script>
<!--foot-->


<script type="text/javascript">
$(function(){ 
$(window).scroll(function(){ goTop();});
});
function goTop(){ 
$("h7").stop().animate({ "top":$(window).height()+$(window).scrollTop()-200},1000);
}
</script>

<h7><a rel="sexylightbox" class="clearfix " href="" target="_blank"><img src="<?php echo SKIN_PATH;?>/images/bgqq.png" class="png" /></a></h7>
<div style="clear:both;"></div>
<div class="bottom">
<div class="bt">
<h2> <img src="<?php echo SKIN_PATH;?>/images/bg1.gif" /></h2>
<div  style="padding-bottom:10px;">
<div  class="bt-left">
<a href=''>朝阳区婚纱摄影告诉您胖新娘怎么拍照好看？</a>
<a href=''>年终尾牙燕舞新春，活动尾声不容错过！！</a>
<a href=''>【BOBO摄影】冬天来了，完美新娘必知</a>
<a href=''>【BOBO摄影】拍婚纱照注意事项</a>
<a href=''>【【最新优惠活动.】】</a>
<a href=''>【朝阳区婚纱摄影】BOBO摄影</a>
<a href=''>『BOBO摄影影棚秉承』最原汁原味韩风派</a>
<a href=''>『BOBO摄影』从拍摄风格选择婚礼跟拍摄.....</a>
<a href=''>『BOBO摄影』让新娘时刻保持胸前完美身材四大秘诀</a>
</div>
</div>
<h3 style="padding-bottom:10px;"> <a href=""></a> </h3>
</div>
</div>

<div class="foot_top">
<div class="footer_top">
<dl>
<dt><a href="">service 服务报价</a></dt>
<dd> <a href="">WEDDING PACKAGES 婚纱套系 </a> </dd>
<dd> <a href="">PHOTO PAKEAGES 写真套系</a> </dd>
<dd> <a href="">COMMERCIAL PACKAGES 商业套系</a> </dd>
</dl>
<dl>
<dt><a href="">showcase 作品展示</a></dt>
 <dd><a href=''>Latest works 最新作品</a></dd> <dd><a href=''>Wedding 婚纱摄影</a></dd> <dd><a href=''>Fashion 时尚写真</a></dd> <dd><a href=''>Commercial 商业摄影</a></dd></dl>
<dl>
<dt><a href="">who's BOBO摄影</a></dt>
<dd> <a href="">ABOUT 关于BOBO </a></dd>
<dd> <a href="">CONTACT us 联系我们</a></dd>
<dd> <a href="">JOIN US加入我们</a></dd>
</dl>
<dl>
<dt><a href="">bobo摄影</a></dt>
<dd><a href="">HOME 首页</a></dd>
</dl>
<div class="clear"> </div>
</div>
<div class="footer_top">
<dl>
<dt><a href="">BRAUTY论坛</a></dt>
<dd> <a href=""> BBS BOBO论坛</a></dd>
<dd> <a href=""> T'SINA新浪微博</a> </dd>
</dl>
<dl>
<dt><a href="">locaiton 外景地</a></dt>
<dd> <a href="">INDOOR AREA 市内景区</a> </dd>
<dd> <a href="">SUBURBAN AREA 远郊景区</a> </dd>
<dd> <a href="">NEIGHBORING AREA 近邻景区</a> </dd>
</dl>
<dl>
<dt><a href="">NEWS 新闻</a></dt>
<dd> <a href="">NEWS ACTIVITIES 新闻活动</a> </dd>
<dd> <a href="">WEDDING TIPS 结婚课堂</a> </dd>
<dd> <a href="">SHOOTING TIPES 新人课堂</a> </dd>
<dd> <a href="">FORUM 论坛热帖</a> </dd>
<dd> <a href="">SERVICE TIPS 服务小贴士</a> </dd>
</dl>
<div class="clear"> </div>
</div>
</div>
<div class="foot_bom">
<div class="footer_bom">
<h2> <a href=""> <img src="<?php echo SKIN_PATH;?>/images/footer_logo.gif" /></a></h2>
<span> <small> copyright©2010 北京最好的婚纱摄影工作室 版权所有，技术支持：<a href="" style="color:#FFCC00; text-decoration:none;" target="_blank">魔方网络</a> 影楼网站建设 Copyright © 2010 Beijing's best wedding photography studio,SUPPORT BY imfwed ad-agency CO.,Ltd. </small> 
</span>
<div class="clear"> </div>
<em>友情链接（QQ:2387764548）： <a href="" target="_blank">济南婚纱摄影</a> <a href="" target="_blank">唐山婚纱摄影</a> <a href="" target="_blank">北京孕妇照</a> <a href="" target="_blank">深圳婚纱摄影</a> <a href="" target="_blank">北京天成文化衫印刷网</a> <a href="" target="_blank">重庆婚纱摄影</a> <a href="" target="_blank">满成盈时尚网</a> <a href="" target="_blank">北京婚纱摄影</a> <a href="" target="_blank">杭州婚纱照</a> </em> </div>
</div>
<!-- footer end -->
<div class="position">
<div class="position_nav"> <span><a href="" rel="sexylightbox" class="png"><img src="<?php echo SKIN_PATH;?>/images/position_qq.png" class="png" /></a></span> <samp> <b><em>400 814 8080</em><em>010-84406866</em>
<div class="clear"></div>
</b> <i>if you have any question, please contact us</i> </samp> </div>
</div>

</body>
</html>
