<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/12
 * Time: 18:09
 */

class BalanceModel extends Yaf_Controller_Abstract
{

    public function queryBalanceList()
    {
        $params['page'] = 7;
        $count = 10;
        $list = array();
        $result = [
            'rows' => $list,
            'page' => $params['page'],
            'total' => $count,
        ];

        return $result;
    }
}