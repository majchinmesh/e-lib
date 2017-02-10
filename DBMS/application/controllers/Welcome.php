<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navigation');
		$this->load->view('welcome_message');
		$this->load->view('template/footer');
	}
	
	
	public function cse($sem="")
	{
		$data['branch'] = 'CSE';
		
		if ( $sem == ''){
			$this->semester($data);
		}else{
			
			if ($sem<=8 and $sem >=1 ){
				$data['sem'] = $sem;
				$this->subject($data['branch'], $sem);
			}
		}
	}
	public function ece($sem="")
	{
		$data['branch'] = 'ECE';
		
		if ( $sem == ''){
			$this->semester($data);
		}
		else{
			
			if ($sem<=8 and $sem >=1 ){
				$data['sem'] = $sem;
				$this->subject($data['branch'], $sem);
			}
		}
	}
	public function eee($sem="")
	{
		$data['branch'] = 'EEE';
		
		if ( $sem == ''){
			$this->semester($data);
		}
		else{
			
			if ($sem<=8 and $sem >=1 ){
				$data['sem'] = $sem;
				$this->subject($data['branch'], $sem);
			}
		}
	}
	
	
	
	
	private function book()
	{
		$this->load->view('template/header');
		$this->load->view('template/navigation');
		$this->load->view('book/book_template',$data);
		$this->load->view('template/footer');
	}
	
	public function subject($branch,$sem)
	{
		$this->load->model('subject_model');
		
		$data['branch'] = $branch;
		$data['semester'] = $sem;
		$data['subjects'] = $this->subject_model->getSubjects($branch,$sem) ;
		
		
		$this->load->view('template/header');
		$this->load->view('template/navigation');
		$this->load->view('subject/sub_template',$data);
		$this->load->view('template/footer');
	}
	
	private function semester($data)
	{
		$this->load->view('template/header');
		$this->load->view('template/navigation');
		$this->load->view('semester/sem_template',$data);
		$this->load->view('template/footer');
	}
	
	
}
