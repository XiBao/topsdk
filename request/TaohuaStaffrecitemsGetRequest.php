<?php
/**
 * TOP API: taobao.taohua.staffrecitems.get request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class TaohuaStaffrecitemsGetRequest
{
	/** 
	 * 推荐的商品类型:
1. free:获取推荐的免费商品
2. charges:获取推荐的收费商品
	 **/
	private $itemType;
	
	/** 
	 * 当前页数，大于0的整数，默认值1，代表第一页
	 **/
	private $pageNo;
	
	/** 
	 * 每页显示最大条数，要求：大于0的整数。默认为5，代表每页显示5条
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setItemType($itemType)
	{
		$this->itemType = $itemType;
		$this->apiParas["item_type"] = $itemType;
	}

	public function getItemType()
	{
		return $this->itemType;
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

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function getApiMethodName()
	{
		return "taobao.taohua.staffrecitems.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemType,"itemType");
	}
}
