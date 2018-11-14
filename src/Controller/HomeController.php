<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\MenuRepository;
use App\Entity\Menu;

class HomeController extends AbstractController {
    
    
    public function index(MenuRepository $MenuRepository): Response
    
    {
        $repo=$this->getDoctrine()->getRepository(Menu::class);
        $menu= $repo->findAll();
       
        return $this->render('pages/home.html.twig',[
            
            
            'menus' => $menu
        ]
            
            
            );
    }
    
    
}


?>
