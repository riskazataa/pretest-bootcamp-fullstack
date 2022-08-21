<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_listrik extends Model
{
    protected $table = "model_listrik";
    protected $primarykey = "id";
    protected $fillable = ['kode', 'namaproduk', 'harga'];
}
