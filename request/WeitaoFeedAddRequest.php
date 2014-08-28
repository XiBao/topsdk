<?php
/**
 * TOP API: taobao.weitao.feed.add request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class WeitaoFeedAddRequest
{
	/** 
	 * 封面图片地址，必须为自己在图片空间上传的图片<br /> 支持最大长度为：1000<br /> 支持的最大列表长度为：1000
	 **/
	private $coverPic;
	
	/** 
	 * feed的区域内容，有两种类型type=text或者type=pic。当type=text时，为文本内容，请输入description对应的文本值；当type=pic时，为图片内容，请输入pic对应的图片URL，图片的URL必须为当前操作用户(卖家)的图片空间图片地址,并且图片宽度要大于480，高宽比大于1/3小于2/3。支持type=text和type=pic的混排json<br /> 支持最大长度为：3000<br /> 支持的最大列表长度为：3000
	 **/
	private $jsonTiles;
	
	/** 
	 * feed详情里允许放的一个超连接,不允许微信地址，最大长度256字符；输入link_desc后必须输入此参数<br /> 支持最大长度为：256<br /> 支持的最大列表长度为：256
	 **/
	private $link;
	
	/** 
	 * link超连接的描述，最大长度15字符，utf-8,byte[]长度22，允许为空<br /> 支持最大长度为：22<br /> 支持的最大列表长度为：22
	 **/
	private $linkDesc;
	
	/** 
	 * 手机等客户端是否能够查看feed详情，如果为false，在feeds流时点击就进入到插件详情地址，否则进入查看feed详情
	 **/
	private $showDetail;
	
	/** 
	 * 发送的微淘内容的标题<br /> 支持最大长度为：64<br /> 支持的最大列表长度为：64
	 **/
	private $title;
	
	/** 
	 * 业务参数，用key=value格式，有多个时用'&'连接
	 **/
	private $urlParam;
	
	private $apiParas = array();
	
	public function setCoverPic($coverPic)
	{
		$this->coverPic = $coverPic;
		$this->apiParas["cover_pic"] = $coverPic;
	}

	public function getCoverPic()
	{
		return $this->coverPic;
	}

	public function setJsonTiles($jsonTiles)
	{
		$this->jsonTiles = $jsonTiles;
		$this->apiParas["json_tiles"] = $jsonTiles;
	}

	public function getJsonTiles()
	{
		return $this->jsonTiles;
	}

	public function setLink($link)
	{
		$this->link = $link;
		$this->apiParas["link"] = $link;
	}

	public function getLink()
	{
		return $this->link;
	}

	public function setLinkDesc($linkDesc)
	{
		$this->linkDesc = $linkDesc;
		$this->apiParas["link_desc"] = $linkDesc;
	}

	public function getLinkDesc()
	{
		return $this->linkDesc;
	}

	public function setShowDetail($showDetail)
	{
		$this->showDetail = $showDetail;
		$this->apiParas["show_detail"] = $showDetail;
	}

	public function getShowDetail()
	{
		return $this->showDetail;
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

	public function setUrlParam($urlParam)
	{
		$this->urlParam = $urlParam;
		$this->apiParas["url_param"] = $urlParam;
	}

	public function getUrlParam()
	{
		return $this->urlParam;
	}

	public function getApiMethodName()
	{
		return "taobao.weitao.feed.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->coverPic,"coverPic");
		RequestCheckUtil::checkMaxLength($this->coverPic,1000,"coverPic");
		RequestCheckUtil::checkMaxLength($this->jsonTiles,3000,"jsonTiles");
		RequestCheckUtil::checkMaxLength($this->link,256,"link");
		RequestCheckUtil::checkMaxLength($this->linkDesc,22,"linkDesc");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,64,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
