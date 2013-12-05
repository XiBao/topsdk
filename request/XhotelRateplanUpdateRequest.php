<?php
/**
 * TOP API: taobao.xhotel.rateplan.update request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class XhotelRateplanUpdateRequest
{
	/** 
	 * 0：不含早
1：含单早
2：含双早
N：含N早（1-99可选）
	 **/
	private $breakfastCount;
	
	/** 
	 * 不允许变更/取消
任意退
是一段JSON。
允许变更/取消：在XX年XX月XX日XX时前取消收取Y%的手续费，100>Y>=0
允许变更/取消：在入住前X小时前取消收取Y%的手续费，100>Y>=0（不超过10条）
	 **/
	private $cancelPolicy;
	
	/** 
	 * 每日结束时间
	 **/
	private $endTime;
	
	/** 
	 * RP的英文名称
	 **/
	private $englishName;
	
	/** 
	 * 扩展信息的JSON。
注：此字段的值需要ISV在接入前与淘宝沟通，且确认能解析
	 **/
	private $extend;
	
	/** 
	 * 额外服务的扩展，是一段JSON
	 **/
	private $extendFee;
	
	/** 
	 * 额外服务-早餐-金额（1-9999）
	 **/
	private $feeBreakfastAmount;
	
	/** 
	 * 额外服务-早餐-数量（0-99）
	 **/
	private $feeBreakfastCount;
	
	/** 
	 * 额外服务-政府税-金额（0-9999）
	 **/
	private $feeGovTaxAmount;
	
	/** 
	 * 额外服务-政府税-百分比（0%-99%）
	 **/
	private $feeGovTaxPercent;
	
	/** 
	 * 额外服务-服务费-金额（0-9999）
	 **/
	private $feeServiceAmount;
	
	/** 
	 * 额外服务-服务费-百分比（0%-99%）
	 **/
	private $feeServicePercent;
	
	/** 
	 * 最大提前预订小时按入住日的23:59:59(认为是24点)来计算。默认2160（90天）
	 **/
	private $maxAdvHours;
	
	/** 
	 * 最大入住天数（1-90）。默认90
	 **/
	private $maxDays;
	
	/** 
	 * 最小提前预订小时按入住时间的23:59:59（认为是24点）来计算。默认0
	 **/
	private $minAdvHours;
	
	/** 
	 * 首日入住房间数（1-99）。默认1
	 **/
	private $minAmount;
	
	/** 
	 * 最小入住天数（1-90）。默认1
	 **/
	private $minDays;
	
	/** 
	 * 名称
	 **/
	private $name;
	
	/** 
	 * rateplan_id
	 **/
	private $rpid;
	
	/** 
	 * 每日生效时间
	 **/
	private $startTime;
	
	/** 
	 * 1：开启（默认）
2：关闭
默认1
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setBreakfastCount($breakfastCount)
	{
		$this->breakfastCount = $breakfastCount;
		$this->apiParas["breakfast_count"] = $breakfastCount;
	}

	public function getBreakfastCount()
	{
		return $this->breakfastCount;
	}

	public function setCancelPolicy($cancelPolicy)
	{
		$this->cancelPolicy = $cancelPolicy;
		$this->apiParas["cancel_policy"] = $cancelPolicy;
	}

	public function getCancelPolicy()
	{
		return $this->cancelPolicy;
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

	public function setEnglishName($englishName)
	{
		$this->englishName = $englishName;
		$this->apiParas["english_name"] = $englishName;
	}

	public function getEnglishName()
	{
		return $this->englishName;
	}

	public function setExtend($extend)
	{
		$this->extend = $extend;
		$this->apiParas["extend"] = $extend;
	}

	public function getExtend()
	{
		return $this->extend;
	}

	public function setExtendFee($extendFee)
	{
		$this->extendFee = $extendFee;
		$this->apiParas["extend_fee"] = $extendFee;
	}

	public function getExtendFee()
	{
		return $this->extendFee;
	}

	public function setFeeBreakfastAmount($feeBreakfastAmount)
	{
		$this->feeBreakfastAmount = $feeBreakfastAmount;
		$this->apiParas["fee_breakfast_amount"] = $feeBreakfastAmount;
	}

	public function getFeeBreakfastAmount()
	{
		return $this->feeBreakfastAmount;
	}

	public function setFeeBreakfastCount($feeBreakfastCount)
	{
		$this->feeBreakfastCount = $feeBreakfastCount;
		$this->apiParas["fee_breakfast_count"] = $feeBreakfastCount;
	}

	public function getFeeBreakfastCount()
	{
		return $this->feeBreakfastCount;
	}

	public function setFeeGovTaxAmount($feeGovTaxAmount)
	{
		$this->feeGovTaxAmount = $feeGovTaxAmount;
		$this->apiParas["fee_gov_tax_amount"] = $feeGovTaxAmount;
	}

	public function getFeeGovTaxAmount()
	{
		return $this->feeGovTaxAmount;
	}

	public function setFeeGovTaxPercent($feeGovTaxPercent)
	{
		$this->feeGovTaxPercent = $feeGovTaxPercent;
		$this->apiParas["fee_gov_tax_percent"] = $feeGovTaxPercent;
	}

	public function getFeeGovTaxPercent()
	{
		return $this->feeGovTaxPercent;
	}

	public function setFeeServiceAmount($feeServiceAmount)
	{
		$this->feeServiceAmount = $feeServiceAmount;
		$this->apiParas["fee_service_amount"] = $feeServiceAmount;
	}

	public function getFeeServiceAmount()
	{
		return $this->feeServiceAmount;
	}

	public function setFeeServicePercent($feeServicePercent)
	{
		$this->feeServicePercent = $feeServicePercent;
		$this->apiParas["fee_service_percent"] = $feeServicePercent;
	}

	public function getFeeServicePercent()
	{
		return $this->feeServicePercent;
	}

	public function setMaxAdvHours($maxAdvHours)
	{
		$this->maxAdvHours = $maxAdvHours;
		$this->apiParas["max_adv_hours"] = $maxAdvHours;
	}

	public function getMaxAdvHours()
	{
		return $this->maxAdvHours;
	}

	public function setMaxDays($maxDays)
	{
		$this->maxDays = $maxDays;
		$this->apiParas["max_days"] = $maxDays;
	}

	public function getMaxDays()
	{
		return $this->maxDays;
	}

	public function setMinAdvHours($minAdvHours)
	{
		$this->minAdvHours = $minAdvHours;
		$this->apiParas["min_adv_hours"] = $minAdvHours;
	}

	public function getMinAdvHours()
	{
		return $this->minAdvHours;
	}

	public function setMinAmount($minAmount)
	{
		$this->minAmount = $minAmount;
		$this->apiParas["min_amount"] = $minAmount;
	}

	public function getMinAmount()
	{
		return $this->minAmount;
	}

	public function setMinDays($minDays)
	{
		$this->minDays = $minDays;
		$this->apiParas["min_days"] = $minDays;
	}

	public function getMinDays()
	{
		return $this->minDays;
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

	public function setRpid($rpid)
	{
		$this->rpid = $rpid;
		$this->apiParas["rpid"] = $rpid;
	}

	public function getRpid()
	{
		return $this->rpid;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.xhotel.rateplan.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->breakfastCount,99,"breakfastCount");
		RequestCheckUtil::checkMinValue($this->breakfastCount,0,"breakfastCount");
		RequestCheckUtil::checkMaxLength($this->cancelPolicy,500,"cancelPolicy");
		RequestCheckUtil::checkMaxLength($this->endTime,5,"endTime");
		RequestCheckUtil::checkMaxLength($this->englishName,60,"englishName");
		RequestCheckUtil::checkMaxLength($this->extend,500,"extend");
		RequestCheckUtil::checkMaxLength($this->extendFee,500,"extendFee");
		RequestCheckUtil::checkMaxValue($this->feeBreakfastAmount,9999,"feeBreakfastAmount");
		RequestCheckUtil::checkMinValue($this->feeBreakfastAmount,1,"feeBreakfastAmount");
		RequestCheckUtil::checkMaxValue($this->feeBreakfastCount,99,"feeBreakfastCount");
		RequestCheckUtil::checkMinValue($this->feeBreakfastCount,0,"feeBreakfastCount");
		RequestCheckUtil::checkMaxValue($this->feeGovTaxAmount,9999,"feeGovTaxAmount");
		RequestCheckUtil::checkMinValue($this->feeGovTaxAmount,0,"feeGovTaxAmount");
		RequestCheckUtil::checkMaxValue($this->feeGovTaxPercent,99,"feeGovTaxPercent");
		RequestCheckUtil::checkMinValue($this->feeGovTaxPercent,0,"feeGovTaxPercent");
		RequestCheckUtil::checkMaxValue($this->feeServiceAmount,9999,"feeServiceAmount");
		RequestCheckUtil::checkMinValue($this->feeServiceAmount,0,"feeServiceAmount");
		RequestCheckUtil::checkMaxValue($this->feeServicePercent,99,"feeServicePercent");
		RequestCheckUtil::checkMinValue($this->feeServicePercent,0,"feeServicePercent");
		RequestCheckUtil::checkMaxValue($this->maxAdvHours,2160,"maxAdvHours");
		RequestCheckUtil::checkMinValue($this->maxAdvHours,0,"maxAdvHours");
		RequestCheckUtil::checkMaxValue($this->maxDays,90,"maxDays");
		RequestCheckUtil::checkMinValue($this->maxDays,1,"maxDays");
		RequestCheckUtil::checkMaxValue($this->minAdvHours,2160,"minAdvHours");
		RequestCheckUtil::checkMinValue($this->minAdvHours,0,"minAdvHours");
		RequestCheckUtil::checkMaxValue($this->minAmount,99,"minAmount");
		RequestCheckUtil::checkMinValue($this->minAmount,1,"minAmount");
		RequestCheckUtil::checkMaxValue($this->minDays,90,"minDays");
		RequestCheckUtil::checkMinValue($this->minDays,1,"minDays");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
		RequestCheckUtil::checkNotNull($this->rpid,"rpid");
		RequestCheckUtil::checkMaxLength($this->startTime,5,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
