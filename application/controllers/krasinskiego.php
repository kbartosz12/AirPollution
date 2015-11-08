<?php
/*include_once('..\AirPollution\simple_html_dom');
require('simple_html_dom.php');

*/

class Krasinskiego extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('krasinskiego_m');        
    }
    
 public function index() {
     echo "Jakosc powietrza:";
     $data = array();
    // include_once('C:\xampp\htdocs\AirPollution\application\libraries\simple_html_dom.php');
    // include('C:\xampp\htdocs\AirPollution\application\libraries\simple_html_dom.php');
     //require_once('C:\xampp\htdocs\AirPollution\application\libraries\simple_html_dom.php');
     $this->load->library('simple_html_dom');
     $quality = file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/default.aspx');
     $PM10 = file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/PylPM10.aspx');
     $PM25 =  file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/PylPM25.aspx');
     $NO2 =  file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/Dwutlenekazotu.aspx');
     $SO2 =  file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/Dwutleneksiarki.aspx');
     $CO =  file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/tlenekwegla.aspx');
     //echo $data['quality'] = $quality->find(".right",0);
     /*echo $data['PM10'] = $PM10->find(".right",0);
     echo $data['PM25'] = $PM25->find(".right",0);
     echo $data['NO2'] = $NO2->find(".right",0);
     echo $data['SO2'] = $SO2->find(".right",0);
     echo $data['CO'] = $CO->find(".right",0);*/

     echo  $data = $quality->find(".right",0);
     
     var_dump($data);
     
    

/*
    $data = array(
                    'quality' => $this->input->post('quality'),
                    'PM10' => $this->input->post('PM10'),
                    'PM25' => $this->input->post('PM25'),
                    'NO2' => $this->input->post('NO2'),
                    'SO2' => $this->input->post('SO2'),
                    'CO' => $this->input->post('CO'),
                );
                */
                
    $this->load->model('krasinskiego_m');
     $this->krasinskiego_m->insert($data);
                
 }
}



//$AirQuality = new simple_html_dom();

//$AirQuality = file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/default.aspx');

/*
$PM10 = file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/PylPM10.aspx');
$PM25 =  file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/PylPM25.aspx');
$NO2 =  file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/Dwutlenekazotu.aspx');
$SO2 =  file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/Dwutleneksiarki.aspx');
$CO =  file_get_html('http://www.malopolska.pl/Obywatel/EKO-prognozaMalopolski/Malopolska/Strony/tlenekwegla.aspx');

$data['quality'] = $AirQuality->find(".right",0);
$data['PM10'] = $PM10->find(".right",0);
$data['PM25'] = $PM25->find(".right",0);
$data['N02'] = $NO2->find(".right",0);
$data['SO2'] = $SO2->find(".right",0);
$data['CO'] = $CO->find(".right",0);

$data = array();


$data = array(
                'quality' => ('jakosc_powietrza'),
                'PM10' => ('pm10'),
                'PM25' => ('pm25'),
                'N02' => ('dwutlenek_azotu'),
                'S02' => ('dwutlenek_siarki'),
                'CO' => ('tlenek_wegla'),
            );

            $this->krasinskiego_m->insert($data);
*/


?>