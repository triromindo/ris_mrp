<div id="edit-rawMaterial" class="bs-canvas bs-canvas-right position-fixed bg-white h-100">
    <header class="bs-canvas-header p-4 bg-romindo overflow-auto">
        <button type="button" class="bs-canvas-close float-right close" aria-label="Close"><span aria-hidden="true"
                class="text-white">&times;</span></button>
        <h4 class="d-inline-block text-white mb-0 float-left">
            Edit Data</h4>
    </header>
    <div class="bs-canvas-content p-3">
        <form id="form-add-new" class="needs-validation" novalidate="" onsubmit="return false">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label>ACC Code</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Factory Code</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Unit</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control"></textarea>
                            <div class="invalid-feedback">
                                Stock Level
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Unit</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Min Order
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Unit</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                % Loss
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label>Std Cost Price (Rp)</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Std Cost Price Y+1 (Rp)</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Std Cost Price ($)</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Std Cost Price Y+1 ($)</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Group</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Group Product</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Supplier</label>
                            <input type="text" class="form-control" required="">
                            <div class="invalid-feedback">
                                Please fill
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
            </div>

        </form>
    </div>
</div>
