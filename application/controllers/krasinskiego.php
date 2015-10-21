<?php
include_once('C:\xampp\htdocs\AirPollution\simple_html_dom');
require('simple_html_dom.php');


class Krasinskiego extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('krasinskiego_m');        
    }
}

$AirQuality = file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/default.aspx');
/*
$PM10 = file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/PylPM10.aspx');
$PM25 =  file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/PylPM25.aspx');
$NO2 =  file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/Dwutlenekazotu.aspx');
$SO2 =  file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/Dwutleneksiarki.aspx');
$CO =  file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/tlenekwegla.aspx');
*/
$data['quality'] = $AirQuality->find(".right",0);
/*$data['PM10'] = $PM10->find(".right",0);
$data['PM25'] = $PM25->find(".right",0);
$data['N02'] = $NO2->find(".right",0);
$data['SO2'] = $SO2->find(".right",0);
$data['CO'] = $CO->find(".right",0);

*/


$data = array(
                'quality' => $this->input->post('jakosc_powietrza'),
                /*'PM10' => $this->input->post('pm10'),
                'PM25' => $this->input->post('pm25'),
                'N02' => $this->input->post('dwutlenek_azotu'),
                'S02' => $this->input->post('dwutlenek_siarki'),
                'CO' => $this->input->post('tlenek_wegla'),*/
            );

            $this->krasinskiego_m->insert($data);

?>