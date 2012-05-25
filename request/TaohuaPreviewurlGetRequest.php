<?php
/**
 * TOP API: taobao.taohua.previewurl.get request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class TaohuaPreviewurlGetRequest
{
	/** 
	 * 用来区分要预览的文档类型,目前支持两种
pre_epub 预览epub文档
pre_pdf  预览pdf文档
	 **/
	private $fileType;
	
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 文件位置
	 **/
	private $position;
	
	private $apiParas = array();
	
	public function setFileType($fileType)
	{
		$this->fileType = $fileType;
		$this->apiParas["file_type"] = $fileType;
	}

	public function getFileType()
	{
		return $this->fileType;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setPosition($position)
	{
		$this->position = $position;
		$this->apiParas["position"] = $position;
	}

	public function getPosition()
	{
		return $this->position;
	}

	public function getApiMethodName()
	{
		return "taobao.taohua.previewurl.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fileType,"fileType");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->position,"position");
	}
}
