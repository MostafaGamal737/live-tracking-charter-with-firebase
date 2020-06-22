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

  public function get(){

    $firebase = (new Factory)
    ->withServiceAccount('firbase.json')
    ->withDatabaseUri('https://test-5458d.firebaseio.com/');

    $database=$firebase->createDatabase();
    $reference = $database->getReference("user");

    $key = $reference->push()->getKey();
    $snapshot = $reference->getSnapshot();
    $arr=[];
    $data=array();
    //dd(($snapshot->getValue()));

    //return  response()->json($snapshot->getValue());
    foreach ($snapshot->getValue()as $key => $value) {
      $arr["date"]= $value["date"];
      $arr["lat"]= $value["lat"];
      $arr["lng"]= $value["lng"];
      $arr["name"]= $value["name"];
      $data[]=$arr;
    }
    return ($data);
  }






  public function set(){
    $firebase = (new Factory)
    ->withServiceAccount('firbase.json')
    ->withDatabaseUri('https://test-5458d.firebaseio.com');

    $database=$firebase->createDatabase();

    $reference = $database->getReference("user");
    $key = $reference->push()->getKey();
    $snapshot = $reference->getSnapshot();



    //return  response()->json($snapshot->getValue());
  $add=$reference->getChild("dkj")->set([
      'date'=>'52',
      'name'=>'noor',
      'lat'=>'62.11',
      'lng'=>'39.33'
    ]);
      dd(($snapshot->getValue()));
  }
}
