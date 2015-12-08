<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="Football,Soccer,UEFA,EURO,2016,Group Stage,draw,simulator">
		<meta name="description" content="It&#39;s a simulator of the UEFA EURO 2016 final draw.">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0">
		<meta name="format-detection" content="telephone=no">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/common.css">
		<link rel="stylesheet" href="css/customize.css">
		<link rel="icon" type="image/png"
	       href="http://liveduel.com/rugbyworldcup/static/img/favicon.png" />
		<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<title>UEFA EURO 2016 Final Draw Simulator</title>
		<style type="text/css" media="screen">
			#header-layout{
                 width:80%;
                 margin: auto;
                 text-align:center;
            }
            .main{
            	    position: absolute;
				    margin: auto;
				    width: 100%;
            }
            #left {
			    float:left;
			    width:30%;
			    height: 20px;
			    
			}

			#center {
			    display: inline-block;
			    margin:0 auto;
			    width:24%;
			    height: 20px;
			    margin-top: 90px;
			    font-weight: bold;
			    text-shadow: 2px 2px #FF0000;
			    font-size: 24px;
			}

			#right {
			    float:right;
			    width:30%;
			    height: 20px;
			 
			}
		</style>		
	</head>
	<body>
	<div class="main">
	  <div id="header-layout">
			<div id="left">
		       <img src="/img/logo2016.png" width="250px" height="150px" />
		    </div>
		    <div id="center">
		        EURO 2016 Draw Simulator
		    </div>
		    <div id="right">
		        <img src="/img/logo2016.png" width="250px" height="150px" />
		    </div>
		</div>
        @yield('content')
	</div>
	  
	   
	</body>
</html>