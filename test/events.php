<?php
###########################################################
/*
GuestBook Script
Copyright (C) 2012 StivaSoft ltd. All rights Reserved.


This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see http://www.gnu.org/licenses/gpl-3.0.html.

For further information visit:
http://www.phpjabbers.com/
info@phpjabbers.com

Version:  1.0
Released: 2013-09-07
*/
###########################################################

error_reporting(0);
include("config.php");

$sql = "SELECT * FROM ".$SETTINGS["data_table"]." WHERE `tgl_mulai` = '".mysql_real_escape_string($_REQUEST["date"])."'";
$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);
while ($row = mysql_fetch_assoc($sql_result)) {
	echo "<table align=center width=800px colspan=3><tr><td rowspan=6><img src=kk.jpg width=251 height=201 /></td></tr><tr><td><h2>Tugas Siswa</td></tr></h2>";
	echo "<tr><td><span> Deskripsi</td><td> : </td><td>".stripcslashes($row["deskripsi"])."</td></tr></span>";
	echo "<tr><td><span> Tanggal Pemberian</td><td> : </td><td>".stripcslashes($row["tgl_mulai"])."</span></td></tr>";
	echo "<tr><td><span> Tanggal di Kumpulkan </td><td>:</td><td> ".stripcslashes($row["tgl_akhir"])."</span></td></tr>";
	echo "<tr><td><span> Keterangan</td><td> : </td><td>".stripcslashes($row["keterangan"])."</span></td></tr></table>";
	
}
?>