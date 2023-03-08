<div id="edit-finishProduct" class="bs-canvas bs-canvas-right position-fixed bg-white h-100">
    <header class="bs-canvas-header p-4 bg-romindo overflow-auto">
        <button type="button" class="bs-canvas-close float-right close" aria-label="Close"><span aria-hidden="true"
                class="text-white">&times;</span></button>
        <h4 class="d-inline-block text-white mb-0 float-left">
            Edit Data</h4>
    </header>
    <div class="bs-canvas-content p-3">
        <form id="form-add-new" class="needs-validation" novalidate="" onsubmit="return false">
            <div class="card-body">
                <div class="row mt-4">
                    <div class="col-md-6 col-12">

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                FORMULA PROD
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="text" name="finish_prod_id" class="form-control" value=""
                                    disabled>
                                <div class="invalid-feedback invalid-finish_prod_id"></div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                ACC PROD CODE
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="text" name="finish_prod_acc_code" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                DESCRIPTION
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="text" name="finish_prod_desc" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                UNIT QTY ON DEMAND
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="number" name="finish_prod_qty_demand" class="form-control format-number"
                                    value="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                UNIT
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="text" name="finish_prod_unit_msr" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                UNIT PER MASTER BOX
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="number" name="finish_prod_master_box" class="form-control format-number"
                                    value="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                DESTINATION
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="text" name="finish_prod_dest" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                TAHUN REGISTRASI
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="number" name="year_reg" class="form-control format-number" value="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                NO REGISTRASI
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="text" name="no_reg" class="form-control" value="">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-12">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                LIVE TIME MONTH(s)
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="number" name="finish_prod_live_time" class="form-control format-number"
                                    value="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                PRODUCT CATEGORY
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <select class="form-control select2" name="prod_category_id">
                                    <option selected="true" disabled="disabled"> -- Silahkan Pilih --
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                DOSIS PRODUK
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="number" name="finish_prod_dosis" class="form-control format-number"
                                    value="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                SATUAN BULK
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="text" name="finish_prod_bulk" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                GROUP PRODUCTION
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <select class="form-control select2" name="group_production_id">
                                </select>
                                @error('group_production_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                BATCH OF PRODUCTION
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="number" name="finish_prod_batch" class="form-control format-number"
                                    value="">
                                <div class="invalid-feedback invalid-finish_prod_batch"></div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                BULK OF PRODUCTION
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="number" name="finish_prod_bulk_unit" class="form-control format-number"
                                    value="">
                                <div class="invalid-feedback invalid-finish_prod_bulk_unit"></div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                STD COST
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="text" name="finish_prod_std_cost" class="form-control format-rupiah"
                                    value="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- <div class="row float-right">
                    <div class="form-group mt-5">
                        <button class="btn btn-secondary bs-canvas-close mr-3">Cancel</button>
                        <button class="btn btn-romindo" onclick="funcBtnSave()">Update</button>
                    </div> --}}
            <div class="form-group mt-4">
                <button class="btn btn-romindo float-right ml-3 rounded-pill" onclick="funcBtnUpdate()"><i
                        class="fas fa-edit"></i>&nbsp; Update</button>
                <button class="btn btn-secondary float-right bs-canvas-close rounded-pill"><i
                        class="fas fa-ban"></i>&nbsp;
                    Cancel</button>
                <button class="btn btn-danger float-left rounded-pill" onclick="funcBtnDelete()"><i
                        class="fas fa-trash-alt"></i>&nbsp; Delete</button>
            </div>
            {{-- </div> --}}
            {{-- </div> --}}

        </form>
    </div>
</div>
