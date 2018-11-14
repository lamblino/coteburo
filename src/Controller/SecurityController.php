<?php



namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Menu;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;



class SecurityController extends AbstractController{
    
    /**
     * @Route("/login", name="login")
     */
    
    public function login (AuthenticationUtils $authenticationUtils){
        $repo=$this->getDoctrine()->getRepository(Menu::class);
        $menu= $repo->findAll();
        $lastusername =$authenticationUtils->getLastUsername();
        $error=$authenticationUtils->getLastAuthenticationError();
        
        return $this->render('security/login.html.twig',[
            
            
            'menus' => $menu,
            'last_username'=>$lastusername,
            'error'=> $error
         ]);
        
    }
    
}


