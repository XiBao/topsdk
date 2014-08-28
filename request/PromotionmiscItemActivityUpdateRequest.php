<?php
/**
 * TOP API: taobao.promotionmisc.item.activity.update request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class PromotionmiscItemActivityUpdateRequest
{
	/** 
	 * 活动id。<br /> 支持最小值为：0
	 **/
	private $activityId;
	
	/** 
	 * 减多少钱。当is_decrease_money为true时，该值才有意义。注意：该值单位为分，即100表示1元。<br /> 支持最小值为：0
	 **/
	private $decreaseAmount;
	
	/** 
	 * 折扣值。当is_discount为true时，该值才有意义。注意：800表示8折。<br /> 支持最小值为：0
	 **/
	private $discountRate;
	
	/** 
	 * 活动结束时间。
	 **/
	private $endTime;
	
	/** 
	 * 是否有减钱行为。
	 **/
	private $isDecreaseMoney;
	
	/** 
	 * 是否有打折行为。
	 **/
	private $isDiscount;
	
	/** 
	 * 是否指定用户标签。
	 **/
	private $isUserTag;
	
	/** 
	 * 活动名称。<br /> 支持最大长度为：32<br /> 支持的最大列表长度为：32
	 **/
	private $name;
	
	/** 
	 * 活动范围：0表示全部参与； 1表示部分商品参与。<br /> 支持最大值为：1<br /> 支持最小值为：0<br /> 支持的最大列表长度为：1
	 **/
	private $participateRange;
	
	/** 
	 * 活动开始时间。
	 **/
	private $startTime;
	
	/** 
	 * 用户标签。当is_user_tag为true时，该值才有意义。
	 **/
	private $userTag;
	
	private $apiParas = array();
	
	public function setActivityId($activityId)
	{
		$this->activityId = $activityId;
		$this->apiParas["activity_id"] = $activityId;
	}

	public function getActivityId()
	{
		return $this->activityId;
	}

	public function setDecreaseAmount($decreaseAmount)
	{
		$this->decreaseAmount = $decreaseAmount;
		$this->apiParas["decrease_amount"] = $decreaseAmount;
	}

	public function getDecreaseAmount()
	{
		return $this->decreaseAmount;
	}

	public function setDiscountRate($discountRate)
	{
		$this->discountRate = $discountRate;
		$this->apiParas["discount_rate"] = $discountRate;
	}

	public function getDiscountRate()
	{
		return $this->discountRate;
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

	public function setIsDecreaseMoney($isDecreaseMoney)
	{
		$this->isDecreaseMoney = $isDecreaseMoney;
		$this->apiParas["is_decrease_money"] = $isDecreaseMoney;
	}

	public function getIsDecreaseMoney()
	{
		return $this->isDecreaseMoney;
	}

	public function setIsDiscount($isDiscount)
	{
		$this->isDiscount = $isDiscount;
		$this->apiParas["is_discount"] = $isDiscount;
	}

	public function getIsDiscount()
	{
		return $this->isDiscount;
	}

	public function setIsUserTag($isUserTag)
	{
		$this->isUserTag = $isUserTag;
		$this->apiParas["is_user_tag"] = $isUserTag;
	}

	public function getIsUserTag()
	{
		return $this->isUserTag;
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

	public function setParticipateRange($participateRange)
	{
		$this->participateRange = $participateRange;
		$this->apiParas["participate_range"] = $participateRange;
	}

	public function getParticipateRange()
	{
		return $this->participateRange;
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

	public function setUserTag($userTag)
	{
		$this->userTag = $userTag;
		$this->apiParas["user_tag"] = $userTag;
	}

	public function getUserTag()
	{
		return $this->userTag;
	}

	public function getApiMethodName()
	{
		return "taobao.promotionmisc.item.activity.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityId,"activityId");
		RequestCheckUtil::checkMinValue($this->activityId,0,"activityId");
		RequestCheckUtil::checkMinValue($this->decreaseAmount,0,"decreaseAmount");
		RequestCheckUtil::checkMinValue($this->discountRate,0,"discountRate");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,32,"name");
		RequestCheckUtil::checkNotNull($this->participateRange,"participateRange");
		RequestCheckUtil::checkMaxValue($this->participateRange,1,"participateRange");
		RequestCheckUtil::checkMinValue($this->participateRange,0,"participateRange");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
