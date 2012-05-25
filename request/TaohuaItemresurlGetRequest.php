<?php
/**
 * TOP API: taobao.taohua.itemresurl.get request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class TaohuaItemresurlGetRequest
{
	/** 
	 * 商品资源的下载文件类型，可选值：1、pdf，2、epub，3、src。
dpf代表下载pdf类型的文件，epub代表下载epub类型的文件，src代表下载源文件
	 **/
	private $fileType;
	
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 因为下载地址涉及到断点续传的功能，所以需要客户端高速服务器端，应该从哪个byte开始返回文件流，那么这个字段作用就是用于告诉服务端从指定位置读取文件流
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
		return "taobao.taohua.itemresurl.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
}
