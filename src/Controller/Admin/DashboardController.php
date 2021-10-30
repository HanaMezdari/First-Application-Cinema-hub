<?php

namespace App\Controller\Admin;

use App\Entity\Film;

use App\Entity\User;

use App\Entity\Cinema;
use App\Entity\Categorie;
use App\Entity\Publicite;
use App\Entity\Comment;
use App\Entity\SalleDeProjection;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/login", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('CINEMAHUB');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-User', User::class);
        yield MenuItem::linkToCrud('Publicite', 'fas fa-list', Publicite::class);
        yield MenuItem::linkToCrud('Film', 'fas fa-list', Film::class);
        yield MenuItem::linkToCrud('Categorie', 'fas fa-tags', Categorie::class);
        yield MenuItem::linkToCrud('Comment', 'fas fa-comment', Comment::class);
        yield MenuItem::linkToCrud('SalleDeProjection', 'fas fa-list', SalleDeProjection::class);
        yield MenuItem::linkToCrud('Cinema', 'fas fa-list', Cinema::class);
       
    }
}
