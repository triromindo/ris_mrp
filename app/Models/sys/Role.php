<?php

namespace App\Models\sys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = '10sys_rec__roles'; // define nama table
    protected $primaryKey = 'rec_id'; // define primary key

    ## define name role
    public const
        manager = 1, // role manager
        accounting = 2, // role accounting
        purchasing = 3, // role purchasing
        spv = 4, // role supervisor
        qc = 5, // role quality control
        admin = 15; // role admin

    ## Relasi ke user
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
