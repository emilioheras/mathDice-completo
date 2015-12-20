<?php
    class Game {
        
        private $gameType = "";
        
        //Constructor.
		public function __construct($type){
			
			$this->gameType = $type;
			
		}
		
		
		/*GETTERS AND SETTERS*/
		
		public function getGameType() {
		    
		    return $this->gameType;
		}
		
		public function setGameType($option) {
		    
		    $this->gameType = $option;
		}
        
    }
?>