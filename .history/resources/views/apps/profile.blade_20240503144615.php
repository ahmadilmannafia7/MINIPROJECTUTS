@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="DSC03897." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Profile</h5>
                        <p class="card-text">My name is Ahmad Ilman Nafia from Information System 2022 Telkom University Surabaya. My student number is 1204220026 from IS-05-03</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;

        }
    </style>
@endsection
@push('js-libraries')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endpush
@push('js')
    @vite('resources/js/charts.js')
@endpush
