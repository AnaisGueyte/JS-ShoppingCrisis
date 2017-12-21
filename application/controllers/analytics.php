<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Analytics extends CI_Controller {


	private $item;

	private $session_id;
	private $quizz_datetime;

	private $q1_likeit;
	private $q1_likeit_answer;

	private $q_wantit;
	private $q_wantit_answer;

	private $q_onquality;
	private $q_onquality_answer;

	private $q_needit;
	private $q_needit_answer;

	private $q_impulseshopping;
	private $q_impulseshopping_answer;

	private $q_onlineshopping;
	private $q_onlineshopping_answer;

	private $q_onlineshoppingbis;
	private $q_onlineshoppingbis_answer;


	private $q_onlineshoppingter;
	private $q_onlineshoppingter_answer;


	private $q_ownit;
	private $q_ownit_answer;


	private $q_manyofit;
	private $q_manyofit_answer;


	private $q_fitwardrobe;
	private $q_fitwardrobe_answer;


	private $q_fitme;
	private $q_fitme_answer;

	private $q_influencer;
	private $q_influencer_answer;


	private $q_influencerbis;
	private $q_influencerbis_answer;


	private $q_onetimeuse;
	private $q_onetimeuse_answer;

	private $q_manyuse;
	private $q_manyuse_answer;

	private $q_sale;
	private $q_sale_answer;

	private $q_salebis;
	private $q_salebis_answer;


	private $q_secondhand;
	private $q_secondhand_answer;

	private $q_secondhandbis;
	private $q_secondhandbis_answer;

	private $q_price;
	private $q_price_answer;

	private $q_pricerange;
	private $value_range;

	private $q_affordit;
	private $q_affordit_answer;

	private $q_reallyaffordit;
	private $q_reallyaffordit_answer;

	private $q_rewardyourself;
	private $q_rewardyourself_answer;

	private $quizz_complete;
	private $q_end;
	private $quit_end;
	private $return_end;

	

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'security','html', 'url'));
        $this->load->library('javascript');

	    $this->item = "";
		$this->session_id = "";
		$this->quizz_datetime = "";

		$this->q1_likeit = false;
		$this->q1_likeit_answer = "";

		$this->q_wantit = false;
		$this->q_wantit_answer = "";

		$this->q_onquality = false;
		$this->q_onquality_answer = "";

		$this->q_needit = false;
		$this->q_needit_answer = "";

		$this->q_impulseshopping = false;
		$this->q_impulseshopping_answer = "";

		$this->q_onlineshopping = false;
		$this->q_onlineshopping_answer = "";

		$this->q_onlineshoppingbis = false;
		$this->q_onlineshoppingbis_answer = "";


		$this->q_onlineshoppingter = false;
		$this->q_onlineshoppingter_answer = "";


		$this->q_ownit = false;
		$this->q_ownit_answer = "";


		$this->q_manyofit = false;
		$this->q_manyofit_answer = "";


		$this->q_fitwardrobe = false;
		$this->q_fitwardrobe_answer = "";


		$this->q_fitme = false;
		$this->q_fitme_answer = "";

		$this->q_influencer = false;
		$this->q_influencer_answer = "";


		$this->q_influencerbis = false;
		$this->q_influencerbis_answer = "";


		$this->q_onetimeuse = false;
		$this->q_onetimeuse_answer = "";

		$this->q_manyuse = false;
		$this->q_manyuse_answer = "";

		$this->q_sale = false;
		$this->q_sale_answer = "";

		$this->q_salebis = false;
		$this->q_salebis_answer = "";


		$this->q_secondhand = false;
		$this->q_secondhand_answer = "";

		$this->q_secondhandbis = false;
		$this->q_secondhandbis_answer = "";

		$this->q_price = false;
		$this->q_price_answer = "";

		$this->q_pricerange = false;
		$this->value_range = "";

		$this->q_affordit = false;
		$this->q_affordit_answer = "";

		$this->q_reallyaffordit = false;
		$this->q_reallyaffordit_answer = "";

		$this->q_rewardyourself = false;
		$this->q_rewardyourself_answer = "";

		$this->quizz_complete = false;
		$this->q_end = "";
		$this->quit_end = false;
		$this->return_end = false;
    }
    


?>
