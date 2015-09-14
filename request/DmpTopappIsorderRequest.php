<?php
/**
 * TOP API: taobao.dmp.topapp.isorder request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpTopappIsorderRequest
{
	/** 
	 * query对象
	 **/
	private $topQuery;
	
	private $apiParas = array();
	
	public function setTopQuery($topQuery)
	{
		$this->topQuery = $topQuery;
		$this->apiParas["top_query"] = $topQuery;
	}

	public function getTopQuery()
	{
		return $this->topQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.topapp.isorder";
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
