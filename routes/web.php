<?php

use App\Models\Album;
use App\Models\Option;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Template\Frontend\Nusantara\Post\Postall;
use App\Http\Livewire\Template\Frontend\Nusantara\Album\Albumall;
use App\Http\Livewire\Template\Frontend\Nusantara\Main\Homeindex;
use App\Http\Livewire\Template\Frontend\Nusantara\Video\Videoall;
use App\Http\Livewire\Template\Frontend\Nusantara\Page\Pagedetail;
use App\Http\Livewire\Template\Frontend\Nusantara\Post\Postdetail;
use App\Http\Livewire\Template\Frontend\Nusantara\Post\Postsearch;
use App\Http\Livewire\Template\Frontend\Nusantara\Agenda\Agendaall;
use App\Http\Livewire\Template\Frontend\Nusantara\Post\Posttaglist;
use App\Http\Livewire\Template\Frontend\Nusantara\Album\Albumdetail;
use App\Http\Livewire\Template\Frontend\Nusantara\Video\Videodetail;
use App\Http\Livewire\Template\Frontend\Nusantara\Agenda\Agendadetail;
use App\Http\Livewire\Template\Frontend\Nusantara\Contact\Contactindex;
use App\Http\Livewire\Template\Frontend\Nusantara\Page\Pagecategorylist;
use App\Http\Livewire\Template\Frontend\Nusantara\Post\Postcategorylist;
use App\Http\Livewire\Template\Frontend\Nusantara\Greeting\Greetingdetail;
use App\Models\Mediasocial;

Route::get('/', Homeindex::class)->name('root');

Route::prefix('berita')->group(function () {
    Route::get('', Postall::class)->name('post.all');
    // Route::get('/news', Postnewslist::class)->name('post.news');
    // Route::get('/article', Postarticlelist::class)->name('post.article');
    Route::get('/search', Postsearch::class)->name('post.search');
    Route::get('/detail/{slug}', Postdetail::class)->name('post.detail');
    Route::get('/kategori/{slug}', Postcategorylist::class)->name('post.category');
    Route::get('/tag/{slug}', Posttaglist::class)->name('post.tag');
});

Route::prefix('page')->group(function () {
    Route::get('/detail/{slug}', Pagedetail::class)->name('page.detail');
    Route::get('/category/{slug}', Pagecategorylist::class)->name('page.category');
});

Route::prefix('greeting')->group(function () {
    Route::get('/detail/{slug}', Greetingdetail::class)->name('greeting.detail');
});
Route::prefix('contact')->group(function () {
    Route::get('', Contactindex::class)->name('contact.detail');
});

Route::prefix('video')->group(function () {
    Route::get('', Videoall::class)->name('video.all');
    Route::get('/detail/{slug}', Videodetail::class)->name('video.detail');
});

Route::prefix('agenda')->group(function () {
    Route::get('', Agendaall::class)->name('agenda.all');
    Route::get('/detail/{slug}', Agendadetail::class)->name('agenda.detail');
});
Route::prefix('album')->group(function () {
    Route::get('', Albumall::class)->name('album.all');
    Route::get('/detail/{slug}', Albumdetail::class)->name('album.detail');
});

Auth::routes();
Route::middleware(['auth', 'web'])->group(function () {

    // Dashboard
    Route::get('backend/admin/home', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('backend.dashboard');
    Route::get('backend/admin/fontawesome', [App\Http\Controllers\Backend\DashboardController::class, 'fontawesome'])->name('backend.fontawesome');

    // Setting
    Route::get('backend/settings', [App\Http\Controllers\Backend\OptionController::class, 'setting'])->name('backend.settings');
    Route::post('backend/settings/create', [App\Http\Controllers\Backend\OptionController::class, 'createsetting'])->name('backend.settings.create');
    Route::post('backend/settings/store', [App\Http\Controllers\Backend\OptionController::class, 'storesetting'])->name('backend.settings.store');
    Route::get('backend/settings/{option}/edit', [App\Http\Controllers\Backend\OptionController::class, 'editsetting'])->name('backend.settings.edit');
    Route::put('backend/settings/{option}/update', [App\Http\Controllers\Backend\OptionController::class, 'updatesetting'])->name('backend.settings.update');

    // Permission
    Route::get('backend/permissions/index', [App\Http\Controllers\Backend\PermissionController::class, 'index'])->name('backend.permissions.index');

    // Role
    Route::get('backend/roles/index', [App\Http\Controllers\Backend\RoleController::class, 'index'])->name('backend.roles.index');
    Route::get('backend/roles/create', [App\Http\Controllers\Backend\RoleController::class, 'create'])->name('backend.roles.create');
    Route::post('backend/roles/store', [App\Http\Controllers\Backend\RoleController::class, 'store'])->name('backend.roles.store');
    Route::get('backend/roles/{role}/edit', [App\Http\Controllers\Backend\RoleController::class, 'edit'])->name('backend.roles.edit');
    Route::put('backend/roles/{role}/update', [App\Http\Controllers\Backend\RoleController::class, 'update'])->name('backend.roles.update');

    // User
    Route::get('backend/users/index', [App\Http\Controllers\Backend\UserController::class, 'index'])->name('backend.users.index');
    Route::get('backend/users/create', [App\Http\Controllers\Backend\UserController::class, 'create'])->name('backend.users.create');
    Route::post('backend/users/store', [App\Http\Controllers\Backend\UserController::class, 'store'])->name('backend.users.store');
    Route::get('backend/users/{user}/edit', [App\Http\Controllers\Backend\UserController::class, 'edit'])->name('backend.users.edit');
    Route::put('backend/users/{user}/update', [App\Http\Controllers\Backend\UserController::class, 'update'])->name('backend.users.update');
    Route::get('backend/admin/profile', [App\Http\Controllers\Backend\BackendController::class, 'userprofile'])->name('backend.userprofile');

    // Agama
    Route::get('backend/religi', [App\Http\Controllers\Backend\AgamaController::class, 'index'])->name('backend.religi.index');

    // Mediasocial
    Route::get('backend/mediasocial', [App\Http\Controllers\Backend\MediasocialController::class, 'index'])->name('backend.mediasocial.index');

    // Jenjang Pendidikan
    Route::get('backend/jenjangpendidikan', [App\Http\Controllers\Backend\JenjangpendidikanController::class, 'index'])->name('backend.jenjangpendidikan.index');

    // Greetings
    Route::get('backend/greetings', [App\Http\Controllers\Backend\GreetingController::class, 'index'])->name('backend.greetings.index');
    Route::get('backend/greetings/create', [App\Http\Controllers\Backend\GreetingController::class, 'create'])->name('backend.greetings.create');
    Route::post('backend/greetings/store', [App\Http\Controllers\Backend\GreetingController::class, 'store'])->name('backend.greetings.store');
    Route::get('backend/greetings/{greeting}/edit', [App\Http\Controllers\Backend\GreetingController::class, 'edit'])->name('backend.greetings.edit');
    Route::put('backend/greetings/{greeting}/update', [App\Http\Controllers\Backend\GreetingController::class, 'update'])->name('backend.greetings.update');

    // Pagecategory
    Route::get('backend/pagecategories', [App\Http\Controllers\Backend\PageCategoryController::class, 'index'])->name('backend.pagecategories.index');

    // Pages
    Route::get('backend/pages', [App\Http\Controllers\Backend\PageController::class, 'index'])->name('backend.pages.index');
    Route::get('backend/pages/create', [App\Http\Controllers\Backend\PageController::class, 'create'])->name('backend.pages.create');
    Route::post('backend/pages/store', [App\Http\Controllers\Backend\PageController::class, 'store'])->name('backend.pages.store');
    Route::get('backend/pages/{page}/edit', [App\Http\Controllers\Backend\PageController::class, 'edit'])->name('backend.pages.edit');
    Route::put('backend/pages/{page}/update', [App\Http\Controllers\Backend\PageController::class, 'update'])->name('backend.pages.update');

    // PostCategory
    Route::get('backend/postcategories', [App\Http\Controllers\Backend\PostCategoryController::class, 'index'])->name('backend.postscategories.index');

    // Tag
    Route::get('backend/tags', [App\Http\Controllers\Backend\TagController::class, 'index'])->name('backend.tags.index');

    // Post
    Route::get('backend/allposts', [App\Http\Controllers\Backend\PostController::class, 'index'])->name('backend.posts.index');
    Route::get('backend/posts/create', [App\Http\Controllers\Backend\PostController::class, 'create'])->name('backend.posts.create');
    Route::post('backend/posts/store', [App\Http\Controllers\Backend\PostController::class, 'store'])->name('backend.posts.store');
    Route::get('backend/posts/{post}/edit', [App\Http\Controllers\Backend\PostController::class, 'edit'])->name('backend.posts.edit');
    Route::put('backend/posts/{post}/update', [App\Http\Controllers\Backend\PostController::class, 'update'])->name('backend.posts.update');

    // Slider
    Route::get('backend/allsliders', [App\Http\Controllers\Backend\SliderController::class, 'index'])->name('backend.sliders.index');
    Route::get('backend/sliders/create', [App\Http\Controllers\Backend\SliderController::class, 'create'])->name('backend.sliders.create');
    Route::post('backend/sliders/store', [App\Http\Controllers\Backend\SliderController::class, 'store'])->name('backend.sliders.store');
    Route::get('backend/sliders/{slider}/edit', [App\Http\Controllers\Backend\SliderController::class, 'edit'])->name('backend.sliders.edit');
    Route::put('backend/sliders/{slider}/update', [App\Http\Controllers\Backend\SliderController::class, 'update'])->name('backend.sliders.update');

    // Album
    Route::get('backend/allalbums', [App\Http\Controllers\Backend\AlbumController::class, 'index'])->name('backend.albums.index');
    Route::get('backend/albums/create', [App\Http\Controllers\Backend\AlbumController::class, 'create'])->name('backend.albums.create');
    Route::post('backend/albums/store', [App\Http\Controllers\Backend\AlbumController::class, 'store'])->name('backend.albums.store');
    Route::get('backend/albums/{album}/edit', [App\Http\Controllers\Backend\AlbumController::class, 'edit'])->name('backend.albums.edit');
    Route::put('backend/albums/{album}/update', [App\Http\Controllers\Backend\AlbumController::class, 'update'])->name('backend.albums.update');

    // VideoCategory
    Route::get('backend/videocategories', [App\Http\Controllers\Backend\CategoryVideoController::class, 'index'])->name('backend.videoscategories.index');

    // Video
    Route::get('backend/allvideo', [App\Http\Controllers\Backend\VideoController::class, 'index'])->name('backend.video.index');
    Route::get('backend/video/create', [App\Http\Controllers\Backend\VideoController::class, 'create'])->name('backend.video.create');
    Route::post('backend/video/store', [App\Http\Controllers\Backend\VideoController::class, 'store'])->name('backend.video.store');
    Route::get('backend/video/{video}/edit', [App\Http\Controllers\Backend\VideoController::class, 'edit'])->name('backend.video.edit');
    Route::put('backend/video/{video}/update', [App\Http\Controllers\Backend\VideoController::class, 'update'])->name('backend.video.update');

    // Foto
    Route::get('backend/allfotos', [App\Http\Controllers\Backend\FotoController::class, 'index'])->name('backend.fotos.index');
    Route::get('backend/fotos/create', [App\Http\Controllers\Backend\FotoController::class, 'create'])->name('backend.fotos.create');
    Route::post('backend/fotos/store', [App\Http\Controllers\Backend\FotoController::class, 'store'])->name('backend.fotos.store');
    Route::get('backend/fotos/{foto}/edit', [App\Http\Controllers\Backend\FotoController::class, 'edit'])->name('backend.fotos.edit');
    Route::put('backend/fotos/{foto}/update', [App\Http\Controllers\Backend\FotoController::class, 'update'])->name('backend.fotos.update');

    // Agenda
    Route::get('backend/allagenda', [App\Http\Controllers\Backend\AgendaController::class, 'index'])->name('backend.agendas.index');
    Route::get('backend/agendas/create', [App\Http\Controllers\Backend\AgendaController::class, 'create'])->name('backend.agendas.create');
    Route::post('backend/agendas/store', [App\Http\Controllers\Backend\AgendaController::class, 'store'])->name('backend.agendas.store');
    Route::get('backend/agendas/{agenda}/edit', [App\Http\Controllers\Backend\AgendaController::class, 'edit'])->name('backend.agendas.edit');
    Route::put('backend/agendas/{agenda}/update', [App\Http\Controllers\Backend\AgendaController::class, 'update'])->name('backend.agendas.update');

    // Download Category
    Route::get('backend/downloadcategory', [App\Http\Controllers\Backend\DownloadController::class, 'categoryindex'])->name('backend.download.categoryindex');

    // Download
    Route::get('backend/download', [App\Http\Controllers\Backend\DownloadController::class, 'downloadindex'])->name('backend.download.downloadindex');
    Route::get('backend/download/create', [App\Http\Controllers\Backend\DownloadController::class, 'create'])->name('backend.download.create');
    Route::post('backend/download/store', [App\Http\Controllers\Backend\DownloadController::class, 'store'])->name('backend.download.store');
    Route::get('backend/download/{download}/edit', [App\Http\Controllers\Backend\DownloadController::class, 'edit'])->name('backend.download.edit');
    Route::put('backend/download/{download}/update', [App\Http\Controllers\Backend\DownloadController::class, 'update'])->name('backend.download.update');

    Route::get('backend/manage-menus', [App\Http\Controllers\Backend\MenufrontendController::class, 'index'])->name('backend.menu.index');
    Route::get('backend/menuitem', [App\Http\Controllers\Backend\MenufrontendController::class, 'menuitem'])->name('backend.menuitem.index');
    Route::get('backend/menuitem/structure', [App\Http\Controllers\Backend\MenufrontendController::class, 'structure'])->name('backend.menuitem.structure');
    Route::get('backend/menufrontend/structure', [App\Http\Controllers\Backend\MenufrontendController::class, 'menufrontend'])->name('backend.menuitem.menufrontend');

    // Json Data for menu and menuitem
    Route::get('backend/get/menuitem/{menu_id}', [App\Http\Controllers\Backend\MenufrontendController::class, 'getmenuitem'])->name('backend.menu.getmenuitem');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

View::composer('*', function ($view) {
    $global_option = Option::first();
    if (!empty($global_option)) {
        $view->with('global_option', $global_option);
    } else {
        $view->with('global_option', '0');
    }
});
View::composer('*', function ($view) {
    $global_socialmedia = Mediasocial::orderBy('created_at', 'asc')->get();
    if (!empty($global_socialmedia)) {
        $view->with('global_socialmedia', $global_socialmedia);
    } else {
        $view->with('global_socialmedia', '0');
    }
});
