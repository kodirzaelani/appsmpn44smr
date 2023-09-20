<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jenjangpendidikan extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Uuid;
    protected $table        = 'jenjangpendidikans';
    protected $primaryKey   = 'id';
    protected $guarded      = [];
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $createdAt = ['created_at'];
    protected $updatedAt = ['updated_at'];


    public function employe()
    {
        return $this->hasMany(Employe::class, 'jenjangpendidikan_id');
    }


    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('title', 'like', $term);
        });
    }
}
