@extends('layouts.app')

@section('page-title', 'Desa')
@section('content-title', 'Desa')

@push('style')
@endpush

@section('breadcrumb')

    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <li class="breadcrumb-item text-muted">
            <a href="/" class="text-muted text-hover-primary">Home</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-muted">Desa</li>
    </ul>
@endsection

@section('content')
    <div id="kt_app_content_container" class="app-container container-xxl">
        <div class="card">
            <div class="card-body p-0">
                <div class="card-px py-10">
                    @livewire('desa.data-table')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
    @livewire('desa.create')
    @livewire('desa.edit')
    @livewire('desa.detail')
    @livewire('desa.delete')
@endsection

@push('js')
    <script>
        window.addEventListener('close-modal', event =>{
            $('#createModal').modal('hide');
            $('#editModal').modal('hide');
            $('#detailModal').modal('hide');
            $('#deleteModal').modal('hide');
        });

        window.addEventListener('show-detail-modal', event =>{
            $('#detailModal').modal('show');
        });
        window.addEventListener('show-delete-modal', event =>{
            $('#deleteModal').modal('show');
        });
    </script>
@endpush
