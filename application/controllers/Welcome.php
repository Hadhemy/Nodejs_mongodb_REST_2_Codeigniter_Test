<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "http://localhost:8001/api/users",
           
            CURLOPT_CUSTOMREQUEST => "GET"
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            $this->load->view('add');
            echo $response;
                 

	}

	public function excel(){
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
            CURLOPT_URL => "http://localhost:8001/api/excel",
           
            CURLOPT_CUSTOMREQUEST => "POST"
            ));

			$response = curl_exec($curl);
			curl_close($curl);
			$this->load->view('add');


	}



	



	



	
}
