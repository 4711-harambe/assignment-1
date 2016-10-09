<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>{pagetitle}</title>
                <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
                <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
	</head>
	<body>
            <!-- Loads the navbar -->
            <div class="navbar">
                <div class="navbar-inner">
                   {menubar} 
                </div>
            </div> 
            <!-- Loads the page content --> 
            <div id="container">
                {content}
                <p class="footer">Page rendered in <strong>{elapsed_time}</strong> 
                    seconds. {ci_version}</p>
            </div>
	</body>
</html>