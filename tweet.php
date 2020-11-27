<?php



    Class Favorite {
        private $favorite = 0;
    
        public function setter($fovorites) {
            $this->favorite = $fovorites++;
        }
        
        public function getFavorite() {
           echo $this->favorite;
        }
        
    }
    
    $user = new Favorite();
    $user->setter($_POST['favo']);


