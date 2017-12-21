<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Statistic extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'security','html', 'url'));
    }
    
    public function seethestats()
	{

        $podium = $this->getPodium();
        $totalQuizz = $this->getTotalQuizz();
        $totalQuizzEnded = $this->getTotalQuizzEnded();
        $totalQuizzBuyIt =  $this->getTotalQuizzBuyIt();
        $totalUserRepeat = $this->getUserRepeat();
        $totalDontLikeIt = $this->getDontLikeIt();
        $totalOnlineShopper = $this->getTotalOnlineShopper();
        $totalInfluencer = $this->getTotalInfluencer();

        $totalBuyIt = (($totalQuizzBuyIt['totalQuizzBuyIt'] + $totalQuizzBuyIt['totalQuizzLifeTooShort']) / $totalQuizzEnded['totalQuizzEnded']) * 100;
        $totalQuit = $totalQuizz['totalQuizz'] - $totalQuizzEnded['totalQuizzEnded'];
        $percentageUserRepeat = ($totalUserRepeat['totalUserRepeat'] / $totalUserRepeat['totalUser']) * 100;
        $percentageDontLikeIt = ($totalDontLikeIt['totalDontLikeIt'] / $totalQuizz['totalQuizz']) * 100;
        $totalOnlineShopper = ($totalOnlineShopper['totalOnlineShopper'] / $totalQuizz['totalQuizz']) * 100; 
        $totalInfluencer = ($totalInfluencer['totalInfluencer'] / $totalQuizz['totalQuizz']) * 100; 

        $totalBag = ($podium['totalBag'] / $totalQuizz['totalQuizz']) * 100;
        $totalDress = ($podium['totalDress'] / $totalQuizz['totalQuizz']) * 100;
        $totalShoes = ($podium['totalShoes'] / $totalQuizz['totalQuizz']) * 100;

        $data['totalBag'] = number_format($totalBag, 0);
        $data['totalDress'] = number_format($totalDress, 0);
        $data['totalShoes'] = number_format($totalShoes, 0);
        $data['totalQuizz'] = $totalQuizz['totalQuizz'];
        $data['totalQuizzBuyIt'] = number_format($totalBuyIt, 0);
        $data['totalQuit'] = $totalQuit;
        $data['totalUserRepeat'] = number_format($percentageUserRepeat, 0);
        $data['maxRepeat'] = $totalUserRepeat['maxRepeat'];
        $data['totalDontLikeIt'] = number_format($percentageDontLikeIt, 0);
        $data['totalOnlineShopper'] = number_format($totalOnlineShopper, 0);
        $data['totalInfluencer'] = number_format($totalInfluencer, 0);

        $this->load->view('statistic', $data);
	}   


    public function getTotalQuizz(){

        $this->load->model('statistics');

        $totalQuizz = $this->statistics->getTotalQuizz();

        foreach ($totalQuizz as $item) {

            foreach ($item as $label => $value) {
                $totalQuizz = $value;  
            }
        }

        $data['totalQuizz'] = $totalQuizz;

        return $data;
    }

    public function getTotalQuizzEnded(){

        $this->load->model('statistics');

        $totalQuizzEnded = $this->statistics->getTotalQuizzCompleted();

        foreach ($totalQuizzEnded as $item) {

            foreach ($item as $label => $value) {
                $totalQuizzEnded = $value;  
            }
        }

        $data['totalQuizzEnded'] = $totalQuizzEnded;

        return $data;
    }

    public function getTotalQuizzBuyIt(){

        $this->load->model('statistics');

        $totalQuizzBuyIt = $this->statistics->getTotalQuizzBuyIt();

        foreach ($totalQuizzBuyIt as $item) {

            foreach ($item as $label => $value) {
                $totalQuizzBuyIt = $value;  
            }
        }

        $data['totalQuizzBuyIt'] = $totalQuizzBuyIt;

        $totalQuizzLifeTooShort =  $this->statistics->getTotalQuizzLifeTooShort();

        foreach ($totalQuizzLifeTooShort as $item) {

            foreach ($item as $label => $value) {
                $totalQuizzLifeTooShort = $value;  
            }
        }


        $data['totalQuizzLifeTooShort'] = $totalQuizzLifeTooShort;

        return $data;
    }


    public function getPodium(){

        $this->load->model('statistics');

        $arrayPodium = $this->statistics->getPodiumItem();

        foreach ($arrayPodium as $item) {

            foreach ($item as $label => $value) {

                    if($label == 'total'){
                        $total = $value;
                    } 

                    if($label == 'label'){

                        if($value == 'bag'){ $bag = $total;} 
                        elseif($value == 'dress'){ $dress = $total;} 
                        else{ $shoes = $total;} 
                    }
            }
        }

        $data['totalBag'] = $bag;
        $data['totalDress'] = $dress;
        $data['totalShoes'] = $shoes;

        return $data;
    }

    public function getUserRepeat(){

        $this->load->model('statistics');

        $arrayUserRepeat = $this->statistics->getUserRepeat();

        $totalUserRepeat = 0;
        $maxRepeat = 0;
        $totalUser = 0;
        foreach ($arrayUserRepeat as $user) {

            foreach ($user as $number => $total) {
               if($total > 1){
                $totalUserRepeat = $totalUserRepeat + 1;
               }
            
                if($total > $maxRepeat){
                    $maxRepeat = $total;
                }

                $totalUser = $totalUser + 1;
            }
            
        }

        $data['totalUser'] = $totalUser;
        $data['totalUserRepeat'] = $totalUserRepeat;
        $data['maxRepeat'] = $maxRepeat;

        return $data;
    }

    public function getDontLikeIt(){

        $this->load->model('statistics');

        $totalDontLikeIt = $this->statistics->getTotalAnswerNoFirstQuestion();

        foreach ($totalDontLikeIt as $item) {
            foreach ($item as $label => $value) {
                $totalDontLikeIt = $value; 
             }
        }

        $data['totalDontLikeIt'] = $totalDontLikeIt;

        return $data;
    }

    public function getTotalOnlineShopper(){

        $this->load->model('statistics');

        $totalOnlineShopper = $this->statistics->getTotalOnlineShopper();

        foreach ($totalOnlineShopper as $item) {
            foreach ($item as $label => $value) {
                $totalOnlineShopper = $value; 
             }
        }

        $data['totalOnlineShopper'] = $totalOnlineShopper;

        return $data;
    }

    public function getTotalInfluencer(){

            $this->load->model('statistics');

            $totalInfluencer = $this->statistics->getTotalInfluencer();

            foreach ($totalInfluencer as $item) {
                foreach ($item as $label => $value) {
                    $totalInfluencer = $value; 
                 }
            }

            $data['totalInfluencer'] = $totalInfluencer;

            return $data;
        }


}
