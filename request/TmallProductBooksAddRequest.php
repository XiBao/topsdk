<?php
/**
 * TOP API: tmall.product.books.add request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class TmallProductBooksAddRequest
{
	/** 
	 * 摘要信息，不支持HTML代码，长度限制5000
	 **/
	private $abstractMsg;
	
	/** 
	 * 用户的Id,需要确定自己id的可以联系接口负责人<br /> 支持最大长度为：40<br /> 支持的最大列表长度为：40
	 **/
	private $appInfo;
	
	/** 
	 * 作者/著者，最多填写三个人名，超出三个人的以“等”结束<br /> 支持最大长度为：80<br /> 支持的最大列表长度为：80
	 **/
	private $author;
	
	/** 
	 * 作者国别/地区，到国家级别<br /> 支持最大长度为：80<br /> 支持的最大列表长度为：80
	 **/
	private $authorArea;
	
	/** 
	 * 条形码，数字，共13位，9787开头<br /> 支持最大长度为：20<br /> 支持的最大列表长度为：20
	 **/
	private $barCode;
	
	/** 
	 * 装帧<br /> 支持最大长度为：10<br /> 支持的最大列表长度为：10
	 **/
	private $bookBind;
	
	/** 
	 * 开本，如：16  表示16开本
	 **/
	private $bookSize;
	
	/** 
	 * 版本<br /> 支持的最大列表长度为：10
	 **/
	private $bookVersion;
	
	/** 
	 * 目录，不支持HTML代码，长度限制为8000<br /> 支持最大长度为：8000<br /> 支持的最大列表长度为：8000
	 **/
	private $catalog;
	
	/** 
	 * 类目id
	 **/
	private $categoryId;
	
	/** 
	 * 中图分类号，英文字母加数字组成<br /> 支持最大长度为：30<br /> 支持的最大列表长度为：30
	 **/
	private $chinaClassifyNo;
	
	/** 
	 * cip数据编号，真实格式：（XXX）第***号，
导入时，格式为XXX-***<br /> 支持最大长度为：50<br /> 支持的最大列表长度为：50
	 **/
	private $cip;
	
	/** 
	 * 点评者，只写一个人的名字，超出的以“等”结束<br /> 支持最大长度为：40<br /> 支持的最大列表长度为：40
	 **/
	private $commentator;
	
	/** 
	 * 用户自己的Id号
	 **/
	private $customId;
	
	/** 
	 * 图书名称(正副书名)<br /> 支持最大长度为：150<br /> 支持的最大列表长度为：150
	 **/
	private $deputyName;
	
	/** 
	 * 绘图者，只写一个人的名字，超出的以“等”结束<br /> 支持最大长度为：40<br /> 支持的最大列表长度为：40
	 **/
	private $drawor;
	
	/** 
	 * 编者，只写一个人的名字，超出的以“等”结束<br /> 支持最大长度为：40<br /> 支持的最大列表长度为：40
	 **/
	private $editor;
	
	/** 
	 * 摄影者，只写一个人的名字，超出的以“等”结束<br /> 支持最大长度为：40<br /> 支持的最大列表长度为：40
	 **/
	private $graphor;
	
	/** 
	 * 上传图片，图片上传使用byte[]类型
	 **/
	private $image;
	
	/** 
	 * 不带‘-’的图书ISBN号
1. 位数限定：10位 末尾校验,7开头
2. 位数限定：13位、开头数字限定： 9787开头<br /> 支持最大长度为：13<br /> 支持的最大列表长度为：13
	 **/
	private $isbn;
	
	/** 
	 * 这条记录对应的淘宝的Ids
	 **/
	private $itemIds;
	
	/** 
	 * 口述者，只写一个人的名字，超出的以“等”结束<br /> 支持最大长度为：40<br /> 支持的最大列表长度为：40
	 **/
	private $narrator;
	
	/** 
	 * 分册名<br /> 支持最大长度为：150<br /> 支持的最大列表长度为：150
	 **/
	private $partName;
	
	/** 
	 * 分册号<br /> 支持的最大列表长度为：10
	 **/
	private $partNo;
	
	/** 
	 * 策划者，只写一个人的名字，超出的以“等”结束<br /> 支持最大长度为：40<br /> 支持的最大列表长度为：40
	 **/
	private $plottor;
	
	/** 
	 * 价格支持整数和小数，小数保留小数点后两位，若有多个价格，价格之间通过','号分隔<br /> 支持最大长度为：40<br /> 支持的最大列表长度为：40
	 **/
	private $price;
	
	/** 
	 * 出版社名称<br /> 支持最大长度为：80<br /> 支持的最大列表长度为：80
	 **/
	private $publishCompany;
	
	/** 
	 * 出版时间，格式必须注意：年份/月份
	 **/
	private $publishYm;
	
	/** 
	 * 年号，必须是完整的年份，如：2013，当输入的值不是四位或者首位大于2时，调接口失败<br /> 支持最大长度为：10<br /> 支持的最大列表长度为：10
	 **/
	private $reginYear;
	
	/** 
	 * 注释者，只写一个人的名字，超出的以“等”结束<br /> 支持最大长度为：40<br /> 支持的最大列表长度为：40
	 **/
	private $scholisat;
	
	/** 
	 * 丛书名<br /> 支持最大长度为：150<br /> 支持的最大列表长度为：150
	 **/
	private $seriesBooksName;
	
	/** 
	 * 此字段废弃<br /> 支持最大长度为：150<br /> 支持的最大列表长度为：150
	 **/
	private $spuImg;
	
	/** 
	 * 简介，不支持HTML代码，长度不能超过5000<br /> 支持最大长度为：5000<br /> 支持的最大列表长度为：5000
	 **/
	private $summary;
	
	/** 
	 * 译者，只写一个人的名字，超出的以“等”结束<br /> 支持最大长度为：40<br /> 支持的最大列表长度为：40
	 **/
	private $translator;
	
	private $apiParas = array();
	
	public function setAbstractMsg($abstractMsg)
	{
		$this->abstractMsg = $abstractMsg;
		$this->apiParas["abstract_msg"] = $abstractMsg;
	}

	public function getAbstractMsg()
	{
		return $this->abstractMsg;
	}

	public function setAppInfo($appInfo)
	{
		$this->appInfo = $appInfo;
		$this->apiParas["app_info"] = $appInfo;
	}

	public function getAppInfo()
	{
		return $this->appInfo;
	}

	public function setAuthor($author)
	{
		$this->author = $author;
		$this->apiParas["author"] = $author;
	}

	public function getAuthor()
	{
		return $this->author;
	}

	public function setAuthorArea($authorArea)
	{
		$this->authorArea = $authorArea;
		$this->apiParas["author_area"] = $authorArea;
	}

	public function getAuthorArea()
	{
		return $this->authorArea;
	}

	public function setBarCode($barCode)
	{
		$this->barCode = $barCode;
		$this->apiParas["bar_code"] = $barCode;
	}

	public function getBarCode()
	{
		return $this->barCode;
	}

	public function setBookBind($bookBind)
	{
		$this->bookBind = $bookBind;
		$this->apiParas["book_bind"] = $bookBind;
	}

	public function getBookBind()
	{
		return $this->bookBind;
	}

	public function setBookSize($bookSize)
	{
		$this->bookSize = $bookSize;
		$this->apiParas["book_size"] = $bookSize;
	}

	public function getBookSize()
	{
		return $this->bookSize;
	}

	public function setBookVersion($bookVersion)
	{
		$this->bookVersion = $bookVersion;
		$this->apiParas["book_version"] = $bookVersion;
	}

	public function getBookVersion()
	{
		return $this->bookVersion;
	}

	public function setCatalog($catalog)
	{
		$this->catalog = $catalog;
		$this->apiParas["catalog"] = $catalog;
	}

	public function getCatalog()
	{
		return $this->catalog;
	}

	public function setCategoryId($categoryId)
	{
		$this->categoryId = $categoryId;
		$this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
	}

	public function setChinaClassifyNo($chinaClassifyNo)
	{
		$this->chinaClassifyNo = $chinaClassifyNo;
		$this->apiParas["china_classify_no"] = $chinaClassifyNo;
	}

	public function getChinaClassifyNo()
	{
		return $this->chinaClassifyNo;
	}

	public function setCip($cip)
	{
		$this->cip = $cip;
		$this->apiParas["cip"] = $cip;
	}

	public function getCip()
	{
		return $this->cip;
	}

	public function setCommentator($commentator)
	{
		$this->commentator = $commentator;
		$this->apiParas["commentator"] = $commentator;
	}

	public function getCommentator()
	{
		return $this->commentator;
	}

	public function setCustomId($customId)
	{
		$this->customId = $customId;
		$this->apiParas["custom_id"] = $customId;
	}

	public function getCustomId()
	{
		return $this->customId;
	}

	public function setDeputyName($deputyName)
	{
		$this->deputyName = $deputyName;
		$this->apiParas["deputy_name"] = $deputyName;
	}

	public function getDeputyName()
	{
		return $this->deputyName;
	}

	public function setDrawor($drawor)
	{
		$this->drawor = $drawor;
		$this->apiParas["drawor"] = $drawor;
	}

	public function getDrawor()
	{
		return $this->drawor;
	}

	public function setEditor($editor)
	{
		$this->editor = $editor;
		$this->apiParas["editor"] = $editor;
	}

	public function getEditor()
	{
		return $this->editor;
	}

	public function setGraphor($graphor)
	{
		$this->graphor = $graphor;
		$this->apiParas["graphor"] = $graphor;
	}

	public function getGraphor()
	{
		return $this->graphor;
	}

	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setIsbn($isbn)
	{
		$this->isbn = $isbn;
		$this->apiParas["isbn"] = $isbn;
	}

	public function getIsbn()
	{
		return $this->isbn;
	}

	public function setItemIds($itemIds)
	{
		$this->itemIds = $itemIds;
		$this->apiParas["item_ids"] = $itemIds;
	}

	public function getItemIds()
	{
		return $this->itemIds;
	}

	public function setNarrator($narrator)
	{
		$this->narrator = $narrator;
		$this->apiParas["narrator"] = $narrator;
	}

	public function getNarrator()
	{
		return $this->narrator;
	}

	public function setPartName($partName)
	{
		$this->partName = $partName;
		$this->apiParas["part_name"] = $partName;
	}

	public function getPartName()
	{
		return $this->partName;
	}

	public function setPartNo($partNo)
	{
		$this->partNo = $partNo;
		$this->apiParas["part_no"] = $partNo;
	}

	public function getPartNo()
	{
		return $this->partNo;
	}

	public function setPlottor($plottor)
	{
		$this->plottor = $plottor;
		$this->apiParas["plottor"] = $plottor;
	}

	public function getPlottor()
	{
		return $this->plottor;
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

	public function setPublishCompany($publishCompany)
	{
		$this->publishCompany = $publishCompany;
		$this->apiParas["publish_company"] = $publishCompany;
	}

	public function getPublishCompany()
	{
		return $this->publishCompany;
	}

	public function setPublishYm($publishYm)
	{
		$this->publishYm = $publishYm;
		$this->apiParas["publish_ym"] = $publishYm;
	}

	public function getPublishYm()
	{
		return $this->publishYm;
	}

	public function setReginYear($reginYear)
	{
		$this->reginYear = $reginYear;
		$this->apiParas["regin_year"] = $reginYear;
	}

	public function getReginYear()
	{
		return $this->reginYear;
	}

	public function setScholisat($scholisat)
	{
		$this->scholisat = $scholisat;
		$this->apiParas["scholisat"] = $scholisat;
	}

	public function getScholisat()
	{
		return $this->scholisat;
	}

	public function setSeriesBooksName($seriesBooksName)
	{
		$this->seriesBooksName = $seriesBooksName;
		$this->apiParas["series_books_name"] = $seriesBooksName;
	}

	public function getSeriesBooksName()
	{
		return $this->seriesBooksName;
	}

	public function setSpuImg($spuImg)
	{
		$this->spuImg = $spuImg;
		$this->apiParas["spu_img"] = $spuImg;
	}

	public function getSpuImg()
	{
		return $this->spuImg;
	}

	public function setSummary($summary)
	{
		$this->summary = $summary;
		$this->apiParas["summary"] = $summary;
	}

	public function getSummary()
	{
		return $this->summary;
	}

	public function setTranslator($translator)
	{
		$this->translator = $translator;
		$this->apiParas["translator"] = $translator;
	}

	public function getTranslator()
	{
		return $this->translator;
	}

	public function getApiMethodName()
	{
		return "tmall.product.books.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appInfo,"appInfo");
		RequestCheckUtil::checkMaxLength($this->appInfo,40,"appInfo");
		RequestCheckUtil::checkNotNull($this->author,"author");
		RequestCheckUtil::checkMaxLength($this->author,80,"author");
		RequestCheckUtil::checkMaxLength($this->authorArea,80,"authorArea");
		RequestCheckUtil::checkNotNull($this->barCode,"barCode");
		RequestCheckUtil::checkMaxLength($this->barCode,20,"barCode");
		RequestCheckUtil::checkNotNull($this->bookBind,"bookBind");
		RequestCheckUtil::checkMaxLength($this->bookBind,10,"bookBind");
		RequestCheckUtil::checkMaxLength($this->catalog,8000,"catalog");
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
		RequestCheckUtil::checkMaxListSize($this->categoryId,40,"categoryId");
		RequestCheckUtil::checkMaxLength($this->chinaClassifyNo,30,"chinaClassifyNo");
		RequestCheckUtil::checkMaxLength($this->cip,50,"cip");
		RequestCheckUtil::checkMaxLength($this->commentator,40,"commentator");
		RequestCheckUtil::checkNotNull($this->customId,"customId");
		RequestCheckUtil::checkNotNull($this->deputyName,"deputyName");
		RequestCheckUtil::checkMaxLength($this->deputyName,150,"deputyName");
		RequestCheckUtil::checkMaxLength($this->drawor,40,"drawor");
		RequestCheckUtil::checkMaxLength($this->editor,40,"editor");
		RequestCheckUtil::checkMaxLength($this->graphor,40,"graphor");
		RequestCheckUtil::checkNotNull($this->isbn,"isbn");
		RequestCheckUtil::checkMaxLength($this->isbn,13,"isbn");
		RequestCheckUtil::checkMaxLength($this->narrator,40,"narrator");
		RequestCheckUtil::checkMaxLength($this->partName,150,"partName");
		RequestCheckUtil::checkMaxLength($this->plottor,40,"plottor");
		RequestCheckUtil::checkNotNull($this->price,"price");
		RequestCheckUtil::checkMaxLength($this->price,40,"price");
		RequestCheckUtil::checkMaxLength($this->publishCompany,80,"publishCompany");
		RequestCheckUtil::checkMaxLength($this->reginYear,10,"reginYear");
		RequestCheckUtil::checkMaxLength($this->scholisat,40,"scholisat");
		RequestCheckUtil::checkMaxLength($this->seriesBooksName,150,"seriesBooksName");
		RequestCheckUtil::checkMaxLength($this->spuImg,150,"spuImg");
		RequestCheckUtil::checkMaxLength($this->summary,5000,"summary");
		RequestCheckUtil::checkMaxLength($this->translator,40,"translator");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
