<?php
/**
 * TOP API: taobao.sp.content.update request
 * 
 * @author auto create
 * @since 1.0, 2013-12-05 12:50:25
 */
class SpContentUpdateRequest
{
	/** 
	 * 内容的主键ID
	 **/
	private $id;
	
	/** 
	 * 表示为内容类型，包括三种选项： 1(宝贝);2(图片);3(心得)
	 **/
	private $schemaName;
	
	/** 
	 * 站长Key
	 **/
	private $siteKey;
	
	/** 
	 * 内容的自定义标签，数值为文本内容，多个标签以逗号“,”分割。 
主要用于细化内容的分类（譬如小清新，棉质、雪纺等），标签名称的长度限制为[0,6] (单位是字符，不区分中英文)，标签名称中不能包含非法内容，且一个内容关联的标签数目不能超过6个
	 **/
	private $tags;
	
	/** 
	 * 内容具体的信息，用json格式描述，kv对的方式: className(String，必填)：内容的自定义分类，数值为文本内容，主要用于区分内容的分类（譬如连衣裙、T恤、阿迪达斯等），分类名称的长度限制为(0,5] (单位是字符，不区分中英文)，分类名称中不能包含非法内容，且一个站点下所拥有的总自定义分类数量不能超过16个； detailUrl(String，必填)：内容的detail页面地址，数值为html链接，主要用于展现内容的detail信息的，此数值必须存在，它是U站首页或淘宝官网搜索到内容之后用户点击进入的跳转页面。（如果站点没有单个内容的detail页面，也可以直接填写站点首页）； items(String，宝贝必填)： 内容关联的商品列表，数值为商品的detail链接地址，多个宝贝以逗号“,”分割。此参数只有在type = 1 || type = 2（即内容类型为宝贝或图片）的时候才有效，宝贝只能并且必须关联一个商品；图片可以关联0~5个商品； picUrl (String，图片必填): 内容关联的图片地址，数值为图片的html链接地址，多个图片以逗号“,”分割。此参数只有在type = 2（即内容类型为图片）的时候才有效，且关联的图片数量范围为[1,10]； title(String，心得必填): 内容标题，数值为文本内容，此参数只有在type = 3（即内容类型为心得）的时候才有效，且标题的长度限制为(0,30](单位是字符，不区分中英文)，标题中不能含有非法内容，不能含有恶意脚本。 comments (String，选填)： 内容的推荐理由，数值为文本内容，此参数只有在type =1 || type =2 （即内容类型为宝贝或图片）的时候才有效，且推荐理由的长度限制为[0,140](单位是字符，不区分中英文)，推荐理由中不能含有非法内容，不能含有恶意脚本；content(String，心得必填)：内容的心得，数值为文本内容（html形式），此参数只有在type = 3（即内容类型为心得）的时候才有效，且心得长度限制为[100,20000] (单位是字符，不区分中英文), 心得中不能有外链，不能有恶意脚本；心得中包含的商品链接系统自自动提取并保存起来。
	 **/
	private $value;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setSchemaName($schemaName)
	{
		$this->schemaName = $schemaName;
		$this->apiParas["schema_name"] = $schemaName;
	}

	public function getSchemaName()
	{
		return $this->schemaName;
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

	public function setValue($value)
	{
		$this->value = $value;
		$this->apiParas["value"] = $value;
	}

	public function getValue()
	{
		return $this->value;
	}

	public function getApiMethodName()
	{
		return "taobao.sp.content.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->schemaName,"schemaName");
		RequestCheckUtil::checkNotNull($this->siteKey,"siteKey");
		RequestCheckUtil::checkMaxLength($this->siteKey,32,"siteKey");
		RequestCheckUtil::checkNotNull($this->value,"value");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
