<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>添加<?php echo ($category); ?>-上海烽凰后台管理主页</title>
        <link rel="stylesheet" href="/FengHuang/Admin/View//Public/Styles/bootstrap.min.css" />
        <link rel="stylesheet" href="/FengHuang/Admin/View//Public/Styles/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="/FengHuang/Admin/View//Public/Styles/matrix-style.css" />
        <link rel="stylesheet" href="/FengHuang/Admin/View//Public/Styles/matrix-media.css" />
        <link href="/FengHuang/Admin/View//Public/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
  
        <script type="text/javascript" charset="utf-8" src="/ueditor/utf8-php/ueditor.config.js"></script>
        <script type="text/javascript" charset="utf-8" src="/ueditor/utf8-php/ueditor.all.min.js"> </script>
        <script type="text/javascript" charset="utf-8" src="/ueditor/utf8-php/lang/zh-cn/zh-cn.js"></script>
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
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="搜索..."/>
  <button type="submit" class="tip-bottom" title="搜索"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i></a>
  <ul>
    <li class="submenu"><a href="#"><i class="icon icon-home"></i> <span>烽凰文化</span></a>
          <ul>
            <li><a href="<?php echo U('article/index?category=公司简介');?>">公司简介</a></li>
            <li><a href="/articleList.php?category=公司历史">公司历史</a></li>
            <li><a href="/articleList.php?category=团队介绍">团队介绍</a></li>
          </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-signal"></i> <span>新闻信息</span></a>
          <ul>
            <li><a href="/articleList.php?category=公司动态">公司动态</a></li>
            <li><a href="/articleList.php?category=行业新闻">行业新闻</a></li>
          </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-inbox"></i> <span>烽凰方法论</span></a> 
          <ul>
            <li><a href="/articleList.php?category=烽凰方法论">烽凰方法论</a></li>
          </ul>
    </li>
    <li class="submenu"><a href="#"><i class="icon icon-th"></i> <span>案例</span></a>
          <ul>
            <li><a href="/articleList.php?category=公益营销">公益营销</a></li>
            <li><a href="/articleList.php?category=事件营销">事件营销</a></li>
            <li><a href="/articleList.php?category=危机公关">危机公关</a></li>
            <li><a href="/articleList.php?category=新闻营销">新闻营销</a></li>
            <li><a href="/articleList.php?category=娱乐文化营销">娱乐文化营销</a></li>
          </ul>
    </li>
    <li class="submenu"><a href="#"><i class="icon icon-fullscreen"></i> <span>产品服务</span></a>
          <ul>
            <li><a href="/articleList.php?category=产品服务">产品服务</a></li>
          </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>联系我们</span></a>
      <ul>
        <li><a href="/contact.php?category=联系方式">联系方式</a></li>
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
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> 首页</a> <a href="#" class="tip-bottom"><?php echo ($category); ?>管理</a> <a href="#" class="current">添加<?php echo ($category); ?>图片</a> </div>
  <h1>添加<?php echo ($category); ?>图片</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>添加<?php echo ($category); ?>图片</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?php echo U('picture/add',array('category'=>$category));?>" method="post" class="form-horizontal" enctype="multipart/form-data">
              <input type="hidden" name="category" value="<?php echo ($category); ?>">
            <div class="control-group">
              <label for="normal" class="control-label">图片介绍</label>
              <div class="controls">
                  <textarea name="intro" class="textarea_editor span8" rows="6"></textarea>
               </div>
            </div>
            <div class="control-group">
              <label class="control-label">上传图片</label>
              <div class="controls">
               <input type="file" id="imageUpload" name="imageURL"/>
				<div id="preview" class="preview"></div>
              </div>
                <style>
                    .preview{margin-top: 20px; position: relative; width: 900px;height: 250px;}
                    .preview .item{position: absolute; width: 250px; height: 250px;}
                    .preview img{max-width: 224px;max-height: 224px;cursor: url(../images/big.cur), auto;  box-shadow: 0px 1px 1px 1px #AAA3A3;}
                    .preview img:hover{box-shadow: 0px 1px 1px 2px #83ABD2;}
                    .preview .big{z-index: 2;}
                    .preview .big img{max-width: none; max-height: none; cursor: url(../images/small.cur), auto;box-shadow: 2px 2px 10px 2px #666;}
                </style>
                 <script type="text/javascript">
                    var Upload = (function(){
                        var upimg = document.getElementById('imageUpload');
                        var show  = document.getElementById('preview');

                        function init(){
                            if(!(window.FileReader && window.File && window.FileList && window.Blob)){
                                show.innerHTML = '您的浏览器不支持fileReader';
                                upimg.setAttribute('disabled', 'disabled');
                                return false;
                            }
                            handler();
                        }

                        function handler(){
                            upimg.addEventListener('change', function(e){
                                var files = this.files;
                                if(files.length){
                                    checkFile(this.files);
                                }
                            });

                            show.addEventListener('click', function(e){
                                var target = e.target;
                                if(target.tagName.toUpperCase()=='IMG'){
                                    var parent = target.parentNode;
                                    var big = parent.className.indexOf('big')>=0;
                                    var item = this.childNodes;
                                    for(var i=0; i<item.length; i++){
                                        item[i].className = 'item';
                                        item[i].firstElementChild.style.cssText = '';
                                    }

                                    var parent = target.parentNode;
                                    if(!big){
                                        // 点击放大
                                        target.style.cssText = 'width:'+target.naturalWidth+'px; height:'+target.naturalHeight+'px;'; // 关键
                                        parent.className += ' big';
                                    }
                                }
                            }, false)
                        }

        
                        function checkFile(files){
        	                var file = files[0];
        	                var reader = new FileReader();
        	                // show表示<div id='show'></div>，用来展示图片预览的
        	                if(!/image\/\w+/.test(file.type)){
                                show.innerHTML = "请确保文件为图像类型";
                                return false;
                            }
                            // onload是异步操作
        	                reader.onload = function(e){
        		                show.innerHTML = '<img src="'+e.target.result+'" alt="img">';
        	                }
        	                reader.readAsDataURL(file);
                        }
                        return {
                            init : init
                        }
                    })();
                    Upload.init();
                    </script>
            </div>

            <div class="control-group">
              <label for="normal" class="control-label">发表时间：</label>
              <div class="controls">
                <span class="span8"><?php echo ($time); ?> </span> </div>
            </div>
            <div class="control-group">
              <div class="controls">
                  <button type="submit" name="submit" name="submit" class="btn btn-primary">提交</button>
                  <button type="reset" name="submit" class="btn btn-primary">清空</button> </div>
            </div>
          </form>
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