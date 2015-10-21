<?php
include_once('C:\xampp\htdocs\AirPollution\simple_html_dom');
require('simple_html_dom.php');

$AirQuality = file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/default.aspx');
$PM10 = file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/PylPM10.aspx');
$PM25 =  file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/PylPM25.aspx');
$NO2 =  file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/Dwutlenekazotu.aspx');
$SO2 =  file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/Dwutleneksiarki.aspx');
$CO =  file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/tlenekwegla.aspx');


echo $Bulwarowa['quality'] = $AirQuality->find(".right",2);
echo $Bulwarowa['PM10'] = $PM10->find(".right",2);
echo $Bulwarowa['PM25'] = $PM25->find(".right",2);
echo $Bulwarowa['N02'] = $NO2->find(".right",2);
echo $Bulwarowa['SO2'] = $SO2->find(".right",2);
echo $Bulwarowa['CO'] = $CO->find(".right",2);

?>