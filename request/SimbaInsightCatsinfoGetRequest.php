<?php
/**
 * TOP API: taobao.simba.insight.catsinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class SimbaInsightCatsinfoGetRequest
{
	/** 
	 * 需要查询的类目id
	 **/
	private $categoryIdList;
	
	/** 
	 * 表示请求的类型：0表示请求所有顶级类目的信息，这时可以忽略第二个参数，1表示获取给定的类目id的详细信息，2表示获取给定类目id的所有子类目的详细信息
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setCategoryIdList($categoryIdList)
	{
		$this->categoryIdList = $categoryIdList;
		$this->apiParas["category_id_list"] = $categoryIdList;
	}

	public function getCategoryIdList()
	{
		return $this->categoryIdList;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.insight.catsinfo.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->categoryIdList,20,"categoryIdList");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
