<?php

namespace App\Models\mst;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinishProduct extends Model
{
    use HasFactory;

    protected $table = '30mst_rec__finish_prod';
    protected $primaryKey = 'rec_id';

    public $timestamps = false;

    protected $fillable = [
        'rec_status',
        'last_action',
        'last_req_user',
        'last_req_timestamp',
        'last_app_user',
        'last_app_timestamp',
        'finish_prod_id',
        'finish_prod_acc_code',
        'finish_prod_desc',
        'finish_prod_qty_demand',
        'finish_prod_unit_msr',
        'finish_prod_master_box',
        'finish_prod_dest',
        'finish_prod_live_time',
        'finish_prod_bulk',
        'finish_prod_dosis',
        'finish_prod_std_cost',
        'prod_category_id',
        'group_production_id',
        'group_production_pm',
        'finish_prod_batch',
        'finish_prod_bulk_unit',
        'no_reg',
        'year_reg'
    ];
}
