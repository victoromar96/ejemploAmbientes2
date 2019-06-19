<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController 
{

     /**
     * @Route("/lucky/number/{max}", name="app_lucky_number")
     */

    public function number($max)
    {
        $number = random_int(0, $max);
	$apellido = "Espin";
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
            'apellido' => $apellido,	
	    'variable' => 100,
        ]);
    }
}

