<?php
/**
 * TOP API: taobao.crm.members.increment.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class CrmMembersIncrementGetRequest
{
	/** 
	 * 显示第几页的会员，如果输入的页码大于总共的页码数，例如总共10页，但是current_page的值为11，则返回空白页，最小页数为1<br /> 支持最小值为：1
	 **/
	private $currentPage;
	
	/** 
	 * 卖家修改会员信息的时间终点.如果不填写此字段,默认为当前时间.
	 **/
	private $endModify;
	
	/** 
	 * 会员等级，0：店铺客户，1：普通会员，2：高级会员，3：VIP会员， 4：至尊VIP会员<br /> 支持最大值为：4<br /> 支持最小值为：-1<br /> 支持的最大列表长度为：32
	 **/
	private $grade;
	
	/** 
	 * 每页显示的会员数，page_size的值不能超过100，最小值要大于1<br /> 支持最大值为：100<br /> 支持最小值为：1
	 **/
	private $pageSize;
	
	/** 
	 * 卖家修改会员信息的时间起点.
	 **/
	private $startModify;
	
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

	public function setEndModify($endModify)
	{
		$this->endModify = $endModify;
		$this->apiParas["end_modify"] = $endModify;
	}

	public function getEndModify()
	{
		return $this->endModify;
	}

	public function setGrade($grade)
	{
		$this->grade = $grade;
		$this->apiParas["grade"] = $grade;
	}

	public function getGrade()
	{
		return $this->grade;
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

	public function setStartModify($startModify)
	{
		$this->startModify = $startModify;
		$this->apiParas["start_modify"] = $startModify;
	}

	public function getStartModify()
	{
		return $this->startModify;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.members.increment.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->currentPage,"currentPage");
		RequestCheckUtil::checkMinValue($this->currentPage,1,"currentPage");
		RequestCheckUtil::checkMaxValue($this->grade,4,"grade");
		RequestCheckUtil::checkMinValue($this->grade,-1,"grade");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
