<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model {
    protected $table = "pesanan";
    protected $primaryKey = "id";
    protected $allowedFields = [
        "kode",
        "nama",
        "no_hp", 
        "email", 
        "tiket", 
        "paket",
        "date",
        "status",
        "kondisi"
    ];

}
