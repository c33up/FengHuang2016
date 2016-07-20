<?php
    function showAriticle($where){
       
        $article=M('article')->where($where)->order('id DESC')->select();
        return $article;
    }

    function showTwoDimensionCode($where){
       
        $pic=M('Picture')->where($where)->select();
        return $pic;
    }

    function showVideo($where){
       
        $video=M('video')->where($where)->order('id DESC')->select();
        return $video;
    }
?>
