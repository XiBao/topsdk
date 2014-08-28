<?php
/**
 * TOP API: taobao.crm.group.delete request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class CrmGroupDeleteRequest
{
	/** 
	 * 要删除的分组id<br /> 支持最小值为：1<br /> 支持的最大列表长度为：19
	 **/
	private $groupId;
	
	private $apiParas = array();
	
	public function setGroupId($groupId)
	{
		$this->groupId = $groupId;
		$this->apiParas["group_id"] = $groupId;
	}

	public function getGroupId()
	{
		return $this->groupId;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.group.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
		RequestCheckUtil::checkMinValue($this->groupId,1,"groupId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
