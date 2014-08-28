<?php
/**
 * TOP API: taobao.ju.group.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class JuGroupGetRequest
{
	/** 
	 * 代表需要返回的商品对象字段。可选值：ItemData商品结构体中所有字段均可返回；多个字段用“,”分隔。如果fields为空，或者不传该参数，就默认获得所有的字段
	 **/
	private $fields;
	
	/** 
	 * 聚划算组的编号<br /> 支持最小值为：1<br /> 支持的最大列表长度为：22
	 **/
	private $groupId;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

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
		return "taobao.ju.group.get";
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
