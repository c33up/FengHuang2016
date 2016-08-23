<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" href="/Public/static/images/fenghuang.ico" type="image/x-ico" /> 
        <link rel="shortcut icon" href="/Public/static/images/fenghuang.ico" type="image/x-ico">
        <title>首页|上海烽凰文化传播有限公司</title>
        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <!-- css -->
        <link href="/Public/static/css/bootstrap.css" rel="stylesheet" />
        <link href="/Public/static/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/Public/static/css/fancybox/jquery.fancybox.css" rel="stylesheet">
        <link href="/Public/static/css/flexslider.css" rel="stylesheet" />
        <link href="/Public/static/css/style.css" rel="stylesheet" />
        <link href="/Public/static/css/custom-fonts.css" rel="stylesheet" />
        
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    </head>
    <body>
<div id="wrapper">
    
 
<div class="container">
	<header>
       <div class="imgdiv">
            <a  href="<?php echo U('index/index');?>"><img src="/Public/static/images/logo.png" alt="上海烽凰文化传播有限公司" title="上海烽凰文化传播有限公司"/></a>
        </div>
	</header>
    <nav class="navbar navbar-default navbar-static-top">
          
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav  navbar-left">
                        <li><a href="<?php echo U('index/index');?>">首页</a></li> 
                        <li><a href="<?php echo U('intro/index',array('cid'=>'1'));?>">烽凰简介</a></li>
						<li><a href="<?php echo U('article/index');?>">烽凰方法论</a></li>
                        <li class="dropdown">
                          <a href="<?php echo U('fhcase/index');?>" class="dropdown-toggle">案例赏析<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo U('fhcase/fhcase',array('cid'=>'11'));?>">公益营销</a></li>
                              
                            <li><a href="<?php echo U('fhcase/fhcase',array('cid'=>'12'));?>">事件营销</a></li>
                              
                            <li><a href="<?php echo U('fhcase/fhcase',array('cid'=>'13'));?>">危机公关</a></li>
                              
                            <li><a href="<?php echo U('fhcase/fhcase',array('cid'=>'14'));?>">新闻营销</a></li>
                              
                            <li><a href="<?php echo U('fhcase/fhcase',array('cid'=>'15'));?>">娱乐文化营销</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="<?php echo U('service/index');?>" class="dropdown-toggle">我们的服务<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo U('service/service',array('cid'=>'21'));?>">媒体发布</a></li>
                               
                            <li><a href="<?php echo U('service/service',array('cid'=>'22'));?>">公关活动</a></li>
                             
                            <li><a href="<?php echo U('service/service',array('cid'=>'23'));?>">危机公关处理</a></li>
                               
                            <li><a href="<?php echo U('service/service',array('cid'=>'24'));?>">广告代理发布</a></li>
                              
                            <li><a href="<?php echo U('service/service',array('cid'=>'25'));?>">网络推广</a></li>
                             
                            <li><a href="<?php echo U('service/service',array('cid'=>'26'));?>">VI设计</a></li>
                               
                            <li><a href="<?php echo U('service/service',array('cid'=>'27'));?>">全案策划服务</a></li>
                          </ul>
                        </li>
                        <li><a href="<?php echo U('contact/index');?>">联系我们</a></li>
                         
                    </ul>
                </div>
          
        </nav>
</div> 

        <div class="container">        <section id="featured">
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

     <div class="container">
    	<section class="callaction">
		<div class="row">
         <div class="col-md-12">
             <div class="col-md-6">
                 <div class="page-header">
                    <ul class="list-unstyled">
                      <li class="pull-right"><a href="<?php echo U('article/index');?>">more</a></li>
                      <li>烽凰方法论</li>
                    </ul>
                 </div>
		 
                <div class="col-md-12">	
                <div class="row service-v1">
                 <?php if(is_array($article)): foreach($article as $key=>$a): ?><div class="col-md-6">                           <div class="thumbnail">
		                    <a href="<?php echo U('article/detail',array('id'=>$a['id']));?>"><img class="img-responsive" src="<?php echo ($a["imageurl"]); ?>" alt="" width="100%"/>
                                <div class="caption">
                                    <h5><?php echo ($a["title"]); ?></h5>
		                            <p><?php echo ($a["intro"]); ?></p>
                                </div>
                            </a>
			                </div>
                       </div><?php endforeach; endif; ?>
		        </div>
                </div>
        </div>
                <div class="col-md-6" >
                 <div class="page-header" >
                    <ul class="list-unstyled">
                      <li class="pull-right"><a href="<?php echo U('video/index');?>">more</a></li>
                      <li>视频中心</li>
                    </ul>
            
                 </div>
		 
                <div class="col-md-12">	
                <div class="row">
                 <?php if(is_array($video)): foreach($video as $key=>$a): ?><div class="col-md-6">                            <div class="thumbnail">
		                        <a href="<?php echo U('video/detail',array('id'=>$a['id']));?>" title="<?php echo ($a["title"]); ?>"><img class="img-responsive" src="<?php echo ($a["imageurl"]); ?>" alt="<?php echo ($a["title"]); ?>"/>
                                    <div class="caption">
                                    <h5><?php echo ($a["title"]); ?></h5>
		                        <p><?php echo ($a["intro"]); ?></p>
			                    </div>
                                </a>
                            </div>
                        </div><?php endforeach; endif; ?>
		        </div>
                </div>
            </div>
             </div>
        



            <div class="col-md-12">
              <div class="page-header">
                  <ul class="list-unstyled">
                      <li class="pull-right"><a href="<?php echo U('fhcase/index');?>">more</a></li>
                      <li>案例赏析</li>
                  </ul>
            </div>
	        </div>
            <div class="col-md-12">
               <?php if(is_array($case)): foreach($case as $key=>$a): ?><div class="col-md-3 marginbot40">                   <div class="thumbnail">
		            <a href="<?php echo U('fhcase/detail',array('cid'=>$a['category'],'id'=>$a['id']));?>" title="<?php echo ($a["title"]); ?>"><img class="img-responsive" src="<?php echo ($a["imageurl"]); ?>" alt="<?php echo ($a["title"]); ?>"/>
                         <div class="caption">
                            <h5><?php echo ($a["title"]); ?></h5>
		                    <p><?php echo ($a["intro"]); ?></p>
			            </div>
                    </a>
               </div>
             </div><?php endforeach; endif; ?>
              </div>
            </div> 
	           </section> 
    </div>

    <div class="container">
    <footer>
	<div id="sub-footer">
	
			<div class="row">
			
					<div class="copyright">
						<p>
							Copyright &copy; 2016.Company Fenghuang Culture All rights reserved.
						</p>
                        <p>
							上海烽凰文化传播有限公司 &copy; 版权所有
						</p>
					</div>
				</div>
		</div>
	
	</footer>    </div> </div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
  <!-- javascript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="/Public/static/js/jquery.js"></script>
        <script src="/Public/static/js/jquery.easing.1.3.js"></script>
        <script src="/Public/static/js/bootstrap.min.js"></script>
        <script src="/Public/static/js/jquery.fancybox.pack.js"></script>
        <script src="/Public/static/js/jquery.fancybox-media.js"></script> 
        <script src="/Public/static/js/portfolio/jquery.quicksand.js"></script>
        <script src="/Public/static/js/portfolio/setting.js"></script>
        <script src="/Public/static/js/jquery.flexslider.js"></script>
        <script src="/Public/static/js/animate.js"></script>
        <script src="/Public/static/js/custom.js"></script>
        <script src="/Public/static/js/menu_jquery.js"></script>
        <script src="/Public/static/js/clamp.js"></script>
        <script src="/Public/static/js/clamp.min.js"></script>
        
    </body>
</html>