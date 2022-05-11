<?php
include './debug/ChromePhp.php';
ChromePhp::log('controller.php: Hello World');
ChromePhp::log($_SERVER);	

// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageURI = null) // constructor of the class
	{
		$this->load = new Load(); 
		$this->model = new Model();
		// determine what page you are on
		$this->$pageURI();
	}
    // home page function
	function home(){
	
		$this->load->view('home');
	}
	function about()
	{
		$this->load->view('about');
	}
	function models()
	{
		$this->load->view('models');
	}
	function apiInsertdb()
	{
		$data = $this->model->Insertdb();
	   	$this->load->view('Museum', $data);
	}  
	function apiReaddb()
	{
		$this->load->view('Museum',  $this->getJSON());
	}  
	function apiDeletedb()
	{
		$data = $this->model->Deletedb();
		$this->load->view('Museum',$data);
	}
	function getJSON()
	{
		$data = $this->model->Readdb();
		echo json_encode($data);
	}

	function apiInsertdb1()
	{
		$data = $this->model->Insertdb1();
	   	$this->load->view('picture', $data);
	} 
	function apiReaddb1()
	{
		$this->load->view('picture',  $this->getJSON1());
	}   
	function apiDeletedb1()
	{
		$data = $this->model->Deletedb1();
		$this->load->view('picture',$data);
	}
	function getJSON1()
	{
		$data = $this->model->Readdb1();
		echo json_encode($data);
	}
}
?>    