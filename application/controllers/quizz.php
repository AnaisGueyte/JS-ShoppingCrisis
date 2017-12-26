<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Quizz extends CI_Controller {



    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'security','html', 'url'));
        $this->load->library('session');
        
    }
    
  

    /**
     * This method is called when an user has picked an item to start a quizz 
     * params: POST form form
     * return: either send to another view or go back to homepage is the iser arrives direct on the quizz page without picking an item.
     * date: 12/08/2017
     * author: Anais Gueyte
     *
     */
    public function buythebag()
	{
        if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $item = $_POST['item'];

            $data = array();
            $data['item'] = $item;
            $data['title'] = "Should I buy the ". $item ."?";

            // If the user starts the quizz, create session
        
            $this->load->view('quizz', $data);
            

        } else {
            $url = base_url('index.php/start/welcome'); 
            redirect($url);  
        }    
	}   


    /**
     * This method is called when an user has completed the quizz. 
     * The quizz can be completed 3 ways: the quizz is finish, the user has press return. The user has quit the quizz and the user has leave the site.
     * params: Receive a JSON from javascript ajax
     * return: a confirmation from db that it has been saved 
     * date: 12/18/2017
     * author: Anais Gueyte
     *
     */
    public function saveQuizzData()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST'){

            $session_id = $this->session->userdata('session_id');
            $time = date('d m Y H:i');  

            $quizzAnalytics = array
            (   'sibtb_id' =>   $session_id, 
                'item' =>  $this->input->post('item'), 
                'quizz_datetime' =>  $time, 
                'q1_likeit' =>  $this->input->post('analytics_likeit'),
                'q1_likeit_answer' =>  $this->input->post('analytics_likeit_answer'),
                'q_wantit' =>  $this->input->post('analytics_wantit'),
                'q_wantit_answer' =>  $this->input->post('analytics_wantit_answer'),
                'q_onquality' =>  $this->input->post('analytics_onquality'),
                'q_onquality_answer' =>  $this->input->post('analytics_onquality_answer'),
                'q_needit' =>  $this->input->post('analytics_needit'),
                'q_needit_answer' =>  $this->input->post('analytics_needit_answer'),
                'q_impulseshopping' =>  $this->input->post('analytics_impulseshopping'),
                'q_impulseshopping_answer' =>  $this->input->post('analytics_impulseshopping_answer'),
                'q_onlineshopping' =>  $this->input->post('analytics_onlineshopping'),
                'q_onlineshopping_answer' =>  $this->input->post('analytics_onlineshopping_answer'),
                'q_onlineshoppingbis' =>  $this->input->post('analytics_onlineshoppingbis'),
                'q_onlineshoppingbis_answer' =>  $this->input->post('analytics_onlineshoppingbis_answer'),
                'q_onlineshoppingter' =>  $this->input->post('analytics_onlineshoppingter'),
                'q_onlineshoppingter_answer' =>  $this->input->post('analytics_onlineshoppingter_answer'),
                'q_ownit' =>  $this->input->post('analytics_ownit'),
                'q_ownit_answer' =>  $this->input->post('analytics_ownit_answer'),
                'q_manyofit' =>  $this->input->post('analytics_manyofit'),
                'q_manyofit_answer' =>  $this->input->post('analytics_manyofit_answer'),
                'q_fitwardrobe' =>  $this->input->post('analytics_fitwardrobe'),
                'q_fitwardrobe_answer' =>  $this->input->post('analytics_fitwardrobe_answer'),
                'q_fitme' =>  $this->input->post('analytics_fitme'),
                'q_fitme_answer' =>  $this->input->post('analytics_fitme_answer'),
                'q_influencer' =>  $this->input->post('analytics_influencer'),
                'q_influencer_answer' =>  $this->input->post('analytics_influencer_answer'),
                'q_influencerbis' =>  $this->input->post('analytics_influencerbis'),
                'q_influencerbis_answer' =>  $this->input->post('analytics_influencerbis_answer'),
                'q_onetimeuse' =>  $this->input->post('analytics_onetimeuse'),
                'q_onetimeuse_answer' =>  $this->input->post('analytics_onetimeuse_answer'),
                'q_manyuse' =>  $this->input->post('analytics_manyuse'),
                'q_manyuse_answer' =>  $this->input->post('analytics_manyuse_answer'),
                'q_sale' =>  $this->input->post('analytics_sale'),
                'q_sale_answer' =>  $this->input->post('analytics_sale_answer'),
                'q_salebis' =>  $this->input->post('analytics_salebis'),
                'q_salebis_answer' =>  $this->input->post('analytics_salebis_answer'),
                'q_secondhand' =>  $this->input->post('analytics_secondhand'),
                'q_secondhand_answer' =>  $this->input->post('analytics_secondhand_answer'),
                'q_secondhandbis' =>  $this->input->post('analytics_secondhandbis'),
                'q_secondhandbis_answer' =>  $this->input->post('analytics_secondhandbis_answer'),
                'q_price' =>  $this->input->post('analytics_price'),
                'q_price_answer' =>  $this->input->post('analytics_price_answer'),
                'q_pricerange' =>  $this->input->post('analytics_pricerange'),
                'value_range' =>  $this->input->post('analytics_value_range'),
                'q_affordit' =>  $this->input->post('analytics_affordit'),
                'q_affordit_answer' =>  $this->input->post('analytics_affordit_answer'),
                'q_reallyaffordit' =>  $this->input->post('analytics_reallyaffordit'),
                'q_reallyaffordit_answer' =>  $this->input->post('analytics_reallyaffordit_answer'),
                'q_rewardyourself' =>  $this->input->post('analytics_rewardyourself'),
                'q_rewardyourself_answer' =>  $this->input->post('analytics_rewardyourself_answer'),
                'quizz_complete' =>  $this->input->post('analyticsquizz_complete'),
                'q_end' =>  $this->input->post('analytics_end'),
                'return_end' =>  $this->input->post('analytics_return_end'),
                'quit_end' =>  $this->input->post('analytics_quit_end')
            ); // end of array


            $this->load->model('sql');
            $result = $this->sql->saveQuizz($quizzAnalytics);
            
            if (isset($result) && ($result > 0))
            {
                 // If everything is fine then do your thing
                 $this->output->set_output(json_encode(array('hello' => $session_id)));
            } else {
                // if data haven't been saved in dbb, what to do ?
                log_message('info', "this quizz hasn't been saved in dbb");
                log_message('info', $result . "-> result");
            }  
        } else {
            $url = base_url('index.php/start/welcome'); 
            redirect($url);  
        }     
    } // End of function

}
