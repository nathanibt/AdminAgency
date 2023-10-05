<?php

namespace App\Controller\Admin;

use App\Entity\Models;
use App\Entity\Contact;
use App\Entity\Chatters;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Fitfy Agency');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Models', 'fas fa-female', Models::class);
        yield MenuItem::linkToCrud('Chatters', 'fas fa-comment-dots', Chatters::class);
        yield MenuItem::linkToCrud('Contact', 'fas fa-address-book', Contact::class);
    }
    
}
