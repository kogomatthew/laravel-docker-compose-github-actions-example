@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Contacts</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Invites</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->invites_count }}</td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection