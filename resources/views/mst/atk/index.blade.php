@extends('layouts.main.user')

@section('title', 'Atk')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Atk</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Atk</div>
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
                                        data-target="#create-mstAtk"> <i class="fas fa-plus mr-2"></i>
                                        <span class="d-sm-inline-block"> Tambahkan Data </span> </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-main table-hover">
                                        <thead>
                                            <tr>
                                                <th>Acc Code</th>
                                                <th>Factory Code</th>
                                                <th>Description</th>
                                                <th>Std Cost</th>
                                                <th>Unit</th>
                                            </tr>
                                        </thead>

                                        {{-- set url value to get data --}}
                                        <input type="hidden" class="dataName" value="atk" />
                                        {{-- set url value to get data --}}

                                        <tbody>
                                            <tr role="row" class="odd" onclick="funcEditForm('atk')">
                                                <td>A-219A</td>
                                                <td>A-219A</td>
                                                <td>DI-POTASSIUM HYDROGEN PHOS 1 KG CAT 1.05104</td>
                                                <td>1,718,000</td>
                                                <td>BTL</td>
                                            </tr>
                                            <tr>
                                                <td>A-253A</td>
                                                <td>A-253A</td>
                                                <td>WET&amp;DRY VACUM CLEANER 50 L DEPLIANT X-PRO 3000</td>
                                                <td>13,915,000</td>
                                                <td>PCS</td>
                                            </tr>
                                            <tr>
                                                <td>ADAPT-01</td>
                                                <td>ADAPT-01</td>
                                                <td>ADAPTOR TIMBANGAN TB-164B</td>
                                                <td>110,000</td>
                                                <td>PCS</td>
                                            </tr>
                                            <tr>
                                                <td>ATK-01</td>
                                                <td>ATK-01</td>
                                                <td>BATCH RECORD CARD</td>
                                                <td>1,000</td>
                                                <td>PCS</td>
                                            </tr>
                                            <tr>
                                                <td>ATK-02</td>
                                                <td>ATK-02</td>
                                                <td>STIKER RAW MATERIAL PACKAGING</td>
                                                <td>200</td>
                                                <td>PCS</td>
                                            </tr>
                                            <tr>
                                                <td>ATK-03</td>
                                                <td>ATK-03</td>
                                                <td>STIKER FINISHED PRODUCT</td>
                                                <td>200</td>
                                                <td>PCS</td>
                                            </tr>
                                            <tr>
                                                <td>ATK-04</td>
                                                <td>ATK-04</td>
                                                <td>GANTUNGAN RAW MATERIAL PAKAI KAWAT</td>
                                                <td>250</td>
                                                <td>PCS</td>
                                            </tr>
                                            <tr>
                                                <td>ATK-04A</td>
                                                <td>ATK-04A</td>
                                                <td>GANTUNGAN RAW MATERIAL KAWAT + K.STOK</td>
                                                <td>1</td>
                                                <td>PCS</td>
                                            </tr>
                                            <tr>
                                                <td>ATK-05</td>
                                                <td>ATK-05</td>
                                                <td>SLIP CONTROL (HVS 80 GRAM)</td>
                                                <td>8</td>
                                                <td>PCS</td>
                                            </tr>
                                            <tr>
                                                <td>ATK-06</td>
                                                <td>ATK-06</td>
                                                <td>STIKER PESTOS 1000</td>
                                                <td>60</td>
                                                <td>PCS</td>
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
    @include('mst.atk.create')
    @include('mst.atk.edit')
    {{-- form offcanvas --}}

@endsection
