<?php
/**
 * TOP API: taobao.media.file.delete request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class MediaFileDeleteRequest
{
	/** 
	 * 接入多媒体平台的业务code 每个应用有一个特有的业务code
	 **/
	private $bizCode;
	
	/** 
	 * 文件ID字符串,可以一个也可以一组,用英文逗号间隔,如450,120,155
	 **/
	private $fileIds;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setFileIds($fileIds)
	{
		$this->fileIds = $fileIds;
		$this->apiParas["file_ids"] = $fileIds;
	}

	public function getFileIds()
	{
		return $this->fileIds;
	}

	public function getApiMethodName()
	{
		return "taobao.media.file.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->fileIds,"fileIds");
		RequestCheckUtil::checkMaxListSize($this->fileIds,50,"fileIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
