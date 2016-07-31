<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>案例赏析</title>
        <!-- css -->
        <link href="/FengHuang/Home/View//Public/css/bootstrap.css" rel="stylesheet" />
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
<div id="wrapper">
    
	<header>
        <div class="container">
            <a  href="#"><img src="/FengHuang/Home/View//Public/images/logo.png" alt="上海烽凰文化传播有限公司"/></a>
        </div>
	</header>
	<!-- end header -->
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
                        <li><a href="<?php echo U('index/index');?>">首页</a></li> 
                        <li class="dropdown">
                          <a href="<?php echo U('intro/index',array('cid'=>'1'));?>" class="dropdown-toggle">走进烽凰<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo U('intro/index',array('cid'=>'1'));?>">烽凰简介</a></li>
                             
                            <li><a href="<?php echo U('intro/index',array('cid'=>'2'));?>">烽凰团队</a></li>
                          </ul>
                        </li>
						<li><a href="<?php echo U('article/index');?>">烽凰方法论</a></li>
                        <li class="dropdown">
                          <a href="<?php echo U('fhcase/index');?>" class="dropdown-toggle">案例赏析<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo U('fhcase/fhcase',array('cid'=>'1'));?>">公益营销</a></li>
                              
                            <li><a href="<?php echo U('fhcase/fhcase',array('cid'=>'2'));?>">事件营销</a></li>
                              
                            <li><a href="<?php echo U('fhcase/fhcase',array('cid'=>'3'));?>">危机公关</a></li>
                              
                            <li><a href="<?php echo U('fhcase/fhcase',array('cid'=>'4'));?>">新闻营销</a></li>
                              
                            <li><a href="<?php echo U('fhcase/fhcase',array('cid'=>'5'));?>">娱乐文化营销</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="<?php echo U('service/index');?>" class="dropdown-toggle">我们的服务<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo U('service/service',array('cid'=>'1'));?>">媒体发布</a></li>
                               
                            <li><a href="<?php echo U('service/service',array('cid'=>'2'));?>">公关活动</a></li>
                             
                            <li><a href="<?php echo U('service/service',array('cid'=>'3'));?>">危机公关处理</a></li>
                               
                            <li><a href="<?php echo U('service/service',array('cid'=>'4'));?>">广告代理发布</a></li>
                              
                            <li><a href="<?php echo U('service/service',array('cid'=>'5'));?>">网络推广</a></li>
                             
                            <li><a href="<?php echo U('service/service',array('cid'=>'6'));?>">VI设计</a></li>
                               
                            <li><a href="<?php echo U('service/service',array('cid'=>'7'));?>">全案策划服务</a></li>
                          </ul>
                        </li>
                        <li><a href="<?php echo U('contact/index');?>">联系我们</a></li>
                         
                    </ul>
                </div>
            </div>
        </nav>   
<section class="callaction">
	
		<div class="row">
            <div class="container">
            <div class="col-md-12">
               <div class="page-header">    
                      <h3>案例赏析</h3>       
                 </div>
		  <div class="col-md-12">
              <div class="page-header">  
                  <ul class="list-unstyled">
                      <li class="pull-right"><a href="<?php echo U('fhcase/fhcase',array('cid'=>'4'));?>">more</a></li>
                      <li>新闻营销</li>
                    </ul>            
                 </div>
            <?php if(is_array($new)): foreach($new as $key=>$n): ?><div class="col-md-12 marginbot20">
		        <div class="col-md-4">
		        <img src="<?php echo ($n["imageurl"]); ?>" alt="<?php echo ($n["intro"]); ?>" width="100%"/>
		        </div>
		        <div class="col-md-8">
			        <div> 
                    <a href="<?php echo U('fhcase/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><h3><?php echo ($n["title"]); ?></h3></a>

                    <a href="<?php echo U('fhcase/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"> <p class="intro psize16"><?php echo ($n["intro"]); ?></p></a>
			        </div>
                    </div>  
                      </div><?php endforeach; endif; ?>
             </div>

             <div class="col-md-12">
              <div class="page-header">  
                  <ul class="list-unstyled">
                      <li class="pull-right"><a href="<?php echo U('fhcase/fhcase',array('cid'=>'1'));?>">more</a></li>
                      <li>公益营销</li>
                    </ul>   
                             
                 </div>
            <?php if(is_array($public)): foreach($public as $key=>$n): ?><div class="col-md-12 marginbot20">
		        <div class="col-md-4">
		        <img src="<?php echo ($n["imageurl"]); ?>" alt="<?php echo ($n["intro"]); ?>" width="100%"/>
		        </div>
		        <div class="col-md-8">
			        <div> 
                        <a href="<?php echo U('fhcase/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><h3><?php echo ($n["title"]); ?></h3></a>
                        <a href="<?php echo U('fhcase/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><p class="intro psize16"><?php echo ($n["intro"]); ?></p></a>
			        </div>
                    </div>  
                      </div><?php endforeach; endif; ?>
             </div>

            
             <div class="col-md-12">
              <div class="page-header">  
                    <ul class="list-unstyled">
                      <li class="pull-right"><a href="<?php echo U('fhcase/fhcase',array('cid'=>'5'));?>">more</a></li>
                      <li>娱乐文化营销</li>
                    </ul>       
                 </div>
            <?php if(is_array($entertainment)): foreach($entertainment as $key=>$n): ?><div class="col-md-12 marginbot20">
		        <div class="col-md-4">
		        <img src="<?php echo ($n["imageurl"]); ?>" alt="<?php echo ($n["intro"]); ?>" width="100%"/>
		        </div>
		        <div class="col-md-8">
			        <div> 
                        <a href="<?php echo U('fhcase/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><h3><?php echo ($n["title"]); ?></h3></a>
                        <a href="<?php echo U('fhcase/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><p class="intro psize16"><?php echo ($n["intro"]); ?></p></a>
			        </div>
                    </div>  
                      </div><?php endforeach; endif; ?>
             </div>

            <div class="col-md-12">
              <div class="page-header">  
                     <ul class="list-unstyled">
                      <li class="pull-right"><a href="<?php echo U('fhcase/fhcase',array('cid'=>'2'));?>">more</a></li>
                      <li>事件营销</li>
                    </ul>  
                         
                 </div>
            <?php if(is_array($event)): foreach($event as $key=>$n): ?><div class="col-md-12 marginbot20">
		        <div class="col-md-4">
		        <img src="<?php echo ($n["imageurl"]); ?>" alt="<?php echo ($n["intro"]); ?>" width="100%"/>
		        </div>
		        <div class="col-md-8">
			        <div>
                        <a href="<?php echo U('fhcase/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><h3> <?php echo ($n["title"]); ?></h3></a>
                        <a href="<?php echo U('fhcase/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><p class="intro psize16"><?php echo ($n["intro"]); ?></p></a>
			        </div>
                    </div>  
                      </div><?php endforeach; endif; ?>
             </div>

             <div class="col-md-12">
              <div class="page-header">   
                    <ul class="list-unstyled">
                      <li class="pull-right"><a href="<?php echo U('fhcase/fhcase',array('cid'=>'3'));?>">more</a></li>
                      <li>危机公关</li>
                    </ul>   
                           
                 </div>
            <?php if(is_array($crisis)): foreach($crisis as $key=>$n): ?><div class="col-md-12 marginbot20">
		        <div class="col-md-4">
		        <img src="<?php echo ($n["imageurl"]); ?>" alt="<?php echo ($n["intro"]); ?>" width="100%"/>
		        </div>
		        <div class="col-md-8">
			        <div> 
                        <a href="<?php echo U('fhcase/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><h3><?php echo ($n["title"]); ?></h3></a>
                       <a href="<?php echo U('fhcase/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"> <p class="intro psize16"><?php echo ($n["intro"]); ?></p></a>
			        </div>
                    </div>  
                      </div><?php endforeach; endif; ?>
             </div>

		</div>
		</div>
	</div>
	</section>
<footer>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
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
		</div>
	</div>
	</footer>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

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