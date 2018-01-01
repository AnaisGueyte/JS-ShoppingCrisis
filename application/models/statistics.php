<?php
class Statistics extends CI_Model {
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->database();
      
    }

    /**
     * This method is called to see the podium of quizz taken by item.
     * return: array of values
     * date: 19/12/2017
     * author: Anais Gueyte
     *
     */

    public function getTotalQuizz(){
    	$totalQuizz = "SELECT COUNT(item) AS totalQuizz FROM shouldibuythebag";
    	$query =  $this->db->query($totalQuizz);
        return $query->result();
    }

    public function getPodiumItem(){
    	$getPodiumItem = "SELECT COUNT(item) AS total, CONCAT(shouldibuythebag.item) as label FROM shouldibuythebag GROUP BY item";
    	$query =  $this->db->query($getPodiumItem);
        return $query->result();
    }

    public function getTotalQuizzCompleted(){
    	$totalQuizzCompleted = "SELECT COUNT(quizz_complete) AS totalEnded FROM shouldibuythebag WHERE quizz_complete = 'true'";
    	$query =  $this->db->query($totalQuizzCompleted);
        return $query->result();
    }

    public function getTotalQuizzBuyIt(){
    	$totalBuyIt = "SELECT COUNT(quizz_complete) AS totalEnded from shouldibuythebag where quizz_complete = 'true' AND q_end LIKE '%diploma%'";
    	$query =  $this->db->query($totalBuyIt);
        return $query->result();
    }

    public function getTotalQuizzLifeTooShort(){
        $totalBuyIt = "SELECT COUNT(quizz_complete) AS totalEnded from shouldibuythebag where quizz_complete = 'true' AND q_end LIKE '%how expensive%'";
        $query =  $this->db->query($totalBuyIt);
        return $query->result();
    }

    public function getUserRepeat(){
        $totalUserRepeat = "SELECT  COUNT(`sibtb_id`) FROM `shouldibuythebag` GROUP by `sibtb_id`";
        $query =  $this->db->query($totalUserRepeat);
        return $query->result();

    }

    public function getTotalAnswerNoFirstQuestion(){
        $dontLikeIt = "SELECT COUNT(`q1_likeit_answer`) FROM `shouldibuythebag` WHERE `q1_likeit_answer` = 'no'";
        $query =  $this->db->query($dontLikeIt);
        return $query->result();
    }

    public function getTotalOnlineShopper(){
        $totalOnlineShopper = "SELECT COUNT(`q_onlineshopping_answer`) FROM `shouldibuythebag` WHERE `q_onlineshopping_answer` = 'yes'";
        $query =  $this->db->query($totalOnlineShopper);
        return $query->result();
    }

    public function getTotalInfluencer(){
        $totalOnlineShopper = "SELECT COUNT(`q_influencer_answer`) FROM `shouldibuythebag` WHERE `q_influencer_answer` = 'yes'";
        $query =  $this->db->query($totalOnlineShopper);
        return $query->result();
    }

    public function endingQuestion(){
        $endingQuestionArray = "SELECT COUNT(q_end) as total, CONCAT(shouldibuythebag.q_end) as label FROM shouldibuythebag WHERE q_end IS NOT NULL AND TRIM(q_end) <> '' GROUP BY q_end ORDER BY total DESC";
        $query =  $this->db->query($endingQuestionArray);
        return $query->result();
    }
}
    
?>
