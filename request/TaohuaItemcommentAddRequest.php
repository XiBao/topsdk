<?php
/**
 * TOP API: taobao.taohua.itemcomment.add request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class TaohuaItemcommentAddRequest
{
	/** 
	 * 对商品的评论内容
	 **/
	private $comment;
	
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	private $apiParas = array();
	
	public function setComment($comment)
	{
		$this->comment = $comment;
		$this->apiParas["comment"] = $comment;
	}

	public function getComment()
	{
		return $this->comment;
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
		return "taobao.taohua.itemcomment.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->comment,"comment");
		RequestCheckUtil::checkMaxLength($this->comment,4000,"comment");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
}
