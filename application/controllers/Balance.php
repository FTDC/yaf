<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/12
 * Time: 15:16
 */

class BalanceController extends Yaf_Controller_Abstract
{
    public function init()
    {
        if (empty(Yaf_Session::getInstance()->get("xjin"))) {
            $this->forward("user", "login");
        }


    }


    public function indexAction()
    {

        $balanceModel = new BalanceModel();

        $result = $balanceModel->queryBalanceList();

        $this->getResponse()->setBody(json_encode($result));

//        echo "sdff";

//        return true;
    }
}