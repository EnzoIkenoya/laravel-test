<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'fullname',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion'
    ];
    public static $rules = array(
        'last_name' => 'required',
        'first_name' => 'required',
        'gender' => 'required',
        'email' => 'required|max:255',
        'postcode' => 'required',
        'address' => 'required|max:255',
        'building_name' => 'max:255',
        'opinion' => 'required|max:120'
    );
}