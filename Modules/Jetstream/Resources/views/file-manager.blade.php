@extends('layouts/contentLayoutMaster')

@section('title', 'Home')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endsection

@section('content')


<!-- Dashboard Analytics Start -->
<section >
  <div class="row">

    <div class="col-md-12 ">

      <div id="fm" ></div>

    </div>

  </div>
</section>


  <!-- <div class="row">
    <div class="col-12">
  
     
      
    </div>
  </div> -->

@endsection

@section('page-script')
  {{-- Page js files --}}

  <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
  <script>
    $(document).ready(function () {
      var node = document.querySelector('[title="Grid"]');
    node.click();
});
  </script>
@endsection