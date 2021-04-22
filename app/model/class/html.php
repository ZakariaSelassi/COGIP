<?php

class HTML {


    public function head($href, $rel){
        return '';
    }

    public function link($href, $rel){
        return "<link href='$href' rel='$rel'>";
    }

    public function baliseMeta($name, $content){
        return "<meta name='$name' content='$content' />";
    }

    public function img($src, $alt=null ){
        return "<img src='$src' alt='$alt'>";
    }

    public function ahref($href){
        return "<a href='$href'>";
    }

    public function javascript($src){
        return "<script src='$src'></script>";
    }



}