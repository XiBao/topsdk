<?php
/**
 * TOP API: taobao.crm.groups.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class CrmGroupsGetRequest
{
	/** 
	 * 显示第几页的分组，如果输入的页码大于总共的页码数，例如总共10页，但是current_page的值为11，则返回空白页，最小页码为1<br /> 支持最大值为：1000000<br /> 支持最小值为：1<br /> 支持的最大列表长度为：3
	 **/
	private $currentPage;
	
	/** 
	 * 每页显示的记录数，其最大值不能超过100条，最小值为1，默认20条<br /> 支持最大值为：100<br /> 支持最小值为：1<br /> 支持的最大列表长度为：3
	 **/
	private $pageSize;
	
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
		return "taobao.crm.groups.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->currentPage,"currentPage");
		RequestCheckUtil::checkMaxValue($this->currentPage,1000000,"currentPage");
		RequestCheckUtil::checkMinValue($this->currentPage,1,"currentPage");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
