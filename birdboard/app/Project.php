<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function path () {
        return "/projects/{$this->id}";
    }

    public function users ()
    {
        return $this->belongsTo(User::class);
    }
}
