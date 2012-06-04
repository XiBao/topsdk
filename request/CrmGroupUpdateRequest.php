<?php
/**
 * TOP API: taobao.crm.group.update request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class CrmGroupUpdateRequest
{
	/** 
	 * 分组的id
	 **/
	private $groupId;
	
	/** 
	 * 新的分组名，分组名称不能包含|或者：
	 **/
	private $newGroupName;
	
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

	public function setNewGroupName($newGroupName)
	{
		$this->newGroupName = $newGroupName;
		$this->apiParas["new_group_name"] = $newGroupName;
	}

	public function getNewGroupName()
	{
		return $this->newGroupName;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.group.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
		RequestCheckUtil::checkMinValue($this->groupId,1,"groupId");
		RequestCheckUtil::checkNotNull($this->newGroupName,"newGroupName");
		RequestCheckUtil::checkMaxLength($this->newGroupName,15,"newGroupName");
	}
}
