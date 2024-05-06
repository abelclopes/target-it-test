<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    // app/Models/Address.php

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
