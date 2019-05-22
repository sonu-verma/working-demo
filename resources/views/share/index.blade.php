@extends('layouts.app')

@section('content')

    <style>
        .uper {
            margin-top: 40px;
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card uper">
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div><br />
                    @endif
                    <div class="card-header">
                              Stock List

                                <a href="{{ route('shares.create')}}" class="btn btn-success pull-right" style="margin-left: 81%;">Add</a>

                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Stock Name</td>
                                <td>Stock Price</td>
                                <td>Stock Quantity</td>
                                <td colspan="2">Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($shares) > 0)
                            @foreach($shares as $share)
                                <tr>
                                    <td>{{$share->id}}</td>
                                    <td>{{$share->share_name}}</td>
                                    <td>{{$share->share_price}}</td>
                                    <td>{{$share->share_qty}}</td>
                                    <td><a href="{{ route('shares.edit',$share->id)}}" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        <form action="{{ route('shares.destroy', $share->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                                @else
                                <tr>
                                    <td colspan="6" class="align-center">No data found.</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

