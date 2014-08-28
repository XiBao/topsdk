<?php
/**
 * TOP API: taobao.weitao.menu.create request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class WeitaoMenuCreateRequest
{
	/** 
	 * 支持的type共4种，宝贝分类、h5 url、wangwang和tel，具体见示例：[{ "name": "宝贝分类", "sub_button": [ { "name": "新品", "type": "shopCat", "catId": "111111" }, { "name": "特惠宝贝", "type": "shopCat", "catId": "213214" }, { "name": "特惠宝贝", "type": "shopCat", "catId": "21342435" }] }, { "name": "活动", "sub_button": [  { "name": "我的微官网", "type": "view", "url": "http://mweb.taobao.com" }, {"name": "我的特惠品", "type": "view" ,"url": "http://mpromotion.taobao.com" }, { "name": "我的活动", "type": "view", "url": "http://test.we.app.jae.m.taobao.com?seller_nick=test&seller_id=123124" }] }, { "name": "客服", "sub_button": [  { "name": "客服", "type": "wangwang", "wangwang": "商家测试帐号xx" }, {{ "name": "电话", "type": "tel", "tel": "66668888" }] }]
	 **/
	private $menuString;
	
	private $apiParas = array();
	
	public function setMenuString($menuString)
	{
		$this->menuString = $menuString;
		$this->apiParas["menu_string"] = $menuString;
	}

	public function getMenuString()
	{
		return $this->menuString;
	}

	public function getApiMethodName()
	{
		return "taobao.weitao.menu.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->menuString,"menuString");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
