<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pengalamen';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_perusahan', 'posisi', 'awal_masuk', 'sampai', 'bidang_pekerjaan', 'gaji_bulanan'];

    
}
