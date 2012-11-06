<?php
/**
 * TOP API: taobao.crm.rule.add request
 * 
 * @author auto create
 * @since 1.0, 2012-07-30 16:33:53
 */
class CrmRuleAddRequest
{
	/** 
	 * 会员等级，可选值为：1,2,3,4
	 **/
	private $grade;
	
	/** 
	 * 规则应用分组集合，若分组上有任务，则该分组不能挂到该规则下
	 **/
	private $groupIds;
	
	/** 
	 * 最大平均客单价，单位为元
	 **/
	private $maxAvgPrice;
	
	/** 
	 * 最大交易关闭数
	 **/
	private $maxCloseTradeNum;
	
	/** 
	 * 最大宝贝件数
	 **/
	private $maxItemNum;
	
	/** 
	 * 最迟交易时间
	 **/
	private $maxLastTradeTime;
	
	/** 
	 * 最大交易金额，单位为元
	 **/
	private $maxTradeAmount;
	
	/** 
	 * 最大交易数
	 **/
	private $maxTradeCount;
	
	/** 
	 * 最小平均客单价，单位元
	 **/
	private $minAvgPrice;
	
	/** 
	 * 最少交易关闭数
	 **/
	private $minCloseTradeNum;
	
	/** 
	 * 最少宝贝件数
	 **/
	private $minItemNum;
	
	/** 
	 * 最早交易日期
必须为早于今天的某个时间，例如今天是2011-11-11，那么必须填写2011-11-10或者早于此日期的时间
	 **/
	private $minLastTradeTime;
	
	/** 
	 * 最小交易金额,单位元。
	 **/
	private $minTradeAmount;
	
	/** 
	 * 最小交易次数
	 **/
	private $minTradeCount;
	
	/** 
	 * 北京=1,天津=2,河北省=3,山西省=4,内蒙古自治区=5,辽宁省=6,吉林省=7,黑龙江省=8,上海=9,江苏省=10,浙江省=11,安徽省=12,福建省=13,江西省=14,山东省=15,河南省=16,湖北省=17,湖南省=18, 广东省=19,广西壮族自治区=20,海南省=21,重庆=22,四川省=23,贵州省=24,云南省=25,西藏自治区26,陕西省=27,甘肃省=28,青海省=29,宁夏回族自治区=30,新疆维吾尔自治区=31,台湾省=32,香港特别行政区=33,澳门特别行政区=34,海外=35
	 **/
	private $province;
	
	/** 
	 * 客户关系来源,可选值为:1,2
	 **/
	private $relationSource;
	
	/** 
	 * 规则名称
	 **/
	private $ruleName;
	
	private $apiParas = array();
	
	public function setGrade($grade)
	{
		$this->grade = $grade;
		$this->apiParas["grade"] = $grade;
	}

	public function getGrade()
	{
		return $this->grade;
	}

	public function setGroupIds($groupIds)
	{
		$this->groupIds = $groupIds;
		$this->apiParas["group_ids"] = $groupIds;
	}

	public function getGroupIds()
	{
		return $this->groupIds;
	}

	public function setMaxAvgPrice($maxAvgPrice)
	{
		$this->maxAvgPrice = $maxAvgPrice;
		$this->apiParas["max_avg_price"] = $maxAvgPrice;
	}

	public function getMaxAvgPrice()
	{
		return $this->maxAvgPrice;
	}

	public function setMaxCloseTradeNum($maxCloseTradeNum)
	{
		$this->maxCloseTradeNum = $maxCloseTradeNum;
		$this->apiParas["max_close_trade_num"] = $maxCloseTradeNum;
	}

	public function getMaxCloseTradeNum()
	{
		return $this->maxCloseTradeNum;
	}

	public function setMaxItemNum($maxItemNum)
	{
		$this->maxItemNum = $maxItemNum;
		$this->apiParas["max_item_num"] = $maxItemNum;
	}

	public function getMaxItemNum()
	{
		return $this->maxItemNum;
	}

	public function setMaxLastTradeTime($maxLastTradeTime)
	{
		$this->maxLastTradeTime = $maxLastTradeTime;
		$this->apiParas["max_last_trade_time"] = $maxLastTradeTime;
	}

	public function getMaxLastTradeTime()
	{
		return $this->maxLastTradeTime;
	}

	public function setMaxTradeAmount($maxTradeAmount)
	{
		$this->maxTradeAmount = $maxTradeAmount;
		$this->apiParas["max_trade_amount"] = $maxTradeAmount;
	}

	public function getMaxTradeAmount()
	{
		return $this->maxTradeAmount;
	}

	public function setMaxTradeCount($maxTradeCount)
	{
		$this->maxTradeCount = $maxTradeCount;
		$this->apiParas["max_trade_count"] = $maxTradeCount;
	}

	public function getMaxTradeCount()
	{
		return $this->maxTradeCount;
	}

	public function setMinAvgPrice($minAvgPrice)
	{
		$this->minAvgPrice = $minAvgPrice;
		$this->apiParas["min_avg_price"] = $minAvgPrice;
	}

	public function getMinAvgPrice()
	{
		return $this->minAvgPrice;
	}

	public function setMinCloseTradeNum($minCloseTradeNum)
	{
		$this->minCloseTradeNum = $minCloseTradeNum;
		$this->apiParas["min_close_trade_num"] = $minCloseTradeNum;
	}

	public function getMinCloseTradeNum()
	{
		return $this->minCloseTradeNum;
	}

	public function setMinItemNum($minItemNum)
	{
		$this->minItemNum = $minItemNum;
		$this->apiParas["min_item_num"] = $minItemNum;
	}

	public function getMinItemNum()
	{
		return $this->minItemNum;
	}

	public function setMinLastTradeTime($minLastTradeTime)
	{
		$this->minLastTradeTime = $minLastTradeTime;
		$this->apiParas["min_last_trade_time"] = $minLastTradeTime;
	}

	public function getMinLastTradeTime()
	{
		return $this->minLastTradeTime;
	}

	public function setMinTradeAmount($minTradeAmount)
	{
		$this->minTradeAmount = $minTradeAmount;
		$this->apiParas["min_trade_amount"] = $minTradeAmount;
	}

	public function getMinTradeAmount()
	{
		return $this->minTradeAmount;
	}

	public function setMinTradeCount($minTradeCount)
	{
		$this->minTradeCount = $minTradeCount;
		$this->apiParas["min_trade_count"] = $minTradeCount;
	}

	public function getMinTradeCount()
	{
		return $this->minTradeCount;
	}

	public function setProvince($province)
	{
		$this->province = $province;
		$this->apiParas["province"] = $province;
	}

	public function getProvince()
	{
		return $this->province;
	}

	public function setRelationSource($relationSource)
	{
		$this->relationSource = $relationSource;
		$this->apiParas["relation_source"] = $relationSource;
	}

	public function getRelationSource()
	{
		return $this->relationSource;
	}

	public function setRuleName($ruleName)
	{
		$this->ruleName = $ruleName;
		$this->apiParas["rule_name"] = $ruleName;
	}

	public function getRuleName()
	{
		return $this->ruleName;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.rule.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->grade,4,"grade");
		RequestCheckUtil::checkMinValue($this->grade,1,"grade");
		RequestCheckUtil::checkMaxListSize($this->groupIds,10,"groupIds");
		RequestCheckUtil::checkMaxLength($this->maxAvgPrice,7,"maxAvgPrice");
		RequestCheckUtil::checkMinValue($this->maxCloseTradeNum,0,"maxCloseTradeNum");
		RequestCheckUtil::checkMinValue($this->maxItemNum,0,"maxItemNum");
		RequestCheckUtil::checkMaxLength($this->maxTradeAmount,7,"maxTradeAmount");
		RequestCheckUtil::checkMinValue($this->maxTradeCount,0,"maxTradeCount");
		RequestCheckUtil::checkMaxLength($this->minAvgPrice,7,"minAvgPrice");
		RequestCheckUtil::checkMinValue($this->minCloseTradeNum,0,"minCloseTradeNum");
		RequestCheckUtil::checkMinValue($this->minItemNum,0,"minItemNum");
		RequestCheckUtil::checkMaxLength($this->minTradeAmount,7,"minTradeAmount");
		RequestCheckUtil::checkMinValue($this->minTradeCount,0,"minTradeCount");
		RequestCheckUtil::checkMaxValue($this->province,35,"province");
		RequestCheckUtil::checkMinValue($this->province,1,"province");
		RequestCheckUtil::checkMaxValue($this->relationSource,2,"relationSource");
		RequestCheckUtil::checkMinValue($this->relationSource,1,"relationSource");
		RequestCheckUtil::checkNotNull($this->ruleName,"ruleName");
		RequestCheckUtil::checkMaxLength($this->ruleName,15,"ruleName");
	}
}
