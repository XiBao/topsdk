<?php
/**
 * TOP API: taobao.weitao.comments.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class WeitaoCommentsGetRequest
{
	/** 
	 * 翻页时当前页，如果time_stamp参数不设置，此值必需传入<br /> 支持最小值为：1
	 **/
	private $currentPage;
	
	/** 
	 * 向前后翻页，direction=0，向上翻;direction=1 向下翻<br /> 支持最大值为：1<br /> 支持最小值为：0<br /> 支持的最大列表长度为：2
	 **/
	private $direction;
	
	/** 
	 * 查询评论所对应feed的Id<br /> 支持最小值为：1
	 **/
	private $feedId;
	
	/** 
	 * 翻页查询一页大小<br /> 支持最大值为：100<br /> 支持最小值为：1
	 **/
	private $pageSize;
	
	/** 
	 * 翻页时间戳，没有时间参数，则说明是跳页查询或者第一页，current_page有效，direction无效；有时间参数，则说明是上下翻页，current_page无效，direction有效；
如果current_page=1，则time_stamp无效，强制刷新为第一页。<br /> 支持的最大列表长度为：15
	 **/
	private $timeStamp;
	
	private $apiParas = array();
	
	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setDirection($direction)
	{
		$this->direction = $direction;
		$this->apiParas["direction"] = $direction;
	}

	public function getDirection()
	{
		return $this->direction;
	}

	public function setFeedId($feedId)
	{
		$this->feedId = $feedId;
		$this->apiParas["feed_id"] = $feedId;
	}

	public function getFeedId()
	{
		return $this->feedId;
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

	public function setTimeStamp($timeStamp)
	{
		$this->timeStamp = $timeStamp;
		$this->apiParas["time_stamp"] = $timeStamp;
	}

	public function getTimeStamp()
	{
		return $this->timeStamp;
	}

	public function getApiMethodName()
	{
		return "taobao.weitao.comments.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->currentPage,1,"currentPage");
		RequestCheckUtil::checkMaxValue($this->direction,1,"direction");
		RequestCheckUtil::checkMinValue($this->direction,0,"direction");
		RequestCheckUtil::checkNotNull($this->feedId,"feedId");
		RequestCheckUtil::checkMinValue($this->feedId,1,"feedId");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
