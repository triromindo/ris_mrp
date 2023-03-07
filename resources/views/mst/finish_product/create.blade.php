<div id="create-mstFinishProduct" class="bs-canvas bs-canvas-right position-fixed bg-white h-100">
    <header class="bs-canvas-header p-4 bg-romindo overflow-auto">
        <button type="button" class="bs-canvas-close float-right close" aria-label="Close"><span aria-hidden="true"
                class="text-white">&times;</span></button>
        <h4 class="d-inline-block text-white mb-0 float-left">
            Tambah Data</h4>
    </header>
    <div class="bs-canvas-content p-3">
        <form id="form-add-new" class="needs-validation" novalidate="" onsubmit="return false">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-12">

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                FORMULA PROD
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="text" name="finish_prod_id" class="form-control">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                ACC PROD CODE
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="text" name="finish_prod_acc_code" class="form-control">
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                DESCRIPTION
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="text" name="finish_prod_desc" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                UNIT ON DEMAND
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="number" name="finish_prod_qty_demand" class="form-control format-number">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                UNIT MEASUREMENT
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="text" name="finish_prod_unit_msr" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                UNIT PER MASTER BOX
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="number" name="finish_prod_master_box" class="form-control format-number">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                DESTINATION
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="text" name="finish_prod_dest" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                LIVE TIME MONTH(s)
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="number" name="finish_prod_live_time" class="form-control format-number">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-12">

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                DOSIS PRODUK
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="number" name="finish_prod_dosis" class="form-control format-number">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                SATUAN BULK
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="text" name="finish_prod_bulk" class="form-control">
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
                                GROUP PRODUCTION
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <select class="form-control select2" name="group_production_id">
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                BATCH OF PRODUCTION
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="number" name="finish_prod_batch" class="form-control format-number">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                BULK OF PRODUCTION
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="number" name="finish_prod_bulk_unit"
                                    class="form-control format-number">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-4">
                                STD COST
                            </label>
                            <div class="col-sm-12 col-md-8">
                                <input type="text" name="finish_prod_std_cost" class="form-control format-rupiah">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row float-right">
                    <div class="form-group mt-5">
                        <button class="btn btn-secondary bs-canvas-close mr-3">Cancel</button>
                        <button class="btn btn-romindo" onclick="funcBtnSave()">Simpan</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
