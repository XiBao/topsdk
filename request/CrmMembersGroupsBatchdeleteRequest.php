<?php
/**
 * TOP API: taobao.crm.members.groups.batchdelete request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class CrmMembersGroupsBatchdeleteRequest
{
	/** 
	 * 买家的Id集合<br /> 支持最小值为：1
	 **/
	private $buyerIds;
	
	/** 
	 * 会员需要删除的分组<br /> 支持最小值为：1
	 **/
	private $groupIds;
	
	private $apiParas = array();
	
	public function setBuyerIds($buyerIds)
	{
		$this->buyerIds = $buyerIds;
		$this->apiParas["buyer_ids"] = $buyerIds;
	}

	public function getBuyerIds()
	{
		return $this->buyerIds;
	}

	public function setGroupIds($groupIds)
	{
		$this->groupIds = $groupIds;
		$this->apiParas["group_ids"] = $groupIds;
	}

	public function getGroupIds()
	{
		return $this->groupIds;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.members.groups.batchdelete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerIds,"buyerIds");
		RequestCheckUtil::checkMaxListSize($this->buyerIds,10,"buyerIds");
		RequestCheckUtil::checkNotNull($this->groupIds,"groupIds");
		RequestCheckUtil::checkMaxListSize($this->groupIds,10,"groupIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
