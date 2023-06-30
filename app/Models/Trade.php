<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    protected $fillable = [
        'id',
        'code',
        'shares',
        'price',
        'trading_date',
        'buy_sell',
    ];

    public $timestamps = false;

    public function stock()
    {
        return $this->belongsTo(Stock::class, 'code', 'code');
    }
}
