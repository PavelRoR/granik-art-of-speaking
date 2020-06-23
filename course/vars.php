<?php
$videos = array('','','');
$hides = array('','','');

$sales1 = array('3 000р.','2 000р.','1 000р.');
$sales2 = array('6 000р.','4 000р.','2 000р.');
$sales3 = array('9 000р.','6 000р.','3 000р.');

$todays1 = array('9 900р.','10 900р.','11 900р.');
$todays2 = array('21 900р.','23 900р.','25 900р.');
$todays3 = array('30 900р.','33 900р.','36 900р.');

$links1 = array('https://shop.mastervision.su/?r=ordering/cart/as1&id=5052&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=5054&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=5055&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=5056&clean=true&lg=ru');
$links2 = array('https://shop.mastervision.su/?r=ordering/cart/as1&id=5057&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=5058&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=5059&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=5060&clean=true&lg=ru');
$links3 = array('https://shop.mastervision.su/?r=ordering/cart/as1&id=5061&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=5062&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=5063&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=5064&clean=true&lg=ru');

$prepLinks = array('https://shop.mastervision.su/?r=ordering/cart/as1&id=5066&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=5067&clean=true&lg=ru','https://shop.mastervision.su/?r=ordering/cart/as1&id=5068&clean=true&lg=ru');

$dates = array(strtotime('2020-06-25'),strtotime('2020-06-26'),strtotime('2020-06-27'));
$now = strtotime('now');


if ($now < $dates[0]) {
    $sale1 = $sales1[0];
    $sale2 = $sales2[0];
    $sale3 = $sales3[0];

    $today1 = $todays1[0];
    $today2 = $todays2[0];
    $today3 = $todays3[0];

    $link1 = $links1[0];
    $link2 = $links2[0];
    $link3 = $links3[0];

    $prepLink =$prepLinks[0];
}
elseif (($now >= $dates[0])&&($now < $dates[1])) {
    $sale1 = $sales1[1];
    $sale2 = $sales2[1];
    $sale3 = $sales3[1];

    $today1 = $todays1[1];
    $today2 = $todays2[1];
    $today3 = $todays3[1];

    $link1 = $links1[1];
    $link2 = $links2[1];
    $link3 = $links3[1];

    $prepLink =$prepLinks[1];
}
elseif (($now >= $dates[1])&&($now < $dates[2])) {
    $sale1 = $sales1[2];
    $sale2 = $sales2[2];
    $sale3 = $sales3[2];

    $today1 = $todays1[2];
    $today2 = $todays2[2];
    $today3 = $todays3[2];

    $link1 = $links1[2];
    $link2 = $links2[2];
    $link3 = $links3[2];

    $prepLink =$prepLinks[2];
}
else {
    $link1 = $links1[3];
    $link2 = $links2[3];
    $link3 = $links3[3];
}

?>
