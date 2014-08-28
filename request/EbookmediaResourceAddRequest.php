<?php
/**
 * TOP API: taobao.ebookmedia.resource.add request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class EbookmediaResourceAddRequest
{
	/** 
	 * 电子书商品数字ID
	 **/
	private $auctionId;
	
	/** 
	 * 电子书文件云盘ID
	 **/
	private $fileId;
	
	/** 
	 * 文件ID
	 **/
	private $strFileId;
	
	/** 
	 * 资源文件后缀名
	 **/
	private $suffix;
	
	/** 
	 * 资源类型，（1：正文，0：试读)
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setAuctionId($auctionId)
	{
		$this->auctionId = $auctionId;
		$this->apiParas["auction_id"] = $auctionId;
	}

	public function getAuctionId()
	{
		return $this->auctionId;
	}

	public function setFileId($fileId)
	{
		$this->fileId = $fileId;
		$this->apiParas["file_id"] = $fileId;
	}

	public function getFileId()
	{
		return $this->fileId;
	}

	public function setStrFileId($strFileId)
	{
		$this->strFileId = $strFileId;
		$this->apiParas["str_file_id"] = $strFileId;
	}

	public function getStrFileId()
	{
		return $this->strFileId;
	}

	public function setSuffix($suffix)
	{
		$this->suffix = $suffix;
		$this->apiParas["suffix"] = $suffix;
	}

	public function getSuffix()
	{
		return $this->suffix;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.ebookmedia.resource.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->auctionId,"auctionId");
		RequestCheckUtil::checkNotNull($this->suffix,"suffix");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
