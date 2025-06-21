@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        
    <!-- Info boxes -->
        <div class="row">
            @foreach ($masters as $menu)
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="{{ $menu->icon }}"></i></i></span>
                    <div class="info-box-content">
                    <span class="info-box-text">{{ $menu->title }}</span>
                    <span class="info-box-number">
                        10
                        <small>%</small>
                    </span>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
@endsection

