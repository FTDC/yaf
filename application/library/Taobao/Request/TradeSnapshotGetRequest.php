<?php

/**
 * TOP API: taobao.trade.snapshot.get request
 *
 * @author auto create
 * @since  1.0, 2013-09-13 16:51:03
 */
class Taobao_Request_TradeSnapshotGetRequest
{
    /**
     * 需要返回的字段列表。现只支持："snapshot"字段
     **/
    private $fields;

    /**
     * 交易编号
     **/
    private $tid;

    private $apiParas = array();


    public function setFields($fields)
    {
        $this->fields = $fields;
        $this->apiParas["fields"] = $fields;
    }


    public function getFields()
    {
        return $this->fields;
    }


    public function setTid($tid)
    {
        $this->tid = $tid;
        $this->apiParas["tid"] = $tid;
    }


    public function getTid()
    {
        return $this->tid;
    }


    public function getApiMethodName()
    {
        return "taobao.trade.snapshot.get";
    }


    public function getApiParas()
    {
        return $this->apiParas;
    }


    public function check()
    {

        Taobao_RequestCheckUtil::checkNotNull($this->fields, "fields");
        Taobao_RequestCheckUtil::checkNotNull($this->tid, "tid");
    }


    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}