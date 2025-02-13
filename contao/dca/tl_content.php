<?php

/**
 *    This file is part of the bundle DalleyItPhotoSwipe.
 *
 *    The bundle DalleyItPhotoSwipe is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    The bundle DalleyItPhotoSwipe is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 * 
 *    @link        https://www.dalley-it.com
 *    @author      Oliver Dalley - Dalley IT, June 2020
 *    @version     V 1.0.4
 *
 *    @license     http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *    @copyright   (C) Oliver Dalley - Dalley IT 2020
 *
 */

/**
* Enables selection of photoswipe gallery template within a contao gallery content element.
**/

use Contao\Backend;

$GLOBALS['TL_DCA']['tl_content']['palettes']['gallery'] = str_replace
(
	'customTpl',
	'customTpl;{photoswipe_legend},photoswipe_gallery;',
	$GLOBALS['TL_DCA']['tl_content']['palettes']['gallery']
);

$GLOBALS['TL_DCA']['tl_content']['fields']['photoswipe_gallery'] = array
(
	//'label'			=> $GLOBALS['TL_LANG']['tl_content']['photoswipe_gallery'],
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

		$obj = $this->Database->prepare("SELECT title, id FROM tl_dait_photoswipe")->execute();

		if ($obj->numRows > 0)
		{
			while ($obj->next())
			{
				$result[$obj->id] = $obj->title;
			}
		}
		return $result;
	}

}

