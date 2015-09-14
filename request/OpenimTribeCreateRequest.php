<?php
/**
 * TOP API: taobao.openim.tribe.create request
 * 
 * @author auto create
 * @since 1.0, 2015.09.13
 */
class OpenimTribeCreateRequest
{
	/** 
	 * 用户信息
	 **/
	private $members;
	
	/** 
	 * 群公告
	 **/
	private $notice;
	
	/** 
	 * 群名称
	 **/
	private $tribeName;
	
	/** 
	 * 群类型
	 **/
	private $tribeType;
	
	/** 
	 * 用户信息
	 **/
	private $user;
	
	private $apiParas = array();
	
	public function setMembers($members)
	{
		$this->members = $members;
		$this->apiParas["members"] = $members;
	}

	public function getMembers()
	{
		return $this->members;
	}

	public function setNotice($notice)
	{
		$this->notice = $notice;
		$this->apiParas["notice"] = $notice;
	}

	public function getNotice()
	{
		return $this->notice;
	}

	public function setTribeName($tribeName)
	{
		$this->tribeName = $tribeName;
		$this->apiParas["tribe_name"] = $tribeName;
	}

	public function getTribeName()
	{
		return $this->tribeName;
	}

	public function setTribeType($tribeType)
	{
		$this->tribeType = $tribeType;
		$this->apiParas["tribe_type"] = $tribeType;
	}

	public function getTribeType()
	{
		return $this->tribeType;
	}

	public function setUser($user)
	{
		$this->user = $user;
		$this->apiParas["user"] = $user;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function getApiMethodName()
	{
		return "taobao.openim.tribe.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->notice,"notice");
		RequestCheckUtil::checkNotNull($this->tribeName,"tribeName");
		RequestCheckUtil::checkNotNull($this->tribeType,"tribeType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
