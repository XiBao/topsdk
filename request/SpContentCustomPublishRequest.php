<?php
/**
 * TOP API: taobao.sp.content.custom.publish request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class SpContentCustomPublishRequest
{
	/** 
	 * 内容的自定义分类，数值为文本内容，主要用于区分内容的分类（譬如连衣裙、T恤、阿迪达斯等），分类名称的长度限制为(0,5] (单位是字符，不区分中英文)，分类名称中不能包含非法内容，且一个站点下所拥有的总自定义分类数量不能超过16个<br /> 支持最大长度为：5<br /> 支持的最大列表长度为：5
	 **/
	private $classname;
	
	/** 
	 * 自定义内容的正文，数值为文本内容（html形式），长度限制为[100,20000] (单位是字符，不区分中英文), 内容中不能有外链，不能有恶意脚本；内容中包含的商品链接系统自自动提取并保存起来;多个商品链接以空格隔开(如 href=http://detail.tmall.com/item.htm?id=35743839682 href=http://item.taobao.com/item.htm?id=36366644805 )<br /> 支持最大长度为：20000<br /> 支持的最大列表长度为：20000
	 **/
	private $content;
	
	/** 
	 * 内容的detail页面地址，数值为html链接，主要用于展现内容的detail信息的
	 **/
	private $detailurl;
	
	/** 
	 * 站长Key<br /> 支持最大长度为：32<br /> 支持的最大列表长度为：32
	 **/
	private $siteKey;
	
	/** 
	 * 内容的自定义标签，数值为文本内容，多个标签以英文逗号“,”分割。
主要用于细化内容的分类（譬如小清新,棉质,雪纺等），标签名称的长度限制为[0,6] (单位是字符，不区分中英文)，标签名称中不能包含非法内容，且一个内容关联的标签数目不能超过6个
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

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
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
		return "taobao.sp.content.custom.publish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->classname,"classname");
		RequestCheckUtil::checkMaxLength($this->classname,5,"classname");
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkMaxLength($this->content,20000,"content");
		RequestCheckUtil::checkNotNull($this->detailurl,"detailurl");
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
