<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 * XOOPS Poll module
 * Display module 'About' page in administration interface
 *
 * @copyright::  {@link http://sourceforge.net/projects/xoops/ The XOOPS Project}
 * @license::    {@link http://www.fsf.org/copyleft/gpl.html GNU public license}
 * @package::    xoopspoll
 * @subpackage:: admin
 * @since::      1.40
 * @author::     Mage, Mamba
 * @version::    $Id: $
 *
 * @uses ModuleAdmin
 * @uses ModuleAdmin::addNavigation to set the display page
 * @uses ModuleAdmin::renderAbout to display the page passing PAYPAL key to method
 */
require_once __DIR__ . '/admin_header.php';
xoops_cp_header();

$aboutAdmin = new ModuleAdmin();

echo $aboutAdmin->addNavigation('about.php');
echo $aboutAdmin->renderAbout('6KJ7RW5DR3VTJ', false);

include_once __DIR__ . '/admin_footer.php';
