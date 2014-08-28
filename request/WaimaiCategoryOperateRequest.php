<?php
/**
 * TOP API: taobao.waimai.category.operate request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class WaimaiCategoryOperateRequest
{
	/** 
	 * 2，新增
	参数：storeId ; 0=1 ; d=json数组
	
	如：{"cates":[{"name":"test1","cid":111,"order":2,"user":"test","pid":111,"rid":1111,"bid":12346}]}
	
	
{
  "cates": [
    {
      "name": "test1",   // 类目名， 必选
      "order": 2				// 排序值，升序,可选
    }
  ]
}

3, 修改

{
  "cates": [
    {
      "name": "test1",
      "cid": 111,			// 类目id，必须
      "order": 2			// 排序值，升序
    }
  ]
}

4, 删除
{
  "cates": [
    {
      "cid": 111,			// 类目id，必须
    }
  ]
}
	 **/
	private $data;
	
	/** 
	 * 0 查询 1 创建 2 更新 3 删除
	 **/
	private $operate;
	
	/** 
	 * 店铺ID
	 **/
	private $shopId;
	
	private $apiParas = array();
	
	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setOperate($operate)
	{
		$this->operate = $operate;
		$this->apiParas["operate"] = $operate;
	}

	public function getOperate()
	{
		return $this->operate;
	}

	public function setShopId($shopId)
	{
		$this->shopId = $shopId;
		$this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId()
	{
		return $this->shopId;
	}

	public function getApiMethodName()
	{
		return "taobao.waimai.category.operate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->operate,"operate");
		RequestCheckUtil::checkNotNull($this->shopId,"shopId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
