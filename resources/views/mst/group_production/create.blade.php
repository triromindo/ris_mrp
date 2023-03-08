<div id="create-mstGroupProduction" class="bs-canvas bs-canvas-right position-fixed bg-white h-100">
    <header class="bs-canvas-header p-4 bg-romindo overflow-auto">
        <button type="button" class="bs-canvas-close float-right close" aria-label="Close"><span aria-hidden="true"
                class="text-white">&times;</span></button>
        <h4 class="d-inline-block text-white mb-0 float-left">
            Tambah Data</h4>
    </header>
    <div class="bs-canvas-content p-3">
        <form id="form-add-new" class="needs-validation" novalidate="" onsubmit="return false">

            <div class="card-body">
                <div class="row mt-4">
                    <div class="col-md-12 col-12">

                        <div class="form-group row mb-4">
                            <label class="col-form-label col-12 col-md-2 col-lg-2">
                                GROUP PRODUKSI ID
                            </label>
                            <div class="col-sm-12 col-md-10">
                                <input type="text" name="group_production_id" class="form-control" maxlength="10">
                                <div class="invalid-feedback invalid-group_production_id"></div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label col-12 col-md-2 col-lg-2">
                                NAMA GROUP PRODUKSI
                            </label>
                            <div class="col-sm-12 col-md-10">
                                <input type="text" name="group_production_name" class="form-control" maxlength="30">
                                <div class="invalid-feedback invalid-group_production_name"></div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label col-12 col-md-2 col-lg-2">
                                DESKRIPSI GROUP PRODUKSI
                            </label>
                            <div class="col-sm-12 col-md-10">
                                <input type="text" name="group_production_desc" class="form-control" maxlength="80">
                                <div class="invalid-feedback invalid-group_production_desc"></div>
                            </div>
                        </div>

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
