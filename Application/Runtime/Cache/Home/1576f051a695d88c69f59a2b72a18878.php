<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<!--css-->
<link rel="stylesheet" href="/qzone16/Public/homepage/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="/qzone16/Public/homepage/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="/qzone16/Public/homepage/css/grid.css" type="text/css" media="screen">
<link rel="icon" href="/qzone16/Public/homepage/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/qzone16/Public/homepage/images/favicon.ico" type="image/x-icon" />
<!-- <link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'> -->
<link rel="stylesheet" href="/qzone16/Public/homepage/css/flexslider.css" type="text/css" media="screen">
<link rel="stylesheet" href="/qzone16/Public/my.css" type="text/css" media="screen">

<!-- Bootstrap -->
   <!--  <link href="/qzone16/Public/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!--js-->
<script type="text/javascript" src="/qzone16/Public/homepage/js/jquery-1.7.1.min.js" ></script>
<script type="text/javascript" src="/qzone16/Public/homepage/js/superfish.js"></script>
<script type="text/javascript" src="/qzone16/Public/homepage/js/jquery.flexslider-min.js"></script>

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
      background-image: url('/qzone16/Public/home/dis/images/11.jpg');
    }

  </style>
</head>

<body>

<!--==============================header=================================-->
<header>
  <div class="line-top">
    <ul class="mr200">
      <!-- <li><h1><img alt="" src="/qzone16/Public/photos/touxiang/default.jpg" width=35 height=35>&nbsp;&nbsp;&nbsp;&nbsp;GNEZGNEZ </h1></li> -->
      <li><a href="">[充值]</a></li>

      <li><a href="<?php echo U('Homepage/out');?>">[退出]</a></li>

    </ul>
  </div>
  <div class="main">
    <div class="row-top">
      <!-- <div style="height:40px;width:200px;"> -->
      <h1 style="height:80px;"><img alt="" src="/qzone16/Public/photos/touxiang/default.jpg" width=80 height=80>&nbsp;&nbsp;&nbsp;&nbsp;<ul class="fr"><li style="width:155px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"></li>
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
 <div class="border-horiz"></div>
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
  </style>
  <link href="/qzone16/Public/home/css/bootstrap.min.css" rel="stylesheet">
<!--==============================content=================================-->
<section id="content">
  <div class="container_12">
    <article class="grid_12">
      <h3>发表说说</h3>
      <hr>
          <div class="message" contentEditable='true' name='message' style="width:940px;height:125px;border:1px solid #ccc"></div>
          <br>
          <div class="But">
            <img src="/qzone16/Public/home/images/bba_thumb.gif" class='smallpic'/>&nbsp;&nbsp;&nbsp;&nbsp;
            <button class='btn btn-success'>发表</button>
          </div>
      <!--face begin-->
      <div class="face" >
              <ul>
                <li><img src="/qzone16/Public/home/images/bba_thumb.gif" title="[抱抱]"></li>
                <li><img src="/qzone16/Public/home/images/zz2_thumb.gif" title="[织]" ></li>
                <li><img src="/qzone16/Public/home/images/horse2_thumb.gif" title="神马]"></li>
                <li><img src="/qzone16/Public/home/images/fuyun_thumb.gif" title="[浮云]"></li>
                <li><img src="/qzone16/Public/home/images/geili_thumb.gif" title="[给力]"></li>
                <li><img src="/qzone16/Public/home/images/wg_thumb.gif" title="[围观]"></li>
                <li><img src="/qzone16/Public/home/images/vw_thumb.gif" title="[威武]"></li>
                <li><img src="/qzone16/Public/home/images/panda_thumb.gif" title="[熊猫]"></li>
                <li><img src="/qzone16/Public/home/images/rabbit_thumb.gif" title="兔子]"></li>
                <li><img src="/qzone16/Public/home/images/otm_thumb.gif" title="[奥特曼]"></li>
                <li><img src="/qzone16/Public/home/images/j_thumb.gif" title="[囧]"></li>
                <li><img src="/qzone16/Public/home/images/hufen_thumb.gif" title="[互粉]"></li>
                <li><img src="/qzone16/Public/home/images/liwu_thumb.gif" title="[礼物]"></li>
                <li><img src="/qzone16/Public/home/images/smilea_thumb.gif" title="呵呵]"></li>
                <li><img src="/qzone16/Public/home/images/tootha_thumb.gif" title="嘻嘻]"></li>
                <li><img src="/qzone16/Public/home/images/laugh.gif" title="[哈哈]"></li>
                <li><img src="/qzone16/Public/home/images/tza_thumb.gif" title="[可爱]"></li>
                <li><img src="/qzone16/Public/home/images/kl_thumb.gif" title="[可怜]"></li>
                <li><img src="/qzone16/Public/home/images/kbsa_thumb.gif" title="[挖鼻屎]"></li>
                <li><img src="/qzone16/Public/home/images/cj_thumb.gif" title="[吃惊]"></li>
                <li><img src="/qzone16/Public/home/images/shamea_thumb.gif" title="[害羞]"></li>
                <li><img src="/qzone16/Public/home/images/zy_thumb.gif" title="[挤眼]"></li>
                <li><img src="/qzone16/Public/home/images/bz_thumb.gif" title="[闭嘴]"></li>
                <li><img src="/qzone16/Public/home/images/bs2_thumb.gif" title="[鄙视]"></li>
                <li><img src="/qzone16/Public/home/images/lovea_thumb.gif" title="[爱你]"></li>
                <li><img src="/qzone16/Public/home/images/sada_thumb.gif" title="[泪]"></li>
                <li><img src="/qzone16/Public/home/images/heia_thumb.gif" title="[偷笑]"></li>
                <li><img src="/qzone16/Public/home/images/qq_thumb.gif" title="[亲亲]"></li>
                <li><img src="/qzone16/Public/home/images/sb_thumb.gif" title="[生病]"></li>
                <li><img src="/qzone16/Public/home/images/mb_thumb.gif" title="[太开心]"></li>
                <li><img src="/qzone16/Public/home/images/ldln_thumb.gif" title="[懒得理你]"></li>
                <li><img src="/qzone16/Public/home/images/yhh_thumb.gif" title="[右哼哼]"></li>
                <li><img src="/qzone16/Public/home/images/zhh_thumb.gif" title="[左哼哼]"></li>
                <li><img src="/qzone16/Public/home/images/x_thumb.gif" title="[嘘]"></li>
                <li><img src="/qzone16/Public/home/images/cry.gif" title="[衰]"></li>
                <li><img src="/qzone16/Public/home/images/wq_thumb.gif" title="[委屈]"></li>
                <li><img src="/qzone16/Public/home/images/t_thumb.gif" title="[吐]"></li>
                <li><img src="/qzone16/Public/home/images/k_thumb.gif" title="[打哈气]"></li>
                <li><img src="/qzone16/Public/home/images/angrya_thumb.gif" title="[怒]"></li>
                <li><img src="/qzone16/Public/home/images/yw_thumb.gif" title="[疑问]"></li>
                <li><img src="/qzone16/Public/home/images/cza_thumb.gif" title="[馋嘴]"></li>
                <li><img src="/qzone16/Public/home/images/88_thumb.gif" title="[拜拜]"></li>
                <li><img src="/qzone16/Public/home/images/sk_thumb.gif" title="[思考]"></li>
                <li><img src="/qzone16/Public/home/images/sweata_thumb.gif" title="[汗]"></li>
                <li><img src="/qzone16/Public/home/images/sleepya_thumb.gif" title="[困]"></li>
                <li><img src="/qzone16/Public/home/images/sleepa_thumb.gif" title="[睡觉]"></li>
                <li><img src="/qzone16/Public/home/images/money_thumb.gif" title="[钱]"></li>
                <li><img src="/qzone16/Public/home/images/sw_thumb.gif" title="[失望]"></li>
                <li><img src="/qzone16/Public/home/images/cool_thumb.gif" title="[酷]"></li>
                <li><img src="/qzone16/Public/home/images/hsa_thumb.gif" title="[花心]"></li>
                <li><img src="/qzone16/Public/home/images/hatea_thumb.gif" title="[哼]"></li>
                <li><img src="/qzone16/Public/home/images/gza_thumb.gif" title="[鼓掌]"></li>
                <li><img src="/qzone16/Public/home/images/dizzya_thumb.gif" title="[晕]"></li>
                <li><img src="/qzone16/Public/home/images/bs_thumb.gif" title="[悲伤]"></li>
                <li><img src="/qzone16/Public/home/images/crazya_thumb.gif" title="[抓狂]"></li>
                <li><img src="/qzone16/Public/home/images/h_thumb.gif" title="[黑线]"></li>
                <li><img src="/qzone16/Public/home/images/yx_thumb.gif" title="[阴险]"></li>
                <li><img src="/qzone16/Public/home/images/nm_thumb.gif" title="[怒骂]"></li>
                <li><img src="/qzone16/Public/home/images/hearta_thumb.gif" title="[心]"></li>
                <li><img src="/qzone16/Public/home/images/unheart.gif" title="[伤心]"></li>
                <li><img src="/qzone16/Public/home/images/pig.gif" title="[猪头]"></li>
                <li><img src="/qzone16/Public/home/images/ok_thumb.gif" title="[ok]"></li>
                <li><img src="/qzone16/Public/home/images/ye_thumb.gif" title="[耶]"></li>
                <li><img src="/qzone16/Public/home/images/good_thumb.gif" title="[good]"></li>
                <li><img src="/qzone16/Public/home/images/no_thumb.gif" title="[不要]"></li>
                <li><img src="/qzone16/Public/home/images/z2_thumb.gif" title="[赞]"></li>
                <li><img src="/qzone16/Public/home/images/come_thumb.gif" title="[来]"></li>
                <li><img src="/qzone16/Public/home/images/sad_thumb.gif" title="[弱]"></li>
                <li><img src="/qzone16/Public/home/images/lazu_thumb.gif" title="[蜡烛]"></li>
                <li><img src="/qzone16/Public/home/images/clock_thumb.gif" title="[钟]"></li>
                <li><img src="/qzone16/Public/home/images/cake.gif" title="[蛋糕]"></li>
                <li><img src="/qzone16/Public/home/images/m_thumb.gif" title="[话筒]"></li>
                <li><img src="/qzone16/Public/home/images/weijin_thumb.gif" title="[围脖]"></li>
                <li><img src="/qzone16/Public/home/images/lxhzhuanfa_thumb.gif" title="[转发]"></li>
                <li><img src="/qzone16/Public/home/images/lxhluguo_thumb.gif" title="[路过这儿]"></li>
                <li><img src="/qzone16/Public/home/images/bofubianlian_thumb.gif" title="[bofu变脸]"></li>
                <li><img src="/qzone16/Public/home/images/gbzkun_thumb.gif" title="[gbz困]"></li>
                <li><img src="/qzone16/Public/home/images/boboshengmenqi_thumb.gif" title="[生闷气]"></li>
                <li><img src="/qzone16/Public/home/images/chn_buyaoya_thumb.gif" title="[不要啊]"></li>
                <li><img src="/qzone16/Public/home/images/daxiongleibenxiong_thumb.gif" title="[dx泪奔]"></li>
                <li><img src="/qzone16/Public/home/images/cat_yunqizhong_thumb.gif" title="[运气中]"></li>
                <li><img src="/qzone16/Public/home/images/youqian_thumb.gif" title="[有钱]"></li>
                <li><img src="/qzone16/Public/home/images/cf_thumb.gif" title="[冲锋]"></li>
                <li><img src="/qzone16/Public/home/images/camera_thumb.gif" title="[照相机]"></li>
              </ul>
      </div>
      
      <div class="padd-1" style="margin-top:20px;">
        <h3>我的说说</h3>
      </div>
      <div id="content" style="width:1000px;height:450px;">
          <!--msgCon begin-->
          <div class="talkcom">
              <div class='talkBox'>
                  <dl>
                      <dt>
                          <img src='/qzone16/Public/uploads/<?php echo ($v["photo"]); ?>' width='50' height='50'/>
                      </dt>
                      <dd><?php echo ($v["username"]); ?></dd>

                  </dl>
                  <div class='talkTxt'><?php echo ($v["content"]); ?>
                      <dd style='text-align:right'><?php echo (date('Y-m-d H:i:s',$v["time"])); ?></dd>
                     <div class="clear"></div>
                      <!-- <?php if(is_array($list[$v['id']])): $i = 0; $__LIST__ = $list[$v['id']];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd><?php echo ($vo["username"]); ?>:<?php echo ($vo["comment"]); ?>  &nbsp;<?php echo (date('Y-m-d H:i:s',$vo["time"])); ?>  &nbsp;<input type="hidden" value="<?php echo ($vo['id']); ?>"><a href="<?php echo U('Note/del',array('id'=>$v['id']));?>" class='cdel' style="cursor:pointer">删除</a></dd><?php endforeach; endif; else: echo "" ;endif; ?> -->

                      <dd style="display:none">
                          <form action="<?php echo U('Note/insert');?>" method="post">
                              <input type="hidden" name="pid" value="<?php echo ($v["id"]); ?>">
                              <input type="hidden" name="status" value="1">
                              <textarea name="message" style="margin:0 10px;border-radius:5px;resize:none;width:540px;height:30px;padding:5px 10px;font-size:14px"></textarea><br>
                              <button id="reply">发表</button>
                          </form>
                      </dd>

                      <dd style='text-align:right'>
                          <a class="reply">回复</a>
                          <a href="<?php echo U('Note/del',array('id'=>$v['id']));?>">删除</a>
                      </dd>
                  </div>
              </div>
        </div>
      </div> 
    </article>
    <div class="clear"></div>
  </div>
</section>

<script type="text/javascript" src="/qzone16/Public/home/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/qzone16/Public/home/js/jquery.nicescroll.js"></script>
<script type="text/javascript">
  //点击小图片，显示表情
  $(".smallpic").click(function(e){
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
 $(".btn").click(function(){
        //判断说说是否为空
        var txt=$(".message").html();
        if(txt==""){
            $('.message').focus();//自动获取焦点
            alert('什么都没有');
            return;
        }
        $.ajax({
            type:'post',
            url:"<?php echo U('Note/insert');?>",
            data:{content : $('.message').html()},
            success:function(datas){
                $(".talkcon").prepend("<div class='talkBox'><dl><dt><img src='/qzone16/Public/uploads/"+datas[0].photo+"' width='50' height='50'/></dt><dd>"+datas[0].username+"</dd></dl><div class='talkTxt'>"+txt+"<dd style='text-align:right'>刚刚</dd></div></div>");
            }
        })
        //清空写入框
        $('.message').html(null);


  });

    $('.reply').bind({
        'mouseover':function(){
            $(this).css({'color':'#238EC6','cursor':'pointer'});
        },
        'mouseout':function(){
            $(this).css({'color':''});
        },
        'click':function () {
            $(this).closest('dd').prev().slideToggle('normal');
        }
    })

    $('#reply').click(function(){
        if($('textarea').val() == ''){
            alert('评论不能为空！');
            return false;
        }

    })

    //删除评论
    $('.cdel').click(function(){
        var id = $(this).prev().val();
        console.log(id);
        $(this).parent().remove();
        $.ajax({
            type:'post',
            url:"<?php echo U('Note/del');?>",
            data:{id:id},
            success:function () {
                //$(this).closest('dd').remove();
            }
        })
    })
</script>

<!--==============================footer=================================-->
<footer>
  <center>
  <div class="footmain">
   <!--  <ul class="soc-list">
      <li><a href="#"><img alt="" src="/qzone16/Public/homepage/images/icon-1.png"></a></li>
      <li><a href="#"><img alt="" src="/qzone16/Public/homepage/images/icon-2.png"></a></li>
      <li><a href="#"><img alt="" src="/qzone16/Public/homepage/images/icon-3.png"></a></li>
      <li><a href="#"><img alt="" src="/qzone16/Public/homepage/images/icon-4.png"></a></li>
    </ul> -->
    <!-- <div class="policy">Professional free website templates <a href="http://www.cssmoban.com" target="_blank">at www.cssmoban.com</a>.<br>Website Template Collet from <a href="http://www.cssmoban.com" >www.cssmoban.com</a> </div> -->
   <!-- <center> -->
    <ul class="soc-list link">
      <?php if(is_array($linklist)): foreach($linklist as $key=>$vo): ?><li><a href="<?php echo ($vo["linkaddress"]); ?>"><?php echo ($vo["linkname"]); ?>&nbsp;|&nbsp;</a></li><?php endforeach; endif; ?>
    </ul>
    <!-- </center> -->
    <!-- </script> -->
     
    <br>
    <!-- <center> --><p class="linkm">Copyright © 2005 - 2016 Tencent. <a href="http://www.tencent.com/en-us/le/copyrightstatement.shtml">All Rights Reserved.</a></p><!-- </center> -->
    <!-- <center> -->ykz Company<!-- </center> -->
    <div class="clear"></div>
  </div>
</center>
</footer>

</body>

</html>