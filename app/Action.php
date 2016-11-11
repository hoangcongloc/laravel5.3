<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Article extends Model
{
    //
    use CrudTrait;
	protected $table = 'action';
	protected $fillable = ['name'];
	public $timestamps = true;

	public function actions()
	{
		 return $this->hasMany('App\Models\Article', 'action');
	}
	
}
