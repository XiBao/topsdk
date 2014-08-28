<?php
/**
 * TOP API: taobao.waimai.shop.businessrules.update request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class WaimaiShopBusinessrulesUpdateRequest
{
	/** 
	 * 配送范围地图标注
	 **/
	private $areaRange;
	
	/** 
	 * 配送费
	 **/
	private $deliveryAmount;
	
	/** 
	 * 配送范围文字说明
	 **/
	private $deliveryArea;
	
	/** 
	 * 配送时间
	 **/
	private $deliveryTime;
	
	/** 
	 * 送货预留时间
	 **/
	private $earlyMinutes;
	
	/** 
	 * 满多少就免配送费
	 **/
	private $fullAmount;
	
	/** 
	 * 起送金额
	 **/
	private $minimumAmount;
	
	/** 
	 * 外卖商家电话
	 **/
	private $mobile;
	
	/** 
	 * 店铺id
	 **/
	private $shopid;
	
	/** 
	 * 支持预定, 当天：1，三天内：3，七天内：7
	 **/
	private $supportDays;
	
	private $apiParas = array();
	
	public function setAreaRange($areaRange)
	{
		$this->areaRange = $areaRange;
		$this->apiParas["area_range"] = $areaRange;
	}

	public function getAreaRange()
	{
		return $this->areaRange;
	}

	public function setDeliveryAmount($deliveryAmount)
	{
		$this->deliveryAmount = $deliveryAmount;
		$this->apiParas["delivery_amount"] = $deliveryAmount;
	}

	public function getDeliveryAmount()
	{
		return $this->deliveryAmount;
	}

	public function setDeliveryArea($deliveryArea)
	{
		$this->deliveryArea = $deliveryArea;
		$this->apiParas["delivery_area"] = $deliveryArea;
	}

	public function getDeliveryArea()
	{
		return $this->deliveryArea;
	}

	public function setDeliveryTime($deliveryTime)
	{
		$this->deliveryTime = $deliveryTime;
		$this->apiParas["delivery_time"] = $deliveryTime;
	}

	public function getDeliveryTime()
	{
		return $this->deliveryTime;
	}

	public function setEarlyMinutes($earlyMinutes)
	{
		$this->earlyMinutes = $earlyMinutes;
		$this->apiParas["early_minutes"] = $earlyMinutes;
	}

	public function getEarlyMinutes()
	{
		return $this->earlyMinutes;
	}

	public function setFullAmount($fullAmount)
	{
		$this->fullAmount = $fullAmount;
		$this->apiParas["full_amount"] = $fullAmount;
	}

	public function getFullAmount()
	{
		return $this->fullAmount;
	}

	public function setMinimumAmount($minimumAmount)
	{
		$this->minimumAmount = $minimumAmount;
		$this->apiParas["minimum_amount"] = $minimumAmount;
	}

	public function getMinimumAmount()
	{
		return $this->minimumAmount;
	}

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
	}

	public function setShopid($shopid)
	{
		$this->shopid = $shopid;
		$this->apiParas["shopid"] = $shopid;
	}

	public function getShopid()
	{
		return $this->shopid;
	}

	public function setSupportDays($supportDays)
	{
		$this->supportDays = $supportDays;
		$this->apiParas["support_days"] = $supportDays;
	}

	public function getSupportDays()
	{
		return $this->supportDays;
	}

	public function getApiMethodName()
	{
		return "taobao.waimai.shop.businessrules.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->areaRange,"areaRange");
		RequestCheckUtil::checkNotNull($this->deliveryAmount,"deliveryAmount");
		RequestCheckUtil::checkNotNull($this->deliveryArea,"deliveryArea");
		RequestCheckUtil::checkNotNull($this->deliveryTime,"deliveryTime");
		RequestCheckUtil::checkNotNull($this->earlyMinutes,"earlyMinutes");
		RequestCheckUtil::checkNotNull($this->fullAmount,"fullAmount");
		RequestCheckUtil::checkNotNull($this->minimumAmount,"minimumAmount");
		RequestCheckUtil::checkNotNull($this->mobile,"mobile");
		RequestCheckUtil::checkNotNull($this->shopid,"shopid");
		RequestCheckUtil::checkNotNull($this->supportDays,"supportDays");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
