@extends('layouts.main.user')

@section('title', 'Group Produksi')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Group Produksi</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Group Produksi</div>
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
                                        data-target="#create-mstGroupProduction"> <i class="fas fa-plus mr-2"></i>
                                        <span class="d-sm-inline-block"> Tambahkan Data </span> </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-main table-hover">
                                        <thead>
                                            <tr>
                                                <th>Group Produksi ID</th>
                                                <th>Nama Group Produksi</th>
                                                <th>Deskripsi Group Produksi</th>
                                            </tr>
                                        </thead>

                                        {{-- set url value to get data --}}
                                        <input type="hidden" class="dataName" value="groupProduction" />
                                        {{-- set url value to get data --}}

                                        <tbody>
                                            <tr role="row" class="odd" onclick="funcEditForm('group-production')">
                                                <td>FA I</td>
                                                <td>FA I</td>
                                                <td>FA I</td>
                                            </tr>
                                            <tr>
                                                <td>FA II</td>
                                                <td>FA II</td>
                                                <td>FA II</td>
                                            </tr>
                                            <tr>
                                                <td>INTERM LIQ</td>
                                                <td>INTERMEDIATE LIQUID</td>
                                                <td>INTERMEDIATE LIQUID</td>
                                            </tr>
                                            <tr>
                                                <td>INTERM PRE</td>
                                                <td>INTERMEDIATE PREMIX</td>
                                                <td>INTERMEDIATE PREMIX</td>
                                            </tr>
                                            <tr>
                                                <td>INTERM WSP</td>
                                                <td>INTERMEDIATE WSP</td>
                                                <td>INTERMEDIATE WSP</td>
                                            </tr>
                                            <tr>
                                                <td>KEMAS PHAR</td>
                                                <td>KEMAS PHARMA</td>
                                                <td>KEMAS PHARMA</td>
                                            </tr>
                                            <tr>
                                                <td>KEMAS VAKS</td>
                                                <td>KEMAS VAKSIN</td>
                                                <td>KEMAS VAKSIN</td>
                                            </tr>
                                            <tr>
                                                <td>LIPA</td>
                                                <td>LIPA</td>
                                                <td>LIPA</td>
                                            </tr>
                                            <tr>
                                                <td>LIQUID</td>
                                                <td>LIQUID</td>
                                                <td>LIQUID</td>
                                            </tr>
                                            <tr>
                                                <td>LIVESTOCK</td>
                                                <td>LIVESTOCK</td>
                                                <td>LIVESTOCK</td>
                                            </tr>
                                            <tr>
                                                <td>OTHR</td>
                                                <td>OTHER</td>
                                                <td>OTHER</td>
                                            </tr>
                                            <tr>
                                                <td>PET ANIMAL</td>
                                                <td>PET ANIMAL</td>
                                                <td>PET ANIMAL</td>
                                            </tr>
                                            <tr>
                                                <td>PHARMA OTH</td>
                                                <td>PHARMA OTH</td>
                                                <td>PHARMA OTH</td>
                                            </tr>
                                            <tr>
                                                <td>POW</td>
                                                <td>POWDER</td>
                                                <td>POWDER</td>
                                            </tr>
                                            <tr>
                                                <td>PREMIX</td>
                                                <td>PREMIX</td>
                                                <td>PREMIX</td>
                                            </tr>
                                            <tr>
                                                <td>STERIL</td>
                                                <td>STERIL</td>
                                                <td>STERIL</td>
                                            </tr>
                                            <tr>
                                                <td>WSP</td>
                                                <td>WSP</td>
                                                <td>WSP</td>
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
    @include('mst.group_production.create')
    @include('mst.group_production.edit')
    {{-- form offcanvas --}}

@endsection
