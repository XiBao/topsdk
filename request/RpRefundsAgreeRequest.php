<?php
/**
 * TOP API: taobao.rp.refunds.agree request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class RpRefundsAgreeRequest
{
	/** 
	 * 短信验证码
	 **/
	private $code;
	
	/** 
	 * 需要退款的退款ID以及和其对应的金额列表，其中金额以分为单位，ID与金额以“|”符号分隔，多笔订单以“,”分隔。version 取退款更新时间modified（需转成时间戳格式）
	 **/
	private $refundInfos;
	
	private $apiParas = array();
	
	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
	}

	public function setRefundInfos($refundInfos)
	{
		$this->refundInfos = $refundInfos;
		$this->apiParas["refund_infos"] = $refundInfos;
	}

	public function getRefundInfos()
	{
		return $this->refundInfos;
	}

	public function getApiMethodName()
	{
		return "taobao.rp.refunds.agree";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->refundInfos,"refundInfos");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
