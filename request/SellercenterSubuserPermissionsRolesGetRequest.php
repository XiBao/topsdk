<?php
/**
 * TOP API: taobao.sellercenter.subuser.permissions.roles.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class SellercenterSubuserPermissionsRolesGetRequest
{
	/** 
	 * 子账号昵称(子账号标识)<br /> 支持最大长度为：100<br /> 支持的最大列表长度为：100
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
		return "taobao.sellercenter.subuser.permissions.roles.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkMaxLength($this->nick,100,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
