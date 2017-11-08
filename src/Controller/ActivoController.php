<?php 
	namespace App\Controller;

	class ActivoController extends AppController
	{

		static function traduce($traducir){
       
        if ($traducir==true) {
                return "s";
        }
        return "n";

        /*if ($traducir=="on") {
                return "s";
        }
        return "n";*/
    	}    

	}	