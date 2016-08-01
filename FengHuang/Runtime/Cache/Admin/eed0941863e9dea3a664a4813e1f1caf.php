<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>主页-上海烽凰后台管理</title>
        <link rel="stylesheet" href="/FengHuang/Admin/View//Public/Styles/bootstrap.min.css" />
        <link rel="stylesheet" href="/FengHuang/Admin/View//Public/Styles/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="/FengHuang/Admin/View//Public/Styles/matrix-style.css" />
        <link rel="stylesheet" href="/FengHuang/Admin/View//Public/Styles/matrix-media.css" />
        <link href="/FengHuang/Admin/View//Public/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
  
        <script type="text/javascript">
        function showtime(){
        var now=new Date();
        var year=now.getFullYear();
        var month=now.getMonth()+1;
        var day=now.getDate();
        var hours=now.getHours();
        var minutes=now.getMinutes();
        var seconds=now.getSeconds();
        time=year+'/'+month+'/'+day +'/'+hours+':'+minutes+':'+seconds;
        var clock=document.getElementById('clock');
        clock.innerHTML=time;
        }
        function letstart(){
        taskId=setInterval(showtime,500);
        }

        window.onload=function(){
	        /*var div1=document.getElementById('div1');
	        div1.onclick=letstart;*/
	        letstart();
        }
        </script>

    </head>
    <body>
        <!--Header-part-->
<div id="header">
  <img src="/FengHuang/Admin/View//Public/images/logo.png" alt="上海烽凰文化传播有限公司"/>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>
     <span class="text">欢迎你, <strong><?php echo session('username');?></strong></span>
    <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo U('user/index');?>"><i class="icon-user"></i> 用户管理</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo U('login/logout');?>"><i class="icon-key"></i> 退出登录</a></li>
      </ul>
    </li>
       <li class=""><a title="" href="#"><i class="icon icon-cog"></i>当前时间：<span class="text" id="clock"></span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch close-top-serch-->
<div id="search">
    <form action="<?php echo U('index/search');?>" method="post">
  <input type="text" name="key" placeholder="搜索文章..."/>
  <button type="submit" class="tip-bottom"><i class="icon-search icon-white"></i></button>
        </form>
</div>

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i></a>
  <ul>
      <li><a href="<?php echo U('index/index');?>"><i class="icon icon-home"></i> <span>主页</span></a> </li>
    <li class="submenu"><a href="#"><i class="icon icon-home"></i> <span>烽凰文化</span></a>
          <ul>
            <li><a href="<?php echo U('intro/index',array('category'=>'1'));?>">烽凰简介</a></li>
            <li><a href="<?php echo U('intro/index',array('category'=>'2'));?>">烽凰团队</a></li>
          </ul>
    </li>
    <li> <a href="<?php echo U('article/index',array('category'=>'0'));?>"><i class="icon icon-inbox"></i> <span>烽凰方法论</span></a>   
    </li>
    <li class="submenu"><a href="#"><i class="icon icon-th"></i> <span>案例赏析</span></a>
          <ul>
            <li><a href="<?php echo U('article/index',array('category'=>'11'));?>">公益营销</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'12'));?>">事件营销</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'13'));?>">危机公关</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'14'));?>">新闻营销</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'15'));?>">娱乐文化营销</a></li>
          </ul>
    </li>
    <li class="submenu"><a href="#"><i class="icon icon-fullscreen"></i> <span>我们的服务</span></a>
          <ul>
            <li><a href="<?php echo U('article/index',array('category'=>'21'));?>">媒体发布</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'22'));?>">公关活动</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'23'));?>">危机公关处理</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'24'));?>">广告代理发布</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'25'));?>">网络推广</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'26'));?>">VI设计</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'27'));?>">全案策划服务</a></li>
          </ul>
    </li>
    <li> <a href="<?php echo U('contact/index');?>"><i class="icon icon-th-list"></i> <span>联系我们</span></a>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>视频锦集</span></a>
        <ul>
            <li><a href="<?php echo U('video/index');?>">网络视频</a></li>
            <li><a href="<?php echo U('localvideo/index');?>">本地视频</a></li>
        </ul>
    </li>
    <li> <a href="<?php echo U('picture/index');?>"><i class="icon icon-file"></i> <span>轮播图片</span></a>
    </li>
      <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>其他操作</span></a>
      <ul>
        <li><a href="#">返回公司首页</a></li>
        <li><a href="<?php echo U('login/logout');?>">退出登录</a></li>
      </ul>
    </li>
  </ul>
    </div>
</div>
<!--sidebar-menu-->

        <script src="/FengHuang/Admin/View//Public/Script/excanvas.min.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/jquery.min.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/jquery.ui.custom.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/bootstrap.min.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/bootstrap-modal.js"></script>
        <script src="/FengHuang/Admin/View//Public/Script/jquery.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/jquery.flot.min.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/jquery.flot.resize.min.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/jquery.peity.min.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/fullcalendar.min.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/matrix.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/matrix.dashboard.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/jquery.gritter.min.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/matrix.interface.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/matrix.chat.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/jquery.validate.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/matrix.form_validation.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/jquery.wizard.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/jquery.uniform.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/select2.min.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/matrix.popover.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/jquery.dataTables.min.js"></script> 
        <script src="/FengHuang/Admin/View//Public/Script/matrix.tables.js"></script> 

        <script type="text/javascript">
            function goPage (newURL) {
                if (newURL != "") {
                    if (newURL == "-" ) {
                        resetMenu();            
                    } 
                    else {  
                    document.location.href = newURL;
                    }
                }
            }
            function resetMenu() {
                 document.gomenu.selector.selectedIndex = 2;
            }
        </script>
    </body>
</html>

<div id="content">
 <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="主页" class="tip-bottom"><i class="icon-home"></i>主页</a></div>
  </div>
<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="<?php echo U('user/index');?>"> <i class="icon-dashboard"></i>用户管理</a> </li>
        <li class="bg_lb"> <a href="<?php echo U('intro/index',array('category'=>'1'));?>"> <i class="icon-dashboard"></i>烽凰简介</a> </li>
        <li class="bg_ly"> <a href="<?php echo U('intro/index',array('category'=>'2'));?>"> <i class="icon-inbox"></i>烽凰团队</a> </li>
        <li class="bg_lo"> <a href="<?php echo U('article/index',array('category'=>'0'));?>"> <i class="icon-th-list"></i> 烽凰方法论</a> </li>
        <li class="bg_ls"> <a href="<?php echo U('article/index',array('category'=>'11'));?>"> <i class="icon-tint"></i>公益营销</a> </li>
        <li class="bg_lb"> <a href="<?php echo U('article/index',array('category'=>'12'));?>"> <i class="icon-pencil"></i>事件营销</a> </li>
        <li class="bg_lg"> <a href="<?php echo U('article/index',array('category'=>'13'));?>"> <i class="icon-calendar"></i> 危机公关</a> </li>
        <li class="bg_lr"> <a href="<?php echo U('article/index',array('category'=>'14'));?>"> <i class="icon-info-sign"></i>新闻营销</a> </li>
        <li class="bg_ls"> <a href="<?php echo U('article/index',array('category'=>'15'));?>"> <i class="icon-tint"></i>娱乐文化营销</a> </li>
        <li class="bg_lb"> <a href="<?php echo U('article/index',array('category'=>'21'));?>"> <i class="icon-pencil"></i>媒体发布</a> </li>
        <li class="bg_lb"> <a href="<?php echo U('article/index',array('category'=>'22'));?>"> <i class="icon-pencil"></i>公关活动</a> </li>
        <li class="bg_lb"> <a href="<?php echo U('article/index',array('category'=>'23'));?>"> <i class="icon-pencil"></i>危机公关处理</a> </li>
        <li class="bg_lb"> <a href="<?php echo U('article/index',array('category'=>'24'));?>"> <i class="icon-pencil"></i>广告代理发布</a> </li>
        <li class="bg_lb"> <a href="<?php echo U('article/index',array('category'=>'25'));?>"> <i class="icon-pencil"></i>网络推广</a> </li>
        <li class="bg_lb"> <a href="<?php echo U('article/index',array('category'=>'26'));?>"> <i class="icon-pencil"></i>VI设计</a> </li>
        <li class="bg_lb"> <a href="<?php echo U('article/index',array('category'=>'27'));?>"> <i class="icon-pencil"></i>全案策划服务</a> </li>
        <li class="bg_lg"> <a href="<?php echo U('contact/index');?>"> <i class="icon-calendar"></i> 联系我们</a> </li>
        <li class="bg_lr"> <a href="<?php echo U('video/index');?>"> <i class="icon-info-sign"></i>网络视频</a> </li>
          <li class="bg_lr"> <a href="<?php echo U('localvideo/index');?>"> <i class="icon-info-sign"></i>本地视频</a> </li>
        <li class="bg_lb"> <a href="<?php echo U('picture/index');?>"> <i class="icon-pencil"></i>轮播图片</a> </li>
        <li class="bg_lr"> <a href="#"> <i class="icon-info-sign"></i>回网站首页</a> </li>
        <li class="bg_lr"> <a href="<?php echo U('login/logout');?>"> <i class="icon-info-sign"></i>退出登录</a> </li>
      </ul>
    </div>
<!--End-Action boxes-->  				

	</div>
</div>

<footer class="row-fluid">
<!--Footer-part-->
  <div id="footer" class="span12">
        <p>
        Copyright &copy; 2016.Company Fenghuang Culture All rights reserved.
        </p>
        <p>
        上海烽凰文化传播有限公司 &copy; 版权所有
        </p>
  </div>
<!--end-Footer-part-->
</footer>