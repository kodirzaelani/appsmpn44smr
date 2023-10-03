<div>
    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar position-relative">
            <div class="multinav">
                <div class="multinav-scroll" style="height: 100%;">
                    <!-- sidebar menu-->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li>
                            <a href="{{ route('root') }}" target="_blank" title="View Site">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                                <span>Front End</span>
                            </a>
                        </li>
                        <li class="header">Dashboard</li>
                        <li>
                            <a href="{{ route('backend.admin') }}">
                                <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                        class="path2"></span></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        @if (auth()->user()->can('greetings.index') ||
                                auth()->user()->can('agendas.index') ||
                                auth()->user()->can('posts.index') ||
                                auth()->user()->can('postcategory.index') ||
                                auth()->user()->can('tags.index') ||
                                auth()->user()->can('pages.index'))
                            <li class="header">Web Apps</li>
                            @if (auth()->user()->can('greetings.index') ||
                                    auth()->user()->can('agendas.index') ||
                                    auth()->user()->can('posts.index') ||
                                    auth()->user()->can('postcategory.index') ||
                                    auth()->user()->can('tags.index') ||
                                    auth()->user()->can('pages.index'))
                                {{-- Post Menu  --}}
                                @if (auth()->user()->can('posts.index') ||
                                        auth()->user()->can('posts.create') ||
                                        auth()->user()->can('postcategory.index') ||
                                        auth()->user()->can('tags.index'))
                                    <li
                                        class="treeview {{ setActive('backend/allposts') . setActive('backend/postcategories') . setActive('backend/tags') }} {{ setOpen('backend/allposts') . setOpen('backend/postcategories') . setOpen('backend/tags') }}">
                                        <a href="#">
                                            <i class="fa fa-file-text" aria-hidden="true"></i>
                                            <span>Post</span>
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            @can('categoryposts.index')
                                                <li class="{{ setActive('backend/postcategories') }}">
                                                    <a href="{{ route('backend.postscategories.index') }}">
                                                        <i class="icon-Commit"><span class="path1"></span><span
                                                                class="path2"></span></i>Post Categories
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('tags.index')
                                                <li class="{{ setActive('backend/tags') }}">
                                                    <a href="{{ route('backend.tags.index') }}">
                                                        <i class="icon-Commit"><span class="path1"></span><span
                                                                class="path2"></span></i>Post Tags
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('posts.index')
                                                <li class="{{ setActive('backend/allposts') }}">
                                                    <a href="{{ route('backend.posts.index') }}">
                                                        <i class="icon-Commit"><span class="path1"></span><span
                                                                class="path2"></span></i>List Post
                                                    </a>
                                                </li>
                                            @endcan
                                        </ul>
                                    </li>
                                @endif
                                {{-- End Post Menu --}}
                                {{-- Pages Menu  --}}
                                @if (auth()->user()->can('pages.index') ||
                                        auth()->user()->can('pages.create') ||
                                        auth()->user()->can('pagecategories.index'))
                                    <li
                                        class="treeview {{ setActive('backend/allgreetings') . setActive('backend/pagecategories') }} {{ setOpen('backend/allgreetings') . setOpen('backend/pagecategories') }}">
                                        <a href="#">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                            <span>Page</span>
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            @can('pagecategories.index')
                                                <li class="{{ setActive('backend/pagecategories') }}">
                                                    <a href="{{ route('backend.pagecategories.index') }}">
                                                        <i class="icon-Commit"><span class="path1"></span><span
                                                                class="path2"></span></i>Page Categories
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('pages.index')
                                                <li class="{{ setActive('backend/allpages') }}">
                                                    <a href="{{ route('backend.pages.index') }}">
                                                        <i class="icon-Commit"><span class="path1"></span><span
                                                                class="path2"></span></i>List Page
                                                    </a>
                                                </li>
                                            @endcan
                                        </ul>
                                    </li>
                                @endif
                                {{-- End Pages Menu --}}
                                {{-- Sambutan Menu  --}}
                                @can('greetings.index')
                                    <li
                                        class="{{ setActive('backend/allgreetings') }} {{ setOpen('backend/allgreetings') }}">
                                        <a href="{{ route('backend.greetings.index') }}" title="Sambutan">
                                            <i class="fa fa-vcard-o"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                            <span>Greetings</span>
                                        </a>
                                    </li>
                                @endcan
                                {{-- End Sambutan Menu --}}
                                {{-- Agendas Menu  --}}
                                @can('agendas.index')
                                    <li class="{{ setActive('backend/allagenda') }} {{ setOpen('backend/allagenda') }}">
                                        <a href="{{ route('backend.agendas.index') }}" title="Agenda">
                                            <i class="icon-Chat-check"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                            <span>Agenda</span>
                                        </a>
                                    </li>
                                @endcan
                                {{-- End Agendas Menu --}}
                                {{-- Galeries Menu --}}
                                @if (auth()->user()->can('downloadfiles.index') ||
                                        auth()->user()->can('downloadcategories.index') ||
                                        auth()->user()->can('sliders.index') ||
                                        auth()->user()->can('sliders.create') ||
                                        auth()->user()->can('albums.index') ||
                                        auth()->user()->can('albums.create') ||
                                        auth()->user()->can('advertisements.index') ||
                                        auth()->user()->can('advertisements.create') ||
                                        auth()->user()->can('video.index') ||
                                        auth()->user()->can('video.create'))
                                    <li
                                        class="treeview {{ setActive('backend/download') . setActive('backend/downloadcategory') . setActive('backend/sliders') . setActive('backend/albums') . setActive('backend/photos') . setActive('backend/advertisements') . setActive('backend/video') }} {{ setOpen('backend/download') . setOpen('backend/downloadcategory') . setOpen('backend/sliders') . setOpen('backend/sliders') . setOpen('backend/photos') . setOpen('backend/advertisements') . setOpen('backend/video') }}">
                                        <a href="#">
                                            <i class="fa fa-file-image-o" aria-hidden="true"></i><span
                                                class="path1"></span><span class="path2"></span></i>
                                            <span>Galeries</span>
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <!-- Download -->
                                            <li
                                                class="treeview {{ setActive('backend/download') . setActive('backend/downloadcategory') }} {{ setOpen('backend/download') . setOpen('backend/downloadcategory') }}">
                                                <a href="#">
                                                    <i class="icon-Commit">
                                                        <span class="path1"></span><span class="path2"></span></i>
                                                    Download
                                                    <span class="pull-right-container">
                                                        <i class="fa fa-angle-right pull-right"></i>
                                                    </span>
                                                </a>
                                                <ul class="treeview-menu">
                                                    @can('downloadcategories.index')
                                                        <li class="{{ setActive('backend/download') }}">
                                                            <a href="{{ route('backend.download.categoryindex') }}">
                                                                <i class="icon-Commit"><span class="path1"></span><span
                                                                        class="path2"></span></i>Category
                                                            </a>
                                                        </li>
                                                    @endcan
                                                    @can('downloadfiles.index')
                                                        <li class="{{ setActive('backend/download') }}">
                                                            <a href="{{ route('backend.download.downloadindex') }}">
                                                                <i class="icon-Commit"><span class="path1"></span><span
                                                                        class="path2"></span></i>List Download
                                                            </a>
                                                        </li>
                                                    @endcan
                                                </ul>
                                            </li>
                                            <!-- End Download -->
                                            @can('sliders.index')
                                                <li class="{{ setActive('backend/allsliders') }}">
                                                    <a href="{{ route('backend.sliders.index') }}">
                                                        <i class="icon-Commit"><span class="path1"></span><span
                                                                class="path2"></span></i>Hero Sliders
                                                    </a>
                                                </li>
                                            @endcan
                                            @can('albums.index')
                                                <li class="{{ setActive('backend/allalbums') }} ">
                                                    <a href="{{ route('backend.albums.index') }}">
                                                        <i class="icon-Commit"><span class="path1"></span><span
                                                                class="path2"></span></i>Albums Photo
                                                    </a>
                                                </li>
                                            @endcan
                                            <li
                                                class="treeview {{ setActive('backend/video') . setActive('backend/videocategories') }} {{ setOpen('backend/video') . setOpen('backend/videocategories') }}">
                                                <a href="#">
                                                    <i class="icon-Commit"><span class="path1"></span><span
                                                            class="path2"></span></i>Video
                                                    <span class="pull-right-container">
                                                        <i class="fa fa-angle-right pull-right"></i>
                                                    </span>
                                                </a>
                                                <ul class="treeview-menu">
                                                    @can('videocategories.index')
                                                        <li class="{{ setActive('backend/videocategories') }}">
                                                            <a href="{{ route('backend.videoscategories.index') }}">
                                                                <i class="icon-Commit"><span class="path1"></span><span
                                                                        class="path2"></span></i>Video Category
                                                            </a>
                                                        </li>
                                                    @endcan
                                                    @can('video.index')
                                                        <li class="{{ setActive('backend/allvideo') }}">
                                                            <a href="{{ route('backend.video.index') }}"><i
                                                                    class="icon-Commit"><span class="path1"></span><span
                                                                        class="path2"></span></i>Video All
                                                            </a>
                                                        </li>
                                                    @endcan
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                                {{-- End Galeries Menu --}}
                            @endif
                        @endif

                        @if (auth()->user()->can('settings.index') ||
                                auth()->user()->can('religi.index') ||
                                auth()->user()->can('jenjangpendidikan.index'))
                            <li class="header">SYSTEM CONFIGURATION</li>
                            @if (auth()->user()->can('settings.index') ||
                                    auth()->user()->can('religi.index') ||
                                    auth()->user()->can('jenjangpendidikan.index'))
                                <li
                                    class="treeview {{ setActive('backend/allwidget') . setActive('backend/jenjangpendidikan') . setActive('backend/menu') . setActive('backend/settings') }} {{ setOpen('backend/allwidget') . setOpen('backend/jenjangpendidikan') . setOpen('backend/menu') . setOpen('backend/settings') }}">
                                    <a href="#">
                                        <i class="icon-Settings-2"><span class="path1"></span><span
                                                class="path2"></span></i>
                                        <span>Configuration</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        @can('settings.index')
                                            <li class="{{ setActive('backend/settings') }}">
                                                <a href="{{ route('backend.settings') }}">
                                                    <i class="icon-Commit"><span class="path1"></span><span
                                                            class="path2"></span></i>System Info
                                                </a>
                                            </li>
                                        @endcan
                                        @if (auth()->user()->can('religi.index'))
                                            <li
                                                class="{{ setActive('backend/religi') }} {{ setOpen('backend/religi') }}"">
                                                <a href="{{ route('backend.religi.index') }}">
                                                    <i class="icon-Commit"><span class="path1"></span><span
                                                            class="path2"></span></i>Religi
                                                </a>
                                            </li>
                                        @endif
                                        @if (auth()->user()->can('jenjangpendidikan.index'))
                                            <li
                                                class="{{ setActive('backend/jenjangpendidikan') }} {{ setOpen('backend/jenjangpendidikan') }}">
                                                <a href="{{ route('backend.jenjangpendidikan.index') }}">
                                                    <i class="icon-Commit"><span class="path1"></span><span
                                                            class="path2"></span></i>Jenjang Pendidikan
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </li>
                            @endif
                        @endif
                        {{-- Authentication Menu  --}}
                        @if (auth()->user()->can('roles.index') ||
                                auth()->user()->can('permissions.index') ||
                                auth()->user()->can('users.index'))
                            <li class="header">LOGIN & AUTHANTICATION</li>
                            <li
                                class="treeview {{ setActive('backend/roles/index') . setActive('backend/permissions/index') . setActive('backend/users/index') }} {{ setOpen('backend/roles/index') . setOpen('backend/permissions/index') . setOpen('backend/users/index') }}">
                                <a href="#">
                                    <i class="icon-Chat-locked"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>User Authentication</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    @can('permissions.index')
                                        <li class="{{ setActive('backend/permissions/index') }}">
                                            <a href="{{ route('backend.permissions.index') }}">
                                                <i class="icon-Commit"><span class="path1"></span><span
                                                        class="path2"></span></i>Permissions
                                            </a>
                                        </li>
                                    @endcan
                                    @can('roles.index')
                                        <li class="{{ setActive('backend/roles/index') }}">
                                            <a href="{{ route('backend.roles.index') }}">
                                                <i class="icon-Commit"><span class="path1"></span><span
                                                        class="path2"></span></i>Roles
                                            </a>
                                        </li>
                                    @endcan
                                    @can('users.index')
                                        <li class="{{ setActive('backend/users/index') }}">
                                            <a href="{{ route('backend.users.index') }}">
                                                <i class="icon-Commit"><span class="path1"></span><span
                                                        class="path2"></span></i>Users
                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endif
                        {{-- Authentication Menu  --}}
                    </ul>
                </div>
            </div>
        </section>
        <div class="sidebar-footer">
            <a href="{{ route('backend.settings') }}" class="link" data-bs-toggle="tooltip"
                title="System Info"><span class="icon-Settings-2"></span></a>
            <a href="#" class="link" data-bs-toggle="tooltip" title="Chat">
                <i class="icon-Chat"><span class="path1"></span><span class="path2"></span></i></a>
            <a class="link" href="{{ route('logout') }}" data-bs-toggle="tooltip" title="Logout"
                onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <span class="icon-Lock-overturning"><span class="path1"></span><span
                        class="path2"></span></span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </aside>
</div>
