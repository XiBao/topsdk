<?php
/**
 * TOP API: taobao.logistics.orderstore.push request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class LogisticsOrderstorePushRequest
{
	/** 
	 * 表明是否是拆单，默认值0，1表示拆单
	 **/
	private $isSplit;
	
	/** 
	 * 流转状态发生时间
	 **/
	private $occureTime;
	
	/** 
	 * 仓内操作描述<br /> 支持最大长度为：200<br /> 支持的最大列表长度为：200
	 **/
	private $operateDetail;
	
	/** 
	 * 快递业务员联系方式<br /> 支持最大长度为：20<br /> 支持的最大列表长度为：20
	 **/
	private $operatorContact;
	
	/** 
	 * 快递业务员名称<br /> 支持最大长度为：20<br /> 支持的最大列表长度为：20
	 **/
	private $operatorName;
	
	/** 
	 * 拆单子订单列表，对应的数据是：子订单号的列表。可以不传，但是如果传了则必须符合传递的规则。子订单必须是操作的物流订单的子订单的真子集！
	 **/
	private $subTid;
	
	/** 
	 * 淘宝订单交易号
	 **/
	private $tradeId;
	
	private $apiParas = array();
	
	public function setIsSplit($isSplit)
	{
		$this->isSplit = $isSplit;
		$this->apiParas["is_split"] = $isSplit;
	}

	public function getIsSplit()
	{
		return $this->isSplit;
	}

	public function setOccureTime($occureTime)
	{
		$this->occureTime = $occureTime;
		$this->apiParas["occure_time"] = $occureTime;
	}

	public function getOccureTime()
	{
		return $this->occureTime;
	}

	public function setOperateDetail($operateDetail)
	{
		$this->operateDetail = $operateDetail;
		$this->apiParas["operate_detail"] = $operateDetail;
	}

	public function getOperateDetail()
	{
		return $this->operateDetail;
	}

	public function setOperatorContact($operatorContact)
	{
		$this->operatorContact = $operatorContact;
		$this->apiParas["operator_contact"] = $operatorContact;
	}

	public function getOperatorContact()
	{
		return $this->operatorContact;
	}

	public function setOperatorName($operatorName)
	{
		$this->operatorName = $operatorName;
		$this->apiParas["operator_name"] = $operatorName;
	}

	public function getOperatorName()
	{
		return $this->operatorName;
	}

	public function setSubTid($subTid)
	{
		$this->subTid = $subTid;
		$this->apiParas["sub_tid"] = $subTid;
	}

	public function getSubTid()
	{
		return $this->subTid;
	}

	public function setTradeId($tradeId)
	{
		$this->tradeId = $tradeId;
		$this->apiParas["trade_id"] = $tradeId;
	}

	public function getTradeId()
	{
		return $this->tradeId;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.orderstore.push";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->occureTime,"occureTime");
		RequestCheckUtil::checkNotNull($this->operateDetail,"operateDetail");
		RequestCheckUtil::checkMaxLength($this->operateDetail,200,"operateDetail");
		RequestCheckUtil::checkMaxLength($this->operatorContact,20,"operatorContact");
		RequestCheckUtil::checkMaxLength($this->operatorName,20,"operatorName");
		RequestCheckUtil::checkMaxListSize($this->subTid,50,"subTid");
		RequestCheckUtil::checkNotNull($this->tradeId,"tradeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
