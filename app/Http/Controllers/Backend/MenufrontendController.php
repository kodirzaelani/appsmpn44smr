<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Menuitem;
use App\Models\Postcategory;

class MenufrontendController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:menu.index|menu.create|menu.edit|menu.delete|menu.trash']);
    }

    public function index()
    {
        return view('template.backend.nusantara.menu.index', [
            'title' => 'Manage Menu Frontend',
        ]);
    }

    public function menuitem()
    {
        return view('template.backend.nusantara.menu.menuitem');
    }
    public function structure()
    {
        return view('template.backend.nusantara.menu.menuitemstructur', [
            'menus' => Menu::all(),
        ]);
    }
    public function menufrontend()
    {
        return view('template.backend.nusantara.menu.menufrontend', [
            'menus' => Menu::all(),
            'postcategories' => Postcategory::all(),
        ]);
    }

    /**
     * Get Sub Category.
     *
     * @return \Illuminate\Http\Response
     */
    public function getmenuitem($menu_id)
    {
        // menampilkan data menggynakan Query builder buka elequent
        // $menuitem = DB::table('menuitems')->where('menu_id', $menu_id)->get();
        $menuitem = Menuitem::where('menu_id', $menu_id)->get();
        return response()->json($menuitem);
    }
}
