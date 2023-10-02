<?php

namespace App\Controller\Admin;

use App\Entity\Chatters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ChattersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Chatters::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
