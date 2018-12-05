<?php

namespace SalexUserBundle\Controller;

use SalexUserBundle\Entity\User;
use SalexUserBundle\Repository\UserRepository;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

/**
 * User controller.
 *
 * @Route("user")
 */
class UserController extends Controller {

    /**
     * Lists all user entities.
     *
     * @Route("/adminUser", name="user_index")
     * @Method("GET")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $pagination = $em->getRepository('SalexUserBundle:User')->findAll();

        /* if ($request->query->getAlnum('filter')) {
          $users
          ->where('bp.firstName LIKE :firstName')
          ->setParameter('firstName', '%'.$request->query->getAlnum('filter').'%');
          } */


        # $paginator  = $this->get('knp_paginator');
        # $pagination = $paginator->paginate(
        # $users, /* query NOT result */
        #$request->query->getInt('page', 1)/*page number*/,2/*limit per page*/);
        # $pagination->setCustomParameters(array(
        #   'align' => 'center', # center|right (for template: twitter_bootstrap_v4_pagination)	   
        #  'style' => 'bottom',
        #  'span_class' => 'whatever'
        # ));

        return $this->render('user/index.html.twig', array('pagination' => $pagination));
    }

    /**
     * Creates a new user entity.
     *
     * @Route("/new", name="user_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {

        $dispatcher = $this->get('event_dispatcher');
        $user = new User();
        $password = $user->claveAleatoria();
        $user->setPlainPassword($password);
        $em = $this->getDoctrine()->getManager();
        $role = $em->getRepository('SalexUserBundle:User')->findAllRole();
        $form = $this->createForm('SalexUserBundle\Form\UserType', $user);
        $form->add('roles', EntityType::class, array(
            'required' => true,
            'data' => $role,
            'placeholder' => 'Select a role',
            'class' => 'AppBundle:Role',
            'multiple' => 'true'
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user->setEnabled(true);
            $em->persist($user);
            $em->flush($user);

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);

            return $this->redirectToRoute('user_index', array('id' => $user->getId()));
        }

        return $this->render('user/new.html.twig', array(
                    'user' => $user,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a user entity.
     *
     * @Route("/{id}", name="user_show")
     * @Method("GET")
     */
    public function showAction(User $user) {
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/show.html.twig', array(
                    'user' => $user,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing user entity.
     *
     * @Route("/edit/{id}", name="user_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $user) {
        $em = $this->getDoctrine()->getManager();
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('SalexUserBundle\Form\UserType', $user);
        $myrole = $user->getRoles();

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($editForm, $request);

            $user->setUpdateAt(new \DateTime());
            $userManager->updateUser($user);


            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'El usuario fue modificado con exito!');
            return $this->redirectToRoute('user_index', array('id' => $user->getId()));
        }


        return $this->render('user/edit.html.twig', array(
                    'user' => $user,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a user entity.
     *
     * @Route("/{id}", name="user_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, User $user) {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush($user);
            $this->addFlash('success', 'El usuario fue eliminada con exito!');
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
