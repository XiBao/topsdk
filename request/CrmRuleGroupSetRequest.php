<?php
/**
 * TOP API: taobao.crm.rule.group.set request
 * 
 * @author auto create
 * @since 1.0, 2012-07-30 16:33:53
 */
class CrmRuleGroupSetRequest
{
	/** 
	 * 需要添加到规则的分组
	 **/
	private $addGroups;
	
	/** 
	 * 需要删除的分组
	 **/
	private $deleteGroups;
	
	/** 
	 * 规则id
	 **/
	private $ruleId;
	
	private $apiParas = array();
	
	public function setAddGroups($addGroups)
	{
		$this->addGroups = $addGroups;
		$this->apiParas["add_groups"] = $addGroups;
	}

	public function getAddGroups()
	{
		return $this->addGroups;
	}

	public function setDeleteGroups($deleteGroups)
	{
		$this->deleteGroups = $deleteGroups;
		$this->apiParas["delete_groups"] = $deleteGroups;
	}

	public function getDeleteGroups()
	{
		return $this->deleteGroups;
	}

	public function setRuleId($ruleId)
	{
		$this->ruleId = $ruleId;
		$this->apiParas["rule_id"] = $ruleId;
	}

	public function getRuleId()
	{
		return $this->ruleId;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.rule.group.set";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->addGroups,10,"addGroups");
		RequestCheckUtil::checkMaxListSize($this->deleteGroups,10,"deleteGroups");
		RequestCheckUtil::checkNotNull($this->ruleId,"ruleId");
		RequestCheckUtil::checkMinValue($this->ruleId,1,"ruleId");
	}
}
