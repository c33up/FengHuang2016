<?php
    function showAriticle(){ 
        $where['category']='烽凰方法论';
        $where['ishome']='yes';
        $article=M('article')->limit(2)->where($where)->order('id DESC')->select();
        return $article;
    }

    function showAriticleAll(){ 
        $where['category']='烽凰方法论';
        $article=M('article')->where($where)->order('id DESC')->select();
        return $article;
    }

    function showCase(){ 
         $where['ishome']='yes';
        $case=M('fhcase')->limit(8)->where($where)->order('id DESC')->select();
        return $case;
    }

    function showCaseTwo($cid){ 
        $where['category']=$cid;
        $case=M('fhcase')->limit(2)->where($where)->order('id DESC')->select();
        return $case;
    }

    function showService($where){ 
        $case=M('service')->limit(2)->where($where)->order('id DESC')->select();
        return $case;
    }

    function showServiceTwo($cid){ 
        $where['category']=$cid;
        $case=M('service')->limit(2)->where($where)->order('id DESC')->select();
        return $case;
    }


    function showVideo(){ 
        $where['ishome']='yes';
        $video=M('video')->limit(2)->where($where)->order('id DESC')->select();
        return $video;
    }

    function showPicture(){
        $where['category']='轮播图片';
        $pic=M('Picture')->where($where)->select();
        return $pic;
    }

 
?>
