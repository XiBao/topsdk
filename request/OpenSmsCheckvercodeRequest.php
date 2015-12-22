<?php
/**
 * TOP API: taobao.open.sms.checkvercode request
 * 
 * @author auto create
 * @since 1.0, 2015.08.28
 */
class OpenSmsCheckvercodeRequest
{
	/** 
	 * 验证验证码
	 **/
	private $checkVerCodeRequest;
	
	private $apiParas = array();
	
	public function setCheckVerCodeRequest($checkVerCodeRequest)
	{
		$this->checkVerCodeRequest = $checkVerCodeRequest;
		$this->apiParas["check_ver_code_request"] = $checkVerCodeRequest;
	}

	public function getCheckVerCodeRequest()
	{
		return $this->checkVerCodeRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.open.sms.checkvercode";
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
