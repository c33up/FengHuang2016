<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo ($model["category"]); ?>详情-上海烽凰后台管理主页</title>
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
  <h2><a href="#">上海烽凰</a></h2>
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
<!--start-top-serch-->
<div id="search">
    <form action="<?php echo U('index/search');?>" method="post">
  <input type="text" name="key" placeholder="搜索文章..."/>
  <button type="submit" class="tip-bottom"><i class="icon-search icon-white"></i></button>
        </form>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i></a>
  <ul>
      <li><a href="<?php echo U('index/index');?>"><i class="icon icon-home"></i> <span>主页</span></a> </li>
    <li class="submenu"><a href="#"><i class="icon icon-home"></i> <span>烽凰文化</span></a>
          <ul>
            <li><a href="<?php echo U('intro/index',array('category'=>'公司简介'));?>">烽凰简介</a></li>
            <li><a href="<?php echo U('intro/index',array('category'=>'团队介绍'));?>">团队介绍</a></li>
          </ul>
    </li>
    <li> <a href="<?php echo U('article/index',array('category'=>'烽凰方法论'));?>"><i class="icon icon-inbox"></i> <span>烽凰方法论</span></a>   
    </li>
    <li class="submenu"><a href="#"><i class="icon icon-th"></i> <span>案例赏析</span></a>
          <ul>
            <li><a href="<?php echo U('fhcase/index',array('category'=>'1'));?>">公益营销</a></li>
            <li><a href="<?php echo U('fhcase/index',array('category'=>'2'));?>">事件营销</a></li>
            <li><a href="<?php echo U('fhcase/index',array('category'=>'3'));?>">危机公关</a></li>
            <li><a href="<?php echo U('fhcase/index',array('category'=>'4'));?>">新闻营销</a></li>
            <li><a href="<?php echo U('fhcase/index',array('category'=>'5'));?>">娱乐文化营销</a></li>
          </ul>
    </li>
    <li class="submenu"><a href="#"><i class="icon icon-fullscreen"></i> <span>我们的服务</span></a>
          <ul>
            <li><a href="<?php echo U('service/index',array('category'=>'1'));?>">媒体发布</a></li>
            <li><a href="<?php echo U('service/index',array('category'=>'2'));?>">公关活动</a></li>
            <li><a href="<?php echo U('service/index',array('category'=>'3'));?>">危机公关处理</a></li>
            <li><a href="<?php echo U('service/index',array('category'=>'4'));?>">广告代理发布</a></li>
            <li><a href="<?php echo U('service/index',array('category'=>'5'));?>">网络推广</a></li>
            <li><a href="<?php echo U('service/index',array('category'=>'6'));?>">VI设计</a></li>
            <li><a href="<?php echo U('service/index',array('category'=>'7'));?>">全案策划服务</a></li>
          </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>联系我们</span></a>
      <ul>
        <li><a href="<?php echo U('contact/index');?>">联系方式</a></li>
      </ul>
    </li>
    <li> <a href="<?php echo U('video/index',array('category'=>'案例视频'));?>"><i class="icon icon-file"></i> <span>视频锦集</span></a>
    </li>
          <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>图片管理</span></a>
      <ul>
        <li><a href="<?php echo U('picture/index',array('category'=>'轮播图片'));?>">轮播图片</a></li>
        <li><a href="<?php echo U('picture/index',array('category'=>'二维码'));?>">二维码</a></li>
      </ul>
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
    <div id="breadcrumb"> <a href="<?php echo U('index/index');?>" title="返回主页" class="tip-bottom"><i class="icon-home"></i> 首页</a> <a href="<?php echo U('video/index',array('category'=>$model['category']));?>" class="current"><?php echo ($model["category"]); ?></a>  <a href="#" class="current"><?php echo ($model["category"]); ?>详情</a></div>
    <h1><?php echo ($model["category"]); ?>详情</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <a href="<?php echo U('video/index',array('category'=>$model['category']));?>" class="btn btn-primary">返回</a>&nbsp&nbsp&nbsp
              <a href="<?php echo U('video/update',array('category'=>$model['category'],'id'=>$model['id']));?>" class="btn btn-primary">修改</a>&nbsp&nbsp&nbsp
              <a href="<?php echo U('video/delete',array('category'=>$model['category'],'id'=>$model['id']));?>" class="btn btn-primary">删除</a>
          </div>
          <div class="widget-content nopadding">
            <div class="control-group">
              <div class="controls">
               <h4><?php echo ($model["intro"]); ?></h4>
               </div>
            </div>
              <div class="control-group">
              <div class="controls">
                <p>发表时间：<?php echo ($model["createdate"]); ?></p>
                  <?php if($model['ishome'] == 'yes'): ?><p>已放到首页</p><?php endif; ?>
               </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div>
                        <img src="<?php echo ($model["imageurl"]); ?>" alt="<?php echo ($model["title"]); ?>" width="240" height="240"/>
                   </div>
                   <div>
                    <p>发表时间：<?php echo ($model["intro"]); ?></p>
                   </div>
                </div>
            </div>
              <div class="control-group">
              <div class="controls">
                  <?php if($model['videourl'] != ''): ?><video width="640" height="480" controls>
                      <source src="<?php echo ($model["videourl"]); ?>" type="video/mp4">
                    </video><?php endif; ?>
                <?php if($model['localvideo'] != ''): ?><video width="640" height="480" controls>
                      <source src="<?php echo ($model["localvideo"]); ?>" type="video/mp4">
                    </video><?php endif; ?>
               </div>
            </div>
            </div>
      </div>
    </div>
  </div>
</div>
    </div>
<footer class="row-fluid">
<!--Footer-part-->
  <div id="footer" class="span12"> 2016 &copy; chen <a href="#">shanshan</a> </div>
<!--end-Footer-part-->
</footer>