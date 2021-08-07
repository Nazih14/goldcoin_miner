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
                <li class="breadcrumb-item active" aria-current="page">{{$type}}</li>
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
                <input type="hidden" name="id" value="{{ isset($data) ? $data->id : '' }}">
            @endif

            @csrf
                @include('errors.alert')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div>
                            <label for="subject">Subject</label>
                            <input class="form-control" value="{{ isset($data) ? $data->subject : '' }}" id="subject" name="subject" type="text" placeholder="Enter your subject" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="user">Members</label>
                        <select class="form-select mb-0" id="user"  name="user_id" required aria-label="user select">
                            <option disabled>Select Member</option>
                            @foreach ($users as $u)
                                <option {{ isset($data) && $data->user_id==$u->id  ? 'selected'  : '' }} value="{{$u->id}}">{{$u->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input class="form-control" id="price" name="price" value="{{ isset($data) ? $data->price : '' }}" type="number" placeholder="price" required>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <label for="time">Time Transactions</label>
                        <div class="input-group">
                            <input class="form-control" id="time" name="time" type="datetime-local" value="{{  isset($data) ? date('Y-m-d\TH:i:s', strtotime($data->time)) : null }}" required>                                               
                         </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status_transaction">Status Transactions</label>
                        <select class="form-select mb-0" id="status_transaction" name="status" required aria-label="Status Transactions ">
                            <option disabled>Status Transactions</option>
                            <option {{ isset($data) && $data->status == "UNPAID" ? 'selected'  : '' }} value="UNPAID">UNPAID</option>
                            <option {{ isset($data) && $data->status == "PAID" ? 'selected'  : '' }} value="PAID">PAID</option>
                            <option {{ isset($data) && $data->status == "CLOSE" ? 'selected'  : '' }} value="CLOSE">CLOSE</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="4">{{ isset($data) ? $data->description : '' }}</textarea>
                        </div>
                    </div>
                </div>
                <h2 class="h5 my-4">Image</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="filePhoto" class="form-label">Upload Image Transactions</label>
                            <input class="form-control" type="file" name="image" id="filePhoto">
                        </div>
                    </div>

                    @if (isset($data) ? $data->image : '')
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="filePhoto" class="form-label">Image Transactions</label><br>
                            <a href="{{ url($data->image) }}" target="_blank"><img src="{{ url($data->image) }}" style="width:200px"></a>
                        </div>
                    </div>                        
                    @endif

                </div>
                <div class="mt-3">
                    <button class="btn btn-primary mt-2 animate-up-2" type="submit">Save all</button>
                    <a class="btn btn-warning mt-2 animate-up-2" href="/admin/transactions">Back</a>
                </div>
            </form>
        </div>
    </div>
   
</div>
@endsection