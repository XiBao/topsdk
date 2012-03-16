<?php
/**
 * TOP API: taobao.fenxiao.product.image.delete request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class FenxiaoProductImageDeleteRequest
{
	/** 
	 * 图片位置
	 **/
	private $position;
	
	/** 
	 * 产品ID
	 **/
	private $productId;
	
	private $apiParas = array();
	
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
		return "taobao.fenxiao.product.image.delete";
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
