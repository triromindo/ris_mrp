<?php

namespace App\Models\mst;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierOther extends Model
{
    use HasFactory;

    protected $table = '30mst_rec__supplier_other';
    protected $primaryKey = 'rec_id';

    public $timestamps = false;

    protected $fillable = [
        'rec_status',
        'last_action',
        'last_req_user',
        'last_req_timestamp',
        'last_app_user',
        'last_app_timestamp',
        'supplier_id',
        'supplier_name',
        'supplier_address1',
        'supplier_address2',
        'supplier_city',
        'supplier_telp',
        'supplier_pay_period',
        'supplier_tax'
    ];
}
