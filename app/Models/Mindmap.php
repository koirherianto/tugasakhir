<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mindmap extends Model
{
    public $table = 'mindmaps';

    public $fillable = [
        'judul',
        'subjudul',
        'posisi',
        'red',
        'green',
        'blue',
        'is_kanan',
        'mindmap_id'
    ];

    protected $casts = [
        'id' => 'integer',
        'judul' => 'string',
        'subjudul' => 'string',
        'posisi' => 'string',
        'red' => 'integer',
        'green' => 'integer',
        'blue' => 'integer',
        'is_kanan' => 'boolean',
        'mindmap_id' => 'integer'
    ];

    public static array $rules = [
        'judul' => 'required'
    ];

    
}
