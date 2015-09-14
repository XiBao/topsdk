<?php
/**
 * TOP API: taobao.dmp.tageffectfeedback.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpTageffectfeedbackGetRequest
{
	/** 
	 * 需要请求的效果字段，英文逗号隔开
	 **/
	private $columns;
	
	/** 
	 * 返回数据的第N页
	 **/
	private $page;
	
	/** 
	 * 返回数据，每页M行
	 **/
	private $pageSize;
	
	/** 
	 * 用户淘宝ID
	 **/
	private $tbUserId;
	
	/** 
	 * 回流效果数据的日期
	 **/
	private $thedate;
	
	private $apiParas = array();
	
	public function setColumns($columns)
	{
		$this->columns = $columns;
		$this->apiParas["columns"] = $columns;
	}

	public function getColumns()
	{
		return $this->columns;
	}

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

	public function setTbUserId($tbUserId)
	{
		$this->tbUserId = $tbUserId;
		$this->apiParas["tb_user_id"] = $tbUserId;
	}

	public function getTbUserId()
	{
		return $this->tbUserId;
	}

	public function setThedate($thedate)
	{
		$this->thedate = $thedate;
		$this->apiParas["thedate"] = $thedate;
	}

	public function getThedate()
	{
		return $this->thedate;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.tageffectfeedback.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->columns,"columns");
		RequestCheckUtil::checkNotNull($this->page,"page");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->tbUserId,"tbUserId");
		RequestCheckUtil::checkNotNull($this->thedate,"thedate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
