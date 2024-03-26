@extends('admin.master')

@section('title', __('keywords.add_new_feature'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.add_new_feature') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.features.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <x-form-label field="title"></x-form-label>
                                    <input type="text" name="title" class="form-control"
                                        placeholder="{{ __('keywords.title') }}">
                                    <x-validation-error field="title"></x-validation-error>
                                </div>

                                <div class="col-md-6">
                                    <x-form-label field="icon"></x-form-label>
                                    <input type="text" name="icon" class="form-control"
                                        placeholder="{{ __('keywords.icon') }}">
                                    <x-validation-error field="icon"></x-validation-error>
                                </div>

                                <div class="col-md-12 mt-2">
                                    <x-form-label field="description"></x-form-label>
                                    <textarea name="description" class="form-control" placeholder="{{ __('keywords.description') }}"></textarea>
                                    <x-validation-error field="description"></x-validation-error>
                                </div>

                            </div>

                            <x-submit-button></x-submit-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
