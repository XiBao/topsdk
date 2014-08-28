<?php
/**
 * TOP API: taobao.wlb.icitem.regionsale.operate request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class WlbIcitemRegionsaleOperateRequest
{
	/** 
	 * 前台宝贝id
	 **/
	private $itemId;
	
	/** 
	 * 1:表示添加区域化销售服务
-1:表示去除区域化销售服务
	 **/
	private $opType;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setOpType($opType)
	{
		$this->opType = $opType;
		$this->apiParas["op_type"] = $opType;
	}

	public function getOpType()
	{
		return $this->opType;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.icitem.regionsale.operate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->opType,"opType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
