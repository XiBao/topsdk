<?php
/**
 * TOP API: taobao.cloudpush.push request
 * 
 * @author auto create
 * @since 1.0, 2015.11.16
 */
class CloudpushPushRequest
{
	/** 
	 * Android对应的activity,仅仅当androidOpenType=2有效
	 **/
	private $androidActivity;
	
	/** 
	 * 自定义的kv结构,开发者扩展用 针对android
	 **/
	private $androidExtParameters;
	
	/** 
	 * android通知声音
	 **/
	private $androidMusic;
	
	/** 
	 * 点击通知后动作,1:打开应用 2: 打开应用Activity 3:打开 url
	 **/
	private $androidOpenType;
	
	/** 
	 * Android收到推送后打开对应的url,仅仅当androidOpenType=3有效
	 **/
	private $androidOpenUrl;
	
	/** 
	 * 防打扰时长,取值范围为1~23
	 **/
	private $antiHarassDuration;
	
	/** 
	 * 防打扰开始时间点,取值范围为0~23
	 **/
	private $antiHarassStartTime;
	
	/** 
	 * 批次编号,用于活动效果统计
	 **/
	private $batchNumber;
	
	/** 
	 * 推送内容
	 **/
	private $body;
	
	/** 
	 * 设备类型,取值范围为:0~3云推送支持多种设备,各种设备类型编号如下:    iOS设备:deviceType=0; Andriod设备:deviceType=1;如果存在此字段,则向指定的设备类型推送消息。 默认为全部(3);
	 **/
	private $deviceType;
	
	/** 
	 * iOS应用图标右上角角标
	 **/
	private $iosBadge;
	
	/** 
	 * 自定义的kv结构,开发者扩展用 针对iOS设备
	 **/
	private $iosExtParameters;
	
	/** 
	 * iOS通知声音
	 **/
	private $iosMusic;
	
	/** 
	 * 当APP不在线时候，是否通过通知提醒.  针对不同设备，处理逻辑不同。 该参数只针对iOS设备生效， (remind=true  & 发送消息的话(type=0)). 当你的目标设备不在线(既长连接通道不通, 我们会将这条消息的标题，通过苹果的apns通道再送达一次。发apns是发送生产环境的apns，需要在云推送配置的app的iOS生产证书和密码需要正确，否则也发送不了。 (remind=false & 并且是发送消息的话(type=0))，那么设备不在线，则不会再走苹果apns发送了。
	 **/
	private $remind;
	
	/** 
	 * 离线消息是否保存,若保存, 在推送时候，用户即使不在线，下一次上线则会收到
	 **/
	private $storeOffline;
	
	/** 
	 * 通知的摘要
	 **/
	private $summery;
	
	/** 
	 * 推送目标: device:推送给设备; account:推送给指定帐号,tag:推送给自定义标签; all: 推送给全部
	 **/
	private $target;
	
	/** 
	 * 根据Target来设定，如Target=device, 则对应的值为 设备id1,设备id2. 多个值使用逗号分隔.(帐号与设备有一次最多100个的限制)
	 **/
	private $targetValue;
	
	/** 
	 * 离线消息保存时长,取值范围为1~72,若不填,则表示不保存离线消息
	 **/
	private $timeout;
	
	/** 
	 * 推送的标题内容.
	 **/
	private $title;
	
	/** 
	 * 0:表示消息(默认为0),1:表示通知
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setAndroidActivity($androidActivity)
	{
		$this->androidActivity = $androidActivity;
		$this->apiParas["android_activity"] = $androidActivity;
	}

	public function getAndroidActivity()
	{
		return $this->androidActivity;
	}

	public function setAndroidExtParameters($androidExtParameters)
	{
		$this->androidExtParameters = $androidExtParameters;
		$this->apiParas["android_ext_parameters"] = $androidExtParameters;
	}

	public function getAndroidExtParameters()
	{
		return $this->androidExtParameters;
	}

	public function setAndroidMusic($androidMusic)
	{
		$this->androidMusic = $androidMusic;
		$this->apiParas["android_music"] = $androidMusic;
	}

	public function getAndroidMusic()
	{
		return $this->androidMusic;
	}

	public function setAndroidOpenType($androidOpenType)
	{
		$this->androidOpenType = $androidOpenType;
		$this->apiParas["android_open_type"] = $androidOpenType;
	}

	public function getAndroidOpenType()
	{
		return $this->androidOpenType;
	}

	public function setAndroidOpenUrl($androidOpenUrl)
	{
		$this->androidOpenUrl = $androidOpenUrl;
		$this->apiParas["android_open_url"] = $androidOpenUrl;
	}

	public function getAndroidOpenUrl()
	{
		return $this->androidOpenUrl;
	}

	public function setAntiHarassDuration($antiHarassDuration)
	{
		$this->antiHarassDuration = $antiHarassDuration;
		$this->apiParas["anti_harass_duration"] = $antiHarassDuration;
	}

	public function getAntiHarassDuration()
	{
		return $this->antiHarassDuration;
	}

	public function setAntiHarassStartTime($antiHarassStartTime)
	{
		$this->antiHarassStartTime = $antiHarassStartTime;
		$this->apiParas["anti_harass_start_time"] = $antiHarassStartTime;
	}

	public function getAntiHarassStartTime()
	{
		return $this->antiHarassStartTime;
	}

	public function setBatchNumber($batchNumber)
	{
		$this->batchNumber = $batchNumber;
		$this->apiParas["batch_number"] = $batchNumber;
	}

	public function getBatchNumber()
	{
		return $this->batchNumber;
	}

	public function setBody($body)
	{
		$this->body = $body;
		$this->apiParas["body"] = $body;
	}

	public function getBody()
	{
		return $this->body;
	}

	public function setDeviceType($deviceType)
	{
		$this->deviceType = $deviceType;
		$this->apiParas["device_type"] = $deviceType;
	}

	public function getDeviceType()
	{
		return $this->deviceType;
	}

	public function setIosBadge($iosBadge)
	{
		$this->iosBadge = $iosBadge;
		$this->apiParas["ios_badge"] = $iosBadge;
	}

	public function getIosBadge()
	{
		return $this->iosBadge;
	}

	public function setIosExtParameters($iosExtParameters)
	{
		$this->iosExtParameters = $iosExtParameters;
		$this->apiParas["ios_ext_parameters"] = $iosExtParameters;
	}

	public function getIosExtParameters()
	{
		return $this->iosExtParameters;
	}

	public function setIosMusic($iosMusic)
	{
		$this->iosMusic = $iosMusic;
		$this->apiParas["ios_music"] = $iosMusic;
	}

	public function getIosMusic()
	{
		return $this->iosMusic;
	}

	public function setRemind($remind)
	{
		$this->remind = $remind;
		$this->apiParas["remind"] = $remind;
	}

	public function getRemind()
	{
		return $this->remind;
	}

	public function setStoreOffline($storeOffline)
	{
		$this->storeOffline = $storeOffline;
		$this->apiParas["store_offline"] = $storeOffline;
	}

	public function getStoreOffline()
	{
		return $this->storeOffline;
	}

	public function setSummery($summery)
	{
		$this->summery = $summery;
		$this->apiParas["summery"] = $summery;
	}

	public function getSummery()
	{
		return $this->summery;
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

	public function setTimeout($timeout)
	{
		$this->timeout = $timeout;
		$this->apiParas["timeout"] = $timeout;
	}

	public function getTimeout()
	{
		return $this->timeout;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.cloudpush.push";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->body,"body");
		RequestCheckUtil::checkNotNull($this->deviceType,"deviceType");
		RequestCheckUtil::checkNotNull($this->remind,"remind");
		RequestCheckUtil::checkNotNull($this->storeOffline,"storeOffline");
		RequestCheckUtil::checkNotNull($this->target,"target");
		RequestCheckUtil::checkNotNull($this->targetValue,"targetValue");
		RequestCheckUtil::checkNotNull($this->title,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
