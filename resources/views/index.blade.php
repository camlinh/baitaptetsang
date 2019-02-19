<!DOCTYPE html>
<html lang="en">
<head>
<title>thực hành tốt nghiệp</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Lingua project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href={{asset('')}}>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="css/nongsan.css" type="text/css"/>
<link rel="stylesheet" href="css/nongsan.css" type="text/css"/>

</head>
<body>

<div class="super_container">

	<!-- Header -->
	@include('block/header')
	<!-- Menu -->

	
	@yield('content')
	<!-- Footer -->

	@include('block/footer')
</div>



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
</script>
<script>
	$(document).ready(function(){
		$('.carousel-control').on('click',function(e){
			e.preventDefault();
		});
	});

	
</script>
</body>
</html>