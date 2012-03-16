<?php
/**
 * TOP API: taobao.postage.add request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class PostageAddRequest
{
	/** 
	 * 默认EMS加价费用.精确到1位小数;单位:元。如:1.5
	 **/
	private $emsIncrease;
	
	/** 
	 * 默认EMS费用. 精确到1位小数;单位:元。如:200.5
	 **/
	private $emsPrice;
	
	/** 
	 * 默认快递加价费用.精确到1位小数;单位:元。如:1.5
<br>
<font color='red'>货到付款用户，为必选项</font>
	 **/
	private $expressIncrease;
	
	/** 
	 * 默认快递费用. 精确到1位小数;单位:元。如:200.5
<br>
<font color='red'>货到付款用户，为必选项</font>
	 **/
	private $expressPrice;
	
	/** 
	 * 邮费模板备注,不能超过200个字节
	 **/
	private $memo;
	
	/** 
	 * 邮费模板名称,不能超过50个字节
	 **/
	private $name;
	
	/** 
	 * 默认平邮加价费用. 精确到1位小数;单位:元。如:1.5
	 **/
	private $postIncrease;
	
	/** 
	 * 默认平邮费用. 注意:至少选择一组默认的邮费组,例如:post_price,post_increase . 精确到1位小数;单位:元。如:200.5
	 **/
	private $postPrice;
	
	/** 
	 * 邮费子项涉及的地区.结构: value1;value2;value3 如:110000;310000;320000,330000 就代表邮费子项涉及(北京;上海;江苏,浙江)四个地区. 可以用taobao.areas.get接口获取.或者参考：http://www.stats.gov.cn/tjbz/xzqhdm/t20080215_402462675.htm
	 **/
	private $postageModeDests;
	
	/** 
	 * 运费方式加件费用.结构: value1;value2;value3 如: 1.5;2;4 .精确到1位小数;单位:元。如:1.5
	 **/
	private $postageModeIncreases;
	
	/** 
	 * 运费方式单价. 结构: value1;value2;value3 如: 11.2;14;6 .精确到1位小数;单位:元。如:200.5
	 **/
	private $postageModePrices;
	
	/** 
	 * 运费方式:平邮 (post),快递公司(express),EMS (ems) 结构:value1;value2;value3 如: post;express;ems 注意:在添加多个PostageMode时,字符串中使用 ";" 分号区分.postage_mode.type,postage_mode.dest,postage_mode.price,postage_mode.increase, 数量必须一致.
	 **/
	private $postageModeTypes;
	
	private $apiParas = array();
	
	public function setEmsIncrease($emsIncrease)
	{
		$this->emsIncrease = $emsIncrease;
		$this->apiParas["ems_increase"] = $emsIncrease;
	}

	public function getEmsIncrease()
	{
		return $this->emsIncrease;
	}

	public function setEmsPrice($emsPrice)
	{
		$this->emsPrice = $emsPrice;
		$this->apiParas["ems_price"] = $emsPrice;
	}

	public function getEmsPrice()
	{
		return $this->emsPrice;
	}

	public function setExpressIncrease($expressIncrease)
	{
		$this->expressIncrease = $expressIncrease;
		$this->apiParas["express_increase"] = $expressIncrease;
	}

	public function getExpressIncrease()
	{
		return $this->expressIncrease;
	}

	public function setExpressPrice($expressPrice)
	{
		$this->expressPrice = $expressPrice;
		$this->apiParas["express_price"] = $expressPrice;
	}

	public function getExpressPrice()
	{
		return $this->expressPrice;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
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

	public function setPostIncrease($postIncrease)
	{
		$this->postIncrease = $postIncrease;
		$this->apiParas["post_increase"] = $postIncrease;
	}

	public function getPostIncrease()
	{
		return $this->postIncrease;
	}

	public function setPostPrice($postPrice)
	{
		$this->postPrice = $postPrice;
		$this->apiParas["post_price"] = $postPrice;
	}

	public function getPostPrice()
	{
		return $this->postPrice;
	}

	public function setPostageModeDests($postageModeDests)
	{
		$this->postageModeDests = $postageModeDests;
		$this->apiParas["postage_mode_dests"] = $postageModeDests;
	}

	public function getPostageModeDests()
	{
		return $this->postageModeDests;
	}

	public function setPostageModeIncreases($postageModeIncreases)
	{
		$this->postageModeIncreases = $postageModeIncreases;
		$this->apiParas["postage_mode_increases"] = $postageModeIncreases;
	}

	public function getPostageModeIncreases()
	{
		return $this->postageModeIncreases;
	}

	public function setPostageModePrices($postageModePrices)
	{
		$this->postageModePrices = $postageModePrices;
		$this->apiParas["postage_mode_prices"] = $postageModePrices;
	}

	public function getPostageModePrices()
	{
		return $this->postageModePrices;
	}

	public function setPostageModeTypes($postageModeTypes)
	{
		$this->postageModeTypes = $postageModeTypes;
		$this->apiParas["postage_mode_types"] = $postageModeTypes;
	}

	public function getPostageModeTypes()
	{
		return $this->postageModeTypes;
	}

	public function getApiMethodName()
	{
		return "taobao.postage.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->name,"name");
	}
}
