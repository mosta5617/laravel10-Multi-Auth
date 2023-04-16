@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">

    Welcome: {{ Auth()->user()->email }}



</div>
    
@endsection