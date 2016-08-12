<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>我们的服务|上海烽凰文化传播有限公司</title>
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
       <div class="imgdiv">
            <a  href="<?php echo U('index/index');?>"><img src="/FengHuang/Home/View//Public/images/logo.png" alt="上海烽凰文化传播有限公司" title="上海烽凰文化传播有限公司"/></a>
        </div>
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
                    <p class="psize20 marginleft20"><strong>我们的服务</strong></p>   
     
                 </div>
		  <div class="col-md-12">
              <div class="page-header">  
                  <ul class="list-unstyled">
                      <li class="pull-right"><a href="<?php echo U('service/service',array('cid'=>'21'));?>">more</a></li>
                      <li>媒体发布</li>
                    </ul>            
                 </div>
            <?php if(is_array($media)): foreach($media as $key=>$n): ?><div class="col-md-12 marginbot20">
		        <div class="col-md-4">
		        <img src="<?php echo ($n["imageurl"]); ?>" alt="<?php echo ($n["intro"]); ?>" width="100%"/>
		        </div>
		        <div class="col-md-8">
			        <div> 
                        <a href="<?php echo U('service/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><h4><?php echo ($n["title"]); ?></h4></a>
                        <a href="<?php echo U('service/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><p class="psize16"><?php echo ($n["intro"]); ?></p></a>
			        </div>
                    </div>  
                      </div><?php endforeach; endif; ?>
             </div>

             <div class="col-md-12">
              <div class="page-header">  
                  <ul class="list-unstyled">
                      <li class="pull-right"><a href="<?php echo U('service/service',array('cid'=>'22'));?>">more</a></li>
                      <li>公关活动</li>
                    </ul>               
                 </div>
            <?php if(is_array($public)): foreach($public as $key=>$n): ?><div class="col-md-12 marginbot20">
		        <div class="col-md-4">
		        <img src="<?php echo ($n["imageurl"]); ?>" alt="<?php echo ($n["intro"]); ?>" width="100%"/>
		        </div>
		        <div class="col-md-8">
			        <div> 
                        <a href="<?php echo U('service/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><h4><?php echo ($n["title"]); ?></h4></a>
                        <a href="<?php echo U('service/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><p class="psize16"><?php echo ($n["intro"]); ?></p></a>
			        </div>
                    </div>  
                      </div><?php endforeach; endif; ?>
             </div>

            
             <div class="col-md-12">
              <div class="page-header">  
                    <ul class="list-unstyled">
                      <li class="pull-right"><a href="<?php echo U('service/service',array('cid'=>'23'));?>">more</a></li>
                      <li>危机公关处理</li>
                    </ul>       
                 </div>
            <?php if(is_array($crisis)): foreach($crisis as $key=>$n): ?><div class="col-md-12 marginbot20">
		        <div class="col-md-4">
		        <img src="<?php echo ($n["imageurl"]); ?>" alt="<?php echo ($n["intro"]); ?>" width="100%"/>
		        </div>
		        <div class="col-md-8">
			        <div> 
                        <a href="<?php echo U('service/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><h4><?php echo ($n["title"]); ?></h4></a>
                        <a href="<?php echo U('service/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><p class="psize16"><?php echo ($n["intro"]); ?></p></a>
			        </div>
                    </div>  
                      </div><?php endforeach; endif; ?>
             </div>

            <div class="col-md-12">
              <div class="page-header">  
                     <ul class="list-unstyled">
                      <li class="pull-right"><a href="<?php echo U('service/service',array('cid'=>'24'));?>">more</a></li>
                      <li>广告代理发布</li>
                    </ul>  
                         
                 </div>
            <?php if(is_array($advertisement)): foreach($advertisement as $key=>$n): ?><div class="col-md-12 marginbot20">
		        <div class="col-md-4">
		        <img src="<?php echo ($n["imageurl"]); ?>" alt="<?php echo ($n["intro"]); ?>" width="100%"/>
		        </div>
		        <div class="col-md-8">
			        <div> 
                        <a href="<?php echo U('service/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><h4><?php echo ($n["title"]); ?></h4></a>
                        <a href="<?php echo U('service/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><p class="psize16"><?php echo ($n["intro"]); ?></p></a>
			        </div>
                    </div>  
                      </div><?php endforeach; endif; ?>
             </div>

             <div class="col-md-12">
              <div class="page-header">   
                    <ul class="list-unstyled">
                      <li class="pull-right"><a href="<?php echo U('service/service',array('cid'=>'25'));?>">more</a></li>
                      <li>网络推广</li>
                    </ul>   
                           
                 </div>
            <?php if(is_array($web)): foreach($web as $key=>$n): ?><div class="col-md-12 marginbot20">
		        <div class="col-md-4">
		        <img src="<?php echo ($n["imageurl"]); ?>" alt="<?php echo ($n["intro"]); ?>" width="100%"/>
		        </div>
		        <div class="col-md-8">
			        <div> 
                        <a href="<?php echo U('service/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><h4><?php echo ($n["title"]); ?></h4></a>
                        <a href="<?php echo U('service/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><p class="psize16"><?php echo ($n["intro"]); ?></p></a>
			        </div>
                    </div>  
                      </div><?php endforeach; endif; ?>
             </div>

            <div class="col-md-12">
              <div class="page-header">   
                    <ul class="list-unstyled">
                      <li class="pull-right"><a href="<?php echo U('service/service',array('cid'=>'26'));?>">more</a></li>
                      <li>VI设计</li>
                    </ul>   
                           
                 </div>
            <?php if(is_array($vi)): foreach($vi as $key=>$n): ?><div class="col-md-12 marginbot20">
		        <div class="col-md-4">
		        <img src="<?php echo ($n["imageurl"]); ?>" alt="<?php echo ($n["intro"]); ?>" width="100%"/>
		        </div>
		        <div class="col-md-8">
			        <div> <a href="<?php echo U('service/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><h4><?php echo ($n["title"]); ?></h4></a>
                                    <div>
                            
                         </div>
                       <a href="<?php echo U('service/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"> <p class="psize16"><?php echo ($n["intro"]); ?></p></a>
			        </div>
                    </div>  
                      </div><?php endforeach; endif; ?>
             </div>

             <div class="col-md-12">
              <div class="page-header">   
                    <ul class="list-unstyled">
                      <li class="pull-right"><a href="<?php echo U('service/service',array('cid'=>'27'));?>">more</a></li>
                      <li>全案策划服务</li>
                    </ul>   
                           
                 </div>
            <?php if(is_array($plan)): foreach($plan as $key=>$n): ?><div class="col-md-12 marginbot20">
		        <div class="col-md-4">
		        <img src="<?php echo ($n["imageurl"]); ?>" alt="<?php echo ($n["intro"]); ?>" width="100%"/>
		        </div>
		        <div class="col-md-8">
			        <div>
                        <a href="<?php echo U('service/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><h4> <?php echo ($n["title"]); ?></h4></a>
                        <a href="<?php echo U('service/detail',array('cid'=>$n['category'],'id'=>$n['id']));?>"><p class="psize16"><?php echo ($n["intro"]); ?></p></a>
			        </div>
                    </div>  
                      </div><?php endforeach; endif; ?>
             </div>

		</div>
		</div>

	</section>	</div><div class="container">
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