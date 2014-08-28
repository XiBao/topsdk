<?php
/**
 * TOP API: taobao.weitao.cloudtags.group.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class WeitaoCloudtagsGroupGetRequest
{
	/** 
	 * 分组状态
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.weitao.cloudtags.group.get";
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
