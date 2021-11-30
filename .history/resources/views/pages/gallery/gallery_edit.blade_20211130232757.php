@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('This is your profile page. You can see the progress you\'ve made with your work and manage your projects or assigned tasks'),
        'class' => 'col-lg-7'
    ])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('Add new Gallery') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{url('gallery-edit/'.$gallery[0]->id)}}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Gallery Information') }}</h6>
                            
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <div class="pl-lg-4">
                                {{-- Title --}}
                                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Title') }}</label>
                                    <input type="text" name="title" id="input-title" value="{{ $gallery[0]->title }}" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Title') }}" autofocus>

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                {{-- Chinese Title --}}
                                <div class="form-group{{ $errors->has('chinese_title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-chinese_title">{{ __('Chinese Title') }}</label>
                                    <input type="text" name="chinese_title" id="input-chinese_title" value="{{ $gallery[0]->chinese_title }}" class="form-control form-control-alternative{{ $errors->has('chinese_title') ? ' is-invalid' : '' }}" placeholder="{{ __('Chinese Title') }}">

                                    @if ($errors->has('chinese_title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('chinese_title) }}</strong>
                                        </span>
                                        
                                    @endif
                                </div>

                                {{-- Image --}}
                                <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-image">{{ __('Image') }}</label>
                                    <input type="file" name="image" id="input-image" value="{{ $gallery[0]->image }}" class="form-control form-control-alternative{{ $errors->has('image') ? ' is-invalid' : '' }}" placeholder="{{ __('Image') }}"> 
                                    <input hidden type="text" name="old-image" id="old-image" value="{{ $gallery[0]->image }}" class="form-control form-control-alternative{{ $errors->has('old-image') ? ' is-invalid' : '' }}" placeholder="{{ __('Image') }}"> 
                                    <br>
                                    <img src={{ asset('images/'.$gallery[0]->image) }} alt="No Image!" style="width:100%; height:300px;" class="rounded">

                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                {{-- Status --}}
                                <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-status">{{ __('Status') }}</label>
                                    <span class="clearfix"></span>
                                    
                                    @if($gal->status == 1)
                                    <td class="text-center">
                                        <label class="custom-toggle" name="status" id="input-status" >
                                            <input type="checkbox" checked>
                                            <span class="custom-toggle-slider rounded-circle"></span>
                                        </label>
                                    </td>
                                    @elseif($gal->status == 0)
                                    <td class="text-center">
                                        <label class="custom-toggle">
                                            <input type="checkbox" name="status" id="input-status" >
                                            <span class="custom-toggle-slider rounded-circle"></span>
                                        </label>
                                    </td>
                                    @endif
                                    
                                    @if ($errors->has('status'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                        {{-- <hr class="my-4" />
                        <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Password') }}</h6>

                            @if (session('password_status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('password_status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-current-password">{{ __('Current Password') }}</label>
                                    <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" required>
                                    
                                    @if ($errors->has('old_password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('old_password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('New Password') }}</label>
                                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>
                                    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirm New Password') }}" value="" required>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Change password') }}</button>
                                </div>
                            </div>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection
