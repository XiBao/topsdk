<?php
/**
 * TOP API: taobao.promotionmisc.activity.range.remove request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class PromotionmiscActivityRangeRemoveRequest
{
	/** 
	 * 活动id。<br /> 支持最小值为：0
	 **/
	private $activityId;
	
	/** 
	 * 商品id,多个id用逗号隔开。
	 **/
	private $ids;
	
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

	public function setIds($ids)
	{
		$this->ids = $ids;
		$this->apiParas["ids"] = $ids;
	}

	public function getIds()
	{
		return $this->ids;
	}

	public function getApiMethodName()
	{
		return "taobao.promotionmisc.activity.range.remove";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->activityId,"activityId");
		RequestCheckUtil::checkMinValue($this->activityId,0,"activityId");
		RequestCheckUtil::checkNotNull($this->ids,"ids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
