<?php

namespace App\Controller\Admin;

use App\Entity\LeafTracker;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;

use Web3\Web3;

class LeafTrackerCrudController extends AbstractCrudController
{

    public static function getEntityFqcn(): string
    {
        $web3 = new Web3('http://127.0.0.1:7545');
        $accounts = $web3->eth()->accounts();
        dump($web3->eth()->accounts());
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
