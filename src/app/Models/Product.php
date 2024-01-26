<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model 
{
    use HasFactory;
    protected $fillable = ['image', 'jenis_produk', 'jumlah_produk', 'harga_produk'];
}
