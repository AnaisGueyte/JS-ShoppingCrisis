<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Start extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'security','html', 'url'));
    }
    
    public function welcome()
	{
		/*$n = 86400;
		$this->output->cache($n);*/
        $this->load->view('start');
	}   
}
