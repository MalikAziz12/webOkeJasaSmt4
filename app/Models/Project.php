<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable=[
        'client_id',
        'name',
        'description',
        'price',
        'start_date',
        'end_date',



    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    // public function nama_project(): BelongsTo
    // {
    //     return $this->belongsTo(Client::class);
    // }
}
