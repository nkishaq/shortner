
<div  ng-show="errors" ng-cloak class="alert alert-danger fade in">
    <ul>
            <li ng-repeat="(key, value) in errors"><%value.toString()%></li>
   </ul> 
    </div>
    
    <div  ng-show="msg" ng-cloak class="alert alert-success fade in">
    <ul>
            <li ng-repeat="(key, value) in msg"><%value.toString()%></li>
   </ul> 
    </div>