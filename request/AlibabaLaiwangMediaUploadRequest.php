<?php
/**
 * TOP API: alibaba.laiwang.media.upload request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class AlibabaLaiwangMediaUploadRequest
{
	/** 
	 * 需要上传的文件内容.
	 **/
	private $media;
	
	/** 
	 * 多媒体文件类型，目前支持: image(图片),audio(音频),video(视频)
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setMedia($media)
	{
		$this->media = $media;
		$this->apiParas["media"] = $media;
	}

	public function getMedia()
	{
		return $this->media;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "alibaba.laiwang.media.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->media,"media");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
