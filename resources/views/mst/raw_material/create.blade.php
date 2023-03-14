<div id="create-mstRawMaterial" class="bs-canvas bs-canvas-right position-fixed bg-white h-100">
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
                        <div class="form-group">
                            <label>ACC CODE</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>FACTORY CODE</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>DESCRIPTION</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>UNIT</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>STOCK LEVEL</label>
                            <textarea class="form-control"></textarea>
                            <div class="invalid-feedback">
                                Stock Level
                            </div>
                        </div>
                        <div class="form-group">
                            <label>MINIMUM ORDER</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Min Order
                            </div>
                        </div>
                        <div class="form-group">
                            <label>% LOSS</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                % Loss
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label>STD COST PRICE (Rp)</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>STD COST PRICE Y+1 (Rp)</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>STD COST PRICE ($)</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>STD COST PROCE Y+1 ($)</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GROUP</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GROUP PRODUCT</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>SUPPLIER TYPE</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row float-right">
                    <div class="form-group mt-5">
                        <button class="btn btn-secondary bs-canvas-close mr-3">CANCEL</button>
                        <button class="btn btn-romindo" onclick="funcBtnSave()">SAVE</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
