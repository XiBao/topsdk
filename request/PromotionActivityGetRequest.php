<?php
/**
 * TOP API: taobao.promotion.activity.get request
 * 
 * @author auto create
 * @since 1.0, 2012-07-30 16:33:53
 */
class PromotionActivityGetRequest
{
	/** 
	 * 活动的id
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
		return "taobao.promotion.activity.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
}
