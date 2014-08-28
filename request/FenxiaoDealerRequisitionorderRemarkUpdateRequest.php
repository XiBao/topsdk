<?php
/**
 * TOP API: taobao.fenxiao.dealer.requisitionorder.remark.update request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class FenxiaoDealerRequisitionorderRemarkUpdateRequest
{
	/** 
	 * 经销采购单ID
	 **/
	private $dealerOrderId;
	
	/** 
	 * 备注留言，可为空
	 **/
	private $supplierMemo;
	
	/** 
	 * 旗子的标记，必选。
1-5之间的数字。
非1-5之间，都采用1作为默认。
1:红色
2:黄色
3:绿色
4:蓝色
5:粉红色<br /> 支持最大值为：5<br /> 支持最小值为：1
	 **/
	private $supplierMemoFlag;
	
	private $apiParas = array();
	
	public function setDealerOrderId($dealerOrderId)
	{
		$this->dealerOrderId = $dealerOrderId;
		$this->apiParas["dealer_order_id"] = $dealerOrderId;
	}

	public function getDealerOrderId()
	{
		return $this->dealerOrderId;
	}

	public function setSupplierMemo($supplierMemo)
	{
		$this->supplierMemo = $supplierMemo;
		$this->apiParas["supplier_memo"] = $supplierMemo;
	}

	public function getSupplierMemo()
	{
		return $this->supplierMemo;
	}

	public function setSupplierMemoFlag($supplierMemoFlag)
	{
		$this->supplierMemoFlag = $supplierMemoFlag;
		$this->apiParas["supplier_memo_flag"] = $supplierMemoFlag;
	}

	public function getSupplierMemoFlag()
	{
		return $this->supplierMemoFlag;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.dealer.requisitionorder.remark.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dealerOrderId,"dealerOrderId");
		RequestCheckUtil::checkNotNull($this->supplierMemoFlag,"supplierMemoFlag");
		RequestCheckUtil::checkMaxValue($this->supplierMemoFlag,5,"supplierMemoFlag");
		RequestCheckUtil::checkMinValue($this->supplierMemoFlag,1,"supplierMemoFlag");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
