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
use AppBundle\Repository\UniversidadRepository;


class AjaxController extends Controller {

    /**
     * @Route("/ajax")
     */
    public function indexAction() {
        return $this->render('Ajax/index.html.twig', array(
        ));
    }

    /**
     * @Route("/ajax/posts", name="ajax_posts")
     * @Method({"GET"})
     */
    public function postsAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $encoders = array(new JsonEncoder());
            $normalizers = array(new ObjectNormalizer());

            $serializer = new Serializer($normalizers, $encoders);
            $idcuenta = $request->query->get("idcuenta");
            $em = $this->getDoctrine()->getManager();
            $posts = $em->getRepository('AppBundle:Cuenta')->findBy(array('idcuenta' => $idcuenta));
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'response' => 'success',
                'posts' => $serializer->serialize($posts, 'json')
            ));
            return $response;
        }
    }

    /**
     * Finds and displays a solicitudbecario entity.
     *
     * @Route("/ajax/pago", name="pagocolaboracion_realizarp")
     * @Method({"GET", "POST"})
     */
    public function aprobarAction(Request $request) {


        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);
        $idpago = $request->query->get("idpago");
        $em = $this->getDoctrine()->getManager();
        $pago = new \AppBundle\Entity\Pagocolaboracion();
        $posts = $em->getRepository('AppBundle:Pagocolaboracion')->findBy(array('idpagocolaboracion' => $idpago));
   
        foreach ($posts as $row) {
            $pago=$row;

        }
        $pago->setPagorealizado("SI");
        $em = $this->getDoctrine()->getManager();
        $em->persist($pago);
        $em->flush($pago);

        $response = new JsonResponse();
        $response->setStatusCode(200);
        $response->setData(array(
            'response' => 'success',
            'posts' => $serializer->serialize($posts, 'json')
        ));
        return $response;
    }
    
    
        /**
     * Finds and displays a solicitudbecario entity.
     *
     * @Route("/ajax/publicar", name="publicacioncontenido_publicar")
     * @Method({"GET", "POST"})
     */
    public function publicarAction(Request $request) {

        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);
        $idcontenido = $request->query->get("idcontenido");
        $em = $this->getDoctrine()->getManager();
        $contenido = new \AppBundle\Entity\Publicacioncontenido();
        $posts = $em->getRepository('AppBundle:Publicacioncontenido')->findBy(array('idcontenido' => $idcontenido));
        $publicacioncontenidos = $em->getRepository('AppBundle:Publicacioncontenido')->findAll(); 

   
        foreach ($posts as $row) {
            $contenido=$row;

        }
        $contenido->setEstadocontenido(1);
        $em = $this->getDoctrine()->getManager();
        $em->persist($contenido);
        $em->flush($contenido);
        
        $publicacioncontenidos = $em->getRepository('AppBundle:Publicacioncontenido')->findAll(); 
        $response = new JsonResponse();
        $response->setStatusCode(200);
        $response->setData(array(
            'response' => 'success',
            'publicacioncontenidos' => $serializer->serialize($publicacioncontenidos, 'json')
        ));
        return $response;
    }
    
    /**
     * Finds and displays a solicitudbecario entity.
     *
     * @Route("/ajax/nopublicar", name="publicacioncontenido_nopublicar")
     * @Method({"GET", "POST"})
     */
    public function nopublicarAction(Request $request) {

        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);
        $idcontenido = $request->query->get("idcontenido");
        $em = $this->getDoctrine()->getManager();
        $contenido = new \AppBundle\Entity\Publicacioncontenido();
        $posts = $em->getRepository('AppBundle:Publicacioncontenido')->findBy(array('idcontenido' => $idcontenido));
   
        foreach ($posts as $row) {
            $contenido=$row;

        }
        $contenido->setEstadocontenido(0);
        $em = $this->getDoctrine()->getManager();
        $em->persist($contenido);
        $em->flush($contenido);

        $response = new JsonResponse();
        $response->setStatusCode(200);
        $response->setData(array(
            'response' => 'success',
            'posts' => $serializer->serialize($posts, 'json')
        ));
        return $response;
    }
    
 
        /**
     * Lists all pagocolaboracion entities.
     *
     * @Route("/update/{id}", name="pagocolaboracion_indexupdate")
     * @Method("GET")
     */
    public function indexUpdateAction(Request $request, \AppBundle\Entity\Colaboracionmonetaria $colaboracion) {
        $em = $this->getDoctrine()->getManager();

        $pagocolaboracions = $em->getRepository('AppBundle:Pagocolaboracion')->findAll();
        
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);

        $response = new JsonResponse();
        $response->setStatusCode(200);
        $response->setData(array(
            'pagocolaboracion' => $serializer->serialize($pagocolaboracions, 'json')
        ));
        return $response;

    }

    
    
    /**
     * @Route("/ajax/postscantidad", name="ajax_postscantidad")
     * @Method({"GET"})
     */
    public function cantidadAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $encoders = array(new JsonEncoder());
            $normalizers = array(new ObjectNormalizer());

            $serializer = new Serializer($normalizers, $encoders);
            $idinventario = $request->query->get("idinventario");
            $em = $this->getDoctrine()->getManager();
            $posts = $em->getRepository('AppBundle:Inventario')->findBy(array('idinventario' => $idinventario));
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'response' => 'success',
                'posts' => $serializer->serialize($posts, 'json')
            ));
            return $response;
        }
    }
    
    
    
        /**
     * Creates a new carrera entity.
     *
     * @Route("/newcarrera", name="ajax_newcarrera")
     * @Method({"GET", "POST"})
     */
    public function newCarreraAction(Request $request)
    {
        
        $nombreCarrera = $request->query->get("nombre");
        $descripcionCarrera = $request->query->get("descripcion");
        $estadoCarrera = $request->query->get("estado");
        $carrera = new Carrera();

            $em = $this->getDoctrine()->getManager();
            $em->persist($carrera);
            $em->flush($carrera);

        return $this->render('carrera/carreranewmodal.html.twig', array(
            'carrera' => $carrera,
            'form' => $form->createView(),
        ));
    }

}
