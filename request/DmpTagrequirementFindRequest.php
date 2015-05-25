<?php
/**
 * TOP API: taobao.dmp.tagrequirement.find request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpTagrequirementFindRequest
{
	/** 
	 * 标签需求id
	 **/
	private $id;
	
	/** 
	 * 需求状态
	 **/
	private $status;
	
	/** 
	 * 需求类型
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.tagrequirement.find";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
