<?php
/**
 * TOP API: taobao.wlb.orderschedulerule.delete request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class WlbOrderscheduleruleDeleteRequest
{
	/** 
	 * 订单调度规则ID<br /> 支持的最大列表长度为：20
	 **/
	private $id;
	
	/** 
	 * 商品userNick<br /> 支持最大长度为：64<br /> 支持的最大列表长度为：64
	 **/
	private $userNick;
	
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

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.orderschedulerule.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->userNick,"userNick");
		RequestCheckUtil::checkMaxLength($this->userNick,64,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
