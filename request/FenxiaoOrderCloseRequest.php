<?php
/**
 * TOP API: taobao.fenxiao.order.close request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class FenxiaoOrderCloseRequest
{
	/** 
	 * 关闭理由,特殊字符会被转义，会改变长度，有特殊字符是请注意<br /> 支持最大长度为：200<br /> 支持的最大列表长度为：200
	 **/
	private $message;
	
	/** 
	 * 采购单编号
	 **/
	private $purchaseOrderId;
	
	/** 
	 * 子采购单ID，可传多笔子单ID，逗号分隔
	 **/
	private $subOrderIds;
	
	private $apiParas = array();
	
	public function setMessage($message)
	{
		$this->message = $message;
		$this->apiParas["message"] = $message;
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function setPurchaseOrderId($purchaseOrderId)
	{
		$this->purchaseOrderId = $purchaseOrderId;
		$this->apiParas["purchase_order_id"] = $purchaseOrderId;
	}

	public function getPurchaseOrderId()
	{
		return $this->purchaseOrderId;
	}

	public function setSubOrderIds($subOrderIds)
	{
		$this->subOrderIds = $subOrderIds;
		$this->apiParas["sub_order_ids"] = $subOrderIds;
	}

	public function getSubOrderIds()
	{
		return $this->subOrderIds;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.order.close";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->message,"message");
		RequestCheckUtil::checkMaxLength($this->message,200,"message");
		RequestCheckUtil::checkNotNull($this->purchaseOrderId,"purchaseOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
