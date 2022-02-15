@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <center><div class="card-header"><b>Penjualan Alat Olahraga</b></div></center>
                <div class="card-header">Admin Page</div>
                <div class="card-body">
                    Welcome back <strong> {{ Auth::user()->name }} </strong><a href="{{url('/')}}">
                        <p>Shop</p>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
