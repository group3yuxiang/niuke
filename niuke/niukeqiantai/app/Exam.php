<?php
 
namespace App;
 
use Jenssegers\Mongodb\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;
class Exam extends Eloquent{
 
//protected $connection='mongodb';
protected $collection='exam';
 
}