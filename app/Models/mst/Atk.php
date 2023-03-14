<?php

namespace App\Models\mst;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atk extends Model
{
    use HasFactory;

    protected $table = '30mst_rec__atk';
    protected $primaryKey = 'rec_id';

    public $timestamps = false;

    protected $fillable = [
        'rec_status',
        'last_action',
        'last_req_user',
        'last_req_timestamp',
        'last_app_user',
        'last_app_timestamp',
        'atk_prod_id',
        'atk_prod_acc_code',
        'atk_prod_desc',
        'atk_prod_qty_demand',
        'atk_prod_unit_msr',
        'atk_prod_master_box',
        'atk_prod_dest',
        'atk_prod_live_time',
        'atk_prod_bulk',
        'atk_prod_std_cost',
        'atk_prod_price',
        'atk_prod_group',
        'atk_min',
        'atk_sup'
    ];
}
