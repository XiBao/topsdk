<?php
/**
 * TOP API: taobao.tae.items.select request
 * 
 * @author auto create
 * @since 1.0, 2015.09.06
 */
class TaeItemsSelectRequest
{
	/** 
	 * 淘宝类目id
	 **/
	private $cid;
	
	/** 
	 * 结束价格，单位：元
	 **/
	private $endPrice;
	
	/** 
	 * 返回字段列表
	 **/
	private $fields;
	
	/** 
	 * 商品更新时间
	 **/
	private $modifiedTime;
	
	/** 
	 * 页码，传入大小以返回pageNo的下一页为准
	 **/
	private $pageNo;
	
	/** 
	 * 每页大小 小于200
	 **/
	private $pageSize;
	
	/** 
	 * 店铺类目id
	 **/
	private $sellerCids;
	
	/** 
	 * 卖家昵称，这个参数必须要传入才能获取卖家的商品数据。
	 **/
	private $sellerNick;
	
	/** 
	 * 开始价格，单位：元
	 **/
	private $startPrice;
	
	private $apiParas = array();
	
	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setEndPrice($endPrice)
	{
		$this->endPrice = $endPrice;
		$this->apiParas["end_price"] = $endPrice;
	}

	public function getEndPrice()
	{
		return $this->endPrice;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setModifiedTime($modifiedTime)
	{
		$this->modifiedTime = $modifiedTime;
		$this->apiParas["modified_time"] = $modifiedTime;
	}

	public function getModifiedTime()
	{
		return $this->modifiedTime;
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

	public function setSellerCids($sellerCids)
	{
		$this->sellerCids = $sellerCids;
		$this->apiParas["seller_cids"] = $sellerCids;
	}

	public function getSellerCids()
	{
		return $this->sellerCids;
	}

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function setStartPrice($startPrice)
	{
		$this->startPrice = $startPrice;
		$this->apiParas["start_price"] = $startPrice;
	}

	public function getStartPrice()
	{
		return $this->startPrice;
	}

	public function getApiMethodName()
	{
		return "taobao.tae.items.select";
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
