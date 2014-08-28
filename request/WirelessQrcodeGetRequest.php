<?php
/**
 * TOP API: taobao.wireless.qrcode.get request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class WirelessQrcodeGetRequest
{
	/** 
	 * 二维码高度
	 **/
	private $height;
	
	/** 
	 * 用户的淘宝nick
	 **/
	private $nick;
	
	/** 
	 * url参数
	 **/
	private $urlparam;
	
	/** 
	 * 二维码宽度
	 **/
	private $width;
	
	private $apiParas = array();
	
	public function setHeight($height)
	{
		$this->height = $height;
		$this->apiParas["height"] = $height;
	}

	public function getHeight()
	{
		return $this->height;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setUrlparam($urlparam)
	{
		$this->urlparam = $urlparam;
		$this->apiParas["urlparam"] = $urlparam;
	}

	public function getUrlparam()
	{
		return $this->urlparam;
	}

	public function setWidth($width)
	{
		$this->width = $width;
		$this->apiParas["width"] = $width;
	}

	public function getWidth()
	{
		return $this->width;
	}

	public function getApiMethodName()
	{
		return "taobao.wireless.qrcode.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->height,"height");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkNotNull($this->width,"width");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
