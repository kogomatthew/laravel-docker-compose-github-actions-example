@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Contact Details
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $contact->name }}</h5>
                        <p class="card-text">Email: {{ $contact->email }}</p>
                        <p class="card-text">Phone: {{ $contact->phone }}</p>
                        <p class="card-text">Address: {{ $contact->address }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection