<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'perusahaans';

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
    protected $fillable = ['nama_perusahaan', 'jenis', 'tanggal_berdiri', 'no_telepon', 'email', 'alamat'];

    
}
