
@extends('backend.layouts.master')

@section('title')
Stuff Create - Admin Panel
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .form-check-label {
        text-transform: capitalize;
    }
</style>
@endsection


@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Stuff Create</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.stuff.index') }}">All Stuff</a></li>
                    <li><span>Create Stuff</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            @include('backend.layouts.partials.logout')
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create New Stuff</h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{ route('admin.stuff.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="text" name="phone" class="form-control" minlength="10" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Join date</label>
                                    <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Salary</label>
                                    <input type="text" name="salary" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Position</label>
                                    <input type="text" name="position" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  </div>
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Contract time</label>
                            <input type="text" name="contract" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Address</label>
                            <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                          {{-- <div class="form-group">
                                <label for="exampleFormControlFile1">Image</label>
                                <input type="file" name="image" >
                            </div> --}}
                            <div class="form-group mt-3">
                        <label for="formGroupExampleInput2">Image</label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1"><br>
                        
                      </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- data table end -->
        
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>
@endsection