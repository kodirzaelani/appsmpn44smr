<div>
    {{-- @section('title', 'List of Agenda') --}}
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">@yield('title')</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"><i
                                        class="fa fa-home"><span class="path1"></span><span
                                            class="path2"></span></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">List Widgets</li>
                            {{-- <li class="breadcrumb-item active" aria-current="page"></li> --}}
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h4 class="box-title">@yield('title')</h4>
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

                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                                @if ($statusUpdate == false)
                                    @livewire('template.backend.nusantara.widget.create')
                                @elseif ($statusUpdate == true)
                                    @livewire('template.backend.nusantara.widget.widgetedit')
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                                @if ($datawidgetall->count())
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <tbody>
                                                <tr>
                                                    <th width="4%" scope="col">#</th>

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
                                                    <th scope="col" width="20%" class="text-center">Action</th>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                @foreach ($datawidgetall as $no => $item)
                                                    <tr class="@if ($this->isChecked($item->id)) table-primary @endif">
                                                        <th class="text-right" scope="row">
                                                            {{ $no + $datawidgetall->firstItem() }}</th>

                                                        <td width="10%">
                                                            <img class="w-80 rounded"
                                                                src="{{ $item->imageThumbUrl ? $item->imageThumbUrl : '/assets/images/no_image.png' }}"
                                                                alt="...">
                                                        </td>
                                                        <td>
                                                            {{ !empty($item->title) ? $item->title : '' }}<br />
                                                        </td>
                                                        <td>
                                                            {!! $item->typewidgetlabel !!}
                                                        </td>
                                                        <td width="10%">
                                                            {!! $item->positionlabel !!}
                                                        </td>
                                                        <td width="10%">
                                                            {!! $item->statuslabel !!}
                                                        </td>
                                                        <td>
                                                            {{ TanggalID('j M Y', $item->created_at) }}
                                                        </td>
                                                        <td class="text-center align-midle">
                                                            @if ($item->status == 1)
                                                                <button
                                                                    wire:click="selectItem('{{ $item->id }}', 'draft')"
                                                                    class="btn btn-xs btn-success"
                                                                    title="Change to Draft"><i
                                                                        class="fa fa-eye"></i></button>
                                                            @else
                                                                <button
                                                                    wire:click="selectItem('{{ $item->id }}', 'publish')"
                                                                    class="btn btn-xs btn-default"
                                                                    title="Change to Publish"><i
                                                                        class="fa fa-eye"></i></button>
                                                            @endif
                                                            <button
                                                                wire:click="selectItem('{{ $item->id }}', 'edit')"
                                                                class="btn btn-xs btn-warning" title="Edit"><i
                                                                    class="fa fa-edit    "></i></button>
                                                            <button
                                                                wire:click="selectItem('{{ $item->id }}' , 'delete')"
                                                                class="btn btn-xs btn-danger mx-1 my-1"
                                                                title="Delete"><i class="fa fa-trash    "></i></button>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mt-3 row">
                                        <div class="col-xl-7 col-md-7 col-lg-7 col-12 ">
                                            {{ $datawidgetall->links() }}
                                        </div>
                                        <div class="col-xl-5 col-md-5 col-lg-5 col-12 text-center">
                                            Page : {{ $datawidgetall->currentPage() }} | Show
                                            {{ $datawidgetall->count() }} data of {{ $datawidgetall->total() }}
                                        </div>
                                    </div>
                                @else
                                    <hr>
                                    <h2 style="color: red" class="text-center">@yield('title') not available</h2>
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
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
        <div class="modal center-modal fade" id="modalFormRemoveImage" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Remove Image Item</h5>
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
                        <button wire:click="remove_image" class="btn btn-primary float-end">Yes</button>
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
        {{-- Modal Export Excel --}}
        <div class="modal center-modal fade" id="modalFormExportExcel" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Export Selected Item</h5>
                        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                    </div>
                    <div class="modal-body">
                        <p>
                        <h3>Are you sure you want to Export Spreadsheet these Selected Records?</h3>
                        </p>
                    </div>
                    <div class="modal-footer modal-footer-uniform">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary float-end">Yes</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Export Excel --}}
        {{-- Modal Export PDF --}}
        <div class="modal center-modal fade" id="modalFormExportPDF" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Export Selected Item</h5>
                        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                    </div>
                    <div class="modal-body">
                        <p>
                        <h3>Are you sure you want to Export PDF these Selected Records?</h3>
                        </p>
                    </div>
                    <div class="modal-footer modal-footer-uniform">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary float-end">Yes</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Export PDF --}}
    </section>
    @push('scripts')
        <script>
            // Sweet Alert
            window.addEventListener('swal:modal', event => {
                swal({
                    title: event.detail.title,
                    text: event.detail.text,
                    type: event.detail.icon,
                });
            });

            //  Open modal restore
            window.addEventListener('openmodalFormRemoveImage', event => {
                $("#modalFormRemoveImage").modal('show');
            });

            //  Close modal restore
            window.addEventListener('closemodalFormRemoveImage', event => {
                $("#modalFormRemoveImage").modal('hide');
            });
        </script>
    @endpush
</div>
