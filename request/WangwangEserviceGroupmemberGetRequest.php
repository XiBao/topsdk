<?php
/**
 * TOP API: taobao.wangwang.eservice.groupmember.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class WangwangEserviceGroupmemberGetRequest
{
	/** 
	 * 主帐号ID：cntaobao+淘宝nick，例如cntaobaotest<br /> 支持最大长度为：128<br /> 支持的最大列表长度为：128
	 **/
	private $managerId;
	
	private $apiParas = array();
	
	public function setManagerId($managerId)
	{
		$this->managerId = $managerId;
		$this->apiParas["manager_id"] = $managerId;
	}

	public function getManagerId()
	{
		return $this->managerId;
	}

	public function getApiMethodName()
	{
		return "taobao.wangwang.eservice.groupmember.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->managerId,"managerId");
		RequestCheckUtil::checkMaxLength($this->managerId,128,"managerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
