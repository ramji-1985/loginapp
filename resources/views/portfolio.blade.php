@extends('layout')
  
@section('content')
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 50%;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-6"><div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="https://bangaloretourism.in/images/v2/headers/lalbagh-botanical-garden-bangalore-timings-entry-fee-bangalore-tourism-header-cr-mbell-02.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc"><div class="row">
      <div class="col-sm-6">By Ganesh</div>
      <div class="col-sm-6">100 views</div>
  </div></div>
</div></div>

<div class="col-sm-6"><div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="https://karnatakatourism.org/wp-content/uploads/2021/09/Lal-Bagh-Garden.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc"><div class="row">
      <div class="col-sm-6">By Ganesh</div>
      <div class="col-sm-6">100 views</div>
  </div></div>
</div></div>
       


    </div>
     <div class="row">
        <div class="col-sm-6"><div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="https://bangaloretourism.in/images/v2/headers/bangalore-palace-timings-entry-fee-bangalore-tourism-header-cr-amit-rawat.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc"><div class="row">
      <div class="col-sm-6">By Ganesh</div>
      <div class="col-sm-6">100 views</div>
  </div></div>
</div></div>

<div class="col-sm-6"><div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="https://karnatakatourism.org/wp-content/uploads/2020/06/mysore-palace-1.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc"><div class="row">
      <div class="col-sm-6">By Ganesh</div>
      <div class="col-sm-6">100 views</div>
  </div></div>
</div></div>
       


    </div>
  

</div>
@endsection