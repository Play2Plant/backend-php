<?php

namespace App\Controller\Admin;

use App\Entity\LeafTracker;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class LeafTrackerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LeafTracker::class;
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
