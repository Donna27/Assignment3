<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $table = 'reminder';

    protected $fillable = ['body','finished','createdUserID'];
}
