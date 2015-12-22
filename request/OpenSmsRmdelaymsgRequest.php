<?php
/**
 * TOP API: taobao.open.sms.rmdelaymsg request
 * 
 * @author auto create
 * @since 1.0, 2015.12.09
 */
class OpenSmsRmdelaymsgRequest
{
	/** 
	 * 删除延迟消息
	 **/
	private $paramRemoveDelayMessageRequest;
	
	private $apiParas = array();
	
	public function setParamRemoveDelayMessageRequest($paramRemoveDelayMessageRequest)
	{
		$this->paramRemoveDelayMessageRequest = $paramRemoveDelayMessageRequest;
		$this->apiParas["param_remove_delay_message_request"] = $paramRemoveDelayMessageRequest;
	}

	public function getParamRemoveDelayMessageRequest()
	{
		return $this->paramRemoveDelayMessageRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.open.sms.rmdelaymsg";
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
