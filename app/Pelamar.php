<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pelamars';

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
    protected $fillable = ['id_testing', 'pelamar_no_ktp', 'pelamar_nama', 'pelamar_alamat', 'pelamar_ttl', 'pelamar_jk', 'pelamar_email', 'pelamar_tlp', 'pelamar_status'];


}
