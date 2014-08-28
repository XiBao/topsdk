<?php
/**
 * TOP API: taobao.sp.content.item.update request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class SpContentItemUpdateRequest
{
	/** 
	 * 内容的自定义分类，数值为文本内容，主要用于区分内容的分类（譬如连衣裙、T恤、阿迪达斯等），分类名称的长度限制为(0,5] (单位是字符，不区分中英文)，分类名称中不能包含非法内容，且一个站点下所拥有的总自定义分类数量不能超过16个<br /> 支持最大长度为：5<br /> 支持的最大列表长度为：5
	 **/
	private $classname;
	
	/** 
	 * 内容的推荐理由。数值为文本内容,推荐理由的长度限制为[0,140](单位是字符，不区分中英文)，推荐理由中不能含有非法内容，不能含有恶意脚本<br /> 支持最大长度为：140<br /> 支持的最大列表长度为：140
	 **/
	private $comments;
	
	/** 
	 * 封面图片地址
图片地址必须匹配正则表达式:http://(img01|img02|img03|img04|img1|img2|img3|img4)\.(taobaocdn|tbcdn)\.(com|net|cn).*
	 **/
	private $coverpicurl;
	
	/** 
	 * 内容的detail页面地址，数值为html链接，主要用于展现内容的detail信息的
	 **/
	private $detailurl;
	
	/** 
	 * 内容ID
	 **/
	private $id;
	
	/** 
	 * 宝贝ID
	 **/
	private $itemId;
	
	/** 
	 * 站长Key<br /> 支持最大长度为：32<br /> 支持的最大列表长度为：32
	 **/
	private $siteKey;
	
	/** 
	 * 内容的自定义标签，数值为文本内容，多个标签以逗号“,”分割。
主要用于细化内容的分类（譬如小清新，棉质、雪纺等），标签名称的长度限制为[0,6] (单位是字符，不区分中英文)，标签名称中不能包含非法内容，且一个内容关联的标签数目不能超过6个
	 **/
	private $tags;
	
	/** 
	 * 内容标题,标题的长度限制为(0,32](单位是字符，不区分中英文)<br /> 支持最大长度为：32<br /> 支持的最大列表长度为：32
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setClassname($classname)
	{
		$this->classname = $classname;
		$this->apiParas["classname"] = $classname;
	}

	public function getClassname()
	{
		return $this->classname;
	}

	public function setComments($comments)
	{
		$this->comments = $comments;
		$this->apiParas["comments"] = $comments;
	}

	public function getComments()
	{
		return $this->comments;
	}

	public function setCoverpicurl($coverpicurl)
	{
		$this->coverpicurl = $coverpicurl;
		$this->apiParas["coverpicurl"] = $coverpicurl;
	}

	public function getCoverpicurl()
	{
		return $this->coverpicurl;
	}

	public function setDetailurl($detailurl)
	{
		$this->detailurl = $detailurl;
		$this->apiParas["detailurl"] = $detailurl;
	}

	public function getDetailurl()
	{
		return $this->detailurl;
	}

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
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

	public function setSiteKey($siteKey)
	{
		$this->siteKey = $siteKey;
		$this->apiParas["site_key"] = $siteKey;
	}

	public function getSiteKey()
	{
		return $this->siteKey;
	}

	public function setTags($tags)
	{
		$this->tags = $tags;
		$this->apiParas["tags"] = $tags;
	}

	public function getTags()
	{
		return $this->tags;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.sp.content.item.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->classname,"classname");
		RequestCheckUtil::checkMaxLength($this->classname,5,"classname");
		RequestCheckUtil::checkNotNull($this->comments,"comments");
		RequestCheckUtil::checkMaxLength($this->comments,140,"comments");
		RequestCheckUtil::checkNotNull($this->detailurl,"detailurl");
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->siteKey,"siteKey");
		RequestCheckUtil::checkMaxLength($this->siteKey,32,"siteKey");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,32,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
