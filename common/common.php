<?php
function gengo($seireki)
{
	if(1868<=$seireki&&$seireki<=1911)
	{
		$gengo='明治';
	}

	if(1912<=$seireki&&$seireki<=1925)
	{
		$gengo='大正';
	}

	if(1925<=$seireki&&$seireki<=1988)
	{
		$gengo='昭和';
	}

	if(1989<=$seireki&&$seireki<=2019)
	{
		$gengo='平成';
	}

	if(2020<=$seireki)
	{
		$gengo='令和';
	}
	return($gengo);
}

function sanitize($before)
{
	foreach($before as $key=>$value)
	{
		$after[$key]=htmlspecialchars($value,ENT_QUOTES,'UTF-8');
	}
	return $after;
}

function pulldown_year()
{
	print '<select name="year">';
	print '<option value="2017">2017</option>';
	print '<option value="2018">2018</option>';
	print '<option value="2019">2019</option>';
	print '<option value="2020">2020</option>';
	print '</select>';
}
function pulldown_month()
{
	print'<select name="month">';
	for($month=1;$month<=12;$month++)
	{
		print '<option value="'.$month.'">'.$month.'</option>';
	}
	print '</select>';
}

function pulldown_day()
{
	print '<select name="day">';
	for($day=1;$day<=31;$day++)
	{
		print '<option value="'.$day.'">'.$day.'</option>';
	}
}
?>