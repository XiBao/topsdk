<?php
/**
 * TOP API: taobao.promotionmisc.activity.range.list.get request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class PromotionmiscActivityRangeListGetRequest
{
	/** 
	 * 活动id
	 **/
	private $activityId;
	
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

	public function getApiMethodName()
	{
		return "taobao.promotionmisc.activity.range.list.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityId,"activityId");
		RequestCheckUtil::checkMinValue($this->activityId,0,"activityId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
