<?php
/**
 * TOP API: taobao.open.sms.batchsendmsg request
 * 
 * @author auto create
 * @since 1.0, 2015.12.17
 */
class OpenSmsBatchsendmsgRequest
{
	/** 
	 * 参数列表
	 **/
	private $params;
	
	private $apiParas = array();
	
	public function setParams($params)
	{
		$this->params = $params;
		$this->apiParas["params"] = $params;
	}

	public function getParams()
	{
		return $this->params;
	}

	public function getApiMethodName()
	{
		return "taobao.open.sms.batchsendmsg";
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
