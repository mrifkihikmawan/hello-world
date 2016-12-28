<!DOCTYPE html>
<html ng-app="api">
<head>
	<title>Test Angular</title>
</head>
<script type="text/javascript" src="<?php echo base_url();?>assets/angular.min.js"></script>
<body>
	<div ng-controller="USER">
		<table class="border">
	<thead>
		<tr>	
			<td class="border">ID</td>
			<td class="border">NAMA</td>
			<td class="border">PASSWORD</td>
			<td class="border">FLAG</td>
		</tr>
	</thead>
	<tbody>
		<tr ng-repeat="item in isi">
			<td class="border"><a href="">{{item.id}}</a></td>
			<td class="border">{{item.id}}</td>
			<td class="border">{{item.nama}}</td>
			<td class="border">{{item.password}}</td>
			<td class="border">{{item.flag}}</td>
		</tr>
	</tbody>
</table>
	</div>
<script type="text/javascript">
	var app = angular.module('api',[]);

	app.controller('USER',function($scope,$http){
		$http.get("http://localhost/rifki/ki-bc/index.php/angular/getAll").then(function(res){
			$scope.isi = res.data;
			console.log("$scope.isi",$scope.isi.data);
			console.log("test--->",res);
		});
	});
</script>
</body>
</html>