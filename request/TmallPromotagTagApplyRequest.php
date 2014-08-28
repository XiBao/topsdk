<?php
/**
 * TOP API: tmall.promotag.tag.apply request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class TmallPromotagTagApplyRequest
{
	/** 
	 * 标签结束时间
	 **/
	private $endTime;
	
	/** 
	 * 标签开始时间
	 **/
	private $startTime;
	
	/** 
	 * 标签用途描述
	 **/
	private $tagDesc;
	
	/** 
	 * 标签名称。
注意在UMP中使用新人群标签top变成大写的“NEW_” 如：老标签是top1234，新标签是NEW_1234 。
	 **/
	private $tagName;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setTagDesc($tagDesc)
	{
		$this->tagDesc = $tagDesc;
		$this->apiParas["tag_desc"] = $tagDesc;
	}

	public function getTagDesc()
	{
		return $this->tagDesc;
	}

	public function setTagName($tagName)
	{
		$this->tagName = $tagName;
		$this->apiParas["tag_name"] = $tagName;
	}

	public function getTagName()
	{
		return $this->tagName;
	}

	public function getApiMethodName()
	{
		return "tmall.promotag.tag.apply";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
		RequestCheckUtil::checkNotNull($this->tagDesc,"tagDesc");
		RequestCheckUtil::checkNotNull($this->tagName,"tagName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
