<?php

namespace App\Models\sys;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = '10sys_rec__users'; // define nama table
    protected $primaryKey = 'rec_id'; // define primary key

    ## define status user
    public const
        inactive = 0, // status inactive
        active = 1, // status active
        lock = 2, // status lock
        is_online = 1, // user is online
        is_offline = 0; // user is offline

    ## atribut yang bisa diisi ketika melakukan insert atau update ke database
    protected $fillable = [
        'username',
        'realname',
        'password',
        'role_id',
        'status'
    ];

    ## menyembunyikan atribut ketika kita memanggil fungsi toArray() atau toJson()
    protected $hidden = [
        'password'
    ];

    ## mendapatkan nama status
    public function getStatus($value)
    {
        $statuses = [
            0 => 'Inactive',
            1 => 'Active',
            2 => 'Lock'
        ];

        return $statuses[$value];
    }

    ## Relasi balik ke role
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
