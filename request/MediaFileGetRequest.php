<?php
/**
 * TOP API: taobao.media.file.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class MediaFileGetRequest
{
	/** 
	 * 多媒体应用接入biz_code
	 **/
	private $bizCode;
	
	/** 
	 * 分类id<br /> 支持最大值为：9223372036854775807
	 **/
	private $dirId;
	
	/** 
	 * 查询上传结束时间点,格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $endDate;
	
	/** 
	 * 文件id<br /> 支持最大值为：9223372036854775807
	 **/
	private $fileId;
	
	/** 
	 * 文件名称查询，like查询
	 **/
	private $name;
	
	/** 
	 * 图片查询结果排序,time:desc按上传时间从晚到早(默认), time:asc按上传时间从早到晚,sizes:desc按图片从大到小，sizes:asc按图片从小到大,默认time:desc
	 **/
	private $orderBy;
	
	/** 
	 * 页码.传入值为1代表第一页,传入值为2代表第二页,依此类推,默认值为1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数.每页返回最多返回100条,默认值40
	 **/
	private $pageSize;
	
	/** 
	 * 查询上传开始时间点,格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $startDate;
	
	/** 
	 * 图片url查询接口
	 **/
	private $urls;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setDirId($dirId)
	{
		$this->dirId = $dirId;
		$this->apiParas["dir_id"] = $dirId;
	}

	public function getDirId()
	{
		return $this->dirId;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setFileId($fileId)
	{
		$this->fileId = $fileId;
		$this->apiParas["file_id"] = $fileId;
	}

	public function getFileId()
	{
		return $this->fileId;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
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

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setUrls($urls)
	{
		$this->urls = $urls;
		$this->apiParas["urls"] = $urls;
	}

	public function getUrls()
	{
		return $this->urls;
	}

	public function getApiMethodName()
	{
		return "taobao.media.file.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkMaxValue($this->dirId,9223372036854775807,"dirId");
		RequestCheckUtil::checkMaxValue($this->fileId,9223372036854775807,"fileId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
