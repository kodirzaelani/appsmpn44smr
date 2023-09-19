<div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">Kategori Agenda</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i
                                        class="fa fa-home"><span class="path1"></span><span
                                            class="path2"></span></i></a></li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('backend.pengajiancategories.index') }}">Kategori Agenda</a></li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h4 class="box-title">Kategori</h4>
                    </div>
                    <div class="box-body">
                        <div class="row mb-2">
                            <div class="col-xl-2 col-lg-2 col-md-2 col-12 mb-2">
                                <select wire:model="paginate" name="" id=""
                                    class="w-auto form-control-sm custom-select">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <div class="col-lg-5 col-md-5 col-12 mb-2">

                            </div>
                            <div class="col-md-5 col-lg-5 col-12 mb-2 text-right ">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="search" wire:model.debounce.500ms="search" class="form-control"
                                            wire:keydown.escape="resetSearch" wire:keydown.tab="resetSearch"
                                            class="form-control float-right" placeholder="Search by ...">
                                        <span class="input-group-text"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8 col-md-8 col-lg-8 col-12">
                                @if ($datapengajiancategory->count())
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <tbody>
                                                <tr>
                                                    <th width="4%" scope="col">#</th>

                                                    <th scope="col" width="20%" class="text-center">Image</th>
                                                    @foreach ($headersTable as $key => $value)
                                                        <th scope="col"
                                                            wire:click.prevent="sortBy('{{ $key }}')"
                                                            style="cursor: pointer">
                                                            {{ $value }}
                                                            @if ($sortColumn == $key)
                                                                <span>{!! $sortDirection == 'asc' ? '&#8659' : '&#8657' !!}</span>
                                                            @endif
                                                        </th>
                                                    @endforeach
                                                    <th scope="col" width="20%" class="text-center">Pengajian
                                                        Count</th>
                                                    <th scope="col" width="20%" class="text-center">Action</th>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                @foreach ($datapengajiancategory as $no => $item)
                                                    <tr class="@if ($this->isChecked($item->id)) table-primary @endif">
                                                        <th class="text-right" scope="row">
                                                            {{ $no + $datapengajiancategory->firstItem() }}</th>

                                                        <td width="10%">
                                                            <img class="w-80 rounded"
                                                                src="{{ $item->imageThumbUrl ? $item->imageThumbUrl : '/assets/images/no_image.png' }}"
                                                                alt="...">
                                                        </td>
                                                        <td>
                                                            <a title="Show" href="#" target="_blank"
                                                                style="text-decoration: none; ">
                                                                {{ !empty($item->title) ? $item->title : '' }}
                                                            </a>
                                                        </td>
                                                        <td class="text-right">
                                                            {{ $item->pengajians->count() }}
                                                        </td>
                                                        <td class="text-center align-midle">
                                                            <button
                                                                wire:click="selectItem('{{ $item->id }}', 'edit')"
                                                                class="btn btn-sm btn-warning" title="Edit"><i
                                                                    class="fa fa-edit    "></i></button>
                                                            @if ($item->masterstatus == config('cms.default_masterpengajiancategory'))
                                                                <button class="btn btn-sm btn-danger mx-1 my-1 disabled"
                                                                    title="Delete"><i
                                                                        class="fa fa-trash    "></i></button>
                                                            @else
                                                                <button
                                                                    wire:click="selectItem('{{ $item->id }}' , 'delete')"
                                                                    class="btn btn-xs btn-danger mx-1 my-1"
                                                                    title="Delete"><i
                                                                        class="fa fa-trash    "></i></button>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mt-3 row">
                                        <div class="col-xl-7 col-md-7 col-lg-7 col-12 ">
                                            {{ $datapengajiancategory->links() }}
                                        </div>
                                        <div class="col-xl-5 col-md-5 col-lg-5 col-12 text-center">
                                            Page : {{ $datapengajiancategory->currentPage() }} | Show
                                            {{ $datapengajiancategory->count() }} data of
                                            {{ $datapengajiancategory->total() }}
                                        </div>
                                    </div>
                                @else
                                    <hr>
                                    <h2 style="color: red" class="text-center">@yield('title') not available</h2>
                                @endif
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                @if ($statusUpdate == true)
                                    @livewire('template.backend.nusantara.pengajian.pengajiancategory.pengajiancategoryedit')
                                @else
                                    @livewire('template.backend.nusantara.pengajian.pengajiancategory.pengajiancategorycreate')
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Delete --}}
        <div class="modal center-modal fade" id="modalFormDelete" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Item</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- Selected Item {{ $selectedItem }} --}}
                        <p>
                        <h3>Do you wish to continue?</h3>
                        </p>
                    </div>
                    <div class="modal-footer modal-footer-uniform">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button wire:click="delete" class="btn btn-primary float-end">Yes</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal Delete --}}
        {{-- Modal Delete All --}}
        <div class="modal center-modal fade" id="modalFormDeleteAll" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Selected Item</h5>
                        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                    </div>
                    <div class="modal-body">
                        <p>
                        <h3>Are you sure you want to delete these Selected Records?</h3>
                        </p>
                    </div>
                    <div class="modal-footer modal-footer-uniform">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button wire:click="deleteRecords()" class="btn btn-primary float-end">Yes</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Delete All --}}

    </section>
    @push('scripts')
        <script>
            // Sweet Alert
            window.addEventListener('swal:modal', event => {
                swal({
                    title: event.detail.title,
                    text: event.detail.text,
                    type: event.detail.type,
                });
            });
            window.addEventListener('swal:modaldelete', event => {
                swal({
                    type: event.detail.type,
                    title: event.detail.title,
                    text: event.detail.text,
                    timer: event.detail.timer,

                });
            });
        </script>
    @endpush
</div>