<?php
/**
 * TOP API: tmall.promotag.taguser.save request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class TmallPromotagTaguserSaveRequest
{
	/** 
	 * 买家昵称
	 **/
	private $nick;
	
	/** 
	 * 标签ID
	 **/
	private $tagId;
	
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setTagId($tagId)
	{
		$this->tagId = $tagId;
		$this->apiParas["tag_id"] = $tagId;
	}

	public function getTagId()
	{
		return $this->tagId;
	}

	public function getApiMethodName()
	{
		return "tmall.promotag.taguser.save";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkNotNull($this->tagId,"tagId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
