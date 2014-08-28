<?php
/**
 * TOP API: taobao.favorite.search request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class FavoriteSearchRequest
{
	/** 
	 * ITEM表示宝贝，SHOP表示商铺，collect_type只能为这两者之一<br /> 支持最大长度为：4<br /> 支持的最大列表长度为：4
	 **/
	private $collectType;
	
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1。一页20条记录。<br /> 支持最大值为：100<br /> 支持最小值为：1<br /> 支持的最大列表长度为：20
	 **/
	private $pageNo;
	
	private $apiParas = array();
	
	public function setCollectType($collectType)
	{
		$this->collectType = $collectType;
		$this->apiParas["collect_type"] = $collectType;
	}

	public function getCollectType()
	{
		return $this->collectType;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function getApiMethodName()
	{
		return "taobao.favorite.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->collectType,"collectType");
		RequestCheckUtil::checkMaxLength($this->collectType,4,"collectType");
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageNo,100,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
