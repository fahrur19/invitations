<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $table = 'invitations';
    protected $fillable =['id', 'nama', 'email', 'opsi', 'note'];
}
