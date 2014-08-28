<?php
/**
 * TOP API: taobao.crm.grademkt.member.detail.delete request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class CrmGrademktMemberDetailDeleteRequest
{
	/** 
	 * 扩展字段
	 **/
	private $feather;
	
	/** 
	 * 创建营销详情，生成方法见http://open.taobao.com/doc/detail.htm?id=101281
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
		return "taobao.crm.grademkt.member.detail.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->feather,"feather");
		RequestCheckUtil::checkNotNull($this->parameter,"parameter");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
