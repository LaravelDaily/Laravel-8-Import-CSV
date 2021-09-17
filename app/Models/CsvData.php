<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CsvData extends Model
{
    protected $fillable = ['csv_filename', 'csv_header', 'csv_data'];
}