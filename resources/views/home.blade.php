@extends('layouts.app')

@section('content')

  <div class="container" >

    <div class="row justify-content-md-center">
      <div class="col-2">

        <button type="button" class="btn btn-info" style="height:50px;margin-left:8px">today</button>
      </div>
      <div class="col-2">

        <button type="button" class="btn btn-info" style="height:50px;margin-left:8px">last manth</button>
      </div>
      <div class="col-2">

        <button type="button" class="btn btn-info" style="height:50px;margin-left:8px">last year</button>
      </div>
      <div class="col-2">

        <button id="custom" type="button" class="btn btn-info" style="height:50px;margin-left:8px;margin-right:100px;">custom</button>
      </div>

      <div id="cust" style="display: none" >

        <label for="example-date-input" class="col-2 col-form-label">From</label>
        <div class="col-lg-10">
          <input class="form-control" type="date" value="2011-08-19" >
        </div>


        <label for="example-date-input" class="col-2 col-form-label">to</label>
        <div class="col-lg-10">
          <input class="form-control" type="date" value="2011-08-19" >
        </div>
        <div class="col-lg-10">
          <button class="btn btn-info" type="button" name="button">search</button>
        </div>

      </div>
    </div>
    <hr style="width:500px;">
    <div class="row justify-content-md-center">
      <div class="justify-content-md-center " style="width:300px;">
        <span class="" > <h1>All records</h1></span>
      </div>
    </div>
    <hr style="width:500px;">
    <div class="row justify-content-md-center"id="box">
      <div class="col-lg-2 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
          <h3 class="box-title chart">Total Visits</h3>
          <ul class="list-inline two-part">
            <li>
              <div id="sparklinedash"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">659</span></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
          <h3 class="box-title chart">download App</h3>
          <ul class="list-inline two-part">
            <li>
              <div id="sparklinedash2"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">500</span></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
          <h3 class="box-title chart">sales</h3>
          <ul class="list-inline two-part">
            <li>
              <div id="sparklinedash3"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
          <h3 class="box-title chart">subscriptions</h3>
          <ul class="list-inline two-part">
            <li>
              <div id="sparklinedash4"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
          <h3 class="box-title chart">google ads</h3>
          <ul class="list-inline two-part">
            <li>
              <div id="sparklinedash5"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
          <h3 class="box-title chart" >facebook</h3>
          <ul class="list-inline two-part">
            <li>
              <div id="sparklinedash6"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
          </ul>
        </div>
      </div>

    </div>

    <hr style="width:900px;">
    <div class="row justify-content-md-center">
      <div class="justify-content-md-center " style="width:300px;">
        <span class=""> <h1>today records</h1></span>
      </div>
    </div>

    <hr style="width:500px;">
    <div class="row justify-content-md-center"id="box">
      <div class="col-lg-2 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
          <h3 class="box-title chart">Total Visits</h3>
          <ul class="list-inline two-part">
            <li>
              <div id="sparklinedash7"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">659</span></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
          <h3 class="box-title chart">download App</h3>
          <ul class="list-inline two-part">
            <li>
              <div id="sparklinedash8"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">869</span></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
          <h3 class="box-title chart">sales</h3>
          <ul class="list-inline two-part">
            <li>
              <div id="sparklinedash9"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
          <h3 class="box-title chart">subscriptions</h3>
          <ul class="list-inline two-part">
            <li>
              <div id="sparklinedash10"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
          <h3 class="box-title chart">google ads</h3>
          <ul class="list-inline two-part">
            <li>
              <div id="sparklinedash11"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
          <h3 class="box-title chart" >facebook</h3>
          <ul class="list-inline two-part">
            <li>
              <div id="sparklinedash12"></div>
            </li>
            <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
          </ul>
        </div>
      </div>

    </div>
    <hr style="width:900px;">
    <div class="row ">

      <div class="col-md-3">
        <div class="card">
          <div class="card-header">companies </div>

          <div class="card-body">
            <label for="">company name : totall</label>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">maps</div>

          <div class="card-body">
            <input type="text" class="form-control"  placeholder="Search " id="searchmap">
            <input type="hidden" class="form-control" id="lat"name="lat">
            <input type="hidden" class="form-control" id="lng"name="lng">
            <div id="mapContainer" style="width:100%;height:400px;"></div>
            <h2>life trace map</h2>
            <div id="map-canvas" style="width: 100%; height: 400px;"></div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">rooms</div>

          <div class="card-body">
            <label for="">room name : totall</label>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=your API key&libraries=places"
type="text/javascript"
>
</script>


</script>
<script src="https://www.gstatic.com/firebasejs/7.15.1/firebase.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.15.1/firebase-analytics.js"></script>
<script type="text/javascript" src="{{asset('js/map.js')}}"/></script>
<script type="text/javascript" src="{{asset('js/search.js')}}"/></script>
<script type="text/javascript">
  var firebaseConfig = {
    apiKey: "AIzaSyAjv-nKvdFxsMXcmAdbcRpl7F5-AU4SlvU",
    authDomain: "test-5458d.firebaseapp.com",
    databaseURL: "https://test-5458d.firebaseio.com",
    projectId: "test-5458d",
    storageBucket: "test-5458d.appspot.com",
    messagingSenderId: "573948303160",
    appId: "1:573948303160:web:9d639639ab0970b7ff53cd",
    measurementId: "G-W6HCZ1PJP7"
  };
  firebase.initializeApp(firebaseConfig);
  var database = firebase.database();
  firebase.analytics();
  // Initialize Firebase
  var starCountRef = firebase.database().ref('user');
  starCountRef.on('value', function(snapshot) {
    initialize();
  });
</script>
