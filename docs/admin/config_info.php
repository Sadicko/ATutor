<?php
/************************************************************************/
/* ATutor																*/
/************************************************************************/
/* Copyright (c) 2002-2004 by Greg Gay, Joel Kronenberg & Heidi Hazelton*/
/* Adaptive Technology Resource Centre / University of Toronto			*/
/* http://atutor.ca														*/
/*																		*/
/* This program is free software. You can redistribute it and/or		*/
/* modify it under the terms of the GNU General Public License			*/
/* as published by the Free Software Foundation.						*/
/************************************************************************/

$page = 'server_configuration';
$_user_location = 'admin';

define('AT_INCLUDE_PATH', '../include/');
require(AT_INCLUDE_PATH.'vitals.inc.php');
if ($_SESSION['course_id'] > -1) { exit; }

require(AT_INCLUDE_PATH.'header.inc.php'); 

echo '<h3>'._AT('server_configuration').'</h3>';
echo '<br /><p>ATutor '._AT('version').': <strong>'.VERSION.'</strong></p>';

echo '<p><a href="http://atutor.ca/check_atutor_version.php?v='.urlencode(VERSION).'">'._AT('check_latest_version').'</a></p>';

echo '<p><a href="admin/fix_content.php">'._AT('fix_content_ordering').'</a></p>';

require(AT_INCLUDE_PATH.'footer.inc.php'); 
?>