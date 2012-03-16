<?php
/**
 * TOP API: taobao.simba.campaign.area.update request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class SimbaCampaignAreaUpdateRequest
{
	/** 
	 * 值为：“all”；或者用“,”分割的数字，数字必须是直通车全国省市列表的AreaID；
	 **/
	private $area;
	
	/** 
	 * 推广计划Id
	 **/
	private $campaignId;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setArea($area)
	{
		$this->area = $area;
		$this->apiParas["area"] = $area;
	}

	public function getArea()
	{
		return $this->area;
	}

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
		return "taobao.simba.campaign.area.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->area,"area");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
	}
}
