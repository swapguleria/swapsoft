
<link href="{{ url('/css/app.css') }}" rel="stylesheet">

{{-- Bootstrap 3.3.6 --}}
<link rel="stylesheet" href="{{ URL::to('/css/bootstrap.min.css') }}">
{{-- DataTables --}}
<link rel="stylesheet" href="{{ URL::to('/plugins/datatables/dataTables.bootstrap.css') }}">

{{-- Bootstrap Editor--}}
<link rel="stylesheet" href="{{ URL::to('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

{{-- Font Awesome --}}
<link rel="stylesheet" href="{{ URL::to('/css/font-awesome.min.css') }}">
{{-- Font Awesome --}}
<link rel="stylesheet" href="{{ URL::to('/css/jquery-ui.css') }}">
{{-- Ionicons --}}
<link rel="stylesheet" href="{{ URL::to('/css/ionicons.min.css') }}">
{{-- Theme style --}}
<link rel="stylesheet" href="{{ URL::to('/css/swap.min.css') }}">
{{-- Swap Development Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. --}}
<link rel="stylesheet" href="{{ URL::to('/css/skins/_all-skins.min.css') }}">
{{-- Select2 --}}
<link rel="stylesheet" href="{{ url('/plugins/select2/select2.min.css') }}">

@stack('css')