<?php

//if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');

function GetPrice($wi,$hi,$datab)
{
//$datab='economy';
switch($wi){
	case $wi<=36:
		$w = 36;
	break;	
	case $wi<=42 && $wi>36:
		$w = 42;
	break;	
	case $wi<=48 && $wi>42:
		$w = 48;
	break;	
	case $wi<=54 && $wi>48:
		$w = 54;
	break;	
	case $wi<=60 && $wi>54:
		$w = 60;
	break;	
	case $wi<=66 && $wi>60:
		$w = 66;
	break;	
	case $wi<=72 && $wi>66:
		$w = 72;
	break;
	case $wi<=78 && $wi>72:
		$w = 78;
	break;	
	case $wi<=84 && $wi>78:
		$w = 84;
	break;	
	case $wi<=90 && $wi>84:
		$w = 90;
	break;	
	case $wi<=96 && $wi>90:
		$w = 96;
	break;	
	case $wi<=101 && $wi>96:
		$w = 101;
	break;		
	case $wi<=108 && $wi>101:
		$w = 108;
	break;		
	case $wi<=114 && $wi>108:
		$w = 114;
	break;		
	case $wi<=120 && $wi>114:
		$w = 120;
	break;		
	case $wi<=126 && $wi>120:
		$w = 126;
	break;		
	case $wi<=132 && $wi>126:
		$w = 132;
	break;		
	case $wi<=138 && $wi>132:
		$w = 138;
	break;		
	case $wi<=144 && $wi>138:
		$w = 144;
	break;
	case $wi<=150 && $wi>144:
		$w = 150;
	break;			
	case $wi<=156 && $wi>150:
		$w = 156;
	break;			
	case $wi<=162 && $wi>156:
		$w = 162;
	break;			
	case $wi<=168 && $wi>162:
		$w = 168;
	break;			
	case $wi<=174 && $wi>168:
		$w = 174;
	break;			
	case $wi<=180 && $wi>174:
		$w = 180;
	break;			
	case $wi<=186 && $wi>180:
		$w = 186;
	break;			
	case $wi<=192 && $wi>186:
		$w = 192;
	break;
	case $wi>192:
		$w = 192;
	break;		
}
switch($hi){
	case $hi<=36:
		$h = 36;
	break;	
	case $hi<=44 && $hi>36:
		$h = 44;
	break;	
	case $hi<=48 && $hi>44:
		$h = 48;
	break;	
	case $hi<=54 && $hi>48:
		$h = 54;
	break;	
	case $hi<=60 && $hi>54:
		$h = 60;
	break;	
	case $hi<=66 && $hi>60:
		$h = 66;
	break;	
	case $hi<=72 && $hi>66:
		$h = 72;
	break;	
	case $hi<=78 && $hi>72:
		$h = 78;
	break;	
	case $hi<=84 && $hi>78:
		$h = 84;
	break;	
	case $hi<=90 && $hi>84:
		$h = 90;
	break;	
	case $hi<=96 && $hi>90:
		$h = 96;
	break;	
	case $hi<=102 && $hi>96:
		$h = 102;
	break;	
	case $hi<=108 && $hi>102:
		$h = 108;
	break;	
	case $hi<=114 && $hi>108:
		$h = 114;
	break;	
	case $hi<=120 && $hi>114:
		$h = 120;
	break;	
	case $hi<=126 && $hi>120:
		$h = 126;
	break;	
	case $hi<=132 && $hi>126:
		$h = 132;
	break;	
	case $hi<=138 && $hi>132:
		$h = 138;
	break;	
	case $hi<=144 && $hi>138:
		$h = 144;
	break;	
	case $hi<=150 && $hi>144:
		$h = 150;
	break;	
	case $hi>150:
		$h = 150;
	break;	
}


$query = "SELECT `$w` FROM `$datab` WHERE length='$h'";
if($query_run=mysql_query($query)){
	
	while($query_raw=mysql_fetch_assoc($query_run)){
		
		$price = $query_raw[$w];
		return $price;
		
	}
	
} else{
	
	echo mysql_error();
}

}
?>
