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
 *    @author      Oliver Dalley - Dalley IT, Feb 2025
 *    @version     V 2.0.0
 *
 *    @license     http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *    @copyright   (C) Oliver Dalley - Dalley IT 2018 - 2025
 *
 */
 
namespace Dait\DalleyItPhotoSwipe;

class DalleyItPhotoSwipeModule extends \Contao\Module
{
    	/**
     	* @var string
     	*/
	protected $strTemplate = 'mod_dait_photoswipe';

    	/**
     	* Generates the module.
     	*/
	protected function compile()
	{
		$rs = Database::getInstance()->query('SELECT * FROM tl_dait_photoswipe ORDER BY title');
		$this->Template->dait_photoswipes = $rs->fetchAllAssoc();
	}		
}
