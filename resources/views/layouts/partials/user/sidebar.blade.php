<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"><img src="{{ asset('img/logo/logo-2.webp') }}" width="180px"></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"><img src="{{ asset('img/logo/logo-3.webp') }}" width="40px"></a>
        </div>
        <ul class="sidebar-menu">
            @php
                $mst = ['raw-material', 'finish-product', 'supplier', 'supplier-other', 'atk', 'kelompok-produk-raw-mat', 'std-man-h', 'rate', 'group-production', 'config-no-slip', 'jam-kerja-tersedia', 'month-end-period', 'rekomendasi-cut-stok'];
            @endphp
            <li class="{{ Request::path() == '/' || Request::path() == 'dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('dashboard') }}">
                    <i class="fas fa-fire"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="dropdown {{ in_array(Request::path(), $mst, true) ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i><span>Master</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::path() == 'raw-material' ? 'active' : '' }}"><a class="nav-link"
                            href="{{ url('raw-material') }}">Raw Material</a></li>
                    <li class="{{ Request::path() == 'finish-product' ? 'active' : '' }}"><a class="nav-link"
                            href="{{ url('finish-product') }}">Finish Product</a></li>
                    <li class="{{ Request::path() == 'supplier' ? 'active' : '' }}"><a href="{{ url('supplier') }}"
                            class="nav-link">Supplier</a></li>
                    <li class="{{ Request::path() == 'supplier-other' ? 'active' : '' }}"><a
                            href="{{ url('supplier-other') }}" class="nav-link">Supplier Other</a></li>
                    <li class="{{ Request::path() == 'atk' ? 'active' : '' }}"><a href="{{ url('atk') }}"
                            class="nav-link">Atk</a></li>
                    <li class="{{ Request::path() == 'kelompok-produk-raw-mat' ? 'active' : '' }}"><a
                            href="{{ url('kelompok-produk-raw-mat') }}" class="nav-link">Kelompok Prod Raw Mat</a></li>
                    <li class="{{ Request::path() == 'std-man-h' ? 'active' : '' }}"><a href="{{ url('std-man-h') }}"
                            class="nav-link">Std Man H</a></li>
                    <li class="{{ Request::path() == 'rate' ? 'active' : '' }}"><a href="{{ url('rate') }}"
                            class="nav-link">Rate</a></li>
                    <li class="{{ Request::path() == 'std-prod-cost' ? 'active' : '' }}"><a
                            href="{{ url('std-prod-cost') }}" class="nav-link">Std Prod Cost</a></li>
                    <li class="{{ Request::path() == 'group-production' ? 'active' : '' }}"><a
                            href="{{ url('group-production') }}" class="nav-link">Group Produksi</a></li>
                    <li class="{{ Request::path() == 'jam-kerja-tersedia' ? 'active' : '' }}"><a
                            href="jam-kerja-tersedia" class="nav-link">Jam Kerja Tersedia</a></li>
                    <li class="{{ Request::path() == 'config-no-slip' ? 'active' : '' }}"><a
                            href="{{ url('config-no-slip') }}" class="nav-link">Config No Slip</a></li>
                    <li class="{{ Request::path() == 'month-end-period' ? 'active' : '' }}"><a
                            href="{{ url('month-end-period') }}" class="nav-link">Month End Period</a></li>
                    <li class="{{ Request::path() == 'rekomendasi-cut-stok' ? 'active' : '' }}"><a
                            href="{{ url('rekomendasi-cut-stok') }}" class="nav-link">Rekomendasi CutStok</a></li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><span>Report</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="nav-link">Lap. Finish Product</a></li>
                            <li><a href="#" class="nav-link">Raw Material</a></li>
                            <li><a href="#" class="nav-link">Std. Planning</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-cogs"></i><span>Production</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><span>Transaksi</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="nav-link">Job Order(OPR)</a></li>
                            <li><a href="#" class="nav-link">J.O Inquiry Process</a></li>
                            <li><a href="#" class="nav-link">Bill Of Material</a></li>
                            <li><a href="#" class="nav-link">Delivery Finish Prod</a></li>
                            <li><a href="#" class="nav-link">Delivery Inter. Prod</a></li>
                            <li><a href="#" class="nav-link">Validate Find Prod </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><span>Report</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="nav-link">Standart Production</a></li>
                            <li><a href="#" class="nav-link">Standart Cost In Order</a></li>
                            <li><a href="#" class="nav-link">BOM vs Batch</a></li>
                            <li><a href="#" class="nav-link">Act Man Hour vs STD</a></li>
                            <li><a href="#" class="nav-link">Ordered Processed</a></li>
                            <li><a href="#" class="nav-link">Order 4 Month</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-glass-martini"></i><span>Supplay
                        Mat</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><span>Transaksi</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><span>Supplay Mat Entry</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="nav-link">Raw Mat On Demand</a></li>
                                    <li><a href="#" class="nav-link">OPR List On Demands</a></li>
                                    <li><a href="#" class="nav-link">Purchase Order</a></li>
                                    <li><a href="#" class="nav-link">Purchase Order Other</a></li>
                                    <li><a href="#" class="nav-link">Stock Adjustment</a></li>
                                    <li><a href="#" class="nav-link">Entry BL</a></li>
                                    <li><a href="#" class="nav-link">RM Stock Carantine</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><span>Raw Mat Entry</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="nav-link">Purchase</a></li>
                                    <li><a href="#" class="nav-link">Ext Logistik GD 2</a></li>
                                    <li><a href="#" class="nav-link">SPM</a></li>
                                    <li><a href="#" class="nav-link">Purchase Return</a></li>
                                    <li><a href="#" class="nav-link">Ex Logistik Return</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><span>Raw Mat Release</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="nav-link">Purchase (R)</a></li>
                                    <li><a href="#" class="nav-link">Purchase Return (R)</a></li>
                                    <li><a href="#" class="nav-link">Ex Logistik Return (R)</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="nav-link">Delivery Finish Prod(R)</a></li>
                            <li><a href="#" class="nav-link">Delivery Inter Prod(R)</a></li>
                            <li><a href="#" class="nav-link">Transfer to GD 2</a></li>
                            <li><a href="#" class="nav-link">Raw Material Stock Card</a></li>
                            <li><a href="#" class="nav-link">Finish Prod Stock Card</a></li>
                            <li><a href="#" class="nav-link">Raw Mat Batch Stock Card</a></li>
                            <li><a href="#" class="nav-link">Finish Prod Batch Stock Card</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><span>Report</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="nav-link">Stock</a></li>
                            <li><a href="#" class="nav-link">BOM Stock Postion</a></li>
                            <li><a href="#" class="nav-link">PO vs LPB</a></li>
                            <li><a href="#" class="nav-link">Perm Pengadaan</a></li>
                            <li><a href="#" class="nav-link">Perm Pembelian</a></li>
                            <li><a href="#" class="nav-link">Realisasi OPR 2</a></li>
                            <li><a href="#" class="nav-link">Produksi Obat Jadi</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-eye"></i><span>QC</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><span>Transaksi</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><span>Raw Mat Release</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="nav-link">Purchase (Q)</a></li>
                                    <li><a href="#" class="nav-link">Purchase Return (Q)</a></li>
                                    <li><a href="#" class="nav-link">Ex Logistik GD 2 (Q)</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="nav-link">Delivery Finish Prod(Q)</a></li>
                            <li><a href="#" class="nav-link">Delivery Inter Prod(Q)</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-file-contract"></i><span>AC</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><span>Transaksi</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><span>Supplay Mat Entry</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="nav-link">Purchase Order AC</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><span>Raw Mat Entry</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="nav-link">Purchase AC</a></li>
                                    <li><a href="#" class="nav-link">Purchase Return</a></li>
                                    <li><a href="#" class="nav-link">Ex Logistik GD 2 AC</a></li>
                                    <li><a href="#" class="nav-link">Ex Logistik Return</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><span>Report</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="nav-link">Data Budget</a></li>
                            <li><a href="#" class="nav-link">Data Proyeksi</a></li>
                            <li><a href="#" class="nav-link">Data OPR</a></li>
                            <li><a href="#" class="nav-link">Data Actual</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
    </aside>
</div>
