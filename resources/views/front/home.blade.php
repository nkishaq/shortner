 @extends('app')
 @section('content')
 <div class="container" ng-controller="shotnerController">
	
	<div class="row" >
	
		<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
		
		</div>
		
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8" style="margin-top:80px;">
		@include('validation_message')
		<h2 style="text-align:center; margin-bottom:30px;">SHORTEN. SHARE</h2>
		
		<form name="frmShortern">
			<!--search box-->
			{{csrf_field()}}
			<div class="col-xs-8 col-sm-10 col-md-10 col-lg-10" style="margin:0px; padding:0px;">
			<input type="text" class="form-control" ng-model="inputs.long_url" name="long_url" required >
			</div>
			
			<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2" style="margin:0px; padding:0px;">
			<button  ng-disabled="frmShortern.$invalid" ng-click="shortUrl()" class="btn button-search btn-success">SHORTEN</button>
			</div>
			
		</form>
		<div ng-cloak ng-show="results.length">
		<div ng-repeat="result in results" class="box">
		<span><%result.url_long%></span><br>
		<a target="_blank" href="{{url()}}/<%result.url_short%>">{{url()}}/<%result.url_short%> </a>
		</div>
		
		</div>
		</div>
    
    </div>
    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
    
    </div>
</div>	
@endsection

@section('script')
	<script src="{{asset('app/controllers/shotnerController.js')}}"></script>
@endsection

