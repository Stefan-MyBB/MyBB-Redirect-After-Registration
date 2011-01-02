<?php
 /**
 * This file is part of Redirect After Registration for MyBB.
 * Copyright (C) 2007-2011 StefanT (http://www.mybbcoder.info)
 * https://github.com/Stefan-ST/MyBB-Redirect-After-Registration
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
 
if(!defined('IN_MYBB'))
{
	die('This file cannot be accessed directly.');
}

$plugins->add_hook('member_do_register_end', 'redirectafterregistration_do');

function redirectafterregistration_info()
{
	return array(
		'name' => 'Redirect after Registration',
		'description' => '',
		'website' => 'http://www.mybbcoder.info',
		'author' => 'StefanT',
		'authorsite' => 'http://www.mybbcoder.info',
		'version' => 'Beta 1.0'
	);
}

function redirectafterregistration_activate()
{
	global $db;
	$template = array(
		'title' => 'redirectafterregistration',
		'template' => '<html>
<head>
<title>{\$mybb->settings[\\\'bbname\\\']} - Welcome!</title>
{\$headerinclude}
</head>
<body>
{\$header}
<table border="0" cellspacing="{\$theme[\\\'borderwidth\\\']}" cellpadding="{\$theme[\\\'tablespace\\\']}" class="tborder">
<tr><td class="thead"><strong>Welcome!</strong></td></tr>
<tr><td class="trow1">Welcome!</td></tr>
</table>
{\$footer}
</body>
</html>',
		'sid' => -1
	);
	$db->insert_query(TABLE_PREFIX."templates", $template);
}

function redirectafterregistration_deactivate()
{
	global $db;
	$db->query("DELETE FROM ".TABLE_PREFIX."templates WHERE title='redirectafterregistration'");
}

function redirectafterregistration_do()
{
	redirect('registration.php');
	exit;
}
?>
