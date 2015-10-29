<?php
/**
 * TOP API: taobao.cloudpush.message.android request
 * 
 * @author auto create
 * @since 1.0, 2015.06.08
 */
class CloudpushMessageAndroidRequest
{
	/** 
	 * 发送的消息内容.
	 **/
	private $body;
	
	/** 
	 * 推送目标: device:推送给设备; account:推送给指定帐号,all: 推送给全部
	 **/
	private $target;
	
	/** 
	 * 根据Target来设定，如Target=device, 则对应的值为 设备id1,设备id2. 多个值使用逗号分隔
	 **/
	private $targetValue;
	
	private $apiParas = array();
	
	public function setBody($body)
	{
		$this->body = $body;
		$this->apiParas["body"] = $body;
	}

	public function getBody()
	{
		return $this->body;
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

	public function getApiMethodName()
	{
		return "taobao.cloudpush.message.android";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->body,"body");
		RequestCheckUtil::checkNotNull($this->target,"target");
		RequestCheckUtil::checkNotNull($this->targetValue,"targetValue");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
