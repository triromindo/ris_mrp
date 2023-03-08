<div id="edit-rate" class="bs-canvas bs-canvas-right position-fixed bg-white h-100">
    <header class="bs-canvas-header p-4 bg-romindo overflow-auto">
        <button type="button" class="bs-canvas-close float-right close" aria-label="Close"><span aria-hidden="true"
                class="text-white">&times;</span></button>
        <h4 class="d-inline-block text-white mb-0 float-left">
            Edit Data</h4>
    </header>
    <div class="bs-canvas-content p-3">
        <form id="form-edit-rate" onsubmit="return false">

            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">RATE ID</label>
                    <div class="col-sm-9">
                        <input type="text" name="supplier_id" value="" class="form-control" maxlength="15"
                            disabled />
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
