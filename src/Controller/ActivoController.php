<?php 
	namespace App\Controller;

	class ActivoController extends AppController
	{

		static function traduce($traducir){

        if ($traducir==true || $traducir=='1') {
                return "s";
        }
        return "n";

        /*if ($traducir=="on") {
                return "s";
        }
        return "n";*/
    	}    

	}	