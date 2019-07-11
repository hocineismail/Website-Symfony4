<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{


    public function about()
    {       
        $number = random_int(0, 2);
        $JSON = 'hello zord';
         return $this->render('pages/About.html.twig', [
            'number' => $number,
            'json' => $JSON
        ]);
    }   
}