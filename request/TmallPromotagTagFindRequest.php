<?php
/**
 * TOP API: tmall.promotag.tag.find request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class TmallPromotagTagFindRequest
{
	/** 
	 * 当前页码<br /> 支持的最大列表长度为：10
	 **/
	private $pageNo;
	
	/** 
	 * 每页显示个数<br /> 支持最大值为：100<br /> 支持最小值为：1<br /> 支持的最大列表长度为：100
	 **/
	private $pageSize;
	
	/** 
	 * 标签ID
	 **/
	private $tagId;
	
	/** 
	 * 标签名称，查询时可选项
	 **/
	private $tagName;
	
	private $apiParas = array();
	
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

	public function setTagId($tagId)
	{
		$this->tagId = $tagId;
		$this->apiParas["tag_id"] = $tagId;
	}

	public function getTagId()
	{
		return $this->tagId;
	}

	public function setTagName($tagName)
	{
		$this->tagName = $tagName;
		$this->apiParas["tag_name"] = $tagName;
	}

	public function getTagName()
	{
		return $this->tagName;
	}

	public function getApiMethodName()
	{
		return "tmall.promotag.tag.find";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
