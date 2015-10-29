<?php

// http://stackoverflow.com/questions/25424656/yii-set-log-path-dynamically

class FileLogRouter extends CFileLogRoute {
	public function init()
	{
		$path  = _APP_PATH_.DS."protected".DS."runtime".DS."mycustom";
		if(!file_exists($path)){
			@mkdir($path, 0777, true);		
		}
		
		if($this->getLogPath()===null)
		$this->setLogPath($path);
		parent::init();
	}
	
}