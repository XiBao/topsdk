<?php
/**
 * TOP API: taobao.crm.group.add request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class CrmGroupAddRequest
{
	/** 
	 * 分组名称，每个卖家最多可以拥有100个分组<br /> 支持最大长度为：15<br /> 支持的最大列表长度为：15
	 **/
	private $groupName;
	
	private $apiParas = array();
	
	public function setGroupName($groupName)
	{
		$this->groupName = $groupName;
		$this->apiParas["group_name"] = $groupName;
	}

	public function getGroupName()
	{
		return $this->groupName;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.group.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupName,"groupName");
		RequestCheckUtil::checkMaxLength($this->groupName,15,"groupName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
