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
                <li class="breadcrumb-item"><a href="/admin/transactions">Transactions</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add</li>
            </ol>
        </nav>
        <h2 class="h4">Profile</h2>
        {{-- <p class="mb-0">.</p> --}}
    </div>
</div>


<div class="row">
    <div class="col-12 col-xl-8">
        <div class="card card-body border-0 shadow mb-4">
            <h2 class="h5 mb-4">Form Transactions</h2>
            @if ($type=='create')
                <form action="{{ route('transactions.store') }}" method="post" enctype="multipart/form-data">
            @else
                <form action="{{ route('transactions.update') }}" method="post" enctype="multipart/form-data">
                {{ method_field('PUT') }}                
            @endif

            @csrf
                @include('errors.alert')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div>
                            <label for="subject">Subject</label>
                            <input class="form-control" value="" id="subject" name="subject" type="text" placeholder="Enter your subject" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="user">Members</label>
                        <select class="form-select mb-0" id="user" name="user_id" required aria-label="user select">
                            <option disabled>Select Member</option>
                            @foreach ($users as $u)
                                <option value="{{$u->id}}">{{$u->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input class="form-control" id="price" name="price" value="" type="number" placeholder="price" required>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <label for="time">Time Transactions</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </span>
                            <input class="form-control" id="time" name="time" type="datetime-local"   placeholder="mm/dd/yyyy" required>                                               
                         </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status_transaction">Status Transactions</label>
                        <select class="form-select mb-0" id="status_transaction" name="status" required aria-label="Status Transactions ">
                            <option disabled>Status Transactions</option>
                            <option value="UNPAID">UNPAID</option>
                            <option value="PAID">PAID</option>
                            <option value="CLOSE">CLOSE</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="4"></textarea>
                        </div>
                    </div>
                </div>
                <h2 class="h5 my-4">Image</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="filePhoto" class="form-label">Image Transactions</label>
                            <input class="form-control" type="file" name="image" id="filePhoto">
                        </div>
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
                    <div class="profile-cover rounded-top" data-background="{{ url('adminvolt/assets/img/profile-cover.jpg')  }}"></div>
                    <div class="card-body pb-5">
                        <img src="{{ url('adminvolt/assets/img/team/profile-picture-1.jpg') }}" class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                        <h4 class="h3"></h4>
                        {{-- <h5 class="fw-normal">Senior Software Engineer</h5> --}}
                        <p class="text-gray mb-4"></p>
                        <p class="text-gray mb-4"></p>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection