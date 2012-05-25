<?php
/**
 * TOP API: taobao.taohua.itemcomments.get request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class TaohuaItemcommentsGetRequest
{
	/** 
	 * 指定商品的ID
	 **/
	private $itemId;
	
	/** 
	 * 页码。
取值范围：大于零的整数
默认值：1 即返回第一页数据
	 **/
	private $pageNo;
	
	/** 
	 * 每页记录数
取值范围：大于零的整数 
默认值：10 即每页返回10条数据
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
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
		return "taobao.taohua.itemcomments.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
	}
}
