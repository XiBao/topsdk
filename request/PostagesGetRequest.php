<?php
/**
 * TOP API: taobao.postages.get request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class PostagesGetRequest
{
	/** 
	 * 需返回的字段列表.可选值:Postage结构体中的所有字段;字段之间用","分隔.
	 **/
	private $fields;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function getApiMethodName()
	{
		return "taobao.postages.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
}
