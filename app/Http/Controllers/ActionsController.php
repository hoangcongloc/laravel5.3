<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\StoreTagRequest as StoreRequest;
use App\Http\Requests\UpdateTagRequest as UpdateRequest;


class ActionsController extends CrudController 
{
    //
    public function __construct() {
        parent::__construct();
		$this->crud->setModel("App\Article");
        $this->crud->setRoute("action");
        $this->crud->setEntityNameStrings('action', 'action');
        $this->crud->setColumns(['name']);
        $this->crud->setColumns(['type']);
        $this->crud->setColumns(['upload']);
        $this->crud->addField(
        	[
        		'name' => 'name',
				'type' => 'type',
				'upload'=>'upload'
        	]);
	}

	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}