<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
  use \Dimsav\Translatable\Translatable;

  public $translatedAttributes = ['title', 'text'];
  protected $fillable = ['title', 'text'];
  public function category()
 {
     return $this->belongsTo('App\Category');
 }

}

class PublicationTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['title', 'text'];

}
