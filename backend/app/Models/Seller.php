<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
    ];
//
//    public static $validations = [
//        'create' => [
//            'name' => 'required',
//            'email' => 'required|unique:sellers',
//        ],
//        'update' => [
//            'name' => 'required',
//            'email' => 'required|unique:sellers',
//        ]
//    ];

    public static function rules($id=0, $merge=[]) {
        return array_merge(
            [
                'name' => 'required',
                'email' => 'required|email|unique:sellers'. ($id ? ",id,$id" : ''),
            ],
            $merge);
    }
}
