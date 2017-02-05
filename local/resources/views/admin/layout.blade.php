<!DOCTYPE html>
<html >
    
<!-- Mirrored from mara.groupfivesoftware.com/general.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jan 2017 18:44:24 GMT -->
<head lang="en">
        <meta charset="UTF-8">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Mara Admin Templates">
        <title>VEAGN - @yield('title')</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="stylesheet" href="{{url('public/css/material-design-iconic-font.css')}}">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{url('public/css/mara.min.css')}}"  media="screen"/>
        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>

         <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
        <script type="text/javascript" src="{{url('public/js/materialize.js')}}"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
        <script src="{{url('public/js/libs/sparklines/jquery.sparkline.min.js')}}" type="text/javascript"></script>
         <script src="{{url('public/js/maramain.js')}}" type="text/javascript"></script>
         <script src="{{url('public/js/mara.min.js')}}" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
        
        <script src="{{url('public/js/tinymce.min.js')}}"></script>
         <script src="{{url('public/js/ckeditor/ckeditor.js')}}" type="text/javascript"></script>

<!-- Include JS file. -->
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.4.2/js/froala_editor.min.js'></script>

        
    </head>
<body class="dark-scheme floating-header">
<div class="page-loader-container"><div class="dizzy-gillespie"></div></div>
<div class="wrapper vertical-sidebar" id="full-page">
	   @include('admin.menu')
       @yield('content')
	</div>

  		
        <!--<script type="text/javascript" src="assets/js/highcharts.min.js"></script>-->
    
</body>

<!-- Mirrored from mara.groupfivesoftware.com/general.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jan 2017 18:44:30 GMT -->
</html>