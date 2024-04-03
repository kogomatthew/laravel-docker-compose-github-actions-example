<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Invite;
class Contacts extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone'];


    public function invites()
    {
        return $this->hasMany(Invite::class);
    }
}
