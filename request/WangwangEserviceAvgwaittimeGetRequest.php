<?php
/**
 * TOP API: taobao.wangwang.eservice.avgwaittime.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class WangwangEserviceAvgwaittimeGetRequest
{
	/** 
	 * 结束时间
	 **/
	private $endDate;
	
	/** 
	 * 客服人员id：cntaobao+淘宝nick，例如cntaobaotest<br /> 支持最大长度为：1900<br /> 支持的最大列表长度为：1900
	 **/
	private $serviceStaffId;
	
	/** 
	 * 开始时间
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
		return "taobao.wangwang.eservice.avgwaittime.get";
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
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
