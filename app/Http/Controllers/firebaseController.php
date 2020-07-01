<?php

namespace App\Http\Controllers;
require '../vendor/autoload.php';
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Symfony\Component\Cache\Simple\FilesystemCache;
putenv('SUPPRESS_GCLOUD_CREDS_WARNING=true');

class firebaseController extends Controller
{

  public function firebaseConfig(){
    $firebase = (new Factory)
    ->withServiceAccount('firbase.json')
    ->withDatabaseUri('https://test-5458d.firebaseio.com/');

    $database=$firebase->createDatabase();
    $reference = $database->getReference("user");

    $key = $reference->push()->getKey();

    return $reference;
  }
  public function get(){

    $snapshot =$this->firebaseConfig()->getSnapshot();
    $arr=[];
    $data=array();
    //dd(($snapshot->getValue()));

    //return  response()->json($snapshot->getValue());
    foreach ($snapshot->getValue()as $key => $value) {
      $arr["date"]= $value["date"];
      $arr["lat"]= $value["lat"];
      $arr["lng"]= $value["lng"];
      $arr["name"]= $value["name"];
      $arr["lngn"]= $value["lngn"];
      $arr["latn"]= $value["latn"];
      $data[]=$arr;
    }
    return ($data);
  }






  public function set(){
    //return  response()->json($snapshot->getValue());
    $add=$this->firebaseConfig()->getChild("mmmm")->set([
    'date'=>'52',
    'name'=>'mossstafa',
    'lat'=>'79.11',
    'lng'=>'29.33',
    'latn'=>"0",
    'lngn'=>"0",
    ]);
    $snapshot =$this->firebaseConfig()->getSnapshot();
    dd(($snapshot->getValue()));
  }



  public function update(){

    $snapshot =$this->firebaseConfig()->getSnapshot();

    $add=$this->firebaseConfig()->getChild("mmmm")->update([

    'latn'=>'70.11',
    'lngn'=>'79.33'
    ]);
    dd(($snapshot->getValue()));
  }
}
