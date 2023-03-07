@extends('layouts.main.user')

@section('title', 'Raw Material')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Raw Material</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Raw Material</div>
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
                                        data-target="#create-mstRawMaterial"> <i class="fas fa-plus mr-2"></i>
                                        <span class="d-sm-inline-block"> Tambahkan Data </span> </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-main table-hover">
                                        <thead>
                                            <tr>
                                                <th>ACC Code</th>
                                                <th>Factory Code</th>
                                                <th>Description</th>
                                                <th>STD COST</th>
                                                <th>STOCK LEVEL</th>
                                            </tr>
                                        </thead>

                                        {{-- set url value to get data --}}
                                        <input type="hidden" class="dataName" value="rawMaterial" />
                                        {{-- set url value to get data --}}

                                        <tbody>
                                            <tr role="row" class="odd" onclick="funcEditForm('raw-material')">
                                                <td>112013</td>
                                                <td class="hidden-480">A-207</td>
                                                <td data-placement="top" data-rel="popover" data-original-title=""
                                                    title="">CHOLINE CHLORIDE CONC. 50%</td>
                                                <td class="hidden-480">236</td>
                                                <td class="hidden-480">
                                                    1
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>112021</td>
                                                <td class="hidden-480">112021</td>
                                                <td data-placement="top" data-rel="popover" data-original-title=""
                                                    title="">AVISTRESS 1 KG</td>
                                                <td class="hidden-480">123</td>
                                                <td class="hidden-480">
                                                    1
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>112031</td>
                                                <td class="hidden-480">112031</td>
                                                <td data-placement="top" data-rel="popover" data-original-title=""
                                                    title="">CARISID 1 LITER</td>
                                                <td class="hidden-480">0</td>
                                                <td class="hidden-480">
                                                    1
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>112032</td>
                                                <td class="hidden-480">112032</td>
                                                <td data-placement="top" data-rel="popover" data-original-title=""
                                                    title="">CARISID 5 LITER</td>
                                                <td class="hidden-480">0</td>
                                                <td class="hidden-480">
                                                    1
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>112041</td>
                                                <td class="hidden-480">112041</td>
                                                <td data-placement="top" data-rel="popover" data-original-title=""
                                                    title="">EMBACOX 100 GRAM</td>
                                                <td class="hidden-480">0</td>
                                                <td class="hidden-480">
                                                    1
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>112052</td>
                                                <td class="hidden-480">112052</td>
                                                <td data-placement="top" data-rel="popover" data-original-title=""
                                                    title="">ENOQUYL 1 L</td>
                                                <td class="hidden-480">0</td>
                                                <td class="hidden-480">
                                                    1
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>112053</td>
                                                <td class="hidden-480">112053</td>
                                                <td data-placement="top" data-rel="popover" data-original-title=""
                                                    title="">ENOQUYL 5 L</td>
                                                <td class="hidden-480">0</td>
                                                <td class="hidden-480">
                                                    1
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>112061</td>
                                                <td class="hidden-480">112061</td>
                                                <td data-placement="top" data-rel="popover" data-original-title=""
                                                    title="">GROFAS 100 GRAM</td>
                                                <td class="hidden-480">0</td>
                                                <td class="hidden-480">
                                                    1
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>112062</td>
                                                <td class="hidden-480">112062</td>
                                                <td data-placement="top" data-rel="popover" data-original-title=""
                                                    title="">GROFAS 1 KG</td>
                                                <td class="hidden-480">0</td>
                                                <td class="hidden-480">
                                                    1
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>112063</td>
                                                <td class="hidden-480">112063</td>
                                                <td data-placement="top" data-rel="popover" data-original-title=""
                                                    title="">GROFAS 10 X 100 GRAM</td>
                                                <td class="hidden-480">0</td>
                                                <td class="hidden-480">
                                                    1
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>112071</td>
                                                <td class="hidden-480">112071</td>
                                                <td data-placement="top" data-rel="popover" data-original-title=""
                                                    title="">IMEQUYL 100 GRAM</td>
                                                <td class="hidden-480">0</td>
                                                <td class="hidden-480">
                                                    1
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>112072</td>
                                                <td class="hidden-480">112072</td>
                                                <td data-placement="top" data-rel="popover" data-original-title=""
                                                    title="">IMEQUYL 1 KG</td>
                                                <td class="hidden-480">0</td>
                                                <td class="hidden-480">
                                                    1
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>112073</td>
                                                <td class="hidden-480">112073</td>
                                                <td data-placement="top" data-rel="popover" data-original-title=""
                                                    title="">IMEQUYL SOL 20%, 500 ML</td>
                                                <td class="hidden-480">0</td>
                                                <td class="hidden-480">
                                                    1
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>112081</td>
                                                <td class="hidden-480">112081</td>
                                                <td data-placement="top" data-rel="popover" data-original-title=""
                                                    title="">ISTAM 1 LITER</td>
                                                <td class="hidden-480">0</td>
                                                <td class="hidden-480">
                                                    1
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>112082</td>
                                                <td class="hidden-480">112082</td>
                                                <td data-placement="top" data-rel="popover" data-original-title=""
                                                    title="">ISTAM 5 LITER</td>
                                                <td class="hidden-480">0</td>
                                                <td class="hidden-480">
                                                    1
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
    @include('mst.raw_material.create')
    @include('mst.raw_material.edit')
    {{-- form offcanvas --}}

@endsection
