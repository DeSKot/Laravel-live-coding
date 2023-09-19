<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function wallets()
  {
    return $this->hasMany(Wallet::class);
  }
}
