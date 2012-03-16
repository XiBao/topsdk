<?php
/**
 * TOP API: taobao.postage.update request
 * 
 * @author auto create
 * @since 1.0, 2011-12-02 10:10:50
 */
class PostageUpdateRequest
{
	/** 
	 * 默认EMS加价费用.精确到1位小数;单位:元。如:10.5
	 **/
	private $emsIncrease;
	
	/** 
	 * 默认EMS费用.精确到1位小数;单位:元。如:10.5
	 **/
	private $emsPrice;
	
	/** 
	 * 默认快递加价费用.精确到1位小数;单位:元。如:10.5
	 **/
	private $expressIncrease;
	
	/** 
	 * 默认快递费用.精确到1位小数;单位:元。如:10.5
	 **/
	private $expressPrice;
	
	/** 
	 * 邮费模板备注
	 **/
	private $memo;
	
	/** 
	 * 邮费模板名称
	 **/
	private $name;
	
	/** 
	 * 默认平邮加价费用.精确到1位小数;单位:元。如:10.5
	 **/
	private $postIncrease;
	
	/** 
	 * 默认平邮费用.精确到1位小数;单位:元。如:10.5
	 **/
	private $postPrice;
	
	/** 
	 * 邮费模板id.注意:给定的postage_id必须是存在的postage的id
	 **/
	private $postageId;
	
	/** 
	 * 邮费子项涉及的地区，多个地区用逗号连接数量串。可以用taobao.areas.get接口获取。或者参考：http://www.stats.gov.cn/tjbz/xzqhdm/t20080215_402462675.htm  例 (110000;310000;320000,330000)就代表邮费子项涉及(北京;上海;江苏,浙江)四个地区。填写时要注意对照地区代码值，如果填入错误地区代码，将会出现错误信息
	 **/
	private $postageModeDests;
	
	/** 
	 * 运费子模板id:修改多个子模板时,用 “;”区分.注意1:给定的postage_mode_id必须是当前postage所包含的postage_mode的id.注意2:在修改多个PostageMode时,字符串中使用 " ; " 分号区分,必须注意每个字段的数量一定要相等.注意3:在添加运费模板子模板的时候必须是已经有了默认的运费项后才可以添加对应的邮费模板子模板。如,添加了默认的EMS运费项，才可以添加运EMS费模板子项.
	 **/
	private $postageModeIds;
	
	/** 
	 * 运费方式加件费用数量串：例 (1.5;2.4;2.0).精确到1位小数;单位:元。如:10.5
	 **/
	private $postageModeIncreases;
	
	/** 
	 * 子模板操作类型：新增(add),修改(update),删除(delete). 例(add;add;add).注意：对子模板进行操作的时候此参数必填.如果不填那默认为update.新增操作不能传子模板ID
	 **/
	private $postageModeOptTypes;
	
	/** 
	 * 运费方式单价数量串：例 (11.2;14;1;6).精确到1位小数;单位:元。如:10.5
	 **/
	private $postageModePrices;
	
	/** 
	 * 运费方式:平邮(post),快递公司(express),EMS(ems)数量串:例(post;express;ems)分号区分
	 **/
	private $postageModeTypes;
	
	/** 
	 * 删除ems类型的邮费模板，包括所有这个类型的子邮费模板
	 **/
	private $removeEms;
	
	/** 
	 * 删除快递类型的邮费模板，包括所有这个类型的子邮费模板
	 **/
	private $removeExpress;
	
	/** 
	 * 删除平邮类型的邮费模板，包括所有这个类型的子邮费模板
	 **/
	private $removePost;
	
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

	public function setPostageId($postageId)
	{
		$this->postageId = $postageId;
		$this->apiParas["postage_id"] = $postageId;
	}

	public function getPostageId()
	{
		return $this->postageId;
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

	public function setPostageModeIds($postageModeIds)
	{
		$this->postageModeIds = $postageModeIds;
		$this->apiParas["postage_mode_ids"] = $postageModeIds;
	}

	public function getPostageModeIds()
	{
		return $this->postageModeIds;
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

	public function setPostageModeOptTypes($postageModeOptTypes)
	{
		$this->postageModeOptTypes = $postageModeOptTypes;
		$this->apiParas["postage_mode_optTypes"] = $postageModeOptTypes;
	}

	public function getPostageModeOptTypes()
	{
		return $this->postageModeOptTypes;
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

	public function setRemoveEms($removeEms)
	{
		$this->removeEms = $removeEms;
		$this->apiParas["remove_ems"] = $removeEms;
	}

	public function getRemoveEms()
	{
		return $this->removeEms;
	}

	public function setRemoveExpress($removeExpress)
	{
		$this->removeExpress = $removeExpress;
		$this->apiParas["remove_express"] = $removeExpress;
	}

	public function getRemoveExpress()
	{
		return $this->removeExpress;
	}

	public function setRemovePost($removePost)
	{
		$this->removePost = $removePost;
		$this->apiParas["remove_post"] = $removePost;
	}

	public function getRemovePost()
	{
		return $this->removePost;
	}

	public function getApiMethodName()
	{
		return "taobao.postage.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->postageId,"postageId");
	}
}
