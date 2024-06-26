<?php

class App {
    protected $controller = 'auth';
    protected $method = 'index';
    protected $params = [];
    public function __construct(){
        $url = $this->parseURL();
        if(!empty($url) && file_exists('../app/contr/'.$url[0] . '.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }
    
        require_once '../app/contr/' . $this->controller . '.php';
        $this->controller = new $this->controller;
    
        if( isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }
    
        if( !empty($url) ) {
            $this->params = array_values($url);
        }
    
        call_user_func_array([$this->controller, $this->method], $this->params);
    }    
    public function parseURL()
    {
        if( isset($_GET['url']) ) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
    