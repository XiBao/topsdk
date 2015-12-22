<?php
/**
 * TOP API: taobao.iselect.tae.itempool.change request
 * 
 * @author auto create
 * @since 1.0, 2015.03.18
 */
class IselectTaeItempoolChangeRequest
{
	/** 
	 * 操作类型，0：新增商品，1：删除商品
	 **/
	private $act;
	
	/** 
	 * 商品的open_iid
	 **/
	private $openIid;
	
	private $apiParas = array();
	
	public function setAct($act)
	{
		$this->act = $act;
		$this->apiParas["act"] = $act;
	}

	public function getAct()
	{
		return $this->act;
	}

	public function setOpenIid($openIid)
	{
		$this->openIid = $openIid;
		$this->apiParas["open_iid"] = $openIid;
	}

	public function getOpenIid()
	{
		return $this->openIid;
	}

	public function getApiMethodName()
	{
		return "taobao.iselect.tae.itempool.change";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->act,"act");
		RequestCheckUtil::checkNotNull($this->openIid,"openIid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
