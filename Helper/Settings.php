<?php

namespace Experius\WysiwygDownloads\Helper;

class Settings extends \Experius\Core\Helper\Settings
{

	const CONFIG_PATH_FILETYPES = 'general/filetypes';
    
    public $configPathModule = 'experius_wysiwygdownloads';
    
	public function getExtraFiletypes()
	{
    	$filetypes = array();
        $settings = unserialize($this->getConfigValue(self::CONFIG_PATH_FILETYPES));
		foreach($settings as $setting){
			$filetypes[] =  $setting['extension'];
		}
		$defaultFiletypes = array('doc','docm','docx','csv','xml','xls','xlsx','pdf','zip','tar');
		return array_merge($filetypes,$defaultFiletypes);
	}
   
}