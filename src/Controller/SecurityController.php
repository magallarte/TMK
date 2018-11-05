<?php

namespace App\Controller;

use App\Entity\Member;
use App\Form\LoginType;
use App\Form\MemberType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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

                $this->addFlash(
                    'notice',
                    'Votre profil a bien été crée !'
                );
                // on démarre une session au nom de la personne qui vient de s'inscrire
                $session->set('user', $member);
                return $this->redirectToRoute('home_show');     
            }

        return $this->render('security/registration.html.twig', array(
            'form' => $form->createView()
            ));
    }

    /**
     * @Route("/login", name="security_login")
     */
    public function templogin(Request $request, AuthenticationUtils $authenticationUtils)
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
                // return $this->redirectToRoute('home_show');
                return $this->redirectToRoute('article_selection');
            }

        return $this->render('security/login.html.twig', array(
            'form' => $form->createView()
            ));

    }

    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion(Request $request, AuthenticationUtils $authUtils)
    {
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();

        return $this->render('security/connexion.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logout()
    {

    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }
}