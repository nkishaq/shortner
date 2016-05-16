<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="_token" content="{{ csrf_token() }}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shortner</title>    
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> 
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
	body{ background:url({{asset('img/bg.jpg')}});
	}
	.form-control{ height:50px; border-radius:0px !important; }
	.button-search{ /*width:100%; height:100%; background:hsla(0,0%,100%,0.30); color:#000000;*/ border:none; padding:14px 40px; border-radius:0px !important;}
	.nav a{ color:#000000 !important;}
	.box{ width:100%; min-height:60px; padding:10px; float:left; border:1px solid #FFFFFF; margin-top:30px; background:hsla(0,0%,100%,0.33);}
	.footer{ position:absolute;  left:0; bottom:0; right:0; border-top:1px solid #FFFFFF; padding:10px; color:#FFFFFF;}
	.navbar-toggle{ background-color:#000000 !important;}
	
	[ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
	display: none !important;
}
	
	</style>

  </head>
  <body ng-app="shortner">
  
	<div class="container-fluid" style="background:hsla(0,0%,100%,0.50); border-bottom:1px solid #FFFFFF;">
	   <div class="container">

		  <!-- Static navbar -->
		  <nav class="navbar">
			<div class="container-fluid">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" style="color:#000000;">Shortner</a>
			  </div>
			  <div id="navbar" class="navbar-collapse collapse">
			   
				<ul class="nav navbar-nav navbar-right">
				  <li class="active"><a href="./">Home <span class="sr-only">(current)</span></a></li>
				  <li><a href="#">About</a></li>
				  <li><a href="#">FAQ</a></li>
				</ul>
			  </div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		  </nav>
		</div>
		</div>
		
		
		@yield('content')
		
		</div>
    
    
    <!--<div class="container-fluid footer text-center">
    Copyright © 2016. All rights reserved
    </div>-->
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	 <script src="{{asset('app/lib/angular/angular.min.js')}}"></script>
	 <script src="{{asset('app/app.js')}}"></script>
	
    @yield('script')
  </body>
</html>