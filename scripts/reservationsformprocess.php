<?php



/* Subject and Email Variables */



	$emailSubject = 'Tour Confirmation!';

	$webMaster = 'reservations@privatetoursofvenice.com';

	

	

/* Gathering Data Variable */	

	$nameField = $_POST['name'];

	$lastnameField = $_POST['lastname'];

	$emailField = $_POST['email'];

	$emailverField = $_POST['emailver'];

	$countryField = $_POST['country'];

	$phoneField = $_POST['phone'];

	$personsField = $_POST['persons'];

	$addressField = $_POST['address'];

	$referralsField = $_POST['referrals'];

	$notesField = $_POST['notes'];

	

	$body = <<<EOD

<br><hr><br>

Name: $nameField <br>

Last Name: $lastnameField <br>

Email: $emailField <br>

Email: $emailverField <br>

Country: $countryField <br>

Phone: $phoneField <br>

Number of People: $personsField <br>

Address: $addressField <br>

Referrals: $referralsField <br>

Notes: $notesField <br>

EOD;



	$headers .= "From: $emailField\r\n";

	$headers .= "Content-type: text/html\r\n";

	$success = mail($webMaster, $emailSubject, $body,

$headers);

	

/* Results rendered as HTML */



	$theResults = <<<EOD

<html>

<head>

<meta HTTP-EQUIV="Refresh" CONTENT="2; URL=https://privatetoursofvenice.com">



    <title>Thank you for your request</title>



   

    <style type="text/css">

<!--

.style1 {

	color: #666666

}

-->

    </style>

	

<script language="JavaScript" type="text/JavaScript">

<!--

function MM_findObj(n, d) { //v4.01

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  if(!x && d.getElementById) x=d.getElementById(n); return x;

}



function MM_validateForm() { //v4.0

  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;

  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);

    if (val) { nm=val.name; if ((val=val.value)!="") {

      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');

        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';

      } else if (test!='R') { num = parseFloat(val);

        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';

        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');

          min=test.substring(8,p); max=test.substring(p+1);

          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';

    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }

  } if (errors) alert('The following error(s) occurred:\n'+errors);

  document.MM_returnValue = (errors == '');

}

//-->

</script>

</head>



<body>

 



<!--=== Header ===-->

<div class="header">               

    <div class="container"> 

        <!-- Logo -->       

        <div align="center" >                                             

            <a href="https://privatetoursofvenice.com"><img id="logo-header" src="../assets/img/webp/privatetourslogo.webp" alt="Logo"></a>

        </div><!-- /logo -->        

                                    

                       

    </div><!-- /container -->               

</div><!--/header -->      

<!--=== End Header ===-->

<br><br>



<!--=== Breadcrumbs ===-->

<div class="breadcrumbs margin-bottom-40">

	<div class="container">

        <h1 align="center" class="style1" >Thank you for your confirming your tour. We will get back to you shortly.</h1>

        </ul>

  </div><!--/container-->

</div><!--/breadcrumbs-->



</div><!--/copyright-->	

<!--=== End Copyright ===-->









<script type="text/javascript">



  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-26262488-1']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('httpss:' == document.location.protocol ? 'httpss://ssl' : 'https://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();



</script>

</body>

</html> 

EOD;

echo "$theResults";





?>