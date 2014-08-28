<?php
/**
 * TOP API: taobao.uic.weiboprofile.update request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class UicWeiboprofileUpdateRequest
{
	/** 
	 * 以map结构批量返回微博用户变更的属性。key:为新浪微博用户id,value:为该用户发生Profile变更的属性名，多个属性之间用逗号分隔，该接口一次最大接收条数不能超过100条。
	 **/
	private $map;
	
	private $apiParas = array();
	
	public function setMap($map)
	{
		$this->map = $map;
		$this->apiParas["map"] = $map;
	}

	public function getMap()
	{
		return $this->map;
	}

	public function getApiMethodName()
	{
		return "taobao.uic.weiboprofile.update";
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
