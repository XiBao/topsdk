<?php
/**
 * TOP API: taobao.dd.auction.rule.update request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class DdAuctionRuleUpdateRequest
{
	/** 
	 * 每天的结束时间 ， 格式：10000*hh+100*mm+ss
	 **/
	private $dayEnd;
	
	/** 
	 * 每天的开始时间， 格式：10000*hh+100*mm+ss
	 **/
	private $dayStart;
	
	/** 
	 * 扩展属性
	 **/
	private $features;
	
	/** 
	 * 规则ID
	 **/
	private $id;
	
	/** 
	 * 是否是点点商品规则
	 **/
	private $isDiandian;
	
	/** 
	 * 是否是外卖商品规则
	 **/
	private $isTakeout;
	
	/** 
	 * 商户规则名称
	 **/
	private $name;
	
	/** 
	 * 规则结束时间
	 **/
	private $ruleEnd;
	
	/** 
	 * 规则开始时间
	 **/
	private $ruleStart;
	
	/** 
	 * 排序
	 **/
	private $sort;
	
	/** 
	 * 状态
	 **/
	private $status;
	
	/** 
	 * 商户ID
	 **/
	private $storeId;
	
	/** 
	 * 周期轮询0,1,2,3通过逗号间隔
	 **/
	private $weeklys;
	
	private $apiParas = array();
	
	public function setDayEnd($dayEnd)
	{
		$this->dayEnd = $dayEnd;
		$this->apiParas["day_end"] = $dayEnd;
	}

	public function getDayEnd()
	{
		return $this->dayEnd;
	}

	public function setDayStart($dayStart)
	{
		$this->dayStart = $dayStart;
		$this->apiParas["day_start"] = $dayStart;
	}

	public function getDayStart()
	{
		return $this->dayStart;
	}

	public function setFeatures($features)
	{
		$this->features = $features;
		$this->apiParas["features"] = $features;
	}

	public function getFeatures()
	{
		return $this->features;
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

	public function setRuleEnd($ruleEnd)
	{
		$this->ruleEnd = $ruleEnd;
		$this->apiParas["rule_end"] = $ruleEnd;
	}

	public function getRuleEnd()
	{
		return $this->ruleEnd;
	}

	public function setRuleStart($ruleStart)
	{
		$this->ruleStart = $ruleStart;
		$this->apiParas["rule_start"] = $ruleStart;
	}

	public function getRuleStart()
	{
		return $this->ruleStart;
	}

	public function setSort($sort)
	{
		$this->sort = $sort;
		$this->apiParas["sort"] = $sort;
	}

	public function getSort()
	{
		return $this->sort;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
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

	public function setWeeklys($weeklys)
	{
		$this->weeklys = $weeklys;
		$this->apiParas["weeklys"] = $weeklys;
	}

	public function getWeeklys()
	{
		return $this->weeklys;
	}

	public function getApiMethodName()
	{
		return "taobao.dd.auction.rule.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->isDiandian,"isDiandian");
		RequestCheckUtil::checkNotNull($this->isTakeout,"isTakeout");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkNotNull($this->storeId,"storeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
