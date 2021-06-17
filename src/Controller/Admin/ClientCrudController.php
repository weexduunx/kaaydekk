<?php

namespace App\Controller\Admin;

use App\Entity\Client;
use App\Service\CsvService;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CountryField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Option\EA;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\BooleanFilter;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Factory\FilterFactory;
use Symfony\Component\HttpFoundation\Request;

class ClientCrudController extends AbstractCrudController
{
    private CsvService $csvService;

    public function __construct(CsvService $csvService)
    {
        $this->csvService = $csvService;
    }

    public static function getEntityFqcn(): string
    {
        return Client::class;
    }
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('nom')
            ->add('prenom')
            // most of the times there is no need to define the
            // filter type because EasyAdmin can guess it automatically
            ->add(BooleanFilter::new('status'))
            ;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            FormField::addPanel('INFORMATIONS DU CLIENTS','fa fa-pencil'),
            ColorField::new('color', 'Couleur statistique'),
            AssociationField::new('agence', 'Agence Immobiliére'),
            TextField::new('nom','Nom'),
            TextField::new('prenom', 'Prenom'),
            DateField::new('date_de_naissance','Date de Naissance'),
            TextField::new('lieu_de_naissance','Lieu de Naissance'),
            AssociationField::new('ville'),
            CountryField::new('nationalite', 'Nationalité'),
            TextField::new('profession','Profession'),
            TextField::new('situation_matrimoniale','Situation Matrimoniale'),
            EmailField::new('email','Email'),
            TextField::new('adresse','Adresse'),
            TelephoneField::new('tel', 'N° téléphone'),
            TextField::new('numero_cin_ou_passeport', 'N° CIN ou Passeport'),
            AssociationField::new('detailsCandidatures','Détails Candidatures')
            ->hideOnForm(),
            AssociationField::new('achat','Mode Acquisition')
            ->hideOnIndex()
            ->hideOnForm(),
            BooleanField::new('status'),
            TextEditorField::new('commentaire', 'Commentaire'),
        ];
    }
    public function configureActions(Actions $actions): Actions
    {
        
        $export = Action::new('export', 'Exporter les données')
        ->setIcon('fa fa-download')
        ->linkToCrudAction('export')
        ->setCssClass('btn')
        ->createAsGlobalAction();


        return $actions
            ->add(Crud::PAGE_INDEX, $export)
            ->setPermission('delete','ROLE_ADMIN');
    }
    public function export(Request $request)
    {
        $context = $request->attributes->get(EA::CONTEXT_REQUEST_ATTRIBUTE);
        $fields = FieldCollection::new($this->configureFields(Crud::PAGE_INDEX));
        $filters = $this->get(FilterFactory::class)->create($context->getCrud()->getFiltersConfig(), $fields, $context->getEntity());
        $clients = $this->createIndexQueryBuilder($context->getSearch(), $context->getEntity(), $fields, $filters)
            ->getQuery()
            ->getResult();

        $data = [];
        foreach ($clients as $client) {
            $data[] = $client->getExportData();
        }

        return $this->csvService->export($data, 'Données_des_Clients_'.date_create()->format('d-m-y').'.xls');
    }

}
