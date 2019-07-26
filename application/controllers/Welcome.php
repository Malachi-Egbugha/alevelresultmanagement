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
	public function __construct() 
	{
		parent::__construct();
		// load form_validation library
        $this->load->library('form_validation');
        $this->load->model('main');
	}
	public function index()
	{

		$this->load->view('welcome_message');
	}

public function login() 
{

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Pin', 'trim|required');

		if ($this->form_validation->run() == FALSE) 
		{
				if(isset($this->session->userdata['logged_in']))
				{
					$this->load->view('result');
				}
				else
				{
					$this->load->view('welcome_message');
				}
		}
		 else 
		{
				$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
				);
				$result = $this->main->login($data);
				if ($result == FALSE) 
				{
					$data = array(
						'error_message' => 'Invalid Username or Password'
						);
						$this->load->view('welcome_message', $data);

						
				} 
				else
				 {
				 	//PRINT RESULT
					$session_data = array(
					'studentid' => $result[0]->studentid,
					'firstname' => $result[0]->firstname,
					'lastname' => $result[0]->lastname,
					'firstcourse' => $result[0]->firstcourse,
					'secondcourse' => $result[0]->secondcourse,
					'thirdcourse' => $result[0]->thirdcourse,
					'fourthcourse' => $result[0]->firstname,
					'firstscore' => $result[0]->firstscore,
					'secondscore' => $result[0]->secondscore,
					'thirdscore' => $result[0]->thirdscore,
					'fourthscore' => $result[0]->firstscore,
					'type' => $result[0]->type,
					'session' => $result[0]->session,
					'semester' => $result[0]->semester,
					'comment' => $result[0]->comment,
					'hos' => $result[0]->hos,

					);
											// Add user data in session
						$this->session->set_userdata('logged_in', $session_data);
						$this->load->view('result');

						
				}
		}
	}
	function enter()
	{
		if($this->session->userdata('username')!='')
		{
			echo '<h2>Welcome -'.$this->session->userdata('username').'</h2>';
			echo '<label><a href="'.base_url().'index.php/Welcome/logout">Logout</a></label>';


		}
		else
		{
			redirect(base_url().'index.php/Welcome');
		}

	}
	function logout()
	{
		$this->session->unset_userdata('username');
		redirect (base_url().'index.php/Welcome');
	}
}
