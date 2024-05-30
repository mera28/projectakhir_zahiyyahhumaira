<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;
    protected $fillable=['name','stock','tanggal','description'];


    public function order_detail():HasMany
    {
        return $this->hasMany(Order_detail::class);
    }
}
