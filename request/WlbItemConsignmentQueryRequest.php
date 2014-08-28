<?php
/**
 * TOP API: taobao.wlb.item.consignment.query request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class WlbItemConsignmentQueryRequest
{
	/** 
	 * 授权结束时间
	 **/
	private $authorizeEndTime;
	
	/** 
	 * 授权开始时间
	 **/
	private $authorizeStartTime;
	
	/** 
	 * 货主的用户昵称，未设置则查询全部
	 **/
	private $ownerUserNick;
	
	/** 
	 * 当前页
	 **/
	private $pageNo;
	
	/** 
	 * 分页记录个数，如果用户输入的记录数大于50，则一页显示50条记录
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setAuthorizeEndTime($authorizeEndTime)
	{
		$this->authorizeEndTime = $authorizeEndTime;
		$this->apiParas["authorize_end_time"] = $authorizeEndTime;
	}

	public function getAuthorizeEndTime()
	{
		return $this->authorizeEndTime;
	}

	public function setAuthorizeStartTime($authorizeStartTime)
	{
		$this->authorizeStartTime = $authorizeStartTime;
		$this->apiParas["authorize_start_time"] = $authorizeStartTime;
	}

	public function getAuthorizeStartTime()
	{
		return $this->authorizeStartTime;
	}

	public function setOwnerUserNick($ownerUserNick)
	{
		$this->ownerUserNick = $ownerUserNick;
		$this->apiParas["owner_user_nick"] = $ownerUserNick;
	}

	public function getOwnerUserNick()
	{
		return $this->ownerUserNick;
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

	public function getApiMethodName()
	{
		return "taobao.wlb.item.consignment.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
