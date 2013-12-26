<?php
/**
 * TOP API: taobao.sp.content.updatetag request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class SpContentUpdatetagRequest
{
	/** 
	 * 新的标签名称
	 **/
	private $newname;
	
	/** 
	 * 旧的标签名称
	 **/
	private $oldname;
	
	/** 
	 * 站长Key
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
