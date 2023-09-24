<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fundi extends Model
{
    use HasFactory;
    protected $fillable = [
        'jinakwanza',
        'jinakati',
        'jinamwisho',
        'gender',
        'dob',
        'uraia',
        'nida',
        'elimu',
        'uzoefu',
        'mkoa',
        'wilaya',
        'kata',
        'mtaa',
        'mji',
        'phone1',
        'phone2',
        'email',
        'uvtaasisi',
        'jinamdhamini',
        'uhusianomdhamini',
        'nambamdhamini',
    ];
}
