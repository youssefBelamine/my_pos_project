<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ["id"];
    use HasFactory;

    // public function ttc()
    // {
    //     return $this->prix_ht*$this->tva;
    // }

}
