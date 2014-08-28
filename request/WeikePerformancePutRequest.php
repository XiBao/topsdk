<?php
/**
 * TOP API: taobao.weike.performance.put request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class WeikePerformancePutRequest
{
	/** 
	 * 订单id
	 **/
	private $id;
	
	/** 
	 * 绩效数据封装类
	 **/
	private $perInfoWrapper;
	
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

	public function setPerInfoWrapper($perInfoWrapper)
	{
		$this->perInfoWrapper = $perInfoWrapper;
		$this->apiParas["per_info_wrapper"] = $perInfoWrapper;
	}

	public function getPerInfoWrapper()
	{
		return $this->perInfoWrapper;
	}

	public function getApiMethodName()
	{
		return "taobao.weike.performance.put";
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
