<?php
/**
 * TOP API: taobao.ebook.file.upload.chunk request
 * 
 * @author auto create
 * @since 1.0, 2014-08-28 16:45:57
 */
class EbookFileUploadChunkRequest
{
	/** 
	 * 文件块总数
	 **/
	private $chunkCount;
	
	/** 
	 * 传输文件块，除最后一块外每块的大小 必须为 4MB
	 **/
	private $chunkData;
	
	/** 
	 * 文件块的MD5
	 **/
	private $chunkMd5;
	
	/** 
	 * 文件的ID，上传第一个文件块生成放回，在上传后续文件块时此参数必选
	 **/
	private $fileId;
	
	/** 
	 * 文件名
	 **/
	private $fileName;
	
	/** 
	 * 文件大小（非文件块大小）
	 **/
	private $fileSize;
	
	/** 
	 * 文件块序号
	 **/
	private $sequence;
	
	private $apiParas = array();
	
	public function setChunkCount($chunkCount)
	{
		$this->chunkCount = $chunkCount;
		$this->apiParas["chunk_count"] = $chunkCount;
	}

	public function getChunkCount()
	{
		return $this->chunkCount;
	}

	public function setChunkData($chunkData)
	{
		$this->chunkData = $chunkData;
		$this->apiParas["chunk_data"] = $chunkData;
	}

	public function getChunkData()
	{
		return $this->chunkData;
	}

	public function setChunkMd5($chunkMd5)
	{
		$this->chunkMd5 = $chunkMd5;
		$this->apiParas["chunk_md5"] = $chunkMd5;
	}

	public function getChunkMd5()
	{
		return $this->chunkMd5;
	}

	public function setFileId($fileId)
	{
		$this->fileId = $fileId;
		$this->apiParas["file_id"] = $fileId;
	}

	public function getFileId()
	{
		return $this->fileId;
	}

	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		$this->apiParas["file_name"] = $fileName;
	}

	public function getFileName()
	{
		return $this->fileName;
	}

	public function setFileSize($fileSize)
	{
		$this->fileSize = $fileSize;
		$this->apiParas["file_size"] = $fileSize;
	}

	public function getFileSize()
	{
		return $this->fileSize;
	}

	public function setSequence($sequence)
	{
		$this->sequence = $sequence;
		$this->apiParas["sequence"] = $sequence;
	}

	public function getSequence()
	{
		return $this->sequence;
	}

	public function getApiMethodName()
	{
		return "taobao.ebook.file.upload.chunk";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->chunkCount,"chunkCount");
		RequestCheckUtil::checkNotNull($this->chunkData,"chunkData");
		RequestCheckUtil::checkNotNull($this->chunkMd5,"chunkMd5");
		RequestCheckUtil::checkNotNull($this->fileName,"fileName");
		RequestCheckUtil::checkNotNull($this->fileSize,"fileSize");
		RequestCheckUtil::checkNotNull($this->sequence,"sequence");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
