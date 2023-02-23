@extends('layouts.app')

@include('patials.table_styles')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Products') }}</div>
                <div class="card-body">

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-0">
                            <span>
                                <a href="{{ route('admin.products.list') }}">
                                    {{ __('Refresh') }}
                                </a>
                            </span>
                            &nbsp;&nbsp;&nbsp;
                            <span>
                                <a href="{{ route('admin.product.create') }}">
                                    {{ __('Create Product') }}
                                </a>
                            </span>
                        </div>
                    </div>
                    <hr>

                    <!-- for success or failure message -->
                    @include('alerts.messages')

                    <center>

                        @if(is_countable($products) && count($products) > 0)
                            <table>
                                <thead>
                                    <tr>
                                        <th scope="col">S.N</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
{{--                                        <th scope="col">Price</th>--}}
                                        <th scope="col">Description</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td data-label="Account">{{ $product->id }}</td>
                                            <td data-label="Account">{{ $product->name }}</td>
                                            <td data-label="Due Date">{{ $product->price }}</td>
{{--                                            <td data-label="Due Date">$ {{ $plan->price }}</td>--}}
                                            <td data-label="Amount" class="text-left">{{ $product->description1 }}</td>
                                            <td data-label="Period">

                                                <span>
                                                      <a class="btn btn-success btn-sm" href="{{route('admin.product.show', ['id' => $product->id])}}">
                                                          View
                                                      </a>
                                                </span>

                                                <span>
                                                      <a class="btn btn-warning btn-sm" href="{{route('admin.product.edit', ['id' => $product->id])}}">
                                                          Edit
                                                      </a>
                                                </span>

{{--                                                <span style="display: block; margin-bottom: 3px; margin-top: 3px;">--}}
{{--                                                    @if($user->status=='active')--}}
{{--                                                        <a href="{{route('admin.user.deactivate', ['id' => $user->id])}}">--}}
{{--                                                            <button class="btn btn-danger btn-sm text-info" title="Deactivate">Deactivate</button>--}}
{{--                                                        </a>--}}
{{--                                                        <form method="POST" action="{{ route('admin.user.deactivate', $user->id) }}">--}}
{{--                                                            @csrf--}}
{{--                                                            @method('PUT')--}}
{{--                                                            <button class="btn btn-danger btn-sm text-info" title="Deactivate">Deactivate</button>--}}
{{--                                                        </form>--}}
{{--                                                    @else--}}
{{--                                                        <form method="POST" action="{{ route('admin.user.activate', $user->id) }}">--}}
{{--                                                            @csrf--}}
{{--                                                            @method('PUT')--}}
{{--                                                            <button class="btn btn-danger btn-sm text-primary" title="Activate">Activate</button>--}}
{{--                                                        </form>--}}
{{--                                                        <a href="{{route('admin.user.activate', ['id' => $user->id])}}">--}}
{{--                                                            <button class="btn btn-danger btn-sm text-primary" title="Activate">Activate</button>--}}
{{--                                                        </a>--}}
{{--                                                    @endif--}}
{{--                                                </span>--}}

                                                <span>
                                                    <form action="{{route('admin.product.delete', ['id' => $product->id])}}" method="post">
                                                        @csrf
                                                        {{@method_field('delete')}}
                                                        <button class="btn btn-danger btn-sm" title="Delete">Delete</button>
                                                    </form>
                                                </span>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <p>{{ $products->links() }}</p>

                        @else
                            <p>No Results</p>
                        @endif

                    </center>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
