<?php
/**
 * TOP API: taobao.baichuan.message.sendNotification request
 * 
 * @author auto create
 * @since 1.0, 2015.12.14
 */
class BaichuanMessageSendNotificationRequest
{
	/** 
	 * 通道类型 UMENG(1, "友盟"), JPUSH(2, "极光"),  XG(3, "信鸽"), GETUI(4, "个推");
	 **/
	private $channel;
	
	/** 
	 * 内容
	 **/
	private $contentText;
	
	/** 
	 * 扩展k/v
	 **/
	private $extraMap;
	
	/** 
	 * 大图标
	 **/
	private $largeIcon;
	
	/** 
	 * 消息描述
	 **/
	private $messageDesc;
	
	/** 
	 * 手机号码
	 **/
	private $mobileNumber;
	
	/** 
	 * 打开页面类型  1 表示打开应用 2 打开native页面 3 打开网页URL 4 打开应用自定义的schema
	 **/
	private $openType;
	
	/** 
	 * 打开页面的URL
	 **/
	private $openUrl;
	
	/** 
	 * 网关保存时间
	 **/
	private $saveTimeout;
	
	/** 
	 * 短信传递的变量
	 **/
	private $smsContext;
	
	/** 
	 * push超时后发sms（单位秒）
	 **/
	private $smsDelayTime;
	
	/** 
	 * sms_signature_id
	 **/
	private $smsSignatureId;
	
	/** 
	 * sms 模板Id
	 **/
	private $smsTemplateId;
	
	/** 
	 * 摘要
	 **/
	private $summary;
	
	/** 
	 * 设备devicetoken
	 **/
	private $targetDeviceToken;
	
	/** 
	 * 标题
	 **/
	private $title;
	
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

	public function setContentText($contentText)
	{
		$this->contentText = $contentText;
		$this->apiParas["content_text"] = $contentText;
	}

	public function getContentText()
	{
		return $this->contentText;
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

	public function setLargeIcon($largeIcon)
	{
		$this->largeIcon = $largeIcon;
		$this->apiParas["large_icon"] = $largeIcon;
	}

	public function getLargeIcon()
	{
		return $this->largeIcon;
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

	public function setMobileNumber($mobileNumber)
	{
		$this->mobileNumber = $mobileNumber;
		$this->apiParas["mobile_number"] = $mobileNumber;
	}

	public function getMobileNumber()
	{
		return $this->mobileNumber;
	}

	public function setOpenType($openType)
	{
		$this->openType = $openType;
		$this->apiParas["open_type"] = $openType;
	}

	public function getOpenType()
	{
		return $this->openType;
	}

	public function setOpenUrl($openUrl)
	{
		$this->openUrl = $openUrl;
		$this->apiParas["open_url"] = $openUrl;
	}

	public function getOpenUrl()
	{
		return $this->openUrl;
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

	public function setSmsContext($smsContext)
	{
		$this->smsContext = $smsContext;
		$this->apiParas["sms_context"] = $smsContext;
	}

	public function getSmsContext()
	{
		return $this->smsContext;
	}

	public function setSmsDelayTime($smsDelayTime)
	{
		$this->smsDelayTime = $smsDelayTime;
		$this->apiParas["sms_delay_time"] = $smsDelayTime;
	}

	public function getSmsDelayTime()
	{
		return $this->smsDelayTime;
	}

	public function setSmsSignatureId($smsSignatureId)
	{
		$this->smsSignatureId = $smsSignatureId;
		$this->apiParas["sms_signature_id"] = $smsSignatureId;
	}

	public function getSmsSignatureId()
	{
		return $this->smsSignatureId;
	}

	public function setSmsTemplateId($smsTemplateId)
	{
		$this->smsTemplateId = $smsTemplateId;
		$this->apiParas["sms_template_id"] = $smsTemplateId;
	}

	public function getSmsTemplateId()
	{
		return $this->smsTemplateId;
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

	public function setTargetDeviceToken($targetDeviceToken)
	{
		$this->targetDeviceToken = $targetDeviceToken;
		$this->apiParas["target_device_token"] = $targetDeviceToken;
	}

	public function getTargetDeviceToken()
	{
		return $this->targetDeviceToken;
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
		return "taobao.baichuan.message.sendNotification";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->contentText,"contentText");
		RequestCheckUtil::checkNotNull($this->messageDesc,"messageDesc");
		RequestCheckUtil::checkNotNull($this->targetDeviceToken,"targetDeviceToken");
		RequestCheckUtil::checkNotNull($this->title,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
