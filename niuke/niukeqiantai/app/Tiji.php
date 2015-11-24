<?php
 
namespace App;
 
use Jenssegers\Mongodb\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;
class Tiji extends Eloquent{
 
//protected $connection='mongodb';
protected $collection='tiji';
 
}