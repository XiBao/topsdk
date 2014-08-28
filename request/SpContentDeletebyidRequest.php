<?php
/**
 * TOP API: taobao.sp.content.deletebyid request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class SpContentDeletebyidRequest
{
	/** 
	 * 内容的主键ID
	 **/
	private $id;
	
	/** 
	 * 站长Key<br /> 支持最大长度为：32<br /> 支持的最大列表长度为：32
	 **/
	private $siteKey;
	
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

	public function setSiteKey($siteKey)
	{
		$this->siteKey = $siteKey;
		$this->apiParas["site_key"] = $siteKey;
	}

	public function getSiteKey()
	{
		return $this->siteKey;
	}

	public function getApiMethodName()
	{
		return "taobao.sp.content.deletebyid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->siteKey,"siteKey");
		RequestCheckUtil::checkMaxLength($this->siteKey,32,"siteKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
