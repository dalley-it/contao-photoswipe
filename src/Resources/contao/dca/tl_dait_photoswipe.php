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
 * Table tl_dait_photoswipe
 */
$GLOBALS['TL_DCA']['tl_dait_photoswipe'] = array
(
	// Config
	'config' => array
	(
		'dataContainer'		=> 'Table',
		'enableVersioning'	=> true,
		'sql'				=> array
		(
			'keys' => array
			(
				'id' => 'primary'
			)				
		),
	),
	// List
	'list' => array
	(
		/*How to sort*/	
		'sorting' => array
		(
			'mode'			=> 2,
			'fields'		=> array('title'),
			'flag'			=> 1,
			'panelLayout'	=> 'filter;sort,search,limit'
		),
		'label' => array
		(
			'fields' 	=> array('title'),
			'format'	=> '%s',
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'			=> &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'			=> 'act=select',
				'class'			=> 'header_edit_all',
				'attributes'	=> 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)				
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'		=> &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['edit'],
				'href'		=> 'act=edit',
				'icon'		=> 'edit.gif'
			),
			'delete' => array
			(
				'label'			=> &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['delete'],
				'href'			=> 'act=delete',
				'icon'			=> 'delete.gif',
				'attributes'	=> 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show' => array
			(
				'label'			=> &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['show'],
				'href'			=> 'act=show',
				'icon'			=> 'show.gif',
				'attributes'	=> 'style="margin-right:3px"'
			),
		)				
	),

	// Palettes: fields in backend: {block heading},fieldname;
	'palettes' => array
	(
		'default' => 
			'{title_legend},title;
			{style_legend},bg_transp;
			{mobile_legend},pinch_close,swipe_close;
			{navigation_legend},keyboard_access,hide_mouse,scroll_close,escKey_close;'
	),

	// Fields: fields, that are to be saved in the table (fields declared in 'palettes'-section have to be considered here) 
	'fields' => array
	(
		'id' => array /*incremental ID*/
		(
			'sql'		=> "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array /*timestamp, when data is created*/
		(
			'sql'		=> "int(10) unsigned NOT NULL default '0'"
		),
		'title'	=> array /*fieldname and instructions*/
		(
			'label'		=> &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['title'],
			'inputType'	=> 'text',
			'exclude'	=> true,
			'sorting'	=> true,
			'flag'		=> 1,
			'search'	=> true,
			'eval'		=> array
			(
				'mandatory'	=>true,
				'unique'	=>true, 
				'maxlength'	=>255, 
				'tl_class'	=>'w50'
			),
			'sql'		=> "varchar(255) NOT NULL default ''"
		),
		'bg_transp' => array /*fieldname and instructions*/               
		(
			'label'		=> &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['bg_transp'],
			'inputType'	=> 'text',
			'exclude'	=> true,
			'sql'		=> "text NULL",
			'eval'		=> array
			(
				'tl_class'	=>'w50',
				'rgxp'	=>'prcnt'
			),
		),
		'keyboard_access' => array
		(
			'label'		=> &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['keyboard_access'],
			'exclude'	=> true,
			'inputType'	=> 'checkbox',
			'eval'		=> array('tl_class'=>'w50'),
			'sql'		=> "char(1) NOT NULL default ''"
		),
		'hide_mouse' => array
		(
			'label'		=> &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['hide_mouse'],
			'exclude'	=> true,
			'inputType'	=> 'checkbox',
			'eval'		=> array('tl_class'=>'w50'),
			'sql'		=> "char(1) NOT NULL default ''"
		),
		'scroll_close' => array
		(
			'label'		=> &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['scroll_close'],
			'exclude'	=> true,
			'inputType'	=> 'checkbox',
			'eval'		=> array('tl_class'=>'w50'),
			'sql'		=> "char(1) NOT NULL default ''"
		),
		'pinch_close' => array
		(
			'label'		=> &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['pinch_close'],
			'exclude'	=> true,
			'inputType'	=> 'checkbox',
			'eval'		=> array('tl_class'=>'w50'),
			'sql'		=> "char(1) NOT NULL default ''"
		),
		'swipe_close' => array
		(
			'label'		=> &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['swipe_close'],
			'exclude'	=> true,
			'inputType'	=> 'checkbox',
			'eval'		=> array('tl_class'=>'w50'),
			'sql'		=> "char(1) NOT NULL default ''"
		),
		'escKey_close' => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['escKey_close'],
			'exclude'   => true,
			'inputType'	=> 'checkbox',
			'eval'      => array('tl_class'=>'w50'),
			'sql'       => "char(1) NOT NULL default ''"
		),
	)
);


/**
*Create a file for the options
**/
$GLOBALS['TL_DCA']['tl_dait_photoswipe']['config']['onsubmit_callback'][] = array('tl_dait_photoswipe_options', 'createPhotoswipeOptions');
$GLOBALS['TL_DCA']['tl_dait_photoswipe']['config']['ondelete_callback'][] = array('tl_dait_photoswipe_options', 'deletePhotoswipeOptions');

class tl_dait_photoswipe_options extends Backend
{
	public function createPhotoswipeOptions($dc)
	{
		
		$id = $dc->id;
				
		$bg_transp = $dc->activeRecord->bg_transp;
		$fullsize_button = $dc->activeRecord->fullsize_button;
		$pinch_close = $dc->activeRecord->pinch_close;
		$swipe_close = $dc->activeRecord->swipe_close;
		$keyboard_access = $dc->activeRecord->keyboard_access;
		$hide_mouse = $dc->activeRecord->hide_mouse;
		$scroll_close = $dc->activeRecord->scroll_close;
		$escKey_close = $dc->activeRecord->escKey_close;
		
		if ($escKey_close==NULL) {
			$escKey_close=0;
		}
		if ($scroll_close==NULL) {
			$scroll_close=0;
		}
		if ($bg_transp==NULL) {
			$bg_transp=0;
		}
		if ($hide_mouse==NULL) {
			$hide_mouse=1;
		} else {
			$hide_mouse=0;
		}
		if ($pinch_close==NULL)	{
			$pinch_close=0;
		}
		if ($scroll_close==NULL) {
			$scroll_close=0;
		}
		if ($swipe_close==NULL) {
			$swipe_close=0;
		}
		if ($keyboard_access==NULL) {
			$keyboard_access=0;
		}
		
		$content = "var getPhotoSwipeGalleryOptions = function() 
		{
			var options = 
			{
				escKey: $escKey_close,
				closeOnScroll: $scroll_close,
				bgOpacity: $bg_transp,
				mouseUsed: $hide_mouse,
				pinchToClose: $pinch_close,
				closeOnVerticalDrag: $swipe_close,
				arrowKeys: $keyboard_access,
				showAnimationDuration: 0
			}
			return options;
		}";

		
		$handle = fopen ("bundles/dalleyitphotoswipe/js/options/dait_ps_options_$id.js", "w");
		fwrite ($handle, $content);
        	fclose ($handle);
		
	}
		
	public function deletePhotoswipeOptions($dc)
	{
		$id = $dc->id;
		unlink ("bundles/dalleyitphotoswipe/js/options/dait_ps_options_$id.js");
	}
		
}
