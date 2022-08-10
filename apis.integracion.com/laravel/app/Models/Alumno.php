<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID; 
class Alumno extends Model
{
     use HasUUID;

     protected $table = 'Alumnos';
     protected $primaryKey = 'id';
     public $incrementing = false;
     protected $keyType = 'string';
     protected $uuidFieldName = 'id';
}