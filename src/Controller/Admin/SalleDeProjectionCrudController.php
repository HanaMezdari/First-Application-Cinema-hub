<?php

namespace App\Controller\Admin;

use App\Entity\SalleDeProjection;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SalleDeProjectionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SalleDeProjection::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('nom'),
            NumberField::new('nbr_places'),
            AssociationField::new('cinema'),
            ImageField::new('image')
               ->setBasePath('SalleDeProjection/')
               ->setUploadDir('public/SalleDeProjection')
               ->setUploadedFileNamePattern('[randomhash].[extension]'),
          
        ];
    }
    
}
