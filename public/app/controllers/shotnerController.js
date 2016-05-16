app.controller('shotnerController', function($scope, $http, API_URL,$window) {
	
		
		$scope.results = [];
	

		  
	$scope.shortUrl=function(state,id)
	{
		 
		 //console.log($scope.inputs);
		 var url = API_URL + "front/longurl";
		 $http({
			 method:'POST',
			 url:url,
			 data:$.param($scope.inputs),
			 headers:{'Content-Type':'application/x-www-form-urlencoded'}
		 }).success(function(response){
			 
			 if(response.code==200)
			{
				$scope.msg = response.msg;
				$scope.results.push(response.urls);
				$scope.errors = false;
				$scope.currentRecord={};
				//console.log($scope.results);
				
			}else{
				
				$scope.errors = response.errors;
				$scope.msg =false;
				$scope.currentRecord={};
				 
			}
			// $(window).scrollTop(50);
		 }).error(function(response) {
            //console.log(response);
            alert('This is embarassing. An error has occured.');
        }); 
	}
	
});



