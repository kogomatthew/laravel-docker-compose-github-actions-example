@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Contacts with invite count</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Number Invites</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td style="color:blue;">{{ $contact->invites_count }}</td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection