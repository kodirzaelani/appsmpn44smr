<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Download extends Model
{
    use HasFactory;
    use Uuid;
    protected $table      = 'downloads';
    protected $primaryKey = 'id';
    protected $guarded    = [];
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $createdAt  = ['created_at'];
    protected $updatedAt  = ['updated_at'];

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";

        $query->where(function ($q) use ($term) {
            $q->orWhereRaw('LOWER(title) LIKE ?', [$term]);
        });
    }

    public function downloadcategory()
    {
        return $this->belongsTo(Downloadcategory::class, 'downloadcategory_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // fungsi scope untuk manampilkan yang status publish
    public function scopePublished($query)
    {
        return $query->where("status", "=", 1);
    }
}
