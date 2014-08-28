<?php
/**
 * TOP API: taobao.item.ebook.serial.update request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class ItemEbookSerialUpdateRequest
{
	/** 
	 * 作者。长度不能超过60个字符<br /> 支持最大长度为：60<br /> 支持的最大列表长度为：60
	 **/
	private $author;
	
	/** 
	 * 叶子类目id<br /> 支持最小值为：0
	 **/
	private $cid;
	
	/** 
	 * 商品主图片。类型:JPG,PNG;最大:2M<br /> 支持的文件类型为：gif,jpg,jpeg,png<br /> 支持的最大列表长度为：524288
	 **/
	private $cover;
	
	/** 
	 * 宝贝描述。字数要大于5个字符，小于25000个字符，受违禁词控制<br /> 支持最大长度为：200000<br /> 支持的最大列表长度为：200000
	 **/
	private $desc;
	
	/** 
	 * 宝贝数字id
	 **/
	private $itemId;
	
	/** 
	 * 书名。长度不能超过60个字符<br /> 支持最大长度为：60<br /> 支持的最大列表长度为：60
	 **/
	private $name;
	
	/** 
	 * 商品外部编码，该字段的最大长度是512个字节
	 **/
	private $outerId;
	
	/** 
	 * 不能为0；如：0.50元/章 或者 0.50元/千字；取值范围:0.01-9999.99;精确到2位小数;单位:元。如:5.07，表示:5元7分.
	 **/
	private $price;
	
	/** 
	 * 相关链接。不超过128个字符
	 **/
	private $relationLink;
	
	/** 
	 * 宝贝标题。不能超过60字符，受违禁词控制<br /> 支持最大长度为：120<br /> 支持的最大列表长度为：120
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setAuthor($author)
	{
		$this->author = $author;
		$this->apiParas["author"] = $author;
	}

	public function getAuthor()
	{
		return $this->author;
	}

	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setCover($cover)
	{
		$this->cover = $cover;
		$this->apiParas["cover"] = $cover;
	}

	public function getCover()
	{
		return $this->cover;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
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

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setRelationLink($relationLink)
	{
		$this->relationLink = $relationLink;
		$this->apiParas["relation_link"] = $relationLink;
	}

	public function getRelationLink()
	{
		return $this->relationLink;
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
		return "taobao.item.ebook.serial.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->author,60,"author");
		RequestCheckUtil::checkMinValue($this->cid,0,"cid");
		RequestCheckUtil::checkMaxLength($this->desc,200000,"desc");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
		RequestCheckUtil::checkMaxLength($this->title,120,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
