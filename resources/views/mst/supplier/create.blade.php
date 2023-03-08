<div id="create-mstSupplier" class="bs-canvas bs-canvas-right position-fixed bg-white h-100">
    <header class="bs-canvas-header p-4 bg-romindo overflow-auto">
        <button type="button" class="bs-canvas-close float-right close" aria-label="Close"><span aria-hidden="true"
                class="text-white">&times;</span></button>
        <h4 class="d-inline-block text-white mb-0 float-left">
            Tambah Data</h4>
    </header>
    <div class="bs-canvas-content p-3">
        <form id="form-add-new" class="needs-validation" novalidate="" onsubmit="return false">

            <div class="card-body">
                <div class="form-group row">
                    <label for="supplier_id" class="col-sm-3 col-form-label">SUPPLIER CODE</label>
                    <div class="col-sm-9">
                        <input type="text" name="supplier_id" class="form-control" maxlength="15" />
                        <div class="invalid-feedback invalid-supplier_id"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="supplier_name" class="col-sm-3 col-form-label">SUPPLIER</label>
                    <div class="col-sm-9">
                        <input type="text" name="supplier_name" class="form-control" maxlength="100" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="supplier_address1" class="col-sm-3 col-form-label">ADDRESS 1</label>
                    <div class="col-sm-9">
                        <input type="text" name="supplier_address1" class="form-control" maxlength="200" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="supplier_address2" class="col-sm-3 col-form-label">ADDRESS 2</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="supplier_address2" maxlength="200" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="supplier_city" class="col-sm-3 col-form-label">KOTA</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" maxlength="25" name="supplier_city" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="supplier_telp" class="col-sm-3 col-form-label">TELEPON</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" maxlength="25" name="supplier_telp" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="supplier_pay_period" class="col-sm-3 col-form-label">SYARAT PEMBAYARAN</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control format-number" maxlength="25"
                            name="supplier_pay_period" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="supplier_tax" class="col-sm-3 col-form-label">PPN</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control format-number" maxlength="25" name="supplier_tax" />
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-light mr-3 bs-canvas-close">
                    <i class="fas fa-ban"></i> Batal
                </button>
                <button class="btn btn-warning" data-action="supplier" onclick="funcBtnSave(this)">
                    <i class="fas fa-save"> </i> Simpan
                </button>
            </div>
        </form>
    </div>
</div>
