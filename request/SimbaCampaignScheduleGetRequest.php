<?php
/**
 * TOP API: taobao.simba.campaign.schedule.get request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class SimbaCampaignScheduleGetRequest
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
		return "taobao.simba.campaign.schedule.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
	}
}
