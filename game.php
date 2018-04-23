<?php 
//誕生日
$birthday = "5/16";
$datetime = new DateTime($birthday);
echo getZodiacFromDateTime($datetime);

function getZodiacFromDateTime($datetime){
	$m = (int)$datetime->format("n");
	$d = (int)$datetime->format("j");

	$zodiacs = array(
	// '名前',月,日〜月,日
		array('牡羊座',  3, 21, 4, 19),
        array('牡牛座',  4, 20,  5, 20),
        array('双子座',  5, 21,  6, 21),
        array('かに座',  6, 22,  7, 22),
        array('獅子座',  7, 23,  8, 22),
        array('乙女座',  8, 23,  9, 22),
        array('天秤座',  9, 23, 10, 23),
        array('蠍座',   10, 24, 11, 22),
        array('射手座', 11, 23, 12, 21),
        array('山羊座', 12, 22,  1, 19),
        array('水瓶座',  1, 20,  2, 18),
        array('魚座',    2, 19,  3, 20)
	);

	foreach($zodiacs as $zodiac){
		list($name, $start_m, $start_d, $end_m, $end_d) = $zodiac;
		if(
		  	($m === $start_m && $d >= $start_d) ||
		  	($m === $end_m && $d <= $end_d)
		){
			return $name;
		}
	}
	return false;
}
?>

<!-- 関数に DateTime オブジェクトを渡すと星座の名前を返します。
プログラム自体はシンプルに黄道十二星座の期間を格納した配列によって条件分岐させています。 -->