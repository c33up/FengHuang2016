<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>首页</title>
        <!-- css -->
       
        <link href="/FengHuang/Home/View//Public/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/FengHuang/Home/View//Public/css/fancybox/jquery.fancybox.css" rel="stylesheet">
        <link href="/FengHuang/Home/View//Public/css/jcarousel.css" rel="stylesheet" />
        <link href="/FengHuang/Home/View//Public/css/flexslider.css" rel="stylesheet" />
        <link href="/FengHuang/Home/View//Public/js/owl-carousel/owl.carousel.css" rel="stylesheet"> 
        <link href="/FengHuang/Home/View//Public/css/style.css" rel="stylesheet" />

      
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    </head>
    <body>
<div id="wrapper">    <!-- start header -->
    
	<header>
        <div class="container">
            <a  href="#"><img src="/FengHuang/Home/View//Public/images/logo.png" alt="上海烽凰文化传播有限公司"/></a>
        </div>
	</header>
	<!-- end header --><div class="container">  <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="navbar-collapse collapse " id="cssmenu">
                    <ul class="nav navbar-nav  navbar-left">
                        <li class="active"><a href="#one">首页</a></li> 
                        <li class="dropdown">
                          <a href="#three" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">走进烽凰<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">烽凰简介</a></li>
                               <li class="divider"></li>
                            <li><a href="#">烽凰团队</a></li>
                          </ul>
                        </li>
						<li><a href="#three">烽凰方法论</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">案例赏析<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">新闻营销</a></li>
                               <li class="divider"></li>
                            <li><a href="#">公益营销</a></li>
                               <li class="divider"></li>
                            <li><a href="#">娱乐文化营销</a></li>
                               <li class="divider"></li>
                            <li><a href="#">事件营销</a></li>
                               <li class="divider"></li>
                            <li><a href="#">危机公关</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#five" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">我们的服务<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">媒体发布</a></li>
                               <li class="divider"></li>
                            <li><a href="#">公关活动</a></li>
                               <li class="divider"></li>
                            <li><a href="#">危机公关处理</a></li>
                               <li class="divider"></li>
                            <li><a href="#">广告代理发布</a></li>
                               <li class="divider"></li>
                            <li><a href="#">网络推广</a></li>
                               <li class="divider"></li>
                            <li><a href="#">VI设计</a></li>
                               <li class="divider"></li>
                            <li><a href="#">全案策划服务</a></li>
                          </ul>
                        </li>
                        <li><a href="#">联系我们</a></li>
                         
                    </ul>
                </div>
            </div>
        </nav>     </div>   <div class="container"><section id="featured">
<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                <?php if(is_array($picture)): foreach($picture as $key=>$p): ?><li>
                <img src="<?php echo ($p["imageurl"]); ?>" alt="<?php echo ($p["intro"]); ?>" />
              </li><?php endforeach; endif; ?>
            </ul>
        </div>
	<!-- end slider -->
    </section>
</div>

	<section class="callaction">
	<div class="container">
		<div class="row">
         <div class="col-md-12">
             <div class="col-md-6">
                 <div class="page-header">
                    <ul class="list-unstyled">
                      <li class="pull-right"><a href="./help/#support"><h4>more>></h4></a></li>
                      <li class="panel-title"><h3>烽凰方法论</h3></li>
                    </ul>
                 </div>
		 
                <div class="col-md-12">	
                <div class="row service-v1 margin-bottom-40">
                 <?php if(is_array($article)): foreach($article as $key=>$a): ?><div class="col-md-6 md-margin-bottom-40">
		                <img class="img-responsive" src="<?php echo ($a["imageurl"]); ?>" alt=""/>
		              <a href="#"><p class="intro"><?php echo ($a["intro"]); ?></p></a>
			   
                       </div><?php endforeach; endif; ?>
		        </div>
                </div>
        </div>
                <div class="col-md-6" >
                 <div class="page-header" >
                    <ul class="list-unstyled">
                      <li class="pull-right"><a href="./help/#support"><h4>more>></h4></a></li>
                      <li class="panel-title"><h3>视频中心</h3></li>
                    </ul>
            
                 </div>
		 
                <div class="col-md-12">	
                <div class="row service-v1 margin-bottom-40">
                 <?php if(is_array($article)): foreach($article as $key=>$a): ?><div class="col-md-6 md-margin-bottom-40">
		                <img class="img-responsive" src="<?php echo ($a["imageurl"]); ?>" alt=""/>
		              <a href="#"><p class="intro"><?php echo ($a["intro"]); ?></p></a>
			   
                       </div><?php endforeach; endif; ?>
		        </div>
                </div>
            </div>
             </div>
                </div>
	        </div>
	        </section>

	<section class="content" id="two">
        <div class="container">
	        <div class="row">
            <div class="col-md-12">
              <div class="page-header">
                  <ul class="list-unstyled">
                  <li class="pull-right"><h3>more>></h3></li>
                  <li class="panel-title"><a href="./help/#support"><h2>视频中心</h2></a></li>
                  </ul>
            </div>
	        </div>
                  <div class="col-md-12">

             
               <?php if(is_array($article)): foreach($article as $key=>$a): ?><div class="col-md-3 md-margin-bottom-40">
		        <img class="img-responsive" src="<?php echo ($a["imageurl"]); ?>" alt=""/>
		      <a href="#"><p class="intro"><?php echo ($a["intro"]); ?></p></a>
			   
               </div><?php endforeach; endif; ?>
              </div>
            </div> 
	        </div>         </section> 
    </div>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">联系方式</h5>
					<address>
					<strong>地址：</strong><br>
					上海平阳路<br>
					 1501号803室</address>
					<p>
						<i class="icon-phone"></i><strong>电话: </strong>(021) 34550321 <br>
                        <i class="icon-phone"></i><strong>传真: </strong>021-34550321-802<br>
						<i class="icon-envelope-alt"></i><strong>Email: </strong>fenghuang_sh@126.com
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">快速链接</h5>
					<ul class="link-list">
						<li><a href="#">麦西西</a></li>
						<li><a href="#">天猫</a></li>
						<li><a href="#">百度</a></li>
						<li><a href="#">京东</a></li>
						<li><a href="#">其他</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">服务</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="#"></a>
						</p>
					</div>
				</div>
			
			</div>
		</div>
	</div>
	</footer></div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
  <!-- javascript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="/FengHuang/Home/View//Public/js/jquery.js"></script>
        <script src="/FengHuang/Home/View//Public/js/jquery.easing.1.3.js"></script>
        <script src="/FengHuang/Home/View//Public/js/bootstrap.min.js"></script>
        <script src="/FengHuang/Home/View//Public/js/jquery.fancybox.pack.js"></script>
        <script src="/FengHuang/Home/View//Public/js/jquery.fancybox-media.js"></script> 
        <script src="/FengHuang/Home/View//Public/js/portfolio/jquery.quicksand.js"></script>
        <script src="/FengHuang/Home/View//Public/js/portfolio/setting.js"></script>
        <script src="/FengHuang/Home/View//Public/js/jquery.flexslider.js"></script>
        <script src="/FengHuang/Home/View//Public/js/animate.js"></script>
        <script src="/FengHuang/Home/View//Public/js/custom.js"></script>
        <script src="/FengHuang/Home/View//Public/js/owl-carousel/owl.carousel.js"></script>
        <script src="/FengHuang/Home/View//Public/js/menu_jquery.js"></script>
    </body>
</html>