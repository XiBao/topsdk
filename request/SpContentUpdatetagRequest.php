<?php
/**
 * TOP API: taobao.sp.content.updatetag request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class SpContentUpdatetagRequest
{
	/** 
	 * 新的标签名称<br /> 支持最大长度为：6<br /> 支持的最大列表长度为：6
	 **/
	private $newname;
	
	/** 
	 * 旧的标签名称<br /> 支持最大长度为：6<br /> 支持的最大列表长度为：6
	 **/
	private $oldname;
	
	/** 
	 * 站长Key<br /> 支持最大长度为：32<br /> 支持的最大列表长度为：32
	 **/
	private $siteKey;
	
	private $apiParas = array();
	
	public function setNewname($newname)
	{
		$this->newname = $newname;
		$this->apiParas["newname"] = $newname;
	}

	public function getNewname()
	{
		return $this->newname;
	}

	public function setOldname($oldname)
	{
		$this->oldname = $oldname;
		$this->apiParas["oldname"] = $oldname;
	}

	public function getOldname()
	{
		return $this->oldname;
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
		return "taobao.sp.content.updatetag";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->newname,"newname");
		RequestCheckUtil::checkMaxLength($this->newname,6,"newname");
		RequestCheckUtil::checkNotNull($this->oldname,"oldname");
		RequestCheckUtil::checkMaxLength($this->oldname,6,"oldname");
		RequestCheckUtil::checkNotNull($this->siteKey,"siteKey");
		RequestCheckUtil::checkMaxLength($this->siteKey,32,"siteKey");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
