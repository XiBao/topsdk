<?php
/**
 * TOP API: taobao.taohua.items.search request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class TaohuaItemsSearchRequest
{
	/** 
	 * 文件最小size,单位byte。
	 **/
	private $beginSize;
	
	/** 
	 * 类目id
	 **/
	private $cid;
	
	/** 
	 * 文件最大size,单位byte。
	 **/
	private $endSize;
	
	/** 
	 * 按照文件类型来搜索
	 **/
	private $fileType;
	
	/** 
	 * 是否免费，如果为true则表示只搜索免费的商品。
	 **/
	private $free;
	
	/** 
	 * 查询关键字,超过60好字符则自动截断为60个字符.  默认允许为null
	 **/
	private $keywords;
	
	/** 
	 * 分页搜索商品信息，page_no代表的是第几页
	 **/
	private $pageNo;
	
	/** 
	 * 分页搜索商品信息，page_size代表：每页显示多少条数据。  目前最少5条，最多30条数据。
	 **/
	private $pageSize;
	
	/** 
	 * 排序值:

1. 评分排序：ratescoredesc,
2. 价格升序: priceasc,
3. 价格降序: pricedesc,
4. 时间排序: shelvesdate,
5. 浏览排序：viewcount,
6. 销量升序：saleasc,
7. 默认排序：default,
	 **/
	private $sort;
	
	private $apiParas = array();
	
	public function setBeginSize($beginSize)
	{
		$this->beginSize = $beginSize;
		$this->apiParas["begin_size"] = $beginSize;
	}

	public function getBeginSize()
	{
		return $this->beginSize;
	}

	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setEndSize($endSize)
	{
		$this->endSize = $endSize;
		$this->apiParas["end_size"] = $endSize;
	}

	public function getEndSize()
	{
		return $this->endSize;
	}

	public function setFileType($fileType)
	{
		$this->fileType = $fileType;
		$this->apiParas["file_type"] = $fileType;
	}

	public function getFileType()
	{
		return $this->fileType;
	}

	public function setFree($free)
	{
		$this->free = $free;
		$this->apiParas["free"] = $free;
	}

	public function getFree()
	{
		return $this->free;
	}

	public function setKeywords($keywords)
	{
		$this->keywords = $keywords;
		$this->apiParas["keywords"] = $keywords;
	}

	public function getKeywords()
	{
		return $this->keywords;
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

	public function setSort($sort)
	{
		$this->sort = $sort;
		$this->apiParas["sort"] = $sort;
	}

	public function getSort()
	{
		return $this->sort;
	}

	public function getApiMethodName()
	{
		return "taobao.taohua.items.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageSize,30,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,5,"pageSize");
	}
}
