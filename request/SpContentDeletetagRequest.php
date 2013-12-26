<?php
/**
 * TOP API: taobao.sp.content.deletetag request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class SpContentDeletetagRequest
{
	/** 
	 * 站长Key
	 **/
	private $siteKey;
	
	/** 
	 * 标签名称
	 **/
	private $tagname;
	
	private $apiParas = array();
	
	public function setSiteKey($siteKey)
	{
		$this->siteKey = $siteKey;
		$this->apiParas["site_key"] = $siteKey;
	}

	public function getSiteKey()
	{
		return $this->siteKey;
	}

	public function setTagname($tagname)
	{
		$this->tagname = $tagname;
		$this->apiParas["tagname"] = $tagname;
	}

	public function getTagname()
	{
		return $this->tagname;
	}

	public function getApiMethodName()
	{
		return "taobao.sp.content.deletetag";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->siteKey,"siteKey");
		RequestCheckUtil::checkMaxLength($this->siteKey,32,"siteKey");
		RequestCheckUtil::checkNotNull($this->tagname,"tagname");
		RequestCheckUtil::checkMaxLength($this->tagname,6,"tagname");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
