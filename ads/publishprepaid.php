<?php

$googleappsmobileappsinstallapps88888844 = "http://$_SERVER[HTTP_HOST]/";

?>

<head>
<title></title>
<meta name='description' content=''>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="robots" content="index,nofollow">
<link rel="shortcut icon nofollow" href="http://mobile84.herokuapp.com/googleappslogoapps88888844.png" type="image/x-icon"/>
</head>

<style media="screen" type="text/css">

html,body
{
margin:0px;
padding:0px;
font-family: Varela Round, sans-serif;
background-color:#dddddd;
}

.googleappsmobileappsinstallapps8884
{
background-color: #ffffff;
height: 504px;
margin:0 auto;
margin-top:172px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
position:absolute;
top:0px;
margin:auto;
position:absolute;
left:0;
bottom:0;
right:0;
padding:34px;
}

.input1
{
height:44px;
margin:0 auto;
width:100%;
font-size:18px;
padding:12px;
border-style:solid;
border-color:#dddddd;
border-width:1px;
}

.input2
{
height:44px;
margin:0 auto;
width:100%;
font-size:18px;
padding:12px;
border-radius:4px;
border-style:solid;
border-color:#dddddd;
}

.googleapps1
{
padding:12px;
}

.googleapps2
{
padding:12px;
}

.googleappsuserapps84
{
margin-bottom:6px;
}

.googleappsuserappsgoogleapps84
{
margin-left:12px;
margin-bottom:6px;
}

.googleappsuserappsregisterapps84
{
font-size:34px;
padding:12px;
padding-bottom:0px;
font-size:24px;
font-weight:400;
}

.googleappsuserappsregisterappsgoogleapps84
{
padding:12px;
padding-top:0px;
color: rgba(0,0,0,.87);
direction: ltr;
font-family: 'Roboto',sans-serif;
font-size: 14px;
}

#googleappsinstallapps84
{
background-color:#4285f4;
border-style:solid;
border-width:1px;
border-radius:4px;
padding-top:8px;
padding-bottom:8px;
padding-left:18px;
padding-right:18px;
color:#ffffff;
position:absolute;
right:18px;
-webkit-user-select: none;
-webkit-transition: background .2s .1s;
transition: background .2s .1s;
border: 0;
-webkit-border-radius: 3px;
border-radius: 3px;
cursor: pointer;
display: inline-block;
font-size: 14px;
font-weight: 500;
min-width: 4em;
outline: none;
overflow: hidden;
text-align: center;
text-transform: uppercase;
-webkit-tap-highlight-color: transparent;
z-index: 0;
margin-top:-12px;
}

.googleapps2
{
padding-top:0px;
right:54px;
position:absolute;
}

@media screen and (max-width: 960px)
{
.googleappsmobileappsinstallapps8884
{
}
.googleappsmobileappsinstallapps8884
{
padding:0px;
}
#googleappsinstallapps84
{
margin-left:-108px;
margin-top:-4px!important;
}
.googleappsmobileappsinstallapps888844
{
margin:34px;
}
}

@media screen and (min-width: 960px)
{
.googleappsmobileappsinstallapps8884
{
width:362px;
}
}

@media screen and (max-width: 960px)
{
.googleappsmobileappsinstallapps8884
{
margin:16px;
}
#googleappsinstallapps84
{
right:44px!important;
}
.googleapps2
{
padding-top:0px;
right:18px;
position:absolute;
margin-top:-18px;
}
}

.logout84
{
right:18px;
bottom:0px;
position:absolute;
padding:12px;
color:#ffffff;
}

.googleinstallapps84
{
background-color:#dddddd;
width:100%;
height:100%;
top:0px;
}

</style>

<head>
<title>signup</title>
<meta name='description' content=''>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="robots" content="index,nofollow">
<meta name="keywords" content=''>
<link rel="shortcut icon nofollow" href="http://mobile84.herokuapp.com/googleappslogoapps88888844.png" type="image/x-icon"/>
</head>

<?php

$googleapps84 = "<div>$_GET[q]</div>";

$googleapps84 = preg_replace("/\s+/","",$googleapps84);

$googleapps84 = preg_replace("/\s+/S","",$googleapps84);

$googleapps84 = preg_replace("/<div>/","",$googleapps84);

$googleapps84 = preg_replace("/<\/div>/","",$googleapps84);

$googleapps84 = preg_replace('/"/',"",$googleapps84);

?>

<?php

$googleapps888844 = "0.02";

?>

<?php

$google18 = str_replace(" ","+","$_GET[username]");

?>

<?php

$google54 = str_replace(" ","+","$_GET[password]");

?>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<script>

    // Render the PayPal button

    paypal.Button.render({

        // Set your environment

        env: 'production', // sandbox | production

        // Specify the style of the button

        style: {
            label: 'pay'
        },

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create

        client: {
            sandbox:    'AbSAMmVaWjxangJjRs6_DdjyiArPAXaTXZeRpuDUeJ6vpu-q-xR8-Z-xrqroSdnthwMOix2xEH2Elx48',
            production: 'AXvlEjh6LCRoohMskTEkE4RC-IiP5u7TSb1lcpZmegdbrmIm4WAjd1oJASYIimnfGSAqkS2mGyIAQuUF'
        },

        // Wait for the PayPal button to be clicked

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '<?php echo "$googleappsinstallapps888844"; ?>', currency: 'USD' }
                        }
                    ]
                }
            });
        },

        // Wait for the payment to be authorized by the customer

        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                
                  document.write('<a href="http://mobile84.herokuapp.com/ads/payment.php?paymentapps8884=<?php echo "$googleapps8884"; ?>&url8884=<?php echo "http://$_SERVER[HTTP_HOST]/ads/index.php?username=$_GET[username]&password=$_GET[password]"; ?>&username=<?php echo "$_GET[username]"; ?>&password=<?php echo "$_GET[password]"; ?>" id="googleappsmobileappsinstallapps8884">googleapps8884</a>');

                  document.getElementById("googleappsmobileappsinstallapps8884").click();

             });
        }

    }, '#paypal-button-container');

</script>

<style>

.container {
    position: relative;
    width: 95%;
    margin: 0 auto;
    line-height: 50px;
}

.container .circle1 {
        height: 12px;
        width: 12px;
        background-color:#4285F4;
        border-radius: 50%;
        text-align: center;
        display: block;
        float:left;
        margin: 0 auto;
  margin-right:4px;
    }

.container .circle2 {
        height: 12px;
        width: 12px;
        background-color:#EA4335;
        border-radius: 50%;
        text-align: center;
        display: block;
        float:left;
        margin: 0 auto;
  margin-right:4px;
    }

.container .circle3 {
        height: 12px;
        width: 12px;
        background-color:#FBBC05;
        border-radius: 50%;
        text-align: center;
        display: block;
        float:left;
        margin: 0 auto;
  margin-right:4px;
    }

.container .circle4 {
        height: 12px;
        width: 12px;
        background-color:#34A853;
        border-radius: 50%;
        text-align: center;
        display: block;
        float:left;
        margin: 0 auto;
  margin-right:4px;
    }

</style>

<div class="googleappsmobileappsinstallapps888844">

<div class="googleappsmobileappsinstallapps88884474">

<div class="googleappsmobileappsinstallapps8884">

<div class="googleappsmobileappsinstallapps8444">

<div class="container">
<div class="circle1">
&nbsp
</div>
<div class="circle2">
&nbsp
</div>
<div class="circle3">
&nbsp
</div>
<div class="circle4">
&nbsp
</div>
</div>

<div class="googleappsuserappsregisterapps84">
Publish your ad
</div>

<div class="googleappsuserappsregisterappsgoogleapps84">
publish your ad
</div>

<div class="googleappsuserappsregisterappsgoogleapps84">
Pay only 0.02 cent per click on Gosearch
</div>

<div class="googleappsuserappsregisterappsgoogleapps84">
start advertising with only $0.02 cent
</div>

<div class="googleapps1">

<div class="googleappsuserapps84">
</div>

<div id="paypal-button-container" style="margin-left:-8px;"></div>

</div>

</div>

</div>

</div>

</div>

<?php

$googlapps8884 = file_get_contents("http://mobile84.herokuapp.com/ads/ads.sh");

preg_match_all("/<div class=\'$_GET[username]\' id=\'$_GET[password]\'>(.*?)<\/div>/s", $googlapps8884, $googleapps84);
$google8884 = $googleapps84[0][0];

?>

<?php

if(preg_match("/<div class='$_GET[username]' id='$_GET[password]'>/","$google8884"))

{

?>

<a href='<?php echo "http://mobileapps8884.herokuapp.com/ads/index.php?username=$_GET[username]&password=$_GET[password]"; ?>' id='googleapps88888844'></a>

<script>

document.getElementById("googleapps88888844").click();

</script>

<?php

}

?>

<script type='text/javascript'>
function myFunction() {
    var x = document.getElementsByTagName("a");
    var i;
    for (i = 0; i < x.length; i++) {
      if (location.hostname!=x[i].hostname){
        x[i].rel = "nofollow";
        x[i].target = "_blank";
        x[i].title = "Click to open in new window";

}}}

mft=setTimeout("myFunction()",0);

function LoadEvent(func){

var oldonload = window.onload;

if (typeof window.onload != 'function'){
window.onload = func;
} 
else{
window.onload = function()
{
if(oldonload)
{oldonload();}
func();}}}  
LoadEvent(function(){
myFunction(); 
});
</script>

