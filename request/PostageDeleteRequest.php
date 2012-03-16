<?php
/**
 * TOP API: taobao.postage.delete request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class PostageDeleteRequest
{
	/** 
	 * 邮费模板id
	 **/
	private $postageId;
	
	private $apiParas = array();
	
	public function setPostageId($postageId)
	{
		$this->postageId = $postageId;
		$this->apiParas["postage_id"] = $postageId;
	}

	public function getPostageId()
	{
		return $this->postageId;
	}

	public function getApiMethodName()
	{
		return "taobao.postage.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->postageId,"postageId");
	}
}
