@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View User') }}</div>

                <div class="card-body">

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-0">
                            <span>
                                    <a href="{{ route('admin.user.show', ['id' => $user->id]) }}">
                                        {{ __('Refresh') }}
                                    </a>
                            </span>
                            &nbsp;&nbsp;&nbsp;
                            <span>
                                <a href="{{ route('admin.user.create') }}">
                                    {{ __('Create User') }}
                                </a>
                            </span>
                            &nbsp;&nbsp;&nbsp;
                            <span>
                                <a href="{{ route('admin.users.list') }}">
                                    {{ __('View Users') }}
                                </a>
                            </span>

                        </div>
                    </div>
                    <hr>

                    <!-- for success or failure message -->
                    @include('alerts.messages')

                    @if(count(array($user)) > 0)
                        <form>
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" disabled="disabled" value="{{$user->firstname}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" disabled="disabled" value="{{$user->lastname}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

{{--                            <div class="form-group row">--}}
{{--                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="name" type="text" disabled="disabled" value="{{$employee->last_name}}" class="form-control @error('name') is-invalid @enderror" name="lname" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                    @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Department Name') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="name" type="text" disabled="disabled" value="{{$employee->department->department_name}}" class="form-control @error('name') is-invalid @enderror" name="lname" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                    @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" disabled="disabled" value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

{{--                            <div class="form-group row">--}}
{{--                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="phone" type="text" disabled="disabled" value="{{$employee->phone}}" class="form-control @error('phone') is-invalid @enderror" name="phone" required>--}}

{{--                                    @error('phone')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Email Verified At') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" disabled="disabled" value="{{$convertcreateddate = \App\Http\Helpers\ConvertDateToTimeStamp::convertDateToTimeStamp($user->email_verified_at)}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" disabled="disabled" value="{{$user->role}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" disabled="disabled" value="{{$user->status}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Created At') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" disabled="disabled" value="{{$convertcreateddate = \App\Http\Helpers\ConvertDateToTimeStamp::convertDateToTimeStamp($user->created_at)}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Updated At') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" disabled="disabled" value="{{$convertupdateddate = \App\Http\Helpers\ConvertDateToTimeStamp::convertDateToTimeStamp($user->updated_at)}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </form>
                    @else
                        <p class="mt-5 mb-5">No Results</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
