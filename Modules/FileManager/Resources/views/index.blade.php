@extends('layouts/contentLayoutMaster')


@section('title', 'Home')

@section('page-style')
  {{-- Page Css files --}}

  <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endsection

@section('content')
<div id="user-profile">

  <!-- profile header -->

  <!--/ profile header -->

  <div class="row">

  <div style="height: 100vh;">
    <div id="fm"></div>
</div>

  </div>

</div>
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

