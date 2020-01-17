<?php

class Page{
    private $str = '';
    private $current_page;
    private $count;
    private $limit;
    private $size;
    private $class;
    private static $getInstance;

    private function __construct($page_info){
        $this->init($page_info);
    }

    private function __clone(){

    }

    private function init($page_info){
        $this->current_page = empty($page_info['current']) ? 1 : $page_info['current'];
        $this->count = empty($page_info['count']) ? '' : $page_info['count'];
        $this->limit = empty($page_info['limit']) ? '' : $page_info['limit'];
        $this->size = empty($page_info['size']) ? 7 : $page_info['size'];
        $this->class = empty($page_info['class']) ? '' : $page_info['class'];
    }

    function getUrl(){
        $url = $_SERVER['PHP_SELF'] . '?';
        if ($_GET) {
            foreach ($_GET as $k => $v) {
                if ($k != 'page') {
                    $url .= "{$k}={$v}&";
                }
            }
        }
        return $url;
    }

    function showpage(){
        if ($this->count > $this->limit) {
            $pages = ceil($this->count / $this->limit);
            $url = $this->getUrl();

            $this->str = "<div class='pull-right'><ul class='{$this->class}'>";
            if ($this->current_page == 1) {
                $this->str .= '<li><a>&lt;</a></li>';
                $this->str .= "<li><a class='disabled'>首页</a></li>";
            } else {
                $this->str .= "<li><a href='{$url}page=" . ($this->current_page - 1) . "'>&lt;</a></li>";
                $this->str .= "<li><a href='{$url}page=1'>首页</a></li>";
            }

            $compare = floor($this->size / 2);
            if ($this->current_page <= $compare) {
                $start = 1;
                $end = ($pages < $this->size) ? $pages : $this->size;
            } else if ($this->current_page > ($pages - $compare)) {
                $start = ($pages - $this->size + 1) < 1 ? 1 : ($pages - $this->size + 1);
                $end = $pages;
            } else {
                $start = $this->current_page - $compare;
                $end = $this->current_page + $compare;
            }

            for ($i = $start; $i <= $end; $i++) {
                if ($this->current_page == $i) {
                    $this->str .= "<li class='active'><a>{$i}</a></li>";
                } else {
                    $this->str .= "<li><a href='{$url}page={$i}'>{$i}</a></li>";
                }
            }

            if ($this->current_page == $pages) {
                $this->str .= "<li><a class='disabled''>尾页</a></li>";
                $this->str .= '<li><a>&gt;</a></li>';
            } else {
                $this->str .= "<li><a href='{$url}page={$pages}'>尾页</a></li>";
                $this->str .= "<li><a href='{$url}page=" . ($this->current_page + 1) . "'>&gt;</a></li>";
            }

            $this->str .= "</ul></div>";
        }

        return $this->str;
    }

    static function getInstance($page_info){
        if(!self::$getInstance instanceof self){
            return self::$getInstance = new self($page_info);
        }
        return self::$getInstance;
    }
}