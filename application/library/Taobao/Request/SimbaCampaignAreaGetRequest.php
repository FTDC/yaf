<?php

/**
 * TOP API: taobao.simba.campaign.area.get request
 *
 * @author auto create
 * @since  1.0, 2013-09-13 16:51:03
 */
class Taobao_Request_SimbaCampaignAreaGetRequest
{
    /**
     * 推广计划Id
     **/
    private $campaignId;

    /**
     * 主人昵称
     **/
    private $nick;

    private $apiParas = array();


    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
        $this->apiParas["campaign_id"] = $campaignId;
    }


    public function getCampaignId()
    {
        return $this->campaignId;
    }


    public function setNick($nick)
    {
        $this->nick = $nick;
        $this->apiParas["nick"] = $nick;
    }


    public function getNick()
    {
        return $this->nick;
    }


    public function getApiMethodName()
    {
        return "taobao.simba.campaign.area.get";
    }


    public function getApiParas()
    {
        return $this->apiParas;
    }


    public function check()
    {

        Taobao_RequestCheckUtil::checkNotNull($this->campaignId, "campaignId");
    }


    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
