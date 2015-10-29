<?php
/**
 * TOP API: taobao.cloudpush.notice.android request
 * 
 * @author auto create
 * @since 1.0, 2015.06.08
 */
class CloudpushNoticeAndroidRequest
{
	/** 
	 * 通知摘要
	 **/
	private $summary;
	
	/** 
	 * 推送目标: device:推送给设备; account:推送给指定帐号,all: 推送给全部
	 **/
	private $target;
	
	/** 
	 * 根据Target来设定，如Target=device, 则对应的值为 设备id1,设备id2. 多个值使用逗号分隔
	 **/
	private $targetValue;
	
	/** 
	 * 通知的标题.
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setSummary($summary)
	{
		$this->summary = $summary;
		$this->apiParas["summary"] = $summary;
	}

	public function getSummary()
	{
		return $this->summary;
	}

	public function setTarget($target)
	{
		$this->target = $target;
		$this->apiParas["target"] = $target;
	}

	public function getTarget()
	{
		return $this->target;
	}

	public function setTargetValue($targetValue)
	{
		$this->targetValue = $targetValue;
		$this->apiParas["target_value"] = $targetValue;
	}

	public function getTargetValue()
	{
		return $this->targetValue;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.cloudpush.notice.android";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->summary,"summary");
		RequestCheckUtil::checkNotNull($this->target,"target");
		RequestCheckUtil::checkNotNull($this->targetValue,"targetValue");
		RequestCheckUtil::checkNotNull($this->title,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
