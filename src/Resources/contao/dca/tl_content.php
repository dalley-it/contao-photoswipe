<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2016 Leo Feyer
 *
 * @package   photoswipe
 * @author    Dalley IT
 * @license   ?
 * @copyright Dalley IT 2016
 */

/**
*In this file an additional field is created in the gallery backend. In this new field the 
*Photoswipe Gallery can be selected.
*
**/


$GLOBALS['TL_DCA']['tl_content']['palettes']['gallery'] = str_replace
(
	'customTpl',
	'customTpl;{photoswipe_legend},photoswipe_gallery;',
	$GLOBALS['TL_DCA']['tl_content']['palettes']['gallery']
);

$GLOBALS['TL_DCA']['tl_content']['fields']['photoswipe_gallery'] = array
(
			'label'			=> $GLOBALS['TL_LANG']['tl_content']['photoswipe_gallery'],
			'exclude'		=> true,
			'inputType'		=> 'select',
			'options_callback'	=> array('tl_dait_photoswipe' , 'getPhotoswipe'),
			'eval'			=> array('includeBlankOption'=>true,'tl_class'=>'w50'),
			'sql'			=> "varchar(64) NOT NULL default ''"
);


class tl_dait_photoswipe extends Backend
{
public function getPhotoswipe()
	{ 
	$result = array();

			$obj = $this->Database
					->prepare("SELECT title, id  
							FROM   tl_dait_photoswipe")
										->execute();

	if ($obj->numRows > 0)
		{
		while ($obj->next())
			{
			$result[$obj->id] = $obj->title;
			//array_push($result, $obj->title)
			}
		}
	return $result;
	}

}

