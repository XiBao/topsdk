<?php
/**
 * TOP API: taobao.simba.keywords.delete request
 * 
 * @author auto create
 * @since 1.0, 2012-07-30 16:33:53
 */
class SimbaKeywordsDeleteRequest
{
	/** 
	 * 推广计划Id
	 **/
	private $campaignId;
	
	/** 
	 * 关键词Id数组，最多200个
	 **/
	private $keywordIds;
	
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

	public function setKeywordIds($keywordIds)
	{
		$this->keywordIds = $keywordIds;
		$this->apiParas["keyword_ids"] = $keywordIds;
	}

	public function getKeywordIds()
	{
		return $this->keywordIds;
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
		return "taobao.simba.keywords.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->keywordIds,"keywordIds");
		RequestCheckUtil::checkMaxListSize($this->keywordIds,200,"keywordIds");
	}
}
