@extends('master')
@section('content')
    <div class="container" style="margin-top:50px">
        <div class="row">
            <h2>Fast Track</h2>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="text-decoration-none" href="{{ url("/overview") }}">
                        <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab"  aria-controls="v-pills-home" aria-selected="false">Overview</button>
                    </a>
                    <a class="text-decoration-none" href="{{ url("/companies") }}">
                        <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Companies</button>
                    </a>
                    <a class="text-decoration-none" href="{{ url("") }}">
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Reports</button>
                    </a>
                    <a class="text-decoration-none" href="{{ url("") }}">
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" href ="{{ url('/') }}" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
                    </a>
                </div>
                {{--                <div class="tab-content" id="v-pills-tabContent">--}}
                {{--                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">...</div>--}}
                {{--                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>--}}
                {{--                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>--}}
                {{--                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>--}}
                {{--                </div>--}}
               </div>
            </div>
            <div class="col-9 bg-light" style="text-align:right" >
                <div class="container">
                    <div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"><span class="bi bi-plus-circle"></span>Onboard new Company</button>
                    </div>

                    <div class="modal" id="myModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h5 class="modal-title w-100">Onboard new Company</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form style="padding: 10px">
                                        <div class="row mb-4">
                                          <div class="col">
                                            <div class="form-outline">
                                              <label class="form-label" for="form6Example1">Organization Name</label>
                                              <input type="text" id="form6Example1" class="form-control" />
                                            </div>
                                          </div>
                                          <div class="col">
                                            <div class="form-outline">
                                              <label class="form-label" for="form6Example2">Website</label>
                                              <input type="text" id="form6Example2" class="form-control" />      
                                            </div>
                                          </div>
                                        </div>
                                        
                                          <div class="row mb-4">
                                          <div class="col">
                                            <div class="form-outline">
                                              <label class="form-label" for="form6Example1">Business Type</label>
                                              <input type="text" id="form6Example1" class="form-control" />
                                            </div>
                                          </div>
                                          <div class="col">
                                            <div class="form-outline">
                                              <label class="form-label" for="form6Example2">Business Logo</label>
                                              <input type="text" id="form6Example2" class="form-control" />      
                                            </div>
                                          </div>
                                        </div>
                                        
                                          <div class="row mb-4">
                                          <div class="col">
                                            <div class="form-outline">
                                              <label class="form-label" for="form6Example1">Name</label>
                                              <input type="text" id="form6Example1" class="form-control" />
                                            </div>
                                          </div>
                                          <div class="col">
                                            <div class="form-outline">
                                              <label class="form-label" for="form6Example2">Email</label>
                                              <input type="text" id="form6Example2" class="form-control" />      
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                           <label class="form-label" for="form6Example5">Contact Number</label>
                                          <input type="email" id="form6Example5" class="form-control" />
                                        </div>
                                        <div class="form-outline mb-4">
                                           <label class="form-label" for="form6Example7">Address</label>
                                           <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                                          
                                        </div>
                                        <!-- Submit button -->
                                        {{-- <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button> --}}
                                      </form>
                                </div>
                                <div class="modal-footer" >
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-primary" type="button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" style="text-align:left">
                                    <input type="text" placeholder="Search.." name="search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                                <div class="card-body">

                                    <table class="table">
                                        <thead >
                                        <tr>
                                            <th>ID</th>
                                            <th>Company Name</th>
                                            <th>Website</th>
                                            <th>Phone</th>
                                            <th>Logo</th>
                                            <th>Company Details</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {{--                            @foreach ($student as $item)--}}
                                        {{--                                <tr>--}}
                                        {{--                                    <td>{{ $item->id }}</td>--}}
                                        {{--                                    <td>{{ $item->name }}</td>--}}
                                        {{--                                    <td>{{ $item->email }}</td>--}}
                                        {{--                                    <td>{{ $item->course }}</td>--}}
                                        {{--                                    <td>{{ $item->section }}</td>--}}
                                        {{--                                    <td>--}}
                                        {{--                                        <a href="" class="btn btn-primary btn-sm">Edit</a>--}}
                                        {{--                                    </td>--}}
                                        {{--                                    <td>--}}
                                        {{--                                        <a href="" class="btn btn-danger btn-sm">Delete</a>--}}
                                        {{--                                    </td>--}}
                                        {{--                                </tr>--}}
                                        {{--                            @endforeach--}}
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            </div>


    </div>
@endsection
