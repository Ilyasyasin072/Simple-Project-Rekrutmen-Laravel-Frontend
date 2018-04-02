<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'penerimaans';

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
    protected $fillable =
    ['id_penerima',
     'id_testing',
     'tgl_penerima',
     'pilih_lowongan',
     'nilai_interview',
     'nilai_psikotes',
     'status',
   'syarat_lain'];


}
