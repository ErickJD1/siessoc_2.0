<?php
 
namespace AppBundle\Controller;
 
 
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use AppBundle\Repository\MovimientoRepository;

 
class AjaxController extends Controller
{
    
    
    /**
     * @Route("/ajax")
     */
    public function indexAction()
    {
        return $this->render('Ajax/index.html.twig', array(
 
        ));
    }

    /**
     * @Route("/ajax/posts", name="ajax_posts")
     * @Method({"GET"})
     */
    public function postsAction(Request $request)
    {
        if($request->isXmlHttpRequest())
        {
            $encoders = array(new JsonEncoder());
            $normalizers = array(new ObjectNormalizer());
 
            $serializer = new Serializer($normalizers, $encoders);
            $idcuenta=$request->query->get("idcuenta");
            $em = $this->getDoctrine()->getManager();
            $posts =  $em->getRepository('AppBundle:Cuenta')->findBy(array('idcuenta' =>$idcuenta));
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'response' => 'success',
                'posts' => $serializer->serialize($posts, 'json')
            ));
            return $response;
        }
    }
}