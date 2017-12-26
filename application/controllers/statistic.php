<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Statistic extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'security','html', 'url'));
        $this->load->library('session');
    }
    
    public function seethestats()
	{
		//Add cache of 60 days
		/*$n = 86400;
		$this->output->cache($n);*/

        // Call the function and get raw datas
        $podium = $this->getPodium();
        $totalQuizz = $this->getTotalQuizz();
        $totalQuizzEnded = $this->getTotalQuizzEnded();
        $totalQuizzBuyIt =  $this->getTotalQuizzBuyIt();
        $totalUserRepeat = $this->getUserRepeat();
        $totalDontLikeIt = $this->getDontLikeIt();
        $totalOnlineShopper = $this->getTotalOnlineShopper();
        $totalInfluencer = $this->getTotalInfluencer();
        $endingQuestion = $this->getEndingQuestion();


        // Convert datas
        $positiveAnswer = ($totalQuizzBuyIt['totalQuizzBuyIt'] + $totalQuizzBuyIt['totalQuizzLifeTooShort']);
        $endingQuestionNameArray =  explode("?", $endingQuestion['totalEndingQuestionName'], 2);
        $endingQuestionName = $endingQuestionNameArray[0];

        // Get percentage
        $totalBuyIt =  $this->getPercentage($positiveAnswer, $totalQuizzEnded['totalQuizzEnded']);
        $totalQuit = $totalQuizz['totalQuizz'] - $totalQuizzEnded['totalQuizzEnded'];
        $percentageUserRepeat = $this->getPercentage($totalUserRepeat['totalUserRepeat'], $totalUserRepeat['totalUser']);
        $percentageDontLikeIt = $this->getPercentage($totalDontLikeIt['totalDontLikeIt'], $totalQuizz['totalQuizz']);
        $totalOnlineShopper = $this->getPercentage($totalOnlineShopper['totalOnlineShopper'], $totalQuizz['totalQuizz']); 
        $totalInfluencer = $this->getPercentage($totalInfluencer['totalInfluencer'], $totalQuizz['totalQuizz']); 
        $totalBag = $this->getPercentage($podium['totalBag'], $totalQuizz['totalQuizz']);
        $totalDress = $this->getPercentage($podium['totalDress'], $totalQuizz['totalQuizz']);
        $totalShoes = $this->getPercentage($podium['totalShoes'], $totalQuizz['totalQuizz']);
        $totalEndingQuestion = $this->getPercentage($endingQuestion['totalEndingQuestion'], $totalQuizz['totalQuizz']);


        // Create array for view page
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
        $data['totalEndingQuestion'] = number_format($totalEndingQuestion, 0);
        $data['totalEndingQuestionName'] = $endingQuestionName;


        // Load view
        $this->load->view('statistic', $data);
	}   


    /** Refacto percentage **/

    public function getPercentage($value1, $value2){

        $result = ($value1 / $value2) * 100;

        return $result;

    }

    /** Refacto get value out of foreach **/
    public function getValueWithForeach($myBDDdata){

            foreach ($myBDDdata as $item) {

                foreach ($item as $label => $value) {
                    $finalValue = $value;  
                }
            }

        return $finalValue;
    }

    public function getTotalQuizz(){

        $this->load->model('statistics');

        $totalQuizz = $this->statistics->getTotalQuizz();

        $data['totalQuizz'] = $this->getValueWithForeach($totalQuizz);

        return $data;
    }



    public function getTotalQuizzEnded(){

        $this->load->model('statistics');

        $totalQuizzEnded = $this->statistics->getTotalQuizzCompleted();

        $data['totalQuizzEnded'] = $this->getValueWithForeach($totalQuizzEnded);

        return $data;
    }

    public function getTotalQuizzBuyIt(){

        $this->load->model('statistics');

        $totalQuizzBuyIt = $this->statistics->getTotalQuizzBuyIt();
        $totalQuizzLifeTooShort =  $this->statistics->getTotalQuizzLifeTooShort();
        
        $data['totalQuizzBuyIt'] = $this->getValueWithForeach($totalQuizzBuyIt);
        $data['totalQuizzLifeTooShort'] = $this->getValueWithForeach($totalQuizzLifeTooShort);

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

        $data['totalDontLikeIt'] = $this->getValueWithForeach($totalDontLikeIt);

        return $data;
    }

    public function getTotalOnlineShopper(){

        $this->load->model('statistics');

        $totalOnlineShopper = $this->statistics->getTotalOnlineShopper();

        $data['totalOnlineShopper'] = $this->getValueWithForeach($totalOnlineShopper);

        return $data;
    }

    public function getTotalInfluencer(){

        $this->load->model('statistics');

        $totalInfluencer = $this->statistics->getTotalInfluencer();

        $data['totalInfluencer'] = $this->getValueWithForeach($totalInfluencer);

        return $data;
        }

    public function getEndingQuestion(){

        $this->load->model('statistics');

        $endingQuestionArray = $this->statistics->endingQuestion();

        foreach ($endingQuestionArray as $item) {

            foreach ($item as $label => $value) {

                    if($label == 'total'){
                        $data['totalEndingQuestion'] = $value;
                    }    
                    
                    if($label == 'label'){
                       $data['totalEndingQuestionName'] = $value;

                    }
            }

            break;
        }

        return $data;
    }
}
