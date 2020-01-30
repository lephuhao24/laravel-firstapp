<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = [
        'file'
    ];

    public function TakePath(){
        return "\\image\\" . $this->file;
    }
}
