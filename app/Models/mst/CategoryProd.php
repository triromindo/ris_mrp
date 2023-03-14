<?php

namespace App\Models\mst;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProd extends Model
{
    use HasFactory;

    protected $table = '30mst_rec__category_prod';
    protected $primaryKey = 'rec_id';

    public $timestamps = false;

    protected $fillable = [
        'rec_status',
        'last_action',
        'last_req_user',
        'last_req_timestamp',
        'last_app_user',
        'last_app_timestamp',
        'category_prod_id',
        'category_prod_name'
    ];
}
