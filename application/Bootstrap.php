<?php

/**
 * @name Bootstrap
 * @author root
 * @desc   所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see    http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf_Bootstrap_Abstract
{
    protected $config;


    public function _initConfig()
    {
//        $this->config = \Yaf\Application::app()->getConfig();
        //把配置保存起来
        $this->config = Yaf_Application::app()->getConfig();
        Yaf_Registry::set('config', $this->config);
    }


    public function _initPlugin(Yaf_Dispatcher $dispatcher)
    {
        // 注册一个插件
        $objSamplePlugin = new SamplePlugin();
        $dispatcher->registerPlugin($objSamplePlugin);

        $autoPlugin = new AutoloadPlugin();
        $dispatcher->registerPlugin($autoPlugin);
    }


    public function _initDb()
    {
//        var_dump(__FILE__); exit();
        if (class_exists('\think\Db')) {
            \think\Db::setConfig($this->config->database->toArray());
            //Model关键字，手动加载文件
            Yaf_Loader::import($this->config->application->directory.'/library/think/Model.php');
        }
    }


    public function _initRoute(Yaf_Dispatcher $dispatcher)
    {
        //在这里注册自己的路由协议,默认使用简单路由
//        $router = new Yaf_Router();
//        $route = new Yaf_Route_Rewrite("gg/:ident", array("controller" => "index", "action" => "demo"));
//        $router->addRoute("name", $route);
    }


    public function _initView(Yaf_Dispatcher $dispatcher)
    {
        //在这里注册自己的view控制器，例如smarty,firekylin
    }
}
