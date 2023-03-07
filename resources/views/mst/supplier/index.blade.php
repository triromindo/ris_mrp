@extends('layouts.main.user')

@section('title', 'Supplier')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Supplier</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Supplier</div>
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
                                        data-target="#create-mstSupplier"> <i class="fas fa-plus mr-2"></i>
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
                                        <input type="hidden" class="dataName" value="supplier" />
                                        {{-- set url value to get data --}}

                                        <tbody>
                                            <tr role="row" class="odd" onclick="funcEditForm('supplier')">
                                                <td>ABA</td>
                                                <td>PT ABADI MAKMUR BERSAMA</td>
                                                <td>RUKO PRIMA REGENCY 8</td>
                                                <td>T.22222 F. 333333</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>ACES</td>
                                                <td>PT ACES SEJAHTERA</td>
                                                <td>JL MERUYA ILIR RAYA NO.3</td>
                                                <td>TEL 5865162 FAX 5845624</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>ACN</td>
                                                <td>PT AGRIMARA CIPTA NUTRINDO</td>
                                                <td>JL IRIAN BARAT PERUM PELEM BEAUTY D11</td>
                                                <td></td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>ADIM</td>
                                                <td>PT. ADIMITRA PRIMA LESTARI</td>
                                                <td>PERKANTORAN BUKIT GADING INDAH</td>
                                                <td></td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>AGRI</td>
                                                <td>PT AGRIVET INDOPERTIWI MEGAH</td>
                                                <td>JL SETRA KOSAMBI BLOK A/ 15</td>
                                                <td>T.55955915 F.55955918</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>AGU</td>
                                                <td>CV AGUNG MAS</td>
                                                <td>KP TEKO DESA KERTAJAYA KEC.PEBAYURAN</td>
                                                <td></td>
                                                <td>45</td>
                                            </tr>
                                            <tr>
                                                <td>AJT</td>
                                                <td>CV ARTHA JAYA TEKNIK</td>
                                                <td>RUKO SIMPRUG PLAZA BLOK A2 NO 22 JABABEKA</td>
                                                <td>CIKARANG</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>ALAM</td>
                                                <td>PT ALAM SUBUR TIRTA KENCANA</td>
                                                <td>JL DAAN MOGOT KM 12</td>
                                                <td>FAX 6190443</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>ALS</td>
                                                <td>ADHIMULYA LOGAMINDO SEJAHTERA</td>
                                                <td>CIKARANG INDUSTRIAL ESTATE</td>
                                                <td></td>
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
    @include('mst.supplier.create')
    @include('mst.supplier.edit')
    {{-- form offcanvas --}}

@endsection
