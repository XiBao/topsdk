<?php
/**
 * TOP API: taobao.baichuan.message.sendMessage request
 * 
 * @author auto create
 * @since 1.0, 2015.12.09
 */
class BaichuanMessageSendMessageRequest
{
	/** 
	 * 通道类型 UMENG(1, "友盟"), JPUSH(2, "极光"), XG(3, "信鸽"), GETUI(4, "个推"); 默认友盟
	 **/
	private $channel;
	
	/** 
	 * 扩展k/v
	 **/
	private $extraMap;
	
	/** 
	 * 消息体
	 **/
	private $message;
	
	/** 
	 * 消息描述
	 **/
	private $messageDesc;
	
	/** 
	 * 网关保存时间 默认1小时
	 **/
	private $saveTimeout;
	
	/** 
	 * 设备码
	 **/
	private $targetDeviceToken;
	
	private $apiParas = array();
	
	public function setChannel($channel)
	{
		$this->channel = $channel;
		$this->apiParas["channel"] = $channel;
	}

	public function getChannel()
	{
		return $this->channel;
	}

	public function setExtraMap($extraMap)
	{
		$this->extraMap = $extraMap;
		$this->apiParas["extra_map"] = $extraMap;
	}

	public function getExtraMap()
	{
		return $this->extraMap;
	}

	public function setMessage($message)
	{
		$this->message = $message;
		$this->apiParas["message"] = $message;
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function setMessageDesc($messageDesc)
	{
		$this->messageDesc = $messageDesc;
		$this->apiParas["message_desc"] = $messageDesc;
	}

	public function getMessageDesc()
	{
		return $this->messageDesc;
	}

	public function setSaveTimeout($saveTimeout)
	{
		$this->saveTimeout = $saveTimeout;
		$this->apiParas["save_timeout"] = $saveTimeout;
	}

	public function getSaveTimeout()
	{
		return $this->saveTimeout;
	}

	public function setTargetDeviceToken($targetDeviceToken)
	{
		$this->targetDeviceToken = $targetDeviceToken;
		$this->apiParas["target_device_token"] = $targetDeviceToken;
	}

	public function getTargetDeviceToken()
	{
		return $this->targetDeviceToken;
	}

	public function getApiMethodName()
	{
		return "taobao.baichuan.message.sendMessage";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->message,"message");
		RequestCheckUtil::checkNotNull($this->messageDesc,"messageDesc");
		RequestCheckUtil::checkNotNull($this->targetDeviceToken,"targetDeviceToken");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
