<?php
    function showAriticle(){ 
        $where['category']='0';
        $where['ishome']='yes';
        $article=M('article')->limit(2)->where($where)->order('id DESC')->select();
        return $article;
    }

    function showAriticleAll(){ 
        $where['category']='0';
        $article=M('article')->where($where)->order('id DESC')->select();
        return $article;
    }

    function showCase(){ 
         $where['ishome']='yes';
         $where['category']  = array('between',array('11','15'));
        $case=M('article')->limit(8)->where($where)->order('id DESC')->select();
        return $case;
    }

    function showCaseTwo($cid){ 
        $where['category']=$cid;
        $case=M('article')->limit(2)->where($where)->order('id DESC')->select();
        return $case;
    }

    function showService($where){ 
        $where['category']  = array('between',array('21','27'));
        $case=M('article')->limit(2)->where($where)->order('id DESC')->select();
        return $case;
    }

    function showServiceTwo($cid){ 
        $where['category']=$cid;
        $case=M('article')->limit(2)->where($where)->order('id DESC')->select();
        return $case;
    }


    function showVideo(){ 
        $where['ishome']='是';
        $video=M('video')->limit(2)->where($where)->order('id DESC')->select();
        return $video;
    }

    function showPicture(){
       
        $pic=M('Picture')->select();
        return $pic;
    }

 
?>
