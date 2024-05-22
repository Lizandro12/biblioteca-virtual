<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'users_contacts';

    protected $fillable = [
        'idicative', 'phone', 'number', 'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
