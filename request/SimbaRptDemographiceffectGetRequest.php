<?php
/**
 * TOP API: taobao.simba.rpt.demographiceffect.get request
 * 
 * @author auto create
 * @since 1.0, 2013-02-22 16:36:25
 */
class SimbaRptDemographiceffectGetRequest
{
	/** 
	 * 推广计划id
	 **/
	private $campaignId;
	
	/** 
	 * 结束时间,格式为：yyyy-mm-dd
	 **/
	private $endTime;
	
	/** 
	 * 昵称
	 **/
	private $nick;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页大小
	 **/
	private $pageSize;
	
	/** 
	 * 开始时间,格式为：yyyy-mm-dd
	 **/
	private $startTime;
	
	/** 
	 * 权限校验参数
	 **/
	private $subwayToken;
	
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

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
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

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setSubwayToken($subwayToken)
	{
		$this->subwayToken = $subwayToken;
		$this->apiParas["subway_token"] = $subwayToken;
	}

	public function getSubwayToken()
	{
		return $this->subwayToken;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.rpt.demographiceffect.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
		RequestCheckUtil::checkNotNull($this->subwayToken,"subwayToken");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
