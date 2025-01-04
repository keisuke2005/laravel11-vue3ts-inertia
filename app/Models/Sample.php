<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\SampleFactory;

class Sample extends Model
{
    /** @use HasFactory<SampleFactory> */
    use HasFactory;

    protected $table = 'samples';

    protected $fillable = [
        'sample_num',
        'sample_str',
    ];
}