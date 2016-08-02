<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>走进烽凰|上海烽凰文化传播有限公司</title>
        <!-- css -->
        <link href="/FengHuang/Home/View//Public/css/bootstrap.css" rel="stylesheet" />
        <link href="/FengHuang/Home/View//Public/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/FengHuang/Home/View//Public/css/fancybox/jquery.fancybox.css" rel="stylesheet">
        <link href="/FengHuang/Home/View//Public/css/flexslider.css" rel="stylesheet" />
        <link href="/FengHuang/Home/View//Public/css/style.css" rel="stylesheet" />
        <link href="/FengHuang/Home/View//Public/css/custom-fonts.css" rel="stylesheet" />
      
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    </head>
    <body>
<div id="wrapper">    <!-- start header -->
 
        <div class="container">
	<header>
       
            <a  href="#"><img src="/FengHuang/Home/View//Public/images/logo.png" alt="上海烽凰文化传播有限公司"/></a>
        
	</header>
	<!-- end header -->  <nav class="navbar navbar-default navbar-static-top">
          
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
 <div class="container"> 
<section class="callaction">
	
		<div class="row">
           
                <div class="col-md-12 pading30">
               <div class="page-header">    
                      <h3 class="marginleft20"><?php echo ($category); ?></h3>       
                 </div>
           
                 <div class="pading30">
                     <?php echo ($content); ?>
                 </div>
                     

		        </div>
		</div>
		
	</div>
	</section><div class="container">
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
	
	</footer>    </div></div>
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
        <script src="/FengHuang/Home/View//Public/js/menu_jquery.js"></script>
    </body>
</html>