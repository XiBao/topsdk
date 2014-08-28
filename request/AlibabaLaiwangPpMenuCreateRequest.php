<?php
/**
 * TOP API: alibaba.laiwang.pp.menu.create request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class AlibabaLaiwangPpMenuCreateRequest
{
	/** 
	 * 菜单的定义,将定义转换成对应的json格式传入。
	 **/
	private $menudef;
	
	private $apiParas = array();
	
	public function setMenudef($menudef)
	{
		$this->menudef = $menudef;
		$this->apiParas["menudef"] = $menudef;
	}

	public function getMenudef()
	{
		return $this->menudef;
	}

	public function getApiMethodName()
	{
		return "alibaba.laiwang.pp.menu.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->menudef,"menudef");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
