<?php
/**
 * TOP API: taobao.wangwang.eservice.receivenum.get request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class WangwangEserviceReceivenumGetRequest
{
	/** 
	 * 查询接待人数的结束日期
	 **/
	private $endDate;
	
	/** 
	 * 客服人员id：cntaobao+淘宝nick，例如cntaobaotest
	 **/
	private $serviceStaffId;
	
	/** 
	 * 查询接待人数的开始日期
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setServiceStaffId($serviceStaffId)
	{
		$this->serviceStaffId = $serviceStaffId;
		$this->apiParas["service_staff_id"] = $serviceStaffId;
	}

	public function getServiceStaffId()
	{
		return $this->serviceStaffId;
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

	public function getApiMethodName()
	{
		return "taobao.wangwang.eservice.receivenum.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->serviceStaffId,"serviceStaffId");
		RequestCheckUtil::checkMaxLength($this->serviceStaffId,1900,"serviceStaffId");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
}
