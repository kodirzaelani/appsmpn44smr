<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    use HasFactory;
    protected $table      = 'agama';
    protected $guarded    = [];
    protected $primaryKey = 'agamaid';

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('nama', 'like', $term);
        });
    }

    public function employe()
    {
        return $this->hasMany(Employe::class, 'agama_id');
    }
}
