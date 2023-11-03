<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menufrontend extends Model
{
    use HasFactory;
    //  use Uuid;
    protected $table = 'admin_menus';
    protected $guarded = [];


    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('name', 'like', $term);
        });
    }

    public function items()
    {
        return $this->hasMany('Efectn\Menu\Models\MenuItems', 'menu_id')->with('child')->where('parent_id', 0)->orderBy('sort', 'ASC');
    }
}
