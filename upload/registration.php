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
 
define("IN_MYBB", 1);
define("NO_ONLINE", 1);
require_once "./global.php";

eval("\$output = \"".$templates->get("redirectafterregistration")."\";");
output_page($output);
?>
