<?php
/**
 * TOP API: taobao.ump.tool.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class UmpToolGetRequest
{
	/** 
	 * 工具的id
	 **/
	private $toolId;
	
	private $apiParas = array();
	
	public function setToolId($toolId)
	{
		$this->toolId = $toolId;
		$this->apiParas["tool_id"] = $toolId;
	}

	public function getToolId()
	{
		return $this->toolId;
	}

	public function getApiMethodName()
	{
		return "taobao.ump.tool.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->toolId,"toolId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
