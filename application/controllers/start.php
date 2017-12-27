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
        // Head & Footer datas
        $head_data = array();
        $head_data['title'] = "Should I Buy the bag? 404!";
        $head_data['description'] = 'In the shops and on this website, you\'re lost.';
        $head_data['css'] = base_url('assets/css/start.css');
        $head_data['url'] = base_url();

        $footer_data = array();
        $footer_data['js'] = base_url('assets/js/start.js');


        $this->form_validation->set_rules('name', '"name"', 'trim|required|max_length[155]|encode_php_tags|xss_clean');
        $this->form_validation->set_rules('email', '"email"', 'trim|required|valid_email|encode_php_tags|xss_clean');
        $this->form_validation->set_rules('message', '"message"', 'trim|required|max_length[300]|encode_php_tags|xss_clean');
        
        if($this->form_validation->run() == FALSE)
        {
            $data['error_form'] = $this->lang->line('error_form');
            $this->load->view('contact', $data);   
            
        }
        else
        {
            $config = Array('protocol' => 'smtp',
                    'smtp_host' => SMTP_HOST,
                    'smtp_port' => 465,
                    'smtp_user' => SMTP_USER,
                    'smtp_pass' => SMTP_PASS,
                    'mailtype'  => "html", 
                    'charset'   => "utf-8"
                );
            
            $this->load->library('email', $config);
            
            $this->email->set_newline("\r\n");
            
            $contact_name = $this->input->post('name');
            $contact_email = $this->input->post('email');
            $contact_message = $this->input->post('message');
            
            $this->email->from($contact_email, $contact_name);
            $this->email->subject("New message from SIBTB the contact form");
            $this->email->to("info@entrenous.coffee");
            $this->email->message($contact_message); 
            
            
            if($this->email->send())
            {
                $this->email->clear();
                $data['my_email_sent'] = 'sent!';

                $this->load->view('templates/head', $head_data);
                $this->load->view('start', $data);
                $this->load->view('templates/footer', $footer_data);
                
            }
            else
            {
                $this->email->clear();
                $data['error_email'] = 'Oops, something went wrong... Try again later. And don\'t tell anyone, please.';

                $this->load->view('templates/head', $head_data);
                $this->load->view('start', $data);
                $this->load->view('templates/footer', $footer_data);
            }
        } 
    }
}
