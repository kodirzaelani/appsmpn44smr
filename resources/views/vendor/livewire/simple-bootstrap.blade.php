<div class="mx-auto ">
    @if ($paginator->hasPages())
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></span>
                </li>
            @else
                @if (method_exists($paginator, 'getCursorName'))
                    <li class="page-item">
                        <button dusk="previousPage" type="button" class="page-link"
                            wire:click="setPage('{{ $paginator->previousCursor()->encode() }}','{{ $paginator->getCursorName() }}')"
                            wire:loading.attr="disabled" rel="prev"><i class="fa fa-arrow-circle-left"
                                aria-hidden="true"></i></button>
                    </li>
                @else
                    <li class="page-item">
                        <button type="button"
                            dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                            class="page-link" wire:click="previousPage('{{ $paginator->getPageName() }}')"
                            wire:loading.attr="disabled" rel="prev"><i class="fa fa-arrow-circle-left"
                                aria-hidden="true"></i></button>
                    </li>
                @endif
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                @if (method_exists($paginator, 'getCursorName'))
                    <li class="page-item">
                        <button dusk="nextPage" type="button" class="page-link ms-10"
                            wire:click="setPage('{{ $paginator->nextCursor()->encode() }}','{{ $paginator->getCursorName() }}')"
                            wire:loading.attr="disabled" rel="next"><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i></button>
                    </li>
                @else
                    <li class="page-item">
                        <button type="button"
                            dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                            class="page-link ms-10" wire:click="nextPage('{{ $paginator->getPageName() }}')"
                            wire:loading.attr="disabled" rel="next"><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i></button>
                    </li>
                @endif
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link ms-10"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></span>
                </li>
            @endif
            <li class="page-item">
                <a href="#" class="btn btn-default btn-sm ms-10">
                    Selengkapnya
                </a>
            </li>
        </ul>
    @endif
</div>
