@extends('admin.master')

@section('title', __('keywords.edit_service'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.edit_service') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.services.update', ['service' => $service]) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title">{{ __('keywords.title') }}</label>
                                    <input type="text" name="title" class="form-control"
                                        placeholder="{{ __('keywords.title') }}" value="{{ $service->title }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="icon">{{ __('keywords.icon') }}</label>
                                    <input type="text" name="icon" class="form-control"
                                        placeholder="{{ __('keywords.icon') }}" value="{{ $service->icon }}">
                                    @error('icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label for="description">{{ __('keywords.description') }}</label>
                                    <textarea name="description" class="form-control" placeholder="{{ __('keywords.description') }}">{{ $service->description }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary btn-sm mt-2">{{ __('keywords.submit') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
