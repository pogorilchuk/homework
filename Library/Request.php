<?php
class Request
{
    private $get = array();
    private $post = array();
	
    public function __construct()
    {
        $this->get = $_GET;
        $this->post = $_POST;
    }
    public function post($key)
    {
        return isset($this->post[$key]) ? $this->post[$key] : null;
    }
    public function get($key, $default_key = "index/index")
    {
        return isset($this->get[$key]) ? $this->get[$key] : $default_key;
    }
    public function isPost()
    {
        return (bool)$_POST;
    }
}