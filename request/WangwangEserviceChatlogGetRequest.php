<?php
/**
 * TOP API: taobao.wangwang.eservice.chatlog.get request
 * 
 * @author auto create
 * @since 1.0, 2013-02-22 16:36:25
 */
class WangwangEserviceChatlogGetRequest
{
	/** 
	 * 聊天消息终止时间，如2010-03-24
	 **/
	private $endDate;
	
	/** 
	 * 聊天消息被查询用户ID：cntaobao+淘宝nick，例如cntaobaotest
	 **/
	private $fromId;
	
	/** 
	 * 聊天消息起始时间，如2010-02-01
	 **/
	private $startDate;
	
	/** 
	 * 聊天消息相关方ID：cntaobao+淘宝nick，例如cntaobaotest
	 **/
	private $toId;
	
	private $apiParas = array();
	
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setFromId($fromId)
	{
		$this->fromId = $fromId;
		$this->apiParas["from_id"] = $fromId;
	}

	public function getFromId()
	{
		return $this->fromId;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setToId($toId)
	{
		$this->toId = $toId;
		$this->apiParas["to_id"] = $toId;
	}

	public function getToId()
	{
		return $this->toId;
	}

	public function getApiMethodName()
	{
		return "taobao.wangwang.eservice.chatlog.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->fromId,"fromId");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
		RequestCheckUtil::checkNotNull($this->toId,"toId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
