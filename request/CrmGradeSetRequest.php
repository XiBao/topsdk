<?php
/**
 * TOP API: taobao.crm.grade.set request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:56
 */
class CrmGradeSetRequest
{
	/** 
	 * 只对设置的层级等级有效，必须要在amount和count参数中选择一个<br>
amount参数的填写规范：升级到下一个级别的需要的交易额，单位为分,必须全部填写.例如10000,20000,30000，其中10000表示非会员升级到普通的所需的交易额，20000表示普通升级到高级所需的交易额，层级等级中最高等级的下一个等级默认为0。会员等级越高，所需交易额必须越高。<br /> 支持最小值为：0
	 **/
	private $amount;
	
	/** 
	 * 只对设置的层级等级有效，必须要在amount和count参数中选择一个<br>
count参数的填写规范：
升级到下一个级别的需要的交易量,必须全部填写. 以逗号分隔,例如100,200,300，其中100表示非会员升级到普通会员交易量。层级等级中最高等级的下一个等级的交易量默认为0。会员等级越高，交易量必须越高。<br /> 支持最小值为：0
	 **/
	private $count;
	
	/** 
	 * 会员级别折扣率。会员等级越高，折扣必须越低。
950即9.5折，888折即8.88折。出于安全原因，折扣现最低只能设置到700即7折。<br /> 支持最大值为：1000<br /> 支持最小值为：700
	 **/
	private $discount;
	
	/** 
	 * 会员等级，用逗号分隔。买家会员级别0：店铺客户 1：普通会员 2 ：高级会员 3：VIP会员 4：至尊VIP<br /> 支持最大值为：4<br /> 支持最小值为：1
	 **/
	private $grade;
	
	/** 
	 * 是否设置达到某一会员等级的交易量和交易额，必填。4个级别都需要设置，如入参为true,true,true,false时，表示设置达到高级会员、VIP会员的交易量或者交易额，不设置达到至尊会员的交易量和交易额
	 **/
	private $hierarchy;
	
	private $apiParas = array();
	
	public function setAmount($amount)
	{
		$this->amount = $amount;
		$this->apiParas["amount"] = $amount;
	}

	public function getAmount()
	{
		return $this->amount;
	}

	public function setCount($count)
	{
		$this->count = $count;
		$this->apiParas["count"] = $count;
	}

	public function getCount()
	{
		return $this->count;
	}

	public function setDiscount($discount)
	{
		$this->discount = $discount;
		$this->apiParas["discount"] = $discount;
	}

	public function getDiscount()
	{
		return $this->discount;
	}

	public function setGrade($grade)
	{
		$this->grade = $grade;
		$this->apiParas["grade"] = $grade;
	}

	public function getGrade()
	{
		return $this->grade;
	}

	public function setHierarchy($hierarchy)
	{
		$this->hierarchy = $hierarchy;
		$this->apiParas["hierarchy"] = $hierarchy;
	}

	public function getHierarchy()
	{
		return $this->hierarchy;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.grade.set";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->amount,4,"amount");
		RequestCheckUtil::checkMaxListSize($this->count,4,"count");
		RequestCheckUtil::checkNotNull($this->discount,"discount");
		RequestCheckUtil::checkMaxListSize($this->discount,4,"discount");
		RequestCheckUtil::checkNotNull($this->grade,"grade");
		RequestCheckUtil::checkMaxListSize($this->grade,4,"grade");
		RequestCheckUtil::checkNotNull($this->hierarchy,"hierarchy");
		RequestCheckUtil::checkMaxListSize($this->hierarchy,4,"hierarchy");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
