<?php
/**
 * TOP API: taobao.waimai.itemlist.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class WaimaiItemlistGetRequest
{
	/** 
	 * 外卖前台类目id<br /> 支持的最大列表长度为：11
	 **/
	private $categoryId;
	
	/** 
	 * 商品截止修改时间格式如(2013-10-25 00:00：00)
	 **/
	private $endModified;
	
	/** 
	 * 只返回对应的字段信息，可输入(itemid,title,price,oriprice,goods_no,auction_status,quantity,auction_desc,pic_url,category_id,limit_buy,viceImage,sku,recommend,create_time,modify_time)，多个以英文逗号分隔
	 **/
	private $fields;
	
	/** 
	 * 外卖宝贝标题关键字
	 **/
	private $keyword;
	
	/** 
	 * 格式为column:asc/desc ，column可选值:modify_time(修改时间),price(宝贝价格); 默认修改降序(即最新上架及修改的排在前面)。如按照上架时间降序排序方式为modify_time:desc
	 **/
	private $orderBy;
	
	/** 
	 * 查询菜品的页码。1则为第一页<br /> 支持最大值为：500<br /> 支持最小值为：1<br /> 支持的最大列表长度为：3
	 **/
	private $pageNo;
	
	/** 
	 * 每一次查询返回的条数<br /> 支持最大值为：500<br /> 支持最小值为：1
	 **/
	private $pageSize;
	
	/** 
	 * 出售中宝贝1,仓库中宝贝2,所有宝贝0<br /> 支持最大值为：2<br /> 支持最小值为：0<br /> 支持的最大列表长度为：1
	 **/
	private $salesStatus;
	
	/** 
	 * 外卖数字型店铺id<br /> 支持的最大列表长度为：9
	 **/
	private $shopid;
	
	/** 
	 * 商品起始的修改时间格式如(2013-10-22 00:00：00)
	 **/
	private $startModified;
	
	private $apiParas = array();
	
	public function setCategoryId($categoryId)
	{
		$this->categoryId = $categoryId;
		$this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
	}

	public function setEndModified($endModified)
	{
		$this->endModified = $endModified;
		$this->apiParas["end_modified"] = $endModified;
	}

	public function getEndModified()
	{
		return $this->endModified;
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

	public function setKeyword($keyword)
	{
		$this->keyword = $keyword;
		$this->apiParas["keyword"] = $keyword;
	}

	public function getKeyword()
	{
		return $this->keyword;
	}

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
		$this->apiParas["order_by"] = $orderBy;
	}

	public function getOrderBy()
	{
		return $this->orderBy;
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

	public function setSalesStatus($salesStatus)
	{
		$this->salesStatus = $salesStatus;
		$this->apiParas["sales_status"] = $salesStatus;
	}

	public function getSalesStatus()
	{
		return $this->salesStatus;
	}

	public function setShopid($shopid)
	{
		$this->shopid = $shopid;
		$this->apiParas["shopid"] = $shopid;
	}

	public function getShopid()
	{
		return $this->shopid;
	}

	public function setStartModified($startModified)
	{
		$this->startModified = $startModified;
		$this->apiParas["start_modified"] = $startModified;
	}

	public function getStartModified()
	{
		return $this->startModified;
	}

	public function getApiMethodName()
	{
		return "taobao.waimai.itemlist.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageNo,500,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,500,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->salesStatus,"salesStatus");
		RequestCheckUtil::checkMaxValue($this->salesStatus,2,"salesStatus");
		RequestCheckUtil::checkMinValue($this->salesStatus,0,"salesStatus");
		RequestCheckUtil::checkNotNull($this->shopid,"shopid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
