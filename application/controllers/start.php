<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Start extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'security','html', 'url'));
        $this->load->library('form_validation');
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


    public function contactForm()
    {
        header('Access-Control-Allow-Origin: *');

        $contact_name = $this->input->post('name');
        $contact_email = $this->input->post('email');
        $contact_message = $this->input->post('message');        
        

        $this->load->library('email');

        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => SMTP_HOST,
            'smtp_port' => 465,
            'smtp_user' => SMTP_USER,
            'smtp_pass' => SMTP_PASS,
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");


        $this->email->from($contact_email, $contact_name);
        $this->email->subject('New message from SIBTB contact form');
        $this->email->to(WEBMASTER_EMAIL);
        $this->email->message($contact_message);
            
        if($this->email->send())
        {
            $this->email->clear();
            $arr = array('okay' => 'yes');  
            header('Content-Type: application/json');  
            $this->output->set_output(json_encode( $arr ));
        }
        else
        {
            $this->email->clear();
            $arr = array('no' => 'not okay'); 
            header('Content-Type: application/json');   
            $this->output->set_output(json_encode( $arr ));
            
        }
    } 
    
}
