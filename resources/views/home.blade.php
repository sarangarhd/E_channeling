@extends('layouts.app')
@if(session('messege'))
<div class="alert alert-success" role="alert">
    {{session('done')}}
</div>
@endif


@section('content')


<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Make Appointment</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Add New User</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Set New Admin</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Approve Appointment</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">



                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card" style="margin-top:50px;">
                                    <div class="card-header">{{ __('Make Appointment') }}</div>

                                    <div class="card-body">
                                        <form method="POST" action="/Appointment">
                                            @csrf

                                            <div class="row">
                                                <label for="name" class="col-md-4 col-form-label text-md-end" style="margin-top:10px;">{{ __('Name') }}</label>

                                                <div class="col-md-6" style="margin-top:10px;">
                                                    <input id="name" type="text" class="form-control" name="Name">

                                                </div>



                                                <label for="name" class="col-md-4 col-form-label text-md-end"  style="margin-top:10px;">{{ __('Date') }}</label>
                                                <div class="col-md-6 " style="margin-top:10px;">

                                                    <input id="date" type="date" class="form-control " name="date">

                                                </div>


                                                <label for="time" class="col-md-4 col-form-label text-md-end" style="margin-top:10px;">{{ __('Time') }}</label>

                                                <div class="col-md-6" style="margin-top:10px;">

                                                    <input id="name" type="time" class="form-control " name="time">
                                                    <div class="col-md-6" style="margin-top: 10px;">
                                                    <input type="submit" id="submit"   class="btn btn-primary"></a>
                                                </div>

                                                </div>


                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>







                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                </div>
            </div>
        </div>
    </div>
    @endsection