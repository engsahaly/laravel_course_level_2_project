@extends('admin.master')

@section('title', __('keywords.testmonials'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.testmonials') }}</h2>

                    <div class="page-title-right">
                        <x-action-button href="{{ route('admin.testmonials.create') }}" type="create"></x-action-button>
                    </div>
                </div>

                <div class="card shadow">
                    <div class="card-body">

                        <x-success-alert></x-success-alert>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.name') }}</th>
                                    <th>{{ __('keywords.position') }}</th>
                                    <th width="10%">{{ __('keywords.image') }}</th>
                                    <th width="15%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($testmonials) > 0)
                                    @foreach ($testmonials as $key => $testmonial)
                                        <tr>
                                            <td>{{ $testmonials->firstItem() + $loop->index }}</td>
                                            <td>{{ $testmonial->name }}</td>
                                            <td>{{ $testmonial->position }}</td>
                                            <td>
                                                <img src="{{ asset("storage/testmonials/$testmonial->image") }}"
                                                    alt="#" width="50px">
                                            </td>
                                            <td>
                                                <x-action-button
                                                    href="{{ route('admin.testmonials.edit', ['testmonial' => $testmonial]) }}"
                                                    type="edit"></x-action-button>

                                                <x-action-button
                                                    href="{{ route('admin.testmonials.show', ['testmonial' => $testmonial]) }}"
                                                    type="show"></x-action-button>

                                                <x-delete-button
                                                    href="{{ route('admin.testmonials.destroy', ['testmonial' => $testmonial]) }}"
                                                    id="{{ $testmonial->id }}"></x-delete-button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>
                        {{ $testmonials->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
