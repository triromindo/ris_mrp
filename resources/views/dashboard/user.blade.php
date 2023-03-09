@extends('layouts.main.user')

@section('title', 'Dashboard')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card card-hero">
                            <div class="card-header bg-info">
                                <div class="card-icon">
                                    <i class="far fa-clipboard"></i>
                                </div>
                                <h3>Production</h3>
                            </div>
                            <div class="card-body p-0">
                                <div class="tickets-list">
                                    <a href="#" class="ticket-item">
                                        <div class="ticket-title">
                                            <h4>Job Order (OPR)</h4>
                                            <div class="badge badge-pill badge-info">0</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ticket-item">
                                        <div class="ticket-title">
                                            <h4>Job Order Inquiry Process</h4>
                                            <div class="badge badge-pill badge-info">0</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ticket-item">
                                        <div class="ticket-title">
                                            <h4>Bill Of  Material</h4>
                                            <div class="badge badge-pill badge-info">0</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ticket-item">
                                        <div class="ticket-title">
                                            <h4>Buat BPHP</h4>
                                            <div class="badge badge-pill badge-info">0</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ticket-item">
                                        <div class="ticket-title">
                                            <h4>Release BPHP</h4>
                                            <div class="badge badge-pill badge-info">0</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card card-hero">
                            <div class="card-header bg-primary">
                                <div class="card-icon">
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <h3>Purchasing</h3>
                            </div>
                            <div class="card-body p-0">
                                <div class="tickets-list">
                                    <a href="#" class="ticket-item">
                                        <div class="ticket-title">
                                            <h4>Purchase Order</h4>
                                            <div class="badge badge-pill badge-info">0</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ticket-item">
                                        <div class="ticket-title">
                                            <h4>LPB</h4>
                                            <div class="badge badge-pill badge-info">0</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ticket-item">
                                        <div class="ticket-title">
                                            <h4>Release QC</h4>
                                            <div class="badge badge-pill badge-info">0</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
