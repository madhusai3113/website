<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div ng-app="myapp" ng-controller="myctrl">
 	<p>Name: <input type="text" ng-model="name"></p>
 	<p>{{name}}{{90+90}}</p>
</div>
<script type="text/javascript">
	var app = angular.module("myapp",[]);
	app.controller('myctrl',function($scope) {
		$scope.name="jaffa";
	})
</script>
</body>
</html>