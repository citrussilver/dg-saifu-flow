<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MayaTransactions extends Model
{
    use HasFactory;

    public function maya_account()
    {
        return $this->belongsTo(MayaTransactions::class, 'maya_id', 'id');
    }
}
