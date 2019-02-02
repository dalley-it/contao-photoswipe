<?php

/**
 *    This file is part of the bundle DaitContaoPhotoSwipe.
 *
 *    The bundle DaitContaoPhotoSwipe is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    The bundle DaitContaoPhotoSwipe is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 * 
 *    @link        https://www.dalley-it.com
 *    @author      Oliver Dalley - Dalley IT, Januar 2019
 *    @version     V 1.0
 *
 *    @license     http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *    @copyright   (C) Oliver Dalley - Dalley IT 2019
 *
 */


/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['content']['dait_photoswipe'] = array(
	'tables' => array('tl_dait_photoswipe')
);

/**
* Front end modules
**/
$GLOBALS['FE_MOD']['dait_photoswipe'] = array
(
		'dait_photoswipe'=> 'Dait\PhotoSwipeModule'
);
