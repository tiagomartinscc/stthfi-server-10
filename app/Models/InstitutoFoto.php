<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Instituto;

class InstitutoFoto extends Model
{
    protected $table = 'instituto_foto';
    protected $primaryKey  = 'id_instituto_foto';

    public $timestamps = false;

    public function instituto()
    {
        return $this->belongsTo(Instituto::class, 'id_instituto', 'id_instituto');
    }
}
