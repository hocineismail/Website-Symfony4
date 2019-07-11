<?php 

namespace App\Controller;


// src/Entity/Proprety;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Property;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
     

    public function index()
    {       

        $entityManager = $this->getDoctrine()->getManager();


        $property = new Property();
        $property->setTitle("Mon premeir bien");
        $property->setPrince(20000);
        $property->setRooms(4);
        $property->setBadrooms(3);
        $property->setDescription('this is siiis isis ldsf sdf sd fs');
        $property->setSurface(60);
        $property->setFloor(4);
        $property->setHeat(4);
        $property->setSold(false);
        $property->setCity('paris');
        $property->setAddress('paris rue 232');
        $property->setPostalCode('34000');
        
        $entityManager->persist($property);
   $entityManager->flush();
        $JSON = 'hello zord';
         return $this->render('pages/Home.html.twig', [
            'current_menu' => 'Home',
           
        ]);
    }   
}