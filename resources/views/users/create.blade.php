@extends('layouts.app')
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
        .error{
            color: red;
        }
        .test{
            color: red;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card uper">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('shares.store') }}">
                            <div class="form-group">
                                @csrf
                                <label for="name">Share Name:</label>
                                <input type="text" class="form-control" name="share_name"/>
                                @if ($errors->has('share_name'))
                                    <span class="error">{{ $errors->first('share_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="price">Share Price :</label>
                                <input type="text" class="form-control" name="share_price"/>
                                @if ($errors->has('share_price'))
                                    <span class="error">{{ $errors->first('share_price') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="quantity">Share Quantity:</label>
                                <input type="text" class="form-control" name="share_qty"/>
                                @if ($errors->has('share_qty'))
                                    <span class="error">{{ $errors->first('share_qty') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection