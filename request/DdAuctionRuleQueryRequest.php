<?php
/**
 * TOP API: taobao.dd.auction.rule.query request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class DdAuctionRuleQueryRequest
{
	/** 
	 * 当前日期时间
	 **/
	private $currentDate;
	
	/** 
	 * 时间
	 **/
	private $dayTime;
	
	/** 
	 * 规则id
	 **/
	private $id;
	
	/** 
	 * 是否是到店
	 **/
	private $isDiandian;
	
	/** 
	 * 是否是外卖
	 **/
	private $isTakeout;
	
	/** 
	 * 规则名
	 **/
	private $name;
	
	/** 
	 * 状态数组string
	 **/
	private $statusArray;
	
	/** 
	 * 商铺ID
	 **/
	private $storeId;
	
	/** 
	 * 轮询周期
	 **/
	private $weekly;
	
	private $apiParas = array();
	
	public function setCurrentDate($currentDate)
	{
		$this->currentDate = $currentDate;
		$this->apiParas["current_date"] = $currentDate;
	}

	public function getCurrentDate()
	{
		return $this->currentDate;
	}

	public function setDayTime($dayTime)
	{
		$this->dayTime = $dayTime;
		$this->apiParas["day_time"] = $dayTime;
	}

	public function getDayTime()
	{
		return $this->dayTime;
	}

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setIsDiandian($isDiandian)
	{
		$this->isDiandian = $isDiandian;
		$this->apiParas["is_diandian"] = $isDiandian;
	}

	public function getIsDiandian()
	{
		return $this->isDiandian;
	}

	public function setIsTakeout($isTakeout)
	{
		$this->isTakeout = $isTakeout;
		$this->apiParas["is_takeout"] = $isTakeout;
	}

	public function getIsTakeout()
	{
		return $this->isTakeout;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setStatusArray($statusArray)
	{
		$this->statusArray = $statusArray;
		$this->apiParas["status_array"] = $statusArray;
	}

	public function getStatusArray()
	{
		return $this->statusArray;
	}

	public function setStoreId($storeId)
	{
		$this->storeId = $storeId;
		$this->apiParas["store_id"] = $storeId;
	}

	public function getStoreId()
	{
		return $this->storeId;
	}

	public function setWeekly($weekly)
	{
		$this->weekly = $weekly;
		$this->apiParas["weekly"] = $weekly;
	}

	public function getWeekly()
	{
		return $this->weekly;
	}

	public function getApiMethodName()
	{
		return "taobao.dd.auction.rule.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isDiandian,"isDiandian");
		RequestCheckUtil::checkNotNull($this->isTakeout,"isTakeout");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
