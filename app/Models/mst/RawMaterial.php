<?php

namespace App\Models\mst;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawMaterial extends Model
{
    use HasFactory;

    protected $table = '30mst_rec__raw_material';
    protected $primaryKey = 'rec_id';

    public $timestamps = false;

    protected $fillable = [
        'rec_status',
        'last_action',
        'last_req_user',
        'last_req_timestamp',
        'last_app_user',
        'last_app_timestamp',
        'raw_mat_acc_code',
        'raw_mat_factory_code',
        'raw_mat_desc',
        'raw_mat_group',
        'raw_mat_unit',
        'raw_mat_std_cost_price',
        'raw_mat_std_cost_price_y1',
        'raw_mat_std_cost_price_usd',
        'raw_mat_std_cost_price_usd_y1',
        'raw_mat_min_order',
        'raw_mat_loss',
        'raw_mat_stock_level',
        'raw_mat_supplier_type',
        'group_prod_id'
    ];
}
