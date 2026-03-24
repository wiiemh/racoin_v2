<?php

namespace App\Models;

class Annonce extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'annonce';
    protected $primaryKey = 'id_annonce';
    public $timestamps = false;
    public $links = null;

    public function annonceur()
    {
        return $this->belongsTo(Annonceur::class, 'id_annonceur');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class, 'id_annonce');
    }
}
