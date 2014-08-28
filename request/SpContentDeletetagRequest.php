<?php
/**
 * TOP API: taobao.sp.content.deletetag request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class SpContentDeletetagRequest
{
	/** 
	 * 站长Key<br /> 支持最大长度为：32<br /> 支持的最大列表长度为：32
	 **/
	private $siteKey;
	
	/** 
	 * 标签名称<br /> 支持最大长度为：6<br /> 支持的最大列表长度为：6
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
