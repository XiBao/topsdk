<?php
/**
 * TOP API: taobao.item.ebook.serial.add request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class ItemEbookSerialAddRequest
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
	 * 版权到期时间，如2013-08-06
	 **/
	private $copyrightEnd;
	
	/** 
	 * 版权文件。不得小于350*500；类型:jpg,png；大小不能超过2M<br /> 支持的文件类型为：jpg,png<br /> 支持的最大列表长度为：2097152
	 **/
	private $copyrightFiles;
	
	/** 
	 * 商品主图片。类型:JPG,PNG;最大:2M<br /> 支持的文件类型为：gif,jpg,jpeg,png<br /> 支持的最大列表长度为：2097152
	 **/
	private $cover;
	
	/** 
	 * 宝贝描述。字数要大于5个字符，小于25000个字符，受违禁词控制<br /> 支持最大长度为：200000<br /> 支持的最大列表长度为：200000
	 **/
	private $desc;
	
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
	 * 售卖方式。目前取值范围0、1；
0：按章节售卖 1：按千字售卖
	 **/
	private $sellWay;
	
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

	public function setCopyrightEnd($copyrightEnd)
	{
		$this->copyrightEnd = $copyrightEnd;
		$this->apiParas["copyright_end"] = $copyrightEnd;
	}

	public function getCopyrightEnd()
	{
		return $this->copyrightEnd;
	}

	public function setCopyrightFiles($copyrightFiles)
	{
		$this->copyrightFiles = $copyrightFiles;
		$this->apiParas["copyright_files"] = $copyrightFiles;
	}

	public function getCopyrightFiles()
	{
		return $this->copyrightFiles;
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

	public function setSellWay($sellWay)
	{
		$this->sellWay = $sellWay;
		$this->apiParas["sell_way"] = $sellWay;
	}

	public function getSellWay()
	{
		return $this->sellWay;
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
		return "taobao.item.ebook.serial.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->author,"author");
		RequestCheckUtil::checkMaxLength($this->author,60,"author");
		RequestCheckUtil::checkNotNull($this->cid,"cid");
		RequestCheckUtil::checkMinValue($this->cid,0,"cid");
		RequestCheckUtil::checkNotNull($this->copyrightEnd,"copyrightEnd");
		RequestCheckUtil::checkNotNull($this->copyrightFiles,"copyrightFiles");
		RequestCheckUtil::checkNotNull($this->cover,"cover");
		RequestCheckUtil::checkNotNull($this->desc,"desc");
		RequestCheckUtil::checkMaxLength($this->desc,200000,"desc");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
		RequestCheckUtil::checkNotNull($this->price,"price");
		RequestCheckUtil::checkNotNull($this->sellWay,"sellWay");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,120,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
