<table border="1" cellpadding="5" cellspacing="0" style="border:1px solid #CC0000;">
<tr>
<th> Name </th>
<th> Age </th>
</tr>
<tr>
<td> <strong style="color:blue">Sahil</strong> </td>
<td> 25 </TD>
</TR>

<tr>
<td> <b>AKHILESHWAR</b> </td>
<td> 31 </TD>
</TR>
<tr>
<td> PAWAN </td>
<td> 30 </TD>
</TR>
</TABLE>

<?php
$name = 'Pawan';
$name = 'Hello';
echo $name;

define('NAME_TXT', 'PAWAN');
echo NAME_TXT;

//NAME_TXT = 'PAWAN';
echo NAME_TXT;
$NAME_TXT = 'Sashil';
echo $NAME_TXT;

echo '<br/>';
$a = 20;

/*  '=' INITIALIZE   '==' EQUALITY  '>=', '<=' */

if($a==10)	
echo 'Yes';
else echo 'No';

echo '<br/>';
echo '<br/>';
echo '<br/>';





$a = 10;
$b = 20;
$c = 30;

if($a>10) echo '10';
else if($a>20) echo '20';
else echo 'NOoo';


echo '<br/>';
echo '<br/>';
echo '<br/>';


/* && AND , || OR  */
if($b>10 || $b>30) echo 'Yes'; else echo 'No';

echo '<br/>';
echo '<br/>';


/* SWITCH AND CASE */
$a = 100;
switch($a){
	case '10':
	echo 'Ten';
	break;
	
	case '20':
	echo 'Twenty';
	break;
	
	case '50':
	echo 'Fifty';
	break;
	
	default:
		echo 'Please Put any Value!';
	break;
}

echo '<br/>';
echo '<br/>';

for($a=10; $a>=-10; $a--){
	$a = $a-2;
	echo $a.'<br/>';
}


echo '<br/>';
echo '<br/>';

$a = 10;
echo $a++;	/*	POST INCREMENT PRINT ONLY 10 BUT VALUE IN BUFFER IS 11*/
echo '<br/>';
echo ++$a;	/*	PRE INCREMENT PRINT ONLY 12 BUT VALUE IN BUFFER IS 12*/
echo '<br/>';
echo $a--;
echo '<br/>';
echo --$a;


echo '<br/>';

echo '<br/>';
echo '<br/>';


for($i=1; $i<=10; $i++){
	
	for($j=1; $j<=10; $j++){
		echo $i+$j;
		echo '&nbsp;&nbsp;';
	}
	echo '<br/>';
}



?>