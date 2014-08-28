<?php
/**
 * TOP API: taobao.item.ebook.update request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class ItemEbookUpdateRequest
{
	/** 
	 * 商品主图片。类型:JPG,PNG;最大:2M，可以选择不填，不填，则获得默认封面图片<br /> 支持的文件类型为：gif,jpg,jpeg,png<br /> 支持的最大列表长度为：2097152
	 **/
	private $cover;
	
	/** 
	 * 宝贝描述。字数要大于5个字符，小于25000个字符，受违禁词控制<br /> 支持最大长度为：200000<br /> 支持的最大列表长度为：200000
	 **/
	private $desc;
	
	/** 
	 * 电子书商品数字id
	 **/
	private $itemId;
	
	/** 
	 * 商品外部编码，该字段的最大长度是512个字节
	 **/
	private $outerId;
	
	/** 
	 * 电子书的售卖价格
取值范围:0.00-9999.99;精确到2位小数;单位:元。如:5.07，表示:5元7分.
	 **/
	private $price;
	
	/** 
	 * 试读章节数，至少大于或等于1，不超过100
	 **/
	private $probation;
	
	/** 
	 * 宝贝标题。不能超过60字符，受违禁词控制<br /> 支持最大长度为：120<br /> 支持的最大列表长度为：120
	 **/
	private $title;
	
	private $apiParas = array();
	
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

	public function setProbation($probation)
	{
		$this->probation = $probation;
		$this->apiParas["probation"] = $probation;
	}

	public function getProbation()
	{
		return $this->probation;
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
		return "taobao.item.ebook.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->desc,200000,"desc");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkMaxLength($this->title,120,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
