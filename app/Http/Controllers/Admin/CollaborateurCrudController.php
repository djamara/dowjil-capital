<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CollaborateurRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CollaborateurCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CollaborateurCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Collaborateur::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/collaborateur');
        CRUD::setEntityNameStrings('collaborateur', 'collaborateurs');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // columns

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
        CRUD::addColumn([
            'name'=>'collaborateur_nom',
            'type'=>'text',
            'label'=>'Nom'
        ]);
        CRUD::addColumn([
            'name'=>'collaborateur_prenom',
            'type'=>'text',
            'label'=>'Prenom'
        ]);
        CRUD::addColumn([
            'name'=>'collaborateur_contact',
            'type'=>'text',
            'label'=>'Contact'
        ]);
        CRUD::addColumn([
            'name'=>'collaborateur_email',
            'type'=>'email',
            'label'=>'email'
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CollaborateurRequest::class);



        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
        $this->crud->addField([
          'label'        => "Collaborateur Image",
          'name'         => "image",
          'type'         => 'image',
          'upload'       => true,
          'crop'         => true, // set to true to allow cropping, false to disable
          'aspect_ratio' => 0, // ommit or set to 0 to allow any aspect ratio
          'disk'      => 'public_folder', // in case you need to show images from a different disk
          //'prefix'    => 'uploads/images/collaborateur_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);
        $this->crud->addField([
            'name' => 'collaborateur_nom',
            'type' => 'text',
            'label' => "Nom du collaborateur"
          ]);
          $this->crud->addField([
            'name' => 'collaborateur_prenom',
            'type' => 'text',
            'label' => "Prenom du collaborateur"
          ]);
          $this->crud->addField([
            'name' => 'collaborateur_contact',
            'type' => 'text',
            'label' => "Contact du collaborateur"
          ]);
          $this->crud->addField([
            'name' => 'collaborateur_contact2',
            'type' => 'text',
            'label' => "Contact 2 du collaborateur"
          ]);
          $this->crud->addField([
            'name' => 'collaborateur_email',
            'type' => 'email',
            'label' => "Email du collaborateur"
          ]);
          $this->crud->addField([   // Checkbox
            'name'  => 'collaborateur_topActiv',
            'label' => 'Collaborateur actif',
            'type'  => 'checkbox'
        ]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation(){

        $this->crud->addColumn([
            'label'        => "Collaborateur Image",
            'name'         => "image",
            'type'         => 'image',
            'upload'       => true,
            'crop'         => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
            'disk'      => 'public_folder', // in case you need to show images from a different disk
            //'prefix'    => 'uploads/images/collaborateur_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);
    }
}
