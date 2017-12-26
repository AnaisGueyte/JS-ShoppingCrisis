<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Start extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'security','html', 'url'));
    }
    
    public function welcome()
	{
		$n = 86400;
		$this->output->cache($n);


        // Head & Footer datas
        $head_data = array();
        $head_data['title'] = "Should I Buy the bag? Take the quizz now!";
        $head_data['description'] = 'Having doubts when shopping? Classic. Start the test with this shopping assistant to find out what to do!';
        $head_data['css'] = base_url('assets/css/start.css');
        $head_data['url'] = base_url();

        $footer_data = array();
        $footer_data['js'] = base_url('assets/js/start.js');
    
        // Load view
        $this->load->view('templates/head', $head_data);
        $this->load->view('start');
        $this->load->view('templates/footer', $footer_data);
        
	} 

    public function lost()
    {
        // Head & Footer datas
        $head_data = array();
        $head_data['title'] = "Should I Buy the bag? 404!";
        $head_data['description'] = 'In the shops and on this website, you\'re lost.';
        $head_data['css'] = base_url('assets/css/start.css');
        $head_data['url'] = base_url();

        $footer_data = array();
        $footer_data['js'] = base_url('assets/js/start.js');
    
        // Load view
        $this->load->view('templates/head', $head_data);
        $this->load->view('lost_page');
        $this->load->view('templates/footer', $footer_data);
    }  
}
