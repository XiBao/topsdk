<?php
/**
 * TOP API: taobao.hotel.sold.types.increment.get request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class HotelSoldTypesIncrementGetRequest
{
	/** 
	 * 查询修改结束时间，必须大于修改开始时间（修改时间跨度不能大于1天）。格式：yyyy-MM-dd HH:mm:ss
	 **/
	private $endModified;
	
	/** 
	 * 分页页码。取值范围，大于零的整数，默认值1，即返回第一页的数据。
	 **/
	private $pageNo;
	
	/** 
	 * 页面大小，取值范围1-100，默认大小20。
	 **/
	private $pageSize;
	
	/** 
	 * 查询修改开始时间（修改时间跨度不能大于1天）。格式：yyyy-MM-dd HH:mm:ss
	 **/
	private $startModified;
	
	/** 
	 * 是否使用has_next的分页方式，如果指定true，则返回的结果中不包含总记录数，但是会新增一个是否存在下一页的字段，效率比总记录数高
	 **/
	private $useHasNext;
	
	private $apiParas = array();
	
	public function setEndModified($endModified)
	{
		$this->endModified = $endModified;
		$this->apiParas["end_modified"] = $endModified;
	}

	public function getEndModified()
	{
		return $this->endModified;
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

	public function setStartModified($startModified)
	{
		$this->startModified = $startModified;
		$this->apiParas["start_modified"] = $startModified;
	}

	public function getStartModified()
	{
		return $this->startModified;
	}

	public function setUseHasNext($useHasNext)
	{
		$this->useHasNext = $useHasNext;
		$this->apiParas["use_has_next"] = $useHasNext;
	}

	public function getUseHasNext()
	{
		return $this->useHasNext;
	}

	public function getApiMethodName()
	{
		return "taobao.hotel.sold.types.increment.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endModified,"endModified");
		RequestCheckUtil::checkNotNull($this->startModified,"startModified");
	}
}
