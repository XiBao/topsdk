<?php
/**
 * TOP API: taobao.simba.nonsearch.adgroupplaces.get request
 * 
 * @author auto create
 * @since 1.0, 2012-07-30 16:33:53
 */
class SimbaNonsearchAdgroupplacesGetRequest
{
	/** 
	 * 推广组ID数组
	 **/
	private $adgroupIds;
	
	/** 
	 * 推广计划ID
	 **/
	private $campaignId;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setAdgroupIds($adgroupIds)
	{
		$this->adgroupIds = $adgroupIds;
		$this->apiParas["adgroup_ids"] = $adgroupIds;
	}

	public function getAdgroupIds()
	{
		return $this->adgroupIds;
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
		return "taobao.simba.nonsearch.adgroupplaces.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupIds,"adgroupIds");
		RequestCheckUtil::checkMaxListSize($this->adgroupIds,200,"adgroupIds");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
	}
}
