<?php
/**
 * TOP API: taobao.topats.promotion.coupondetail.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class TopatsPromotionCoupondetailGetRequest
{
	/** 
	 * 优惠券ID
	 **/
	private $couponId;
	
	/** 
	 * 传入优惠券截止时间，即失效时间。其中end_time>start_time并且end_time-start_time<=15天。
	 **/
	private $endTime;
	
	/** 
	 * 优惠券开始时间，即生效时间。
	 **/
	private $startTime;
	
	/** 
	 * 优惠券使用情况。可选值：unused：未使用；using：使用中；used：已使用。
	 **/
	private $state;
	
	private $apiParas = array();
	
	public function setCouponId($couponId)
	{
		$this->couponId = $couponId;
		$this->apiParas["coupon_id"] = $couponId;
	}

	public function getCouponId()
	{
		return $this->couponId;
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

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setState($state)
	{
		$this->state = $state;
		$this->apiParas["state"] = $state;
	}

	public function getState()
	{
		return $this->state;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.promotion.coupondetail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
