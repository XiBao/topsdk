<?php
/**
 * TOP API: taobao.open.sms.sendvercode request
 * 
 * @author auto create
 * @since 1.0, 2015.12.17
 */
class OpenSmsSendvercodeRequest
{
	/** 
	 * 发送验证码请求
	 **/
	private $sendVerCodeRequest;
	
	private $apiParas = array();
	
	public function setSendVerCodeRequest($sendVerCodeRequest)
	{
		$this->sendVerCodeRequest = $sendVerCodeRequest;
		$this->apiParas["send_ver_code_request"] = $sendVerCodeRequest;
	}

	public function getSendVerCodeRequest()
	{
		return $this->sendVerCodeRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.open.sms.sendvercode";
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
