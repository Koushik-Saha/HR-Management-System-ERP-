@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard')

@section('content')
    {{-- Dashboard Analytics Start --}}
    <section id="dashboard-analytics">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 offset-2">
                <div class="card bg-analytics text-white">
                    <div class="card-content">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/elements/decore-left.png') }}" class="img-left" alt="card-img-left">
                            <img src="{{ asset('images/elements/decore-right.png')}}" class="img-right" alt="card-img-right">
                            <div class="avatar avatar-xl bg-primary shadow mt-0">
                                <div class="avatar-content">
                                    <i class="feather icon-award white font-large-1"></i>
                                </div>
                            </div>
                            <div class="text-center">
                                <h1 class="mb-2 text-white">Congratulations {{ \Illuminate\Support\Facades\Auth::user()->name }}</h1>
                                <p class="m-auto w-75">Welcome to my <strong>Dashboard</strong>. </p>
                                <p class="m-auto w-75">"Perfection is achieved not when there is nothing more to add, but rather when there is nothing more to take away."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Analytics end -->
@endsection

