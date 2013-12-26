<?php
/**
 * TOP API: taobao.ebook.activity.info.input request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class EbookActivityInfoInputRequest
{
	/** 
	 * 活动ID
	 **/
	private $actId;
	
	/** 
	 * 活动名称
	 **/
	private $actName;
	
	/** 
	 * 活动类型：0-满就送；1-好评送；2-分享送；3-游戏送；4-收藏送，不可为空
	 **/
	private $actType;
	
	/** 
	 * 活动条件描述，30个字以内。
	 **/
	private $conditionDesc;
	
	/** 
	 * 活动结束时间，yyyy-MM-dd HH:mm:ss
	 **/
	private $endDate;
	
	/** 
	 * 卖家的淘宝账号ID
	 **/
	private $sellerId;
	
	/** 
	 * 卖家店铺名称
	 **/
	private $shopName;
	
	/** 
	 * 活动开始时间，yyyy-MM-dd HH:mm:ss
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setActId($actId)
	{
		$this->actId = $actId;
		$this->apiParas["act_id"] = $actId;
	}

	public function getActId()
	{
		return $this->actId;
	}

	public function setActName($actName)
	{
		$this->actName = $actName;
		$this->apiParas["act_name"] = $actName;
	}

	public function getActName()
	{
		return $this->actName;
	}

	public function setActType($actType)
	{
		$this->actType = $actType;
		$this->apiParas["act_type"] = $actType;
	}

	public function getActType()
	{
		return $this->actType;
	}

	public function setConditionDesc($conditionDesc)
	{
		$this->conditionDesc = $conditionDesc;
		$this->apiParas["condition_desc"] = $conditionDesc;
	}

	public function getConditionDesc()
	{
		return $this->conditionDesc;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setShopName($shopName)
	{
		$this->shopName = $shopName;
		$this->apiParas["shop_name"] = $shopName;
	}

	public function getShopName()
	{
		return $this->shopName;
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

	public function getApiMethodName()
	{
		return "taobao.ebook.activity.info.input";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->actId,"actId");
		RequestCheckUtil::checkNotNull($this->actName,"actName");
		RequestCheckUtil::checkNotNull($this->actType,"actType");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
