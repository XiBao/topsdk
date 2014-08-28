<?php
/**
 * TOP API: tmall.eai.order.refund.agree request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class TmallEaiOrderRefundAgreeRequest
{
	/** 
	 * 短信验证码
	 **/
	private $code;
	
	/** 
	 * 需要退款的退款ID|其对应的金额|对应版本号列表|退款阶段（onsale\aftersale），其中金额以分为单位，ID与金额以“|”符号分隔，多笔订单以“,”分隔。允许批量操作30笔，最大金额1W。
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
		return "tmall.eai.order.refund.agree";
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
