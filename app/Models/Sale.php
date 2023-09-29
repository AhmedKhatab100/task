<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable =['quantity','description','unit_price','subtotal','discount','grand_total','notes','customer_id'];

    public function cutomer()
    {
        return $this->belongsTo(Customer::class);
    }
}
