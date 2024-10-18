<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ろくまる農園</title>
</head>
<body>

<?php
$gakunen=$_POST['gakunen'];

switch($gakunen)
{
	case '1':
		$kousha='あなたは南校舎です';
		$bukatsu='部活動には運動系とスポーツ系があります';
		$mokuhyou='まずは学校に慣れましょう';
		break;

	case '2':
		$kousha='あなたの後者は西校舎です';
		$bukatsu='学園祭を目指して全力で取り組みましょう';
		$mokuhyou='今しかできないことを見つけよう';
		break;
	
	case '3':
		$kousha='あなたの校舎は東校舎です';
		$bukatsu='受験に就職に忙しくなります。後輩へ譲っていきましょう';
		$mokuhyou='将来への道を作ろう';
		break;
	
	default:
		$kousha='あなたの後者は3年生と一緒です';
		$bukatsu='部活動はありません';
		$mokuhyou='早く卒業しましょう';
		break;	

}

print '校舎'.$kousha.'<br/>';
print '部活'.$bukatsu.'<br/>';
print '目標'.$mokuhyou.'<br/>';
?>
</body>
</html>