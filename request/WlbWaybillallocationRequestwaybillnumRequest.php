<?php
/**
 * TOP API: taobao.wlb.waybillallocation.requestwaybillnum request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class WlbWaybillallocationRequestwaybillnumRequest
{
	/** 
	 * 申请号码数量
	 **/
	private $num;
	
	/** 
	 * 外部去重号
	 **/
	private $outBizCode;
	
	/** 
	 * 面单类型
	 **/
	private $poolType;
	
	/** 
	 * 服务编码
	 **/
	private $serviceCode;
	
	/** 
	 * 用户ID
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setNum($num)
	{
		$this->num = $num;
		$this->apiParas["num"] = $num;
	}

	public function getNum()
	{
		return $this->num;
	}

	public function setOutBizCode($outBizCode)
	{
		$this->outBizCode = $outBizCode;
		$this->apiParas["out_biz_code"] = $outBizCode;
	}

	public function getOutBizCode()
	{
		return $this->outBizCode;
	}

	public function setPoolType($poolType)
	{
		$this->poolType = $poolType;
		$this->apiParas["pool_type"] = $poolType;
	}

	public function getPoolType()
	{
		return $this->poolType;
	}

	public function setServiceCode($serviceCode)
	{
		$this->serviceCode = $serviceCode;
		$this->apiParas["service_code"] = $serviceCode;
	}

	public function getServiceCode()
	{
		return $this->serviceCode;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.waybillallocation.requestwaybillnum";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->num,"num");
		RequestCheckUtil::checkNotNull($this->outBizCode,"outBizCode");
		RequestCheckUtil::checkNotNull($this->poolType,"poolType");
		RequestCheckUtil::checkNotNull($this->serviceCode,"serviceCode");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
