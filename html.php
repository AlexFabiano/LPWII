<?php

class Html {

    public $title = "Site LPW-II";

    public function __construct() {
        
    }

    public function getInicio($title = false) {
        if (!$title) {
            $title = $this->title;
        }

        $stringHtml = "<!DOCTYPE html> \n";
        $stringHtml .= "<html> \n";
        $stringHtml .= "    <head> \n";
        $stringHtml .= "        <meta charset=\"UTF-8\"> \n";
        $stringHtml .= "        <title>{$title}</title> \n";
        $stringHtml .= "    </head> \n";
        $stringHtml .= "    <body>  \n";

        return $stringHtml;
    }

    public function getFim() {
        $stringHtml  = "";
        $stringHtml .= "    </body> \n";
        $stringHtml .= "</html> \n";
        
        return $stringHtml;
    }

    public function getNovaLinha($numeroDeLinhas = 1) {
        $stringHtml = "";
        
        for($i = 1; $i<= $numeroDeLinhas; $i++){
            $stringHtml .= "<br>";
        }
        
        
        return $stringHtml;
    }

    public function getTexto($texto = "", $wrap = true) {
        if($wrap) {
             $stringHtml = "<p> {$texto} </p>" ;
        } else {
            $stringHtml = $texto;
        }
        
        return $stringHtml;
                
    }



}

/*parte final no arquivo index.php */
