@extends('layouts.app')
@section('content')
    
@endsection
@push('js-libraries')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endpush
@push('js')
    @vite('resources/js/charts.js')
@endpush
