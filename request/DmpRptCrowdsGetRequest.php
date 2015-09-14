<?php
/**
 * TOP API: taobao.dmp.rpt.crowds.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpRptCrowdsGetRequest
{
	/** 
	 * 人群效果查询对象
	 **/
	private $crowdRptQuery;
	
	/** 
	 * 从1开始
	 **/
	private $currentPage;
	
	/** 
	 * 默认值为15
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setCrowdRptQuery($crowdRptQuery)
	{
		$this->crowdRptQuery = $crowdRptQuery;
		$this->apiParas["crowd_rpt_query"] = $crowdRptQuery;
	}

	public function getCrowdRptQuery()
	{
		return $this->crowdRptQuery;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
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
		return "taobao.dmp.rpt.crowds.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->currentPage,"currentPage");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
