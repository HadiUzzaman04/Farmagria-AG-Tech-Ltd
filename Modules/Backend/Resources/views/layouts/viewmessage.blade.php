@extends('layouts.app')

@section('content')

<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                        <h4> {{ $data->name}}</h4>
                    </div>
                </div>
                <div class="sidebar-item recent-posts">
                    <div class="content">
                        <h4> {{ $data->email}}</h4>
                    </div>
                </div>
                <div class="sidebar-item recent-posts">
                    <div class="content">
                        <h4> {{ $data->message}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection