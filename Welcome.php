<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


    public function leaflet() {
		/*  $this->load->library('leaflet');
		$config = array(
			'center'         => '-0.959, 100.39716', // Center of the map
			'zoom'           => 12, // Map zoom
			);
		$this->leaflet->initialize($config);
		
		$marker = array(
			'latlng' 		=>'-0.959, 100.39716', // Marker Location
			'popupContent' 	=> 'Hi, iam a popup!!', // Popup Content
			);
			$this->leaflet->add_marker($marker);
		
		
		$this->data['map'] =  $this->leaflet->create_map(); */
		$this->load->view('leaf');
        
    }
    
} 