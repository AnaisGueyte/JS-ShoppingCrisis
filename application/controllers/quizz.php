<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Quizz extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'security','html', 'url'));
        $this->load->library('javascript');
    }
    
    public function buythebag()
	{
        $item = $_POST['item'];

        $data = array();
        $data['item'] = $item;
    	$data['title'] = "Should I buy the ". $item ."?";

        $this->load->view('quizz', $data);
	}   

   
}
