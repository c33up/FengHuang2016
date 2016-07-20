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
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a  href="#"><img src="/FengHuang/Home/View//Public/images/logo.jpg" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">首页</a></li> 
						<li><a href="#">走进烽凰</a></li>
						<li><a href="#">烽凰方法论</a></li>
                        <li><a href="#">案例分析</a></li>
                        <li><a href="#">产品服务</a></li>
                        <li><a href="#">联系我们</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header --><section id="featured">   
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
	<section class="callaction">
	<div class="container">
		<div class="row">
         <div class="col-md-12">
		<h2>烽凰方法论</h2>
              <hr class="margin-bottom-50">
		</div>
 <?php if(is_array($article)): foreach($article as $key=>$a): ?><div class="col-md-12">
		<div class="col-md-4">
		<img src="<?php echo ($a["imageurl"]); ?>" alt="" width="100%"/>
		</div>
			<div class="col-md-8">
				<div><h1><span><?php echo ($a["title"]); ?></h1><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span><p><?php echo ($a["intro"]); ?></p>
				<p><a href="#">点击查看更多详情</a></p>
				</div>
			</div>
         </div>
      <div class="col-md-12"><br/></div><?php endforeach; endif; ?>
             <div class="col-md-12">
            <div class="col-lg-10">
            </div>
            <div class="col-lg-2" >
		        <a href="#"><span>更多...</span></a>
            </div>
		</div>
		</div>

	</div>

	</section>
	<section id="content">
<div class="container">
	<div class="row">
    <div class="col-md-12">
		    <h2>案例赏析</h2>
         <hr class="margin-bottom-50">
	</div>
		<div class="col-lg-12">
			<ul class="portfolio-categ filter">
                <li class="all active"><a href="#">所有案例</a></li>
				<li class="news"><a href="#">新闻营销</a></li>
				<li class="publicbenefit"><a href="#" title="">公益营销</a></li>
				<li class="entertainment"><a href="#" title="">娱乐文化营销</a></li>
				<li class="event"><a href="#" title="">事件营销</a></li>
                <li class="crisis"><a href="#" title="">危机公关</a></li>
			</ul>
			<div class="clearfix">
			</div>
			<div class="row">
				<section id="projects">
				<ul id="thumbs" class="portfolio">
					<!-- Item Project and Filter Name -->
					<li class="item-thumbs col-lg-12 design" data-id="id-0" data-type="news">
				        <div class="container">
	                            <div class="row">
                                    <?php if(is_array($article)): foreach($article as $key=>$a): ?><div class="col-md-12">
	                                    <div class="col-md-4">
	                                    <img src="<?php echo ($a["imageurl"]); ?>" alt="" width="100%"/>
	                                    </div>
		                                    <div class="col-md-8">
			                                    <div><h1><span><?php echo ($a["title"]); ?></h1><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span><p><?php echo ($a["intro"]); ?></p>
			                                    <p><a href="#">点击查看更多详情</a></p>
			                                    </div>
		                                    </div>
                                            </div>
                                        <div class="col-md-12"><br/></div><?php endforeach; endif; ?>
                                    <div class="col-md-12">
                                <div class="col-lg-10">
                                </div>
                                <div class="col-lg-2" >
		                            <a href="#"><span>更多...</span></a>
                                </div>
	                        </div>
	                        </div>
                        </div>	
					</li>
					<li class="item-thumbs col-lg-12 design" data-id="id-1" data-type="publicbenefit">
				        <div class="container">
	                            <div class="row">
                                    <?php if(is_array($article)): foreach($article as $key=>$a): ?><div class="col-md-12">
	                                    <div class="col-md-4">
	                                    <img src="<?php echo ($a["imageurl"]); ?>" alt="" width="100%"/>
	                                    </div>
		                                    <div class="col-md-8">
			                                    <div><h1><span><?php echo ($a["title"]); ?></h1><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span><p><?php echo ($a["intro"]); ?></p>
			                                    <p><a href="#">点击查看更多详情</a></p>
			                                    </div>
		                                    </div>
                                            </div>
                                        <div class="col-md-12"><br/></div><?php endforeach; endif; ?>
                                    <div class="col-md-12">
                                <div class="col-lg-10">
                                </div>
                                <div class="col-lg-2" >
		                            <a href="#"><span>更多...</span></a>
                                </div>
	                        </div>
	                        </div>
                        </div>	
					</li>
                    <li class="item-thumbs col-lg-12 design" data-id="id-2" data-type="entertainment">
				        <div class="container">
	                            <div class="row">
                                    <?php if(is_array($article)): foreach($article as $key=>$a): ?><div class="col-md-12">
	                                    <div class="col-md-4">
	                                    <img src="<?php echo ($a["imageurl"]); ?>" alt="" width="100%"/>
	                                    </div>
		                                    <div class="col-md-8">
			                                    <div><h1><span><?php echo ($a["title"]); ?></h1><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span><p><?php echo ($a["intro"]); ?></p>
			                                    <p><a href="#">点击查看更多详情</a></p>
			                                    </div>
		                                    </div>
                                            </div>
                                        <div class="col-md-12"><br/></div><?php endforeach; endif; ?>
                                    <div class="col-md-12">
                                <div class="col-lg-10">
                                </div>
                                <div class="col-lg-2" >
		                            <a href="#"><span>更多...</span></a>
                                </div>
	                        </div>
	                        </div>
                        </div>	
					</li>
                    <li class="item-thumbs col-lg-12 design" data-id="id-3" data-type="event">
				        <div class="container">
	                            <div class="row">
                                    <?php if(is_array($article)): foreach($article as $key=>$a): ?><div class="col-md-12">
	                                    <div class="col-md-4">
	                                    <img src="<?php echo ($a["imageurl"]); ?>" alt="" width="100%"/>
	                                    </div>
		                                    <div class="col-md-8">
			                                    <div><h1><span><?php echo ($a["title"]); ?></h1><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span><p><?php echo ($a["intro"]); ?></p>
			                                    <p><a href="#">点击查看更多详情</a></p>
			                                    </div>
		                                    </div>
                                            </div>
                                        <div class="col-md-12"><br/></div><?php endforeach; endif; ?>
                                    <div class="col-md-12">
                                <div class="col-lg-10">
                                </div>
                                <div class="col-lg-2" >
		                            <a href="#"><span>更多...</span></a>
                                </div>
	                        </div>
	                        </div>
                        </div>	
					</li>
                    <li class="item-thumbs col-lg-12 design" data-id="id-4" data-type="crisis">
				        <div class="container">
	                            <div class="row">
                                    <?php if(is_array($article)): foreach($article as $key=>$a): ?><div class="col-md-12">
	                                    <div class="col-md-4">
	                                    <img src="<?php echo ($a["imageurl"]); ?>" alt="" width="100%"/>
	                                    </div>
		                                    <div class="col-md-8">
			                                    <div><h1><span><?php echo ($a["title"]); ?></h1><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span><p><?php echo ($a["intro"]); ?></p>
			                                    <p><a href="#">点击查看更多详情</a></p>
			                                    </div>
		                                    </div>
                                            </div>
                                        <div class="col-md-12"><br/></div><?php endforeach; endif; ?>
                                    <div class="col-md-12">
                                <div class="col-lg-10">
                                </div>
                                <div class="col-lg-2" >
		                            <a href="#"><span>更多...</span></a>
                                </div>
	                        </div>
	                        </div>
                        </div>	
					</li>
				</ul>
				</section>
			</div>
		</div>
	</div>
</div><section id="content">
		<div class="container content">		
        <div class="row service-v1 margin-bottom-40">
        <div class="col-md-12">
		    <h2>视频中心</h2>
         <hr class="margin-bottom-50">
	    </div>
            <?php if(is_array($video)): foreach($video as $key=>$v): ?><div class="col-md-4 md-margin-bottom-40">
                 <h3><?php echo ($v["title"]); ?></h3>
               <img class="img-responsive" src="<?php echo ($v["imageurl"]); ?>" alt="">          
            </div><?php endforeach; endif; ?>
        </div>
    </div>
    </section>



    </div>
</section>

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
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">扫一扫，关注我们</h5>
					<div class="wrapper">
                        <?php if(is_array($twoCode)): foreach($twoCode as $key=>$t): ?><figure class="img-indent"><img src="<?php echo ($t["imageurl"]); ?>" alt="" /></figure>
                            <br/><?php endforeach; endif; ?>
          </div>
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
							Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="#">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
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
    </body>
</html>