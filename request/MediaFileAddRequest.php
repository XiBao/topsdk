<?php
/**
 * TOP API: taobao.media.file.add request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class MediaFileAddRequest
{
	/** 
	 * 接入多媒体平台的业务code
每个应用有一个特有的业务code
	 **/
	private $bizCode;
	
	/** 
	 * 文件属于的那个目录的目录编号<br /> 支持最小值为：0
	 **/
	private $dirId;
	
	/** 
	 * 额外信息
	 **/
	private $ext;
	
	/** 
	 * 文件
	 **/
	private $fileData;
	
	/** 
	 * 上传文件的名称<br /> 支持最大长度为：50<br /> 支持的最大列表长度为：50
	 **/
	private $name;
	
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

	public function setDirId($dirId)
	{
		$this->dirId = $dirId;
		$this->apiParas["dir_id"] = $dirId;
	}

	public function getDirId()
	{
		return $this->dirId;
	}

	public function setExt($ext)
	{
		$this->ext = $ext;
		$this->apiParas["ext"] = $ext;
	}

	public function getExt()
	{
		return $this->ext;
	}

	public function setFileData($fileData)
	{
		$this->fileData = $fileData;
		$this->apiParas["file_data"] = $fileData;
	}

	public function getFileData()
	{
		return $this->fileData;
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

	public function getApiMethodName()
	{
		return "taobao.media.file.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->dirId,"dirId");
		RequestCheckUtil::checkMinValue($this->dirId,0,"dirId");
		RequestCheckUtil::checkNotNull($this->fileData,"fileData");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,50,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
