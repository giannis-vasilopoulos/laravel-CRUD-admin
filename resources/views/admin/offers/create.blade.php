@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new offer</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
            
                <div class="card-body">
                 <form method="POST" action="{{ route('admin.offers.store') }}">
                        @csrf
                        Title:
                        <input type="text" name="title" class="form-control mb-4"/>
                            <br>
                        <input type="submit" value="Submit" class="btn btn-primary"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
