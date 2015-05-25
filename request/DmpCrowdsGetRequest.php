<?php
/**
 * TOP API: taobao.dmp.crowds.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpCrowdsGetRequest
{
	/** 
	 * 0只返回app创建的人群,1返回所有人群
	 **/
	private $isQueryAll;
	
	/** 
	 * 最大的记录数
	 **/
	private $limit;
	
	/** 
	 * 查询的起始位置
	 **/
	private $offset;
	
	private $apiParas = array();
	
	public function setIsQueryAll($isQueryAll)
	{
		$this->isQueryAll = $isQueryAll;
		$this->apiParas["is_query_all"] = $isQueryAll;
	}

	public function getIsQueryAll()
	{
		return $this->isQueryAll;
	}

	public function setLimit($limit)
	{
		$this->limit = $limit;
		$this->apiParas["limit"] = $limit;
	}

	public function getLimit()
	{
		return $this->limit;
	}

	public function setOffset($offset)
	{
		$this->offset = $offset;
		$this->apiParas["offset"] = $offset;
	}

	public function getOffset()
	{
		return $this->offset;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.crowds.get";
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
