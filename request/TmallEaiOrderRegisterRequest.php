<?php
/**
 * TOP API: tmall.eai.order.register request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class TmallEaiOrderRegisterRequest
{
	/** 
	 * 对传入的事件的操作类型 0:取消订阅;1:订阅
	 **/
	private $action;
	
	/** 
	 * 1:主订单模式;
2:子订单模式;
天猫退款消息订阅默认子订单模式。
不传入即可。<br /> 支持的最大列表长度为：50
	 **/
	private $dataMode;
	
	/** 
	 * 需要订阅或者取消订阅的事件名称。
可选择的值如下所示:
RcRefundClosedEvent;
RcRefundPrepaidEvent;
RcReturnCreatedEvent;
RcRefundSucceedEvent;
RcRefundCreatedEvent;
RcRefundModifiedEvent;
RcReturnModifiedEvent;
RcRefundSellerRefuseEvent;
RcReturnConfirmFailedEvent;
RcRefundTaobaoInvolvedEvent;
RcRefundMessageCreatedEvent;
RcReturnConfirmSucceedEvent;
RcRefundPaymentFinishedEvent;
RcRefundRefundableMarkedEvent;
RcReturnBuyerReturnGoodsEvent;
RcRefundSellerAgreeReturnEvent;
RcRefundRefundableCanceledEvent;<br /> 支持最大长度为：50<br /> 支持的最大列表长度为：50
	 **/
	private $eventName;
	
	/** 
	 * 天猫退款订单可选topic:
tmall.eai.order.refund.refundBill.push;
tmall.eai.order.refund.refundStatus.push
	 **/
	private $topic;
	
	/** 
	 * 标识出用户类型。
这里“用户”指的是外部开发者。
0:TOP-OPEN-API 用户
1:JIP用户
	 **/
	private $userType;
	
	private $apiParas = array();
	
	public function setAction($action)
	{
		$this->action = $action;
		$this->apiParas["action"] = $action;
	}

	public function getAction()
	{
		return $this->action;
	}

	public function setDataMode($dataMode)
	{
		$this->dataMode = $dataMode;
		$this->apiParas["data_mode"] = $dataMode;
	}

	public function getDataMode()
	{
		return $this->dataMode;
	}

	public function setEventName($eventName)
	{
		$this->eventName = $eventName;
		$this->apiParas["event_name"] = $eventName;
	}

	public function getEventName()
	{
		return $this->eventName;
	}

	public function setTopic($topic)
	{
		$this->topic = $topic;
		$this->apiParas["topic"] = $topic;
	}

	public function getTopic()
	{
		return $this->topic;
	}

	public function setUserType($userType)
	{
		$this->userType = $userType;
		$this->apiParas["user_type"] = $userType;
	}

	public function getUserType()
	{
		return $this->userType;
	}

	public function getApiMethodName()
	{
		return "tmall.eai.order.register";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->action,"action");
		RequestCheckUtil::checkNotNull($this->eventName,"eventName");
		RequestCheckUtil::checkMaxLength($this->eventName,50,"eventName");
		RequestCheckUtil::checkNotNull($this->topic,"topic");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
