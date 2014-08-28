<?php
/**
 * TOP API: taobao.jae.client.sharing.showsharingmenu request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class JaeClientSharingShowsharingmenuRequest
{
	/** 
	 * 图片地址
	 **/
	private $image;
	
	/** 
	 * 分享内容
	 **/
	private $text;
	
	/** 
	 * 标题
	 **/
	private $title;
	
	/** 
	 * 分享的连接地址
	 **/
	private $url;
	
	private $apiParas = array();
	
	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setText($text)
	{
		$this->text = $text;
		$this->apiParas["text"] = $text;
	}

	public function getText()
	{
		return $this->text;
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

	public function setUrl($url)
	{
		$this->url = $url;
		$this->apiParas["url"] = $url;
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function getApiMethodName()
	{
		return "taobao.jae.client.sharing.showsharingmenu";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->text,"text");
		RequestCheckUtil::checkNotNull($this->title,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
