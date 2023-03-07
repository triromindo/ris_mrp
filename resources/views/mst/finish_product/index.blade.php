@extends('layouts.main.user')

@section('title', 'Finish Product')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Finish Product</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Finish Product</div>
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
                                        data-target="#create-mstFinishProduct"> <i class="fas fa-plus mr-2"></i>
                                        <span class="d-sm-inline-block"> Tambahkan Data </span> </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-main table-hover">
                                        <thead>
                                            <tr>
                                                <th>Formula Prod</th>
                                                <th>Acc Prod Code</th>
                                                <th>Description</th>
                                                <th>Std Cost</th>
                                                <th>Live Time Month</th>
                                            </tr>
                                        </thead>

                                        {{-- set url value to get data --}}
                                        <input type="hidden" class="dataName" value="finishProduct" />
                                        {{-- set url value to get data --}}

                                        <tbody>
                                            <tr role="row" class="odd" onclick="funcEditForm('finish-product')">
                                                <td>112014</td>
                                                <td>112014</td>
                                                <td>AMPIXIL 1 KG</td>
                                                <td class="text-right">
                                                    104.702</td>
                                                <td class="text-center">25</td>
                                            </tr>
                                            <tr>
                                                <td>112019</td>
                                                <td>112019</td>
                                                <td>AMPISOL 100 GRAM</td>
                                                <td class="text-right">
                                                    0</td>
                                                <td class="text-center">25</td>
                                            </tr>
                                            <tr>
                                                <td>112021</td>
                                                <td>112021</td>
                                                <td>AVISTRESS 1 KG</td>
                                                <td class="text-right">
                                                    93.974</td>
                                                <td class="text-center">25</td>
                                            </tr>
                                            <tr>
                                                <td>112021R</td>
                                                <td>112021R</td>
                                                <td>AVISTRESS 1 KG</td>
                                                <td class="text-right">
                                                    93.974</td>
                                                <td class="text-center">25</td>
                                            </tr>
                                            <tr>
                                                <td>112031</td>
                                                <td>112031</td>
                                                <td>CARISID 1 LITER</td>
                                                <td class="text-right">
                                                    53.812</td>
                                                <td class="text-center">37</td>
                                            </tr>
                                            <tr>
                                                <td>112031R</td>
                                                <td>112031R</td>
                                                <td>CARISID 1 LITER</td>
                                                <td class="text-right">
                                                    53.812</td>
                                                <td class="text-center">37</td>
                                            </tr>
                                            <tr>
                                                <td>112032</td>
                                                <td>112032</td>
                                                <td>CARISID 5 LITER</td>
                                                <td class="text-right">
                                                    230.583</td>
                                                <td class="text-center">37</td>
                                            </tr>
                                            <tr>
                                                <td>112032R</td>
                                                <td>112032R</td>
                                                <td>CARISID 5 L</td>
                                                <td class="text-right">
                                                    230.583</td>
                                                <td class="text-center">25</td>
                                            </tr>
                                            <tr>
                                                <td>112051</td>
                                                <td>112051</td>
                                                <td>ENOQUYL 100 ML</td>
                                                <td class="text-right">
                                                    11.327</td>
                                                <td class="text-center">25</td>
                                            </tr>
                                            <tr>
                                                <td>112052</td>
                                                <td>112052</td>
                                                <td>ENOQUYL 1 LITER</td>
                                                <td class="text-right">
                                                    77.118</td>
                                                <td class="text-center">25</td>
                                            </tr>
                                            <tr>
                                                <td>112052R</td>
                                                <td>112052R</td>
                                                <td>ENOQUYL 1 LITER</td>
                                                <td class="text-right">
                                                    77.118</td>
                                                <td class="text-center">24</td>
                                            </tr>
                                            <tr>
                                                <td>112053</td>
                                                <td>112053</td>
                                                <td>ENOQUYL 5 LITER</td>
                                                <td class="text-right">
                                                    350.478</td>
                                                <td class="text-center">25</td>
                                            </tr>
                                            <tr>
                                                <td>112053R</td>
                                                <td>112053R</td>
                                                <td>ENOQUYL 5 L</td>
                                                <td class="text-right">
                                                    350.478</td>
                                                <td class="text-center">25</td>
                                            </tr>
                                            <tr>
                                                <td>112061</td>
                                                <td>112061</td>
                                                <td>GROFAS 100 GRAM</td>
                                                <td class="text-right">
                                                    12.852</td>
                                                <td class="text-center">25</td>
                                            </tr>
                                            <tr>
                                                <td>112062</td>
                                                <td>112062</td>
                                                <td>GROFAS 1 KILOGRAM</td>
                                                <td class="text-right">
                                                    87.142</td>
                                                <td class="text-center">25</td>
                                            </tr>
                                            <tr>
                                                <td>112062R</td>
                                                <td>112062R</td>
                                                <td>GROFAS 1 KG</td>
                                                <td class="text-right">
                                                    87.142</td>
                                                <td class="text-center">25</td>
                                            </tr>
                                            <tr>
                                                <td>112063</td>
                                                <td>112063</td>
                                                <td>GROFAS (10x100 GRAM)</td>
                                                <td class="text-right">
                                                    101.329</td>
                                                <td class="text-center">25</td>
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
    @include('mst.finish_product.create')
    @include('mst.finish_product.edit')
    {{-- form offcanvas --}}

@endsection
