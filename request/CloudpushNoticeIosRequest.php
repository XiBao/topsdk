<?php
/**
 * TOP API: taobao.cloudpush.notice.ios request
 * 
 * @author auto create
 * @since 1.0, 2015.08.10
 */
class CloudpushNoticeIosRequest
{
	/** 
	 * iOS的通知是通过APNS中心来发送的，需要填写对应的环境信息.  DEV:表示开发环境, PRODUCT: 表示生产环境.
	 **/
	private $env;
	
	/** 
	 * 提供给IOS通知的扩展属性，如角标或者声音等,注意：参数值为json
	 **/
	private $ext;
	
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
	
	private $apiParas = array();
	
	public function setEnv($env)
	{
		$this->env = $env;
		$this->apiParas["env"] = $env;
	}

	public function getEnv()
	{
		return $this->env;
	}

	public function setExt($ext)
	{
		$this->ext = $ext;
		$this->apiParas["ext"] = $ext;
	}

	public function getExt()
	{
		return $this->ext;
	}

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

	public function getApiMethodName()
	{
		return "taobao.cloudpush.notice.ios";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->env,"env");
		RequestCheckUtil::checkNotNull($this->summary,"summary");
		RequestCheckUtil::checkNotNull($this->target,"target");
		RequestCheckUtil::checkNotNull($this->targetValue,"targetValue");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
