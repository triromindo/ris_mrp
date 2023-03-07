@extends('layouts.main.user')

@section('title', 'Supplier Other')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Supplier Other</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Supplier Other</div>
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
                                        data-target="#create-mstSupplierOther"> <i class="fas fa-plus mr-2"></i>
                                        <span class="d-sm-inline-block"> Tambahkan Data </span> </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-main table-hover">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Supplier</th>
                                                <th>Address 1</th>
                                                <th>City</th>
                                                <th>Syarat</th>
                                            </tr>
                                        </thead>

                                        {{-- set url value to get data --}}
                                        <input type="hidden" class="dataName" value="supplierOther" />
                                        {{-- set url value to get data --}}

                                        <tbody>
                                            <tr role="row" class="odd" onclick="funcEditForm('supplier-other')">
                                                <td>2K</td>
                                                <td>PT DUAKA SEKAWAN SENTRAMUKTI</td>
                                                <td>JL KASWARI I/ NO 69 JAKA SETIA</td>
                                                <td></td>
                                                <td>7</td>
                                            </tr>
                                            <tr>
                                                <td>A</td>
                                                <td>ASIA SAFETY INDONESIA</td>
                                                <td>MEGA KEMAYORAN OFFICE TOWER A LANTAI 5</td>
                                                <td></td>
                                                <td>14</td>
                                            </tr>
                                            <tr>
                                                <td>ABA</td>
                                                <td>TOKO ABADI JAYA</td>
                                                <td>PLAZA PINANGSIA LT DASAR NO 36-37, </td>
                                                <td></td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>ACKSA</td>
                                                <td>PT ACKSA ALUMANDA ENGINEERING</td>
                                                <td>JL KARYA LOGAM NO 70 TAMBUN BEKASI</td>
                                                <td></td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>ACT</td>
                                                <td>AMIEN COOL TEKNIK</td>
                                                <td>RUKO KAVLING POMARU RT 8/ RW 11 RAWA SEMUT</td>
                                                <td></td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>AD</td>
                                                <td>PT ADIKARSA</td>
                                                <td>T 5500027 F 5500007</td>
                                                <td></td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>ADH</td>
                                                <td>CV ADHIKA INSTRUMENT SUPPLY</td>
                                                <td>HWI LINDETEVES LT III BLOK C NO 16-17</td>
                                                <td>T.6245181 F.6245209</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>ADI</td>
                                                <td>PT ADI UNISINDO JAYA</td>
                                                <td>JL BANDENGAN UTARA NO 81 </td>
                                                <td>T.6682925 F.6670826</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>AG</td>
                                                <td>PT ASIA GLOBAL TEKNIK</td>
                                                <td>MEGAGLODOK (MKG) LT GF BLOK C7-9</td>
                                                <td>T.65866169 F.65867705</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>AGA</td>
                                                <td>PT AGAPE TRIKARSA LIBRATAMA</td>
                                                <td>RUKO BEKASI MAS BLOK A/ 21</td>
                                                <td></td>
                                                <td>14</td>
                                            </tr>
                                            <tr>
                                                <td>AIR</td>
                                                <td>PT AIR LIQUIDE</td>
                                                <td>BLOK I NO 1-2 MM 2100 INDUSTRI TOWN</td>
                                                <td></td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>AJT</td>
                                                <td>CV ARTHA JAYA TEKNIK</td>
                                                <td>RUKO SIMPRUG PLAZA BLOK A2 NO 22 </td>
                                                <td>CIKARANG</td>
                                                <td>0</td>
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
    @include('mst.supplier_other.create')
    @include('mst.supplier_other.edit')
    {{-- form offcanvas --}}

@endsection
