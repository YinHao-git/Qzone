<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<!--css-->
<link rel="stylesheet" href="/qzone15/Public/homepage/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="/qzone15/Public/homepage/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="/qzone15/Public/homepage/css/grid.css" type="text/css" media="screen">
<link rel="icon" href="/qzone15/Public/homepage/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/qzone15/Public/homepage/images/favicon.ico" type="image/x-icon" />
<!-- <link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'> -->
<link rel="stylesheet" href="/qzone15/Public/homepage/css/flexslider.css" type="text/css" media="screen">
<link rel="stylesheet" href="/qzone15/Public/my.css" type="text/css" media="screen">

<!-- Bootstrap -->
   <!--  <link href="/qzone15/Public/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!--js-->
<script type="text/javascript" src="/qzone15/Public/homepage/js/jquery-1.7.1.min.js" ></script>
<script type="text/javascript" src="/qzone15/Public/homepage/js/superfish.js"></script>
<script type="text/javascript" src="/qzone15/Public/homepage/js/jquery.flexslider-min.js"></script>

<script>	
			jQuery(window).load(function() {								
			jQuery('.flexslider').flexslider({
				animation: "fade",			
				slideshow: true,			
				slideshowSpeed: 7000,
				animationDuration: 600,
				prevText: "",
				nextText: "",
				controlNav: false		
			})					
      });
	</script>
  <style>
   body{
      background-image: url('/qzone15/Public/home/dis/images/11.jpg');
    }

  </style>
</head>

<body>

<!--==============================header=================================-->
<header>
  <div class="line-top">
    <ul class="mr200">
      <!-- <li><h1><img alt="" src="/qzone15/Public/photos/touxiang/default.jpg" width=35 height=35>&nbsp;&nbsp;&nbsp;&nbsp;GNEZGNEZ </h1></li> -->
      <li><a href="">[充值]</a></li>

      <li><a href="<?php echo U('Homepage/out');?>">[退出]</a></li>

    </ul>
  </div>
  <div class="main">
    <div class="row-top">
      <!-- <div style="height:40px;width:200px;"> -->
      <h1 style="height:80px;"><img alt="" src="/qzone15/Public/photos/touxiang/default.jpg" width=80 height=80>&nbsp;&nbsp;&nbsp;&nbsp;<ul class="fr"><li style="width:155px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"></li>
        </ul> </h1>
      <nav>
        <ul class="sf-menu">
          <li><a href="<?php echo U('Homepage/index');?>">个人中心</a></li>

          <li><a href="<?php echo U('index/index');?>">主页</a></li>
          <li><a href="<?php echo U('Note/index');?>">说说 </a> </li>
          <li><a href="<?php echo U('Diary/index');?>">日志</a></li>
          <li><a href="<?php echo U('Photo/index');?>">相册</a> </li>
          <li><a href="<?php echo U('Personal/index');?>">个人档</a> </li>
          <li><a href="<?php echo U('Leave/index');?>">留言板</a> </li>
          <li><a href="<?php echo U('Friend/index');?>">好友</a> </li>
           <li><a href="index-2.html">设置</a>
            <ul>
              <li><a href="#">设置</a></li>
              <li><a href="#">设置</a>
              <li><a href="#">设置</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
  </div>

  
  <div class="box-slogan">
    <h3><?php echo ($title); ?></h3>
  </div>
</header>
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >Website Template</a></div>
<!--==============================content=================================-->

  <style>
    .face{
      width:310px;
      height:150px;
      border:1px solid #ccc;
    }
    ul li{
      float:left;
    }
    .banner{
      margin-left: 250px;
    }
  </style>
  <link href="/qzone15/Public/home/css/bootstrap.min.css" rel="stylesheet">
  <section id="content">
<div class="banner">
  <div class="header">
    <div class="hea">
      <input class="in" type="hidden" value="<?php echo ($uid); ?>">
      <h3>发表留言</h3>
      <div class="message" contentEditable='true' name='message' style="width:940px;height:125px;border:1px solid #ccc"></div>
      <div class="But">
        <img src="/qzone15/Public/home/images/bba_thumb.gif" class='bq'/>
        <span class='btn btn-success'>发表</span>
        <!--face begin-->
        <div class="face">
          <ul>
            <li><img src="/qzone15/Public/home/images/zz2_thumb.gif" title="[织]" ></li>
            <li><img src="/qzone15/Public/home/images/horse2_thumb.gif" title="神马]"></li>
            <li><img src="/qzone15/Public/home/images/fuyun_thumb.gif" title="[浮云]"></li>
            <li><img src="/qzone15/Public/home/images/geili_thumb.gif" title="[给力]"></li>
            <li><img src="/qzone15/Public/home/images/wg_thumb.gif" title="[围观]"></li>
            <li><img src="/qzone15/Public/home/images/vw_thumb.gif" title="[威武]"></li>
            <li><img src="/qzone15/Public/home/images/panda_thumb.gif" title="[熊猫]"></li>
            <li><img src="/qzone15/Public/home/images/rabbit_thumb.gif" title="兔子]"></li>
            <li><img src="/qzone15/Public/home/images/otm_thumb.gif" title="[奥特曼]"></li>
            <li><img src="/qzone15/Public/home/images/j_thumb.gif" title="[囧]"></li>
            <li><img src="/qzone15/Public/home/images/hufen_thumb.gif" title="[互粉]"></li>
            <li><img src="/qzone15/Public/home/images/liwu_thumb.gif" title="[礼物]"></li>
            <li><img src="/qzone15/Public/home/images/smilea_thumb.gif" title="呵呵]"></li>
            <li><img src="/qzone15/Public/home/images/tootha_thumb.gif" title="嘻嘻]"></li>
            <li><img src="/qzone15/Public/home/images/laugh.gif" title="[哈哈]"></li>
            <li><img src="/qzone15/Public/home/images/tza_thumb.gif" title="[可爱]"></li>
            <li><img src="/qzone15/Public/home/images/kl_thumb.gif" title="[可怜]"></li>
            <li><img src="/qzone15/Public/home/images/kbsa_thumb.gif" title="[挖鼻屎]"></li>
            <li><img src="/qzone15/Public/home/images/cj_thumb.gif" title="[吃惊]"></li>
            <li><img src="/qzone15/Public/home/images/shamea_thumb.gif" title="[害羞]"></li>
            <li><img src="/qzone15/Public/home/images/zy_thumb.gif" title="[挤眼]"></li>
            <li><img src="/qzone15/Public/home/images/bz_thumb.gif" title="[闭嘴]"></li>
            <li><img src="/qzone15/Public/home/images/bs2_thumb.gif" title="[鄙视]"></li>
            <li><img src="/qzone15/Public/home/images/lovea_thumb.gif" title="[爱你]"></li>
            <li><img src="/qzone15/Public/home/images/sada_thumb.gif" title="[泪]"></li>
            <li><img src="/qzone15/Public/home/images/heia_thumb.gif" title="[偷笑]"></li>
            <li><img src="/qzone15/Public/home/images/qq_thumb.gif" title="[亲亲]"></li>
            <li><img src="/qzone15/Public/home/images/sb_thumb.gif" title="[生病]"></li>
            <li><img src="/qzone15/Public/home/images/mb_thumb.gif" title="[太开心]"></li>
            <li><img src="/qzone15/Public/home/images/ldln_thumb.gif" title="[懒得理你]"></li>
            <li><img src="/qzone15/Public/home/images/yhh_thumb.gif" title="[右哼哼]"></li>
            <li><img src="/qzone15/Public/home/images/zhh_thumb.gif" title="[左哼哼]"></li>
            <li><img src="/qzone15/Public/home/images/x_thumb.gif" title="[嘘]"></li>
            <li><img src="/qzone15/Public/home/images/cry.gif" title="[衰]"></li>
            <li><img src="/qzone15/Public/home/images/wq_thumb.gif" title="[委屈]"></li>
            <li><img src="/qzone15/Public/home/images/t_thumb.gif" title="[吐]"></li>
            <li><img src="/qzone15/Public/home/images/k_thumb.gif" title="[打哈气]"></li>
            <li><img src="/qzone15/Public/home/images/bba_thumb.gif" title="[抱抱]"></li>
            <li><img src="/qzone15/Public/home/images/angrya_thumb.gif" title="[怒]"></li>
            <li><img src="/qzone15/Public/home/images/yw_thumb.gif" title="[疑问]"></li>
            <li><img src="/qzone15/Public/home/images/cza_thumb.gif" title="[馋嘴]"></li>
            <li><img src="/qzone15/Public/home/images/88_thumb.gif" title="[拜拜]"></li>
            <li><img src="/qzone15/Public/home/images/sk_thumb.gif" title="[思考]"></li>
            <li><img src="/qzone15/Public/home/images/sweata_thumb.gif" title="[汗]"></li>
            <li><img src="/qzone15/Public/home/images/sleepya_thumb.gif" title="[困]"></li>
            <li><img src="/qzone15/Public/home/images/sleepa_thumb.gif" title="[睡觉]"></li>
            <li><img src="/qzone15/Public/home/images/money_thumb.gif" title="[钱]"></li>
            <li><img src="/qzone15/Public/home/images/sw_thumb.gif" title="[失望]"></li>
            <li><img src="/qzone15/Public/home/images/cool_thumb.gif" title="[酷]"></li>
            <li><img src="/qzone15/Public/home/images/hsa_thumb.gif" title="[花心]"></li>
            <li><img src="/qzone15/Public/home/images/hatea_thumb.gif" title="[哼]"></li>
            <li><img src="/qzone15/Public/home/images/gza_thumb.gif" title="[鼓掌]"></li>
            <li><img src="/qzone15/Public/home/images/dizzya_thumb.gif" title="[晕]"></li>
            <li><img src="/qzone15/Public/home/images/bs_thumb.gif" title="[悲伤]"></li>
            <li><img src="/qzone15/Public/home/images/crazya_thumb.gif" title="[抓狂]"></li>
            <li><img src="/qzone15/Public/home/images/h_thumb.gif" title="[黑线]"></li>
            <li><img src="/qzone15/Public/home/images/yx_thumb.gif" title="[阴险]"></li>
            <li><img src="/qzone15/Public/home/images/nm_thumb.gif" title="[怒骂]"></li>
            <li><img src="/qzone15/Public/home/images/hearta_thumb.gif" title="[心]"></li>
            <li><img src="/qzone15/Public/home/images/unheart.gif" title="[伤心]"></li>
            <li><img src="/qzone15/Public/home/images/pig.gif" title="[猪头]"></li>
            <li><img src="/qzone15/Public/home/images/ok_thumb.gif" title="[ok]"></li>
            <li><img src="/qzone15/Public/home/images/ye_thumb.gif" title="[耶]"></li>
            <li><img src="/qzone15/Public/home/images/good_thumb.gif" title="[good]"></li>
            <li><img src="/qzone15/Public/home/images/no_thumb.gif" title="[不要]"></li>
            <li><img src="/qzone15/Public/home/images/z2_thumb.gif" title="[赞]"></li>
            <li><img src="/qzone15/Public/home/images/come_thumb.gif" title="[来]"></li>
            <li><img src="/qzone15/Public/home/images/sad_thumb.gif" title="[弱]"></li>
            <li><img src="/qzone15/Public/home/images/lazu_thumb.gif" title="[蜡烛]"></li>
            <li><img src="/qzone15/Public/home/images/clock_thumb.gif" title="[钟]"></li>
            <li><img src="/qzone15/Public/home/images/cake.gif" title="[蛋糕]"></li>
            <li><img src="/qzone15/Public/home/images/m_thumb.gif" title="[话筒]"></li>
            <li><img src="/qzone15/Public/home/images/weijin_thumb.gif" title="[围脖]"></li>
            <li><img src="/qzone15/Public/home/images/lxhzhuanfa_thumb.gif" title="[转发]"></li>
            <li><img src="/qzone15/Public/home/images/lxhluguo_thumb.gif" title="[路过这儿]"></li>
            <li><img src="/qzone15/Public/home/images/bofubianlian_thumb.gif" title="[bofu变脸]"></li>
            <li><img src="/qzone15/Public/home/images/gbzkun_thumb.gif" title="[gbz困]"></li>
            <li><img src="/qzone15/Public/home/images/boboshengmenqi_thumb.gif" title="[生闷气]"></li>
            <li><img src="/qzone15/Public/home/images/chn_buyaoya_thumb.gif" title="[不要啊]"></li>
            <li><img src="/qzone15/Public/home/images/daxiongleibenxiong_thumb.gif" title="[dx泪奔]"></li>
            <li><img src="/qzone15/Public/home/images/cat_yunqizhong_thumb.gif" title="[运气中]"></li>
            <li><img src="/qzone15/Public/home/images/youqian_thumb.gif" title="[有钱]"></li>
            <li><img src="/qzone15/Public/home/images/cf_thumb.gif" title="[冲锋]"></li>
            <li><img src="/qzone15/Public/home/images/camera_thumb.gif" title="[照相机]"></li>
          </ul>
        </div><!--face end-->
      </div><!--end but-->
    </div><!--end hea-->
    <div id="time1"></div>
    <div id="hidd">
    <div class="msgCon">
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class='msgBox'>
      <dl><dt><img src='/qzone15/Public/uploads/<?php echo ($v["photo"]); ?>' width='50' height='50'/></dt><dd><?php echo ($v["username"]); ?></dd><dd class="del btn" style="text-align: right;width:50px;height:20px"><input class="put" type="hidden" value="<?php echo ($v["id"]); ?>">删除</dd></dl>
        <div class='msgTxt'>
          <?php echo ($v["content"]); ?>
          <dd style="text-align: right"><?php echo (date('Y-m-d',$v["time"])); ?></dd>
        </div>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    </div>
</div>
</div>
</div>
</section>

    <script type="text/javascript" src="/qzone15/Public/home/js/jquery-1.10.2.min.js"></script>
    <script src="/qzone15/Public/home/js/jquery.min.js"></script>
    <script src="/qzone15/Public/home/js/jquery.nicescroll.js"></script>
    <script type="text/javascript">
      //滚动条插件
      $('#hidd').niceScroll({
          cursorcolor: "#f90",//#CC0071 光标颜色
          cursoropacitymax: 1, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0
          touchbehavior: false, //使光标拖动滚动像在台式电脑触摸设备
          cursorwidth: "5px", //像素光标的宽度
          cursorborder: "0", //     游标边框css定义
          cursorborderradius: "5px",//以像素为光标边界半径
          autohidemode: false //是否隐藏滚动条
       });


      //点击小图片，显示表情
      $(".bq").click(function(e){
        $(".face").slideDown();//慢慢向下展开
        e.stopPropagation();   //阻止冒泡事件
      });

      //在桌面任意地方点击，他是关闭
      $(document).click(function(){
        $(".face").slideUp();//慢慢向上收
      });

      //点击小图标时，添加功能
      $(".face ul li").click(function(){
        var simg=$(this).find("img").clone();
        $(".message").append(simg);
      });

      //点击发表按扭，发表内容
      $("span").click(function(){
        var txt=$(".message").html();
        var uid=$('.in').val();
        console.log(uid);
        if(txt==""){
          $('.message').focus();//自动获取焦点
          return;
        }
        $.ajax({
          type:'POST',
          data:'content='+txt+'&id='+uid,
          url:"<?php echo U('Message/add');?>",
          success:function(datas){
            $(".msgCon").prepend("<div class='msgBox'><dl><dt><img src='/qzone15/Public/uploads/"+datas[0].photo+"' width='50' height='50'/></dt><dd>"+datas[0].username+"</dd></dl><div class='msgTxt'>"+txt+"<dd style='text-align: right'>刚刚</dd></div></div>");
            }
        })

        $(".message").html(null);
      });

      $(".del").click(function(){
        var id = $('.put').val();
        var _this = $(this);
        $.ajax({
          type:'GET',
          data:'id='+id,
          url:"<?php echo U('Message/del');?>",
          success:function(da){
            if (da == 0) {
              alert('你没有权限删除');
            }else if(da == 1){
              alert('删除成功');
              _this.closest('.msgBox').remove();
            }else{
              alert('删除失败');
            }
          }
        })
      })

    </script>

  </div><!--end header-->
</div><!--end banner-->


<!--==============================footer=================================-->
<footer>
  <div class="main">
   <!--  <ul class="soc-list">
      <li><a href="#"><img alt="" src="/qzone15/Public/homepage/images/icon-1.png"></a></li>
      <li><a href="#"><img alt="" src="/qzone15/Public/homepage/images/icon-2.png"></a></li>
      <li><a href="#"><img alt="" src="/qzone15/Public/homepage/images/icon-3.png"></a></li>
      <li><a href="#"><img alt="" src="/qzone15/Public/homepage/images/icon-4.png"></a></li>
    </ul> -->
    <!-- <div class="policy">Professional free website templates <a href="http://www.cssmoban.com" target="_blank">at www.cssmoban.com</a>.<br>Website Template Collet from <a href="http://www.cssmoban.com" >www.cssmoban.com</a> </div> -->
    <?php if(is_array($linklist)): foreach($linklist as $key=>$vo): ?><ul class="link">
      <li><a href="<?php echo ($vo["linkaddress"]); ?>"><?php echo ($vo["linkname"]); ?>&nbsp;&nbsp;|&nbsp;&nbsp;</a></li>
      
    </ul>
    
    </script><?php endforeach; endif; ?>
    <center><p class="linkm">Copyright © 2005 - 2016 Tencent. <a href="http://www.tencent.com/en-us/le/copyrightstatement.shtml">All Rights Reserved.</a></p></center>
    <center>ykz Company<center>
    <div class="clear"></div>
  </div>
</footer>

</body>
</html>