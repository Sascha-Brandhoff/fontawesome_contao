<?php

/**
 * Hooks
 **/
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('fontAwesomeTags', 'replaceAwesome');

/**
 * CSS
 **/
$GLOBALS['TL_CSS']['fontawesome'] = 'system/modules/fontawesome_contao/assets/css/font-awesome.min.css';

/**
 * Assets Version
 **/
$GLOBALS['TL_ASSETS']['FONTAWESOME'] = '4.5';