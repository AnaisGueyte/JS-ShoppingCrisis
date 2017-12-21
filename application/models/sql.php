<?php
class Sql extends CI_Model {
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->database();
      
    }

    /**
     * This method is called when has completed the quizz, we save and send the data to db for analytics
     * params: array of values
     * return: boolean true or false 
     * date: 12/08/2017
     * author: Anais Gueyte
     *
     */
    public function saveQuizz($data)
    {
    	return $this->db->insert('shouldibuythebag', $data);        
    }


}
    
?>
