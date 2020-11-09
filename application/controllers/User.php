
<?php
class User extends CI_Controller {



  public function __construct(){
         parent::__construct();
         $this->load->helper(array('form'));
         $this->load->library(array('form_validation'));
         $this->load->helper('array');
         $this->load->helper('url');

    }


	
	public function call_api_add(){
		
     $this->form_validation->set_rules('name','Name','required'); 
     $this->form_validation->set_rules('gender','Gender','required');
     $this->form_validation->set_rules('phone_number','Phone_Number','required');
     $this->form_validation->set_rules('address','Address','required');
     $this->form_validation->set_rules('email','Email','required');
		
		 if ($this->form_validation->run() == FALSE) 
    {
      $this->load->view('user_form_create');
    } else {

      

      $data = [ 
        'name' => set_value('name') , 
        'email'=> set_value('email') ,
        'gender'=> set_value('gender') ,
        'phoneNumber' => set_value('phone_number'),
        'address' => set_value('address')
     ];


$payload = json_encode($data);

// Prepare new cURL resource
$ch = curl_init('http://localhost:8001/api/users');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set HTTP Header for POST request 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload))
);

// Submit the POST request
$result = curl_exec($ch);

//Close cURL session handle
curl_close($ch);
$this->load->view('success');  
   }
	}
 

     

		 
  //   public function call_api_view()
		//   {

  //           $curl = curl_init();

  //           curl_setopt_array($curl, array(
  //           CURLOPT_URL => "http://localhost:8001/api/users",
           
  //           CURLOPT_CUSTOMREQUEST => "GET"
  //           ));

  //           $response = curl_exec($curl);

  //           curl_close($curl);
  //           echo $response;

	 // }


public function call_api_update(){
    
     $this->form_validation->set_rules('name','Name','required'); 
     $this->form_validation->set_rules('gender','Gender','required');
     $this->form_validation->set_rules('phone_number','Phone_Number','required');
     $this->form_validation->set_rules('address','Address','required');
     $this->form_validation->set_rules('email','Email','required');
    
     if ($this->form_validation->run() == FALSE) 
    {
      $this->load->view('user_form_update');
    } else {

      

      $data = [ 
        'name' => set_value('name') , 
        'email'=> set_value('email') ,
        'gender'=> set_value('gender') ,
        'phoneNumber' => set_value('phone_number'),
        'address' => set_value('address')
     ];


$payload = json_encode($data);

// Prepare new cURL resource & make sure that i will generate dynamically this id
$ch = curl_init('http://localhost:8001/api/users/......');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set HTTP Header for POST request 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload))
);

// Submit the PUT request
$result = curl_exec($ch);

//Close cURL session handle
curl_close($ch);
$this->load->view('success');  
   }
  }


	

public function call_api_delete(){

// Prepare new cURL resource & i should make sure that i generate this id dynamically
$ch = curl_init('http://localhost:8001/api/users/....');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

// Submit the DELETE request
$result = curl_exec($ch);

//Close cURL session handle
curl_close($ch);
echo "Deleted";  
   }
  

	
}
