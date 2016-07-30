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
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav  navbar-left">
                        <li class="active"><a href="<?php echo U('index/index');?>">首页</a></li> 
                        <li class="dropdown">
                          <a href="<?php echo U('intro/index');?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">走进烽凰<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo U('intro/index');?>">烽凰简介</a></li>
                               <li class="divider"></li>
                            <li><a href="<?php echo U('intro/index');?>">烽凰团队</a></li>
                          </ul>
                        </li>
						<li><a href="<?php echo U('article/index');?>">烽凰方法论</a></li>
                        <li class="dropdown">
                          <a href="<?php echo U('fhcase/index');?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">案例赏析<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo U('fhcase/index');?>">新闻营销</a></li>
                               <li class="divider"></li>
                            <li><a href="<?php echo U('fhcase/index');?>">公益营销</a></li>
                               <li class="divider"></li>
                            <li><a href="<?php echo U('fhcase/index');?>">娱乐文化营销</a></li>
                               <li class="divider"></li>
                            <li><a href="<?php echo U('fhcase/index');?>">事件营销</a></li>
                               <li class="divider"></li>
                            <li><a href="<?php echo U('fhcase/index');?>">危机公关</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="<?php echo U('service/index');?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">我们的服务<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo U('service/index');?>">媒体发布</a></li>
                               <li class="divider"></li>
                            <li><a href="<?php echo U('service/index');?>">公关活动</a></li>
                               <li class="divider"></li>
                            <li><a href="<?php echo U('service/index');?>">危机公关处理</a></li>
                               <li class="divider"></li>
                            <li><a href="<?php echo U('service/index');?>">广告代理发布</a></li>
                               <li class="divider"></li>
                            <li><a href="<?php echo U('service/index');?>">网络推广</a></li>
                               <li class="divider"></li>
                            <li><a href="<?php echo U('service/index');?>">VI设计</a></li>
                               <li class="divider"></li>
                            <li><a href="<?php echo U('service/index');?>">全案策划服务</a></li>
                          </ul>
                        </li>
                        <li><a href="<?php echo U('contact/index');?>">联系我们</a></li>
                         
                    </ul>
                </div>
            </div>
        </nav>     </div>   
<section class="callaction">
	<div class="container">
		<div class="row">
               <div class="page-header">    
                      <h3>烽凰方法论</h3>       
                 </div>
		 
            <?php if(is_array($article)): foreach($article as $key=>$a): ?><div class="col-md-12">
		<div class="col-md-4">
		<img src="<?php echo ($a["imageurl"]); ?>" alt="<?php echo ($a["intro"]); ?>" width="100%"/>
		</div>
		<div class="col-md-8">
			<div><h1> <a href="#"><?php echo ($a["title"]); ?></a></h1>
                            <div>
                    <ul class="list-unstyled">
                      <li class="pull-right"><i class="fa fa-calendar-o"></i><span> <?php echo ($a["createdate"]); ?></span></li>
                      <li><i class="fa fa-eye"></i><span> <?php echo ($a["num"]); ?></span></li>
                    </ul>
                 </div>
                <a href="<?php echo U('article/detail',array('id'=>$a['id']));?>"><p class="intro"><?php echo ($a["intro"]); ?></p></a>
			</div>
            </div>
		</div><?php endforeach; endif; ?>
            <div class="col-md-12">
            <div class="pull-right">
                   <?php echo ($page); ?>
              </div>
                </div>
		</div>
		
	</div>
	</section>	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">联系方式</h5>
					<address>
					<strong>地址：</strong><br>
					上海平阳路1501号803室</address>
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