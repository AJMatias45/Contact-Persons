@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact Number</th>
                    <th>Email Address</th>
                </tr>
                @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->getID }}</td>
                    <td>{{ $contact->setCompleteName() }}</td>
                    <td>{{ $contact->setContactNumber }}</td>
                    <td>{{ $contact->setEmail }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>