<div id="create-mstAtk" class="bs-canvas bs-canvas-right position-fixed bg-white h-100">
    <header class="bs-canvas-header p-4 bg-romindo overflow-auto">
        <button type="button" class="bs-canvas-close float-right close" aria-label="Close"><span aria-hidden="true"
                class="text-white">&times;</span></button>
        <h4 class="d-inline-block text-white mb-0 float-left">
            Tambah Data</h4>
    </header>
    <div class="bs-canvas-content p-3">
        <form id="form-add-new" onsubmit="return false">

            <div class="card-body">
                <div class="form-group row">
                    <label for="atk_prod_id" class="col-sm-3 col-form-label">ACC CODE</label>
                    <div class="col-sm-9">
                        <input type="text" name="atk_prod_id" class="form-control" maxlength="20" />
                        <div class="invalid-feedback invalid-atk_prod_id"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="atk_prod_acc_code" class="col-sm-3 col-form-label">FACTORY CODE</label>
                    <div class="col-sm-9">
                        <input type="text" name="atk_prod_acc_code" class="form-control" maxlength="20" />
                        <div class="invalid-feedback invalid-atk_prod_acc_code"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="atk_prod_desc" class="col-sm-3 col-form-label">DESCRIPTION</label>
                    <div class="col-sm-9">
                        <input type="text" name="atk_prod_desc" class="form-control" maxlength="200" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="atk_prod_price" class="col-sm-3 col-form-label">PRICE</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="atk_prod_price" maxlength="25" />
                        <div class="invalid-feedback invalid-atk_prod_price"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="atk_prod_unit_msr" class="col-sm-3 col-form-label">UNIT</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" maxlength="25" name="atk_prod_unit_msr" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="atk_prod_live_time" class="col-sm-3 col-form-label">STOCK LEVEL</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control format-number" maxlength="25"
                            name="atk_prod_live_time" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="atk_min" class="col-sm-3 col-form-label">MINIMUM ORDER</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control format-number" maxlength="25" name="atk_min" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="atk_prod_group" class="col-sm-3 col-form-label">GROUP</label>
                    <div class="col-sm-9">
                        <select class="form-control select2" name="atk_prod_group">
                            <option value=""></option>
                            <option value="1">Material</option>
                            <option value="2">Packing</option>
                        </select>
                        <div class="invalid-feedback invalid-atk_prod_group"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="atk_sup" class="col-sm-3 col-form-label">SUPPLIER TYPE</label>
                    <div class="col-sm-9">
                        <select class="form-control select2" name="atk_sup">
                            <option value=""></option>
                            <option value="I">Internal</option>
                            <option value="X">External</option>
                        </select>
                        <div class="invalid-feedback invalid-atk_sup"></div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-light bs-canvas-close mr-3">
                    <i class="fas fa-ban"></i> Batal
                </button>
                <button class="btn btn-warning" data-action="atk" onclick="funcBtnSave(this)">
                    <i class="fas fa-save"> </i> Simpan
                </button>
            </div>
        </form>
    </div>
</div>
