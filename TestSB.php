<?php
class TestSB {

	private $melodies;
	private $notes;


	function __construct() { 
		$this->notes = array('brr', 'birip', 'brrah', 'croac','fiu', 'plop', 'pep', 'cric-cric', 'trri-trri', 'bri-bri');
		$this->melodies = array("first" => array(0,4,7,2),
								"second"=> array(6,1,8,3),
								"third"=> array(9,5,7,2) );
	}


    function getMelodie($note) {
    	$idNote = array_search($note, $this->notes);
		foreach ($this->melodies as $melodie){
			if (in_array($idNote,$melodie)){
				$idNoteMelodie = array_search($idNote, $melodie);
				$lastNotes = array();
				for ($i = ++$idNoteMelodie ; $i < count($melodie) ; $i++)
					array_push($lastNotes,$melodie[$i]);
			}
		}
		$return = "";
		foreach ($lastNotes as $note)
			$return .= $this->notes[$note].",";
		return trim($return , ",");
    }


}

?>