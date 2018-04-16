<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/12
 * Time: 18:09
 */

use \think\Model;

class BalanceModel extends Model
{

    protected $table = 'balance_log';
    protected $name = 'balance';


    public function queryBalanceList()
    {

        $count = $this->count();

        $listRecord = $this->field("trade_no, title, trade_amount")->page(1, 10)->select()->toArray();

        $params['page'] = 1;
        $result = [
            'rows' => $listRecord,
            'page' => $params['page'],
            'total' => $count,
        ];

        return $result;
    }
}