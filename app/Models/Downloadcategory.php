<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Downloadcategory extends Model
{
    use HasFactory;
    use Uuid;
    protected $table        = 'downloadcategories';
    protected $primaryKey   = 'id';
    protected $guarded      = [];
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $createdAt = ['created_at'];
    protected $updatedAt = ['updated_at'];

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";

        $query->where(function ($q) use ($term) {
            $q->orWhereRaw('LOWER(title) LIKE ?', [$term]);
        });
    }

    public function downloads()
    {
        return $this->hasMany(Download::class, 'downloadcategory_id');
    }
}
