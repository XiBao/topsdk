<?php
/**
 * TOP API: taobao.item.barcode.update request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:55
 */
class ItemBarcodeUpdateRequest
{
	/** 
	 * 商品条形码，如果不用更新，可选择不填
	 **/
	private $itemBarcode;
	
	/** 
	 * 被更新商品的ID
	 **/
	private $itemId;
	
	/** 
	 * SKU维度的条形码，和sku_ids字段一一对应，中间以英文逗号分隔
	 **/
	private $skuBarcodes;
	
	/** 
	 * 被更新SKU的ID列表，中间以英文逗号进行分隔。如果没有SKU或者不需要更新SKU的条形码，不需要设置
	 **/
	private $skuIds;
	
	private $apiParas = array();
	
	public function setItemBarcode($itemBarcode)
	{
		$this->itemBarcode = $itemBarcode;
		$this->apiParas["item_barcode"] = $itemBarcode;
	}

	public function getItemBarcode()
	{
		return $this->itemBarcode;
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

	public function setSkuBarcodes($skuBarcodes)
	{
		$this->skuBarcodes = $skuBarcodes;
		$this->apiParas["sku_barcodes"] = $skuBarcodes;
	}

	public function getSkuBarcodes()
	{
		return $this->skuBarcodes;
	}

	public function setSkuIds($skuIds)
	{
		$this->skuIds = $skuIds;
		$this->apiParas["sku_ids"] = $skuIds;
	}

	public function getSkuIds()
	{
		return $this->skuIds;
	}

	public function getApiMethodName()
	{
		return "taobao.item.barcode.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
