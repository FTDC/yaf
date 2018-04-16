<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/12
 * Time: 14:04
 */

class UserController extends Yaf_Controller_Abstract
{
    public function loginAction()
    {
//        $this->getView();

        return true;
    }


    public function loginedAction()
    {
        $post = $this->getRequest()->getPost();

        // 关闭模板渲染
        Yaf_Dispatcher::getInstance()->disableView();

        // 存储session
        Yaf_Session::getInstance()->set($post["username"], $post["password"]);

        if (!empty($post["username"]) && !empty($post["password"])) {
            //$this->getResponse()->setBody(json_encode(array("status" => "success")));

            $this->redirect("/balance/index");
        }

    }
}