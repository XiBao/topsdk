<?php
/**
 * TOP API: taobao.dd.reserved.update request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class DdReservedUpdateRequest
{
	/** 
	 * 预定订单编号
	 **/
	private $id;
	
	/** 
	 * 0-未标注 1-已到店 2-未到店 3-不来了
	 **/
	private $mark;
	
	/** 
	 * 打印状态
	 * 0 : 未打印
	 * 1 : 已打印
	 * 2 : 已处理
	 **/
	private $option;
	
	/** 
	 * 淘宝店铺id
	 **/
	private $storeId;
	
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

	public function setMark($mark)
	{
		$this->mark = $mark;
		$this->apiParas["mark"] = $mark;
	}

	public function getMark()
	{
		return $this->mark;
	}

	public function setOption($option)
	{
		$this->option = $option;
		$this->apiParas["option"] = $option;
	}

	public function getOption()
	{
		return $this->option;
	}

	public function setStoreId($storeId)
	{
		$this->storeId = $storeId;
		$this->apiParas["store_id"] = $storeId;
	}

	public function getStoreId()
	{
		return $this->storeId;
	}

	public function getApiMethodName()
	{
		return "taobao.dd.reserved.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->storeId,"storeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
