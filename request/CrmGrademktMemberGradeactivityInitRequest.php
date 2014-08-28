<?php
/**
 * TOP API: taobao.crm.grademkt.member.gradeactivity.init request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class CrmGrademktMemberGradeactivityInitRequest
{
	/** 
	 * 扩展字段
	 **/
	private $feather;
	
	/** 
	 * 活动名称，不传默认为“等级营销”
	 **/
	private $parameter;
	
	private $apiParas = array();
	
	public function setFeather($feather)
	{
		$this->feather = $feather;
		$this->apiParas["feather"] = $feather;
	}

	public function getFeather()
	{
		return $this->feather;
	}

	public function setParameter($parameter)
	{
		$this->parameter = $parameter;
		$this->apiParas["parameter"] = $parameter;
	}

	public function getParameter()
	{
		return $this->parameter;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.grademkt.member.gradeactivity.init";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->feather,"feather");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
