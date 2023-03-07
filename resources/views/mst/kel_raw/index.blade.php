@extends('layouts.main.user')

@section('title', 'Kelompok Prod Raw Mat')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Kelompok Prod Raw Mat</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Kelompok Prod Raw Mat</div>
                </div>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4></h4>
                                <div class="card-header-action">
                                    <button class="btn btn-romindo pull-bs-canvas-right" type="button"
                                        data-target="#create-mstKelRawMat"> <i class="fas fa-plus mr-2"></i>
                                        <span class="d-sm-inline-block"> Tambahkan Data </span> </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-main table-hover">
                                        <thead>
                                            <tr>
                                                <th>Kelompok Produk</th>
                                                <th>Nama Kelompok Produk</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>

                                        {{-- set url value to get data --}}
                                        <input type="hidden" class="dataName" value="KelRawMat" />
                                        {{-- set url value to get data --}}

                                        <tbody>
                                            <tr role="row" class="odd" onclick="funcEditForm('kel-raw-mat')">
                                                <td>112</td>
                                                <td>OTHERS</td>
                                                <td><span class="badge badge-success">OK</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>314</td>
                                                <td>ADISSEO</td>
                                                <td><span class="badge badge-success">OK</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>570</td>
                                                <td>OTHER IMPORT</td>
                                                <td><span class="badge badge-success">OK</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>710</td>
                                                <td>OTHERS LOCAL</td>
                                                <td><span class="badge badge-success">OK</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>720</td>
                                                <td>INTERMEDIATE</td>
                                                <td><span class="badge badge-success">OK</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>800</td>
                                                <td>PACKAGING</td>
                                                <td><span class="badge badge-success">OK</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- form offcanvas --}}
    @include('mst.kel_raw.create')
    @include('mst.kel_raw.edit')
    {{-- form offcanvas --}}

@endsection
