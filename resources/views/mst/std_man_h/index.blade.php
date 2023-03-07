@extends('layouts.main.user')

@section('title', 'Std Man Hour')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Std Man Hour</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Std Man Hour</div>
                </div>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4></h4>
                                {{-- <div class="card-header-action">
                                    <button class="btn btn-romindo pull-bs-canvas-right" type="button"
                                        data-target="#create-mstStdManH"> <i class="fas fa-plus mr-2"></i>
                                        <span class="d-sm-inline-block"> Tambahkan Data </span> </button>
                                </div> --}}
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-main table-hover">
                                        <thead>
                                            <tr>
                                                <th>Man Hour</th>
                                                <th>Rate</th>
                                                <th>Loss %</th>
                                                <th>Def Price</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>

                                        {{-- set url value to get data --}}
                                        <input type="hidden" class="dataName" value="stdManH" />
                                        {{-- set url value to get data --}}

                                        <tbody>
                                            <tr role="row" class="odd" onclick="funcEditForm('std-man-h')">
                                                <td>InDirect Production</td>
                                                <td>72,846.69</td>
                                                <td>10</td>
                                                <td>0</td>
                                                <td><span class="badge badge-warning">ED</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Quality Control</td>
                                                <td>25,935.89</td>
                                                <td>10</td>
                                                <td>0</td>
                                                <td><span class="badge badge-warning">ED</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Overhead charges</td>
                                                <td>147,866.59</td>
                                                <td>10</td>
                                                <td>0</td>
                                                <td><span class="badge badge-warning">ED</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Depresiation Charges</td>
                                                <td>26,471.47</td>
                                                <td>10</td>
                                                <td>0</td>
                                                <td><span class="badge badge-warning">ED</span>
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
