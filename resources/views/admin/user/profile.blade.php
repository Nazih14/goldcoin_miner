@extends('admin.layouts.base')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
        <h2 class="h4">Profile</h2>
        {{-- <p class="mb-0">.</p> --}}
    </div>
</div>


<div class="row">
    <div class="col-12 col-xl-8">
        <div class="card card-body border-0 shadow mb-4">
            <h2 class="h5 mb-4">General information</h2>
            <form action="{{ route('user.update') }}" method="post" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            @csrf
                @include('errors.alert')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="name">Name</label>
                            <input class="form-control" value="{{$user->name}}" id="name" name="name" type="text" placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="gender">Gender</label>
                        <select class="form-select mb-0" id="gender" name="gender" required aria-label="Gender select example">
                            <option disabled>Gender</option>
                            <option {{$user->gender=='P' ? 'selected' : '' }} value="P">Female</option>
                            <option {{$user->gender=='L' ? 'selected' : '' }}  value="L">Male</option>
                        </select>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <label for="birthday">Birthday</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </span>
                            <input data-datepicker="" class="form-control" id="birthday" name="birthday" type="text"   value="{{ date("m/d/Y", strtotime($user->birthday)) }}" data-d="{{ $user->birthday }}" placeholder="mm/dd/yyyy" required>                                               
                         </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input class="form-control" id="phone" name="phone" value="{{$user->phone}}" type="number" placeholder="+6281337440222" required>
                        </div>
                    </div>
                </div>
                <h2 class="h5 my-4">Location</h2>
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" name="address" id="address" cols="30" rows="4">{{$user->address}}</textarea>
                        </div>
                    </div>
                </div>
                <h2 class="h5 my-4">Account</h2>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" value="{{$user->email}}" id="email" name="email" type="email" placeholder="name@company.com" required>
                            <input  name="id" type="hidden" value="{{$user->id}}" >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" id="password" name="password" type="password">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="password_confirmation">password_confirmation</label>
                            <input class="form-control" id="password_confirmation" name="password_confirmation" type="password">
                        </div>
                    </div>
                </div>
                <h2 class="h5 my-4">Image</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="filePhoto" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" name="photo" id="filePhoto">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="fileCover" class="form-label">Default file input example</label>
                        </div>
                        <input class="form-control" type="file" name="cover" id="fileCover">
                    </div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save all</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12 col-xl-4">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card shadow border-0 text-center p-0">
                    <div class="profile-cover rounded-top" data-background="{{  $user->cover_photo==null ? url('adminvolt/assets/img/profile-cover.jpg')  : url($user->cover_photo)}}"></div>
                    <div class="card-body pb-5">
                        <img src="{{  $user->photo==null ? url('adminvolt/assets/img/team/profile-picture-1.jpg') : url($user->photo)}}" class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                        <h4 class="h3">{{$user->name}}</h4>
                        {{-- <h5 class="fw-normal">Senior Software Engineer</h5> --}}
                        <p class="text-gray mb-4">{{$user->address}}</p>
                        <p class="text-gray mb-4">{{$user->email}}</p>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection