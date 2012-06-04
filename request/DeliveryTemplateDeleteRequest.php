<?php
/**
 * TOP API: taobao.delivery.template.delete request
 * 
 * @author auto create
 * @since 1.0, 2012-05-24 17:27:51
 */
class DeliveryTemplateDeleteRequest
{
	/** 
	 * 运费模板ID
	 **/
	private $templateId;
	
	private $apiParas = array();
	
	public function setTemplateId($templateId)
	{
		$this->templateId = $templateId;
		$this->apiParas["template_id"] = $templateId;
	}

	public function getTemplateId()
	{
		return $this->templateId;
	}

	public function getApiMethodName()
	{
		return "taobao.delivery.template.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->templateId,"templateId");
	}
}
