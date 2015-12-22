<?php
/**
 * TOP API: taobao.open.sms.sendmsg request
 * 
 * @author auto create
 * @since 1.0, 2015.12.17
 */
class OpenSmsSendmsgRequest
{
	/** 
	 * 发送短信请求
	 **/
	private $sendMessageRequest;
	
	private $apiParas = array();
	
	public function setSendMessageRequest($sendMessageRequest)
	{
		$this->sendMessageRequest = $sendMessageRequest;
		$this->apiParas["send_message_request"] = $sendMessageRequest;
	}

	public function getSendMessageRequest()
	{
		return $this->sendMessageRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.open.sms.sendmsg";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
