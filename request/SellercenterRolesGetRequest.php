<?php
/**
 * TOP API: taobao.sellercenter.roles.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class SellercenterRolesGetRequest
{
	/** 
	 * 卖家昵称(只允许查询自己的信息：当前登陆者)<br /> 支持最大长度为：500<br /> 支持的最大列表长度为：500
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function getApiMethodName()
	{
		return "taobao.sellercenter.roles.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkMaxLength($this->nick,500,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
