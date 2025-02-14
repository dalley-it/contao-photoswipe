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
 *    @version     V 1.0.5
 *
 *    @license     http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *    @copyright   (C) Oliver Dalley - Dalley IT 2020
 *
 */
 



use Contao\DC_Table;
use Contao\Backend;

/**
 * Table tl_dait_photoswipe
 */
$GLOBALS['TL_DCA']['tl_dait_photoswipe'] = [

    'config' => [
        'dataContainer' => DC_Table::class,
        'enableVersioning' => true,
        'sql' => [
            'keys' => [
                'id' => 'primary',
            ],
        ],
    ],
    
    'list' => [
        'sorting' => [
            'mode' => 2,
            'fields' => ['title'],
            'flag' => 1,
            'panelLayout' => 'filter;sort,search,limit',
        ],
        'label' => [
            'fields' => ['title'],
            'format' => '%s',
        ],
        'global_operations' => [
            'all' => [
                'label'	=> &$GLOBALS['TL_LANG']['MSC']['all'],
                'href' => 'act=select',
                'class' => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"'
            ],			
        ],
        'operations' => [
            'edit' => [
                'label' => &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['edit'],
                'href' => 'act=edit',
                'icon' => 'edit.gif'
            ],
            'delete' => [
                'label' => &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['delete'],
                'href' => 'act=delete',
                'icon' => 'delete.gif',
                'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ],
            'show' => [
                'label' => &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['show'],
                'href' => 'act=show',
                'icon' => 'show.gif',
                'attributes' => 'style="margin-right:3px"'
            ],
        ],			
    ],

    'palettes' => [
        'default' => '{title_legend},title;
            {style_legend},bg_transp;
            {mobile_legend},pinch_close,swipe_close;
            {navigation_legend},keyboard_access,hide_mouse,scroll_close,escKey_close;',
    ],
    
    'fields' => [
        'id' => [
            'sql' => ['type' => 'integer', 'unsigned' => true, 'autoincrement' => true],
        ],
        'tstamp' => [
            'sql' => ['type' => 'integer', 'unsigned' => true, 'default' => 0],
        ],
        'title'	=> [
            'label' => &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['title'],
            'inputType'	=> 'text',
            'exclude'	=> true,
            'sorting'	=> true,
            'flag' => 1,
            'search' => true,
            'eval' => ['mandatory' => true, 'unique' => true, 'maxlength' => 255, 'tl_class' =>'w50'],
            'sql' => ['type' => 'string', 'length' => 255, 'default' => ''],
        ],
        'bg_transp' => [
            'label' => &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['bg_transp'],
            'inputType'	=> 'text',
            'exclude' => true,
            'eval' => ['tl_class' =>'w50', 'rgxp' =>'prcnt'],
            'sql' => ['type' => 'string', 'length' => 16, 'default' => ''],
        ],
        'keyboard_access' => [
            'label' => &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['keyboard_access'],
            'exclude' => true,
            'inputType'	=> 'checkbox',
            'eval' => ['tl_class'=>'w50'],
            'sql' => ['type' => 'string', 'length' => 1, 'fixed' => true, 'default' => ''],
        ],
        'hide_mouse' => [
            'label' => &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['hide_mouse'],
            'exclude' => true,
            'inputType'	=> 'checkbox',
            'eval' => ['tl_class'=>'w50'],
            'sql' => ['type' => 'string', 'length' => 1, 'fixed' => true, 'default' => ''],
        ],
        'scroll_close' => [
            'label' => &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['scroll_close'],
            'exclude' => true,
            'inputType'	=> 'checkbox',
            'eval' => ['tl_class'=>'w50'],
            'sql' => ['type' => 'string', 'length' => 1, 'fixed' => true, 'default' => ''],
        ],
        'pinch_close' => [
            'label' => &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['pinch_close'],
            'exclude' => true,
            'inputType'	=> 'checkbox',
            'eval' => ['tl_class'=>'w50'],
            'sql' => ['type' => 'string', 'length' => 1, 'fixed' => true, 'default' => ''],
        ],
        'swipe_close' => [
            'label' => &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['swipe_close'],
            'exclude' => true,
            'inputType'	=> 'checkbox',
            'eval' => ['tl_class'=>'w50'],
            'sql' => ['type' => 'string', 'length' => 1, 'fixed' => true, 'default' => ''],
        ],
        'escKey_close' => [
            'label' => &$GLOBALS['TL_LANG']['tl_dait_photoswipe']['escKey_close'],
            'exclude' => true,
            'inputType'	=> 'checkbox',
            'eval' => ['tl_class'=>'w50'],
            'sql' => ['type' => 'string', 'length' => 1, 'fixed' => true, 'default' => ''],
        ],
    ],
    
];

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
		//$fullsize_button = $dc->activeRecord->fullsize_button;
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
