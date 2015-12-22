<?php
/**
 * TOP API: taobao.iselect.items.get request
 * 
 * @author auto create
 * @since 1.0, 2015.03.18
 */
class IselectItemsGetRequest
{
	/** 
	 * 页序，第一页从0开始
	 **/
	private $page;
	
	/** 
	 * 每页数量，取值1～100
	 **/
	private $pageSize;
	
	/** 
	 * 选品标签id列表，最多5个
	 **/
	private $tagIds;
	
	private $apiParas = array();
	
	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
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

	public function setTagIds($tagIds)
	{
		$this->tagIds = $tagIds;
		$this->apiParas["tag_ids"] = $tagIds;
	}

	public function getTagIds()
	{
		return $this->tagIds;
	}

	public function getApiMethodName()
	{
		return "taobao.iselect.items.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->page,"page");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->tagIds,"tagIds");
		RequestCheckUtil::checkMaxListSize($this->tagIds,5,"tagIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
