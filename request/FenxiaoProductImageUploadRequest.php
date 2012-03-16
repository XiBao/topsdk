<?php
/**
 * TOP API: taobao.fenxiao.product.image.upload request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class FenxiaoProductImageUploadRequest
{
	/** 
	 * 产品图片
	 **/
	private $image;
	
	/** 
	 * 产品主图图片空间相对路径或绝对路径
	 **/
	private $picPath;
	
	/** 
	 * 图片位置，1-5之间
	 **/
	private $position;
	
	/** 
	 * 产品ID
	 **/
	private $productId;
	
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

	public function setPicPath($picPath)
	{
		$this->picPath = $picPath;
		$this->apiParas["pic_path"] = $picPath;
	}

	public function getPicPath()
	{
		return $this->picPath;
	}

	public function setPosition($position)
	{
		$this->position = $position;
		$this->apiParas["position"] = $position;
	}

	public function getPosition()
	{
		return $this->position;
	}

	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.product.image.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->position,"position");
		RequestCheckUtil::checkNotNull($this->productId,"productId");
	}
}
