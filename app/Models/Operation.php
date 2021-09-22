<?php

namespace App\Models;

use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Operation extends Model
{
    use HasFactory;
    const Buy = "BUY";
    const Sell = "SELL";

    protected $fillable = [
        'type',
        'quantity',
        'price',
        'wallet_stock_id',
        'wallet_id',
        'user_id', 

    ];

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

    public function walletStock()
    {
        return $this->belongsTo(WalletStock::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
