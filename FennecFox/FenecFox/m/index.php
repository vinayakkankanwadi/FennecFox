<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>jQuery Mobile Web App</title>
<link href="../jquery-mobile/jquery.mobile-1.0a3.min.css" rel="stylesheet" type="text/css"/>
<script src="../jquery-mobile/jquery-1.5.min.js" type="text/javascript"></script>
<script src="../jquery-mobile/jquery.mobile-1.0a3.min.js" type="text/javascript"></script>
<!-- This reference to phonegap.js will allow for code hints as long as the current site has been configured as a mobile application. 
	 To configure the site as a mobile application, go to Site -> Mobile Applications -> Configure Application Framework... -->
<script src="/phonegap.js" type="text/javascript"></script>
</head> 
<body> 

<div data-role="page" id="page">
	<div data-role="header" data-theme="a">
		<center><img src="img/LogoM.png" width="282" height="180"></center>
	</div>
	<div data-role="content">
    		<center><img src="img/Text.png" width="321" height="387"></center>
		</ul>		
	</div>
	<div data-role="footer"> <center>
  <img src="img/NightMB.png" align="middle"  border="0" id='1' onMouseOver="this.src='img/NightMA.png'" onMouseOut="this.src='img/NightMB.png'"/>
  <img src="img/CafeMB.png" align="middle" border="0" id='2' onMouseOver="this.src='img/CafeMA.png'" onMouseOut="this.src='img/CafeMB.png'"/>
  <img src="img/FoodMB.png" align="middle"  border="0" id='4' onMouseOver="this.src='img/FoodMA.png'" onMouseOut="this.src='img/FoodMB.png'"/>
  <img src="img/EntMB.png" align="middle" border="0" id='5' onMouseOver="this.src='img/EntMA.png'" onMouseOut="this.src='img/EntMB.png'"/> 
  <img src="img/LeisureMB.png" align="middle"  border="0" id='3' onMouseOver="this.src='img/LeisureMA.png'" onMouseOut="this.src='img/LeisureMB.png'"/> 
  </center>
	</div>
    <div data-role="footer">
		
   	</div>
    <div data-role="footer">
		<center><img id="AppStore" src="img/AppStoreB.png" width="230" height="50" title="Coming soon to AppStore" onMouseOver="this.src='img/AppStoreA.png'" onMouseOut="this.src='img/AppStoreB.png'" /></center>
   	</div>
</div>

</body>
</html>