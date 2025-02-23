<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class scheduleMaintenance extends Model
{

    use HasFactory;
    protected $table = 'schedulemaintenance';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'type',
        'mt_date',
        'status',
        'description',
        'created_by',
        'created_at',
        'updated_at'
    ];
}
