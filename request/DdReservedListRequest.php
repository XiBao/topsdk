<?php
/**
 * TOP API: taobao.dd.reserved.list request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class DdReservedListRequest
{
	/** 
	 * 买家称呼
	 **/
	private $buyerNick;
	
	/** 
	 * 买家预定手机号
	 **/
	private $buyerPhone;
	
	/** 
	 * 预定结束时间
	 **/
	private $ends;
	
	/** 
	 * 打印状态
	 * 0 : 未打印
	 * 1 : 已打印
	 * 2 : 已处理
	 **/
	private $option;
	
	/** 
	 * 翻页游码
	 **/
	private $pn;
	
	/** 
	 * 页面大小
	 **/
	private $ps;
	
	/** 
	 * 预定开始时间
	 **/
	private $starts;
	
	/** 
	 * 淘宝商户id
	 **/
	private $storeId;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setBuyerPhone($buyerPhone)
	{
		$this->buyerPhone = $buyerPhone;
		$this->apiParas["buyer_phone"] = $buyerPhone;
	}

	public function getBuyerPhone()
	{
		return $this->buyerPhone;
	}

	public function setEnds($ends)
	{
		$this->ends = $ends;
		$this->apiParas["ends"] = $ends;
	}

	public function getEnds()
	{
		return $this->ends;
	}

	public function setOption($option)
	{
		$this->option = $option;
		$this->apiParas["option"] = $option;
	}

	public function getOption()
	{
		return $this->option;
	}

	public function setPn($pn)
	{
		$this->pn = $pn;
		$this->apiParas["pn"] = $pn;
	}

	public function getPn()
	{
		return $this->pn;
	}

	public function setPs($ps)
	{
		$this->ps = $ps;
		$this->apiParas["ps"] = $ps;
	}

	public function getPs()
	{
		return $this->ps;
	}

	public function setStarts($starts)
	{
		$this->starts = $starts;
		$this->apiParas["starts"] = $starts;
	}

	public function getStarts()
	{
		return $this->starts;
	}

	public function setStoreId($storeId)
	{
		$this->storeId = $storeId;
		$this->apiParas["store_id"] = $storeId;
	}

	public function getStoreId()
	{
		return $this->storeId;
	}

	public function getApiMethodName()
	{
		return "taobao.dd.reserved.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
