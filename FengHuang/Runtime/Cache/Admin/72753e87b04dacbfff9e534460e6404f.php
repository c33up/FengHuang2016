<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>用户管理-上海烽凰后台管理系统</title>
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
            <li><a href="<?php echo U('article/index',array('category'=>'公司简介'));?>">公司简介</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'公司历史'));?>">公司历史</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'团队介绍'));?>">团队介绍</a></li>
          </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-signal"></i> <span>新闻信息</span></a>
          <ul>
            <li><a href="<?php echo U('article/index',array('category'=>'公司动态'));?>">公司动态</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'行业新闻'));?>">行业新闻</a></li>
          </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-inbox"></i> <span>烽凰方法论</span></a> 
          <ul>
            <li><a href="<?php echo U('article/index',array('category'=>'烽凰方法论'));?>">烽凰方法论</a></li>
          </ul>
    </li>
    <li class="submenu"><a href="#"><i class="icon icon-th"></i> <span>案例</span></a>
          <ul>
            <li><a href="<?php echo U('article/index',array('category'=>'公益营销'));?>">公益营销</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'事件营销'));?>">事件营销</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'危机公关'));?>">危机公关</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'新闻营销'));?>">新闻营销</a></li>
            <li><a href="<?php echo U('article/index',array('category'=>'娱乐文化营销'));?>">娱乐文化营销</a></li>
          </ul>
    </li>
    <li class="submenu"><a href="#"><i class="icon icon-fullscreen"></i> <span>产品服务</span></a>
          <ul>
            <li><a href="<?php echo U('article/index',array('category'=>'产品服务'));?>">产品服务</a></li>
          </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>联系我们</span></a>
      <ul>
        <li><a href="<?php echo U('contact/index');?>">联系方式</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>视频锦集</span></a>
      <ul>
        <li><a href="<?php echo U('video/index',array('category'=>'案例视频'));?>">案例视频</a></li>
        <li><a href="<?php echo U('video/index',array('category'=>'公司活动'));?>">公司活动视频</a></li>
      </ul>
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
    <div id="breadcrumb"> <a href="<?php echo U('index/index');?>" title="返回主页" class="tip-bottom"><i class="icon-home"></i>主页</a> <a href="#" class="current">用户管理</a> </div>
    <h1>用户管理</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>用户列表</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>用户名</th>
                  <th>创建时间</th>
                  <th>登录时间</th>
                  <th>登录IP地址</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
                   <?php if(is_array($user)): foreach($user as $key=>$u): ?><tr class="gradeX">
                <td><?php echo ($u["id"]); ?></td>
                <td><?php echo ($u["username"]); ?></td>
                <td><?php echo (date("Y/m/d H:i:s",$u["create_at"])); ?></td>
                <td><?php echo (date("Y/m/d H:i:s",$u["update_at"])); ?></td>
                <td><?php echo ($u["login_ip"]); ?></td>
                <?php if($u["username"] == session('username')): ?><td class="center"><a href="<?php echo U('user/update',array('id'=>$u['id']));?>">修改密码</a></td>
                <?php else: ?>
                     <td class="center"><a href="<?php echo U('user/update',array('id'=>$u['id']));?>">修改密码</a> | <a href="<?php echo U('user/delete',array('id'=>$u['id']));?>" style="color:red;">直接删除</a></td><?php endif; ?>
            </tr><?php endforeach; endif; ?>
            <tr>
                <td colspan="6">
                    <a href="<?php echo U('user/add');?>" class="btn btn-primary">添加用户</a>
                </td>
            </tr>
            </tbody>
            </table>
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