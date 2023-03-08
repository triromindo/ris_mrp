<div id="create-mstRate" class="bs-canvas bs-canvas-right position-fixed bg-white h-100">
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
                    <label class="col-sm-3 col-form-label">RATE ID</label>
                    <div class="col-sm-9">
                        <input type="text" name="supplier_id" value="" class="form-control" maxlength="15" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">MAN HOUR</label>
                    <div class="col-sm-9">
                        <input type="text" name="supplier_name" value="" class="form-control"
                            maxlength="100" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">LOSS %</label>
                    <div class="col-sm-9">
                        <input type="text" name="supplier_address1" value="" class="form-control"
                            maxlength="200" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">DEF PRICE</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="supplier_address2" value=""
                            maxlength="200" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">RATE</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" maxlength="25" name="supplier_city" value="" />
                    </div>
                </div>
            </div>
            {{-- </div> --}}
            <div class="card-footer text-right">
                <a class="btn btn-light bs-canvas-close mr-3">
                    <i class="fas fa-ban"></i> Batal
                </a>
                <button class="btn btn-warning" data-action="supplier" onclick="funcBtnSave(this)">
                    <i class="fas fa-save"> </i> Simpan
                </button>
            </div>
        </form>
    </div>
</div>
