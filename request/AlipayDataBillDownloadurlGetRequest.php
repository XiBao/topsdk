<?php
/**
 * TOP API: alipay.data.bill.downloadurl.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class AlipayDataBillDownloadurlGetRequest
{
	/** 
	 * 支付宝给用户的授权。如果没有top的授权，这个字段是必填项
	 **/
	private $authToken;
	
	/** 
	 * 账单时间：日账单格式为yyyy-MM-dd,月账单格式为yyyy-MM
	 **/
	private $billDate;
	
	/** 
	 * 账单类型，目前支持的类型有：air
	 **/
	private $billType;
	
	private $apiParas = array();
	
	public function setAuthToken($authToken)
	{
		$this->authToken = $authToken;
		$this->apiParas["auth_token"] = $authToken;
	}

	public function getAuthToken()
	{
		return $this->authToken;
	}

	public function setBillDate($billDate)
	{
		$this->billDate = $billDate;
		$this->apiParas["bill_date"] = $billDate;
	}

	public function getBillDate()
	{
		return $this->billDate;
	}

	public function setBillType($billType)
	{
		$this->billType = $billType;
		$this->apiParas["bill_type"] = $billType;
	}

	public function getBillType()
	{
		return $this->billType;
	}

	public function getApiMethodName()
	{
		return "alipay.data.bill.downloadurl.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->billDate,"billDate");
		RequestCheckUtil::checkNotNull($this->billType,"billType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
