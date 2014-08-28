<?php
/**
 * TOP API: tmall.traderate.cattags.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class TmallTraderateCattagsGetRequest
{
	/** 
	 * 类目ID
	 **/
	private $catId;
	
	private $apiParas = array();
	
	public function setCatId($catId)
	{
		$this->catId = $catId;
		$this->apiParas["cat_id"] = $catId;
	}

	public function getCatId()
	{
		return $this->catId;
	}

	public function getApiMethodName()
	{
		return "tmall.traderate.cattags.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->catId,"catId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
