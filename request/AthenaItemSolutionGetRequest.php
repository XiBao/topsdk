<?php
/**
 * TOP API: taobao.athena.item.solution.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class AthenaItemSolutionGetRequest
{
	/** 
	 * 自定义问题的ID
	 **/
	private $id;
	
	/** 
	 * 宝贝商品ID
	 **/
	private $itemId;
	
	/** 
	 * 类型key
	 **/
	private $typeKey;
	
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

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setTypeKey($typeKey)
	{
		$this->typeKey = $typeKey;
		$this->apiParas["type_key"] = $typeKey;
	}

	public function getTypeKey()
	{
		return $this->typeKey;
	}

	public function getApiMethodName()
	{
		return "taobao.athena.item.solution.get";
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
