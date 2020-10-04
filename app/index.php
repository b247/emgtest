<!DOCTYPE html>
<html lang="en">
	<head>
		<title>emgTest</title>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta content='width=device-width,initial-scale=1,minimum-scale=0.5,maximum-scale=5,user-scalable=yes,minimal-ui' name='viewport'/>

	    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon.png">

	    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css?v=4.5.0">
	    <link rel="stylesheet" href="/assets/css/vendor/mdb.lite.min.css?v=4.19.1">

	    <script defer src="/assets/jslibs/vendor/jquery.min.js?v=3.4.1"></script>
	    <script defer src="/assets/jslibs/vendor/forms-free.min.js?v=4.19.1"></script>
	    <script defer src="/assets/jslibs/framework.js?v=1.0.0"></script>
	    
	    <script defer src="/modules/planner/jslibs/main.js?v=1.0.0"></script>

	</head>

	<body>

		<section class="my-5">
		    <h2 class="h1-responsive font-weight-bold text-center mt-5">Trip planning - tickets (re)order</h2>
		    <p class="text-center w-responsive mx-auto mb-5">Add your trip tickets bellow and I'll redraw the planner for you.</p>
		</section>
		
		<section class="my-5 tickets-form">
		    <div class="row justify-content-around p-0 m-0">

		        <div class="col-md-8 my-2">
		            <form id="ticketsToSort" action="" method="POST">

		                <section id="tickets"></section>
		                	
		                <div class="text-center">
		                	<a id="addTicket" class="btn btn-success">Add ticket</a>
			                <button type="submit" class="btn btn-primary">Show me the planner</button>
			            </div>
			            
		            </form>
		            
		            <div id="planner" class="mt-5"></div>

		        </div>

		    </div>

		</section>

	</body>
</html>