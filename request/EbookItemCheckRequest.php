<?php
/**
 * TOP API: taobao.ebook.item.check request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class EbookItemCheckRequest
{
	/** 
	 * 书库ID
	 **/
	private $ebookLibId;
	
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	private $apiParas = array();
	
	public function setEbookLibId($ebookLibId)
	{
		$this->ebookLibId = $ebookLibId;
		$this->apiParas["ebook_lib_id"] = $ebookLibId;
	}

	public function getEbookLibId()
	{
		return $this->ebookLibId;
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

	public function getApiMethodName()
	{
		return "taobao.ebook.item.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ebookLibId,"ebookLibId");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
