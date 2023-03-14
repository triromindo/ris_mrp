<div id="create-mstKelRawMat" class="bs-canvas bs-canvas-right position-fixed bg-white h-100">
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
                    <label for="group_prod_id" class="col-sm-3 col-form-label">Kelompok Produk</label>
                    <div class="col-sm-9">
                        <input type="text" name="group_prod_id" class="form-control" maxlength="15" />

                    </div>
                </div>
                <div class="form-group row">
                    <label for="group_prod_name" class="col-sm-3 col-form-label">Nama Kelompok Produk</label>
                    <div class="col-sm-9">
                        <input type="text" name="group_prod_name" class="form-control" maxlength="100" />
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
