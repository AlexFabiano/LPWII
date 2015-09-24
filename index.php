<?php
/* arquvo vinculado com o html.php */

include 'html.php';


$html = new Html;
echo $html->getInicio();
echo $html->getNovaLinha();
echo $html->getTexto("Ola Mundo!!", false);
echo $html->getFim();