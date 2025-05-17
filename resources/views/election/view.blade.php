@extends('layout.main-layout')
@section('title' , 'View Election :: $elction->election_name')
@section('content')
        <div class="container margin-left py-5">
            <div class="row">
                <div class="col-lg-12">
                        <h3 class="text-center">
                           Election Name:     {{ $election->election_name }}
                        </h3>
                </div>

                <div class="col-lg-4 text-center mt-4">
                    <h4 class="">Election Start Time : {{$election->start_time}}</h4>
                </div>
                <div class="col-lg-4 text-center mt-4">
                    <h4 class="">Election End Time : {{$election->end_time}}</h4>
                </div>
                <div class="col-lg-4 text-center mt-4" >
                    <h4 class="">Election Year : {{$election->election_year}}</h4>
                </div>
            </div>
        </div>
@endsection