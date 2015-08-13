<?php
namespace Vlreleases\UserBundle\EventListener;

class RequestListener
{
    private $router;
    
    public function __construct(\Symfony\Bundle\FrameworkBundle\Routing\Router $router) {
        $this->router = $router;
    }
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\GetResponseEvent $event) {

        $request = $event->getRequest();
        $session = $request->getSession();
        $userId = $session->get('userId');
         
        $urls = array("user/register");
        if (!in_array("user/register", $urls)) {
            if ($userId) {
            if ($this->router->getContext()->getPathInfo() == '/user/login') {
                $userType = $session->get('userType');

                //Added to redirect the user to the appropriate dashboard accordign to the user type
                switch ($userType) {
                    
                    case 9:
                        $url = $this->router->generate('vlreleases_user_lead');
                        //return $this->redirect($this->generateUrl('vlreleases_user_lead'));
                        break;
                    case 4:
                        $url = $this->router->generate('vlreleases_user_manager');
                        //return $this->redirect($this->generateUrl('vlreleases_user_manager'));
                        break;
                    default:
                        $url = $this->router->generate('vlreleases_user_homepage');
                        break;
                }     
                    $response = new \Symfony\Component\HttpFoundation\RedirectResponse($url);
                    $event->setResponse($response); 
            }
        } else if ($this->router->getContext()->getPathInfo() != '/user/login'){
            $url = $this->router->generate('vlreleases_user_login');
            $response = new \Symfony\Component\HttpFoundation\RedirectResponse($url);
            $event->setResponse($response);            
        }
        }
        
        
    }
}
?>
