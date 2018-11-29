@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Offers Table</div>

                <div class="card-body">
                <a href="{{route('admin.offers.create')}}" class="btn btn-sm btn-success mb-2">Add new</a>
                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <th></th>
                        </tr>
                        @forelse ($offers as $offer)
                            <tr>
                                <td>{{ $offer -> title}}</td>
                                <td><a href="{{route('admin.offers.edit', $offer->id)}}" class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{route('admin.offers.destroy', $offer->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" value="Delete" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                    </form>
                                </td>
                              
                            </tr>
                        @empty
                        <tr>
                            <td colspan="2">
                                <p>No offers yet</p>
                            </td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
