@extends('layouts.app')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Buat Post</h1>
            </div>
        </section>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Create</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('footer_columns.store') }}" method="post">
                        @csrf
                        @include('pages.admin.footer_columns._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
