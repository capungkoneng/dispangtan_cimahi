@extends('layouts.error')

@section('title', '403')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="page-error">
        <div class="page-inner">
            <h1>403</h1>
            <div class="page-description">
                {{ $exception }}
            </div>
            <div class="page-search">

                <div class="mt-3">
                    <a href="javascript:void(0);" onclick="window.history.back();" class="btn btn-primary rounded-pill">Kembali
                        Kehalaman Sebelumnya</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
