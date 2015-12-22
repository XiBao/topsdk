<?php
/**
 * TOP API: taobao.user.baichuan.recommend.get request
 * 
 * @author auto create
 * @since 1.0, 2015.07.09
 */
class UserBaichuanRecommendGetRequest
{
	/** 
	 * idtype，目前支持1
	 **/
	private $idType;
	
	/** 
	 * isvid
	 **/
	private $isvAppId;
	
	/** 
	 * 混淆userid
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setIdType($idType)
	{
		$this->idType = $idType;
		$this->apiParas["id_type"] = $idType;
	}

	public function getIdType()
	{
		return $this->idType;
	}

	public function setIsvAppId($isvAppId)
	{
		$this->isvAppId = $isvAppId;
		$this->apiParas["isv_app_id"] = $isvAppId;
	}

	public function getIsvAppId()
	{
		return $this->isvAppId;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.user.baichuan.recommend.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->idType,"idType");
		RequestCheckUtil::checkNotNull($this->isvAppId,"isvAppId");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
