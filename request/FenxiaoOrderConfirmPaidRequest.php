<?php
/**
 * TOP API: taobao.fenxiao.order.confirm.paid request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class FenxiaoOrderConfirmPaidRequest
{
	/** 
	 * 确认支付信息（字数小于100）
	 **/
	private $confirmRemark;
	
	/** 
	 * 采购单编号。
	 **/
	private $purchaseOrderId;
	
	private $apiParas = array();
	
	public function setConfirmRemark($confirmRemark)
	{
		$this->confirmRemark = $confirmRemark;
		$this->apiParas["confirm_remark"] = $confirmRemark;
	}

	public function getConfirmRemark()
	{
		return $this->confirmRemark;
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

	public function getApiMethodName()
	{
		return "taobao.fenxiao.order.confirm.paid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->purchaseOrderId,"purchaseOrderId");
	}
}
