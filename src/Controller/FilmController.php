<?php

namespace App\Controller;


use App\Entity\Film;
use App\Entity\Comment;
use App\Form\CommentType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FilmController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager ){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/film", name="film")
     */
    public function index(): Response
    {
        $film = $this->entityManager->getRepository(Film::class)->findAll();
         
        return $this->render('film/index.html.twig', [
            'film' =>$film
        ]);
    }
     /**
     * @Route("/film/{id}", name="film_show")
     */
    public function show(Film $film, Request $request, EntityManagerInterface  $manager)
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $comment->setDate(new \DateTime())
                     ->setFilm($film);

            $manager->persist($comment);
            $manager->flush();

            return $this->redirectToRoute('film_show', ['id' => $film->getId()]);
        }

        return $this->render('film/show.html.twig', [

            'film' => $film,
            'commentForm' => $form->createView()
            


        ]);
    }

    
}

