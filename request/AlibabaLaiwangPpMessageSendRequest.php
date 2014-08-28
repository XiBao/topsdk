<?php
/**
 * TOP API: alibaba.laiwang.pp.message.send request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class AlibabaLaiwangPpMessageSendRequest
{
	/** 
	 * 发送的消息体，使用json格式来进行发送.
	 **/
	private $message;
	
	private $apiParas = array();
	
	public function setMessage($message)
	{
		$this->message = $message;
		$this->apiParas["message"] = $message;
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function getApiMethodName()
	{
		return "alibaba.laiwang.pp.message.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->message,"message");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
