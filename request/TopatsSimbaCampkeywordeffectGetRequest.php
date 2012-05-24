<?php
/**
 * TOP API: taobao.topats.simba.campkeywordeffect.get request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class TopatsSimbaCampkeywordeffectGetRequest
{
	/** 
	 * 查询推广计划id
	 **/
	private $campaignId;
	
	/**
	 * 时间参数（昨天：DAY、 前一周：7DAY 、前15天：15DAY 、前30天：30DAY 、前90天：90DAY）单选
	 **/
	private $timeSlot;
	
	/** 
	 * 报表类型（搜索：SEARCH,类目出价：CAT, 定向投放：NOSEARCH汇总：SUMMARY）SUMMARY必须单选，其他值可多选例如：SEARCH,CAT
	 **/
	private $searchType;
	
	/** 
	 * 数据来源（站内：1，站外：2 ，汇总：SUMMARY）SUMMARY必须单选，其他值可多选例如1,2
	 **/
	private $source;
	
	/** 
	 * 昵称
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
	
	public function setTimeSlot($timeSlot)
	{
		$this->timeSlot = $timeSlot;
		$this->apiParas["time_slot"] = $timeSlot;
	}

	public function getTimeSlot()
	{
		return $this->timeSlot;
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
	
	public function setSearchType($searchType)
	{
		$this->searchType = $searchType;
		$this->apiParas["search_type"] = $searchType;
	}

	public function getSearchType()
	{
		return $this->searchType;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
	}
	
	public function getApiMethodName()
	{
		return "taobao.topats.simba.campkeywordeffect.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->timeSlot,"timeSlot");
		RequestCheckUtil::checkNotNull($this->searchType,"searchType");
		RequestCheckUtil::checkNotNull($this->source,"source");
	}
}
