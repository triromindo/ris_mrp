<div id="edit-groupProduction" class="bs-canvas bs-canvas-right position-fixed bg-white h-100">
    <header class="bs-canvas-header p-4 bg-romindo overflow-auto">
        <button type="button" class="bs-canvas-close float-right close" aria-label="Close"><span aria-hidden="true"
                class="text-white">&times;</span></button>
        <h4 class="d-inline-block text-white mb-0 float-left">
            Edit Data</h4>
    </header>
    <div class="bs-canvas-content p-3">
        <form id="form-edit-groupProduction" onsubmit="return false">

            <div class="card-body">
                <div class="row mt-4">
                    <div class="col-md-12 col-12">

                        <div class="form-group row mb-4">
                            <label class="col-form-label col-12 col-md-2 col-lg-2">
                                GROUP PRODUKSI ID
                            </label>
                            <div class="col-sm-12 col-md-10">
                                <input type="text" name="group_production_id" class="form-control" maxlength="10"
                                    value="" disabled>
                                <div class="invalid-feedback invalid-group_production_id"></div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label col-12 col-md-2 col-lg-2">
                                NAMA GROUP PRODUKSI
                            </label>
                            <div class="col-sm-12 col-md-10">
                                <input type="text" name="group_production_name" class="form-control" maxlength="30"
                                    value="">
                                <div class="invalid-feedback invalid-group_production_name"></div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label col-12 col-md-2 col-lg-2">
                                DESKRIPSI GROUP PRODUKSI
                            </label>
                            <div class="col-sm-12 col-md-10">
                                <input type="text" name="group_production_desc" class="form-control" maxlength="80"
                                    value="">
                                <div class="invalid-feedback invalid-group_production_desc"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="form-group mt-4">
                <button class="btn btn-romindo float-right ml-3 rounded-pill" onclick="funcBtnUpdate()"><i
                        class="fas fa-edit"></i>&nbsp; Update</button>
                <button class="btn btn-secondary float-right bs-canvas-close rounded-pill"><i
                        class="fas fa-ban"></i>&nbsp;
                    Cancel</button>
                <button class="btn btn-danger float-left rounded-pill" onclick="funcBtnDelete()"><i
                        class="fas fa-trash-alt"></i>&nbsp; Delete</button>
            </div>
        </form>
    </div>
</div>
