@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Session::has('error'))
                    <div class="alert alert-success" role="alert">
                        {{ session('error') }}
                    @endif
                        <span class="wlcm">{{'Hello there ! 👋 ' . auth()->user()->name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
