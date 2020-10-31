
<?php
class User extends CI_Controller {

		 
		 public function View()
		  {
            $this->load->view('view_users');

	      }


		public function create()
		  {
            $this->load->view('user_form_create');

	      }


	    public function update()
		  {
            $this->load->view('user_form_update');

	      }

	    public function delete()
		  {
            

	      }

	   

	



	
}
