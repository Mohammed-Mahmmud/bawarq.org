<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    protected $table = 'emails';
    protected $guarded = [];
    public $timestamps = true;
    public $incrementing = true;
    protected $primaryKey  = 'id';
}
