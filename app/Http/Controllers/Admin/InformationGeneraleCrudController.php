<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InformationGeneraleRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class InformationGeneraleCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class InformationGeneraleCrudController extends CrudController
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
        CRUD::setModel(\App\Models\InformationGenerale::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/informationgenerale');
        CRUD::setEntityNameStrings('informationgenerale', 'information_generales');
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
        $this->crud->addField([
            'label'        => "Logo Image",
            'name'         => "image",
            'type'         => 'image',
            'upload'       => true,
            'crop'         => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
            'disk'      => 'public_folder', // in case you need to show images from a different disk
            //'prefix'    => 'uploads/images/collaborateur_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);

        CRUD::addColumn([
            'name'=>'lieuGeographique',
            'type'=>'text',
            'label'=>'Adresse géographique'
        ]);
        CRUD::addColumn([
            'name'=>'email',
            'type'=>'email',
            'label'=>'Adresse email'
        ]);
        CRUD::addColumn([
            'name'=>'contact',
            'type'=>'text',
            'label'=>'Adresse Telephonique'
        ]);
        CRUD::addColumn([
            'name'=>'boitePostal',
            'type'=>'text',
            'label'=>'Adresse Postale'
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
        CRUD::setValidation(InformationGeneraleRequest::class);

        //CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
        $this->crud->addField([
            'label'        => "Logo Image",
            'name'         => "image",
            'type'         => 'image',
            'upload'       => true,
            'crop'         => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
            'disk'      => 'public_folder', // in case you need to show images from a different disk
            //'prefix'    => 'uploads/images/collaborateur_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);

        CRUD::addField([
            'name'=>'lieuGeographique',
            'type'=>'text',
            'label'=>'Adresse géographique'
        ]);
        CRUD::addField([
            'name'=>'email',
            'type'=>'email',
            'label'=>'Adresse email'
        ]);
        CRUD::addField([
            'name'=>'contact',
            'type'=>'text',
            'label'=>'Adresse Telephonique'
        ]);
        CRUD::addField([
            'name'=>'boitePostal',
            'type'=>'text',
            'label'=>'Adresse Postale'
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
}
