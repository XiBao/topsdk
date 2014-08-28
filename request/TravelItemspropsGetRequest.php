<?php
/**
 * TOP API: taobao.travel.itemsprops.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class TravelItemspropsGetRequest
{
	/** 
	 * 商品所属叶子类目ID，支持旅游度假线路8个类目。
	 **/
	private $cid;
	
	/** 
	 * 属性id (取某个类目属性时，传pid；若不传该值，返回该类目下所有属性)
	 **/
	private $pid;
	
	private $apiParas = array();
	
	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
	}

	public function getApiMethodName()
	{
		return "taobao.travel.itemsprops.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cid,"cid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
