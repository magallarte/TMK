<?php

namespace App\Controller;

use App\Entity\Member;
use App\Form\MemberType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class SecurityController extends Controller
{
    /**
    * @Route("/registration", name="security_registration")
    */

    public function registration(Request $request, SessionInterface $session, UserPasswordEncoderInterface $encoder )
    {
        $member = new Member();

        // On crée un formulaire d'identification avec email et password.
        $form = $this->createForm(MemberType::class, $member);
        
        $form->handleRequest($request);
        // On vérifie si le formulaire est bien soumis et on traite les données.
        if ($form->isSubmitted() && $form->isValid())
            {   
                // On récupère les données de tous les membres de la base de données.
                $entityManager = $this->getDoctrine()->getManager();
                $hash=$encoder->encodePassword($member,$member->getPassword());
                $member->setPassword($hash);
                $entityManager->persist($member);
                $entityManager->flush();
                
            }

        return $this->render('security/registration.html.twig', array(
            'form' => $form->createView()
            ));
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, AuthenticationUtils $authenticationUtils)
    {
        // // get the login error if there is one
        // $error = $authenticationUtils->getLastAuthenticationError();

        // // last username entered by the user
        // $lastUsername = $authenticationUtils->getLastUsername();

        // return $this->render('security/login.html.twig', array(
        //     'last_username' => $lastUsername,
        //     'error'         => $error,
        // ));

        $member = new Member();
        // option avec le form builder automatique
        $form = $this->createForm(LoginType::class, $member);
        $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid())
            {
                $this->addFlash(
                    'notice',
                    'Bienvenu !'
                );
                // on démarre une session au nom de la personne qui se connecte
                $session->set('user', $member);
                return $this->redirectToRoute('home_show');
            }

        return $this->render('security/login.html.twig', array(
            'form' => $form->createView()
            ));

    }
}