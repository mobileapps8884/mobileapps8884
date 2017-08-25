<?php

$mobile = "$_SERVER[REQUEST_URI]";
$mobile = str_replace('/','',$mobile);
$mobile = str_replace('?','',$mobile);
$mobile = str_replace('q=','',$mobile);
$mobile = str_replace('-','+',$mobile);
$mobile = str_replace('&','',$mobile);
$mobile = str_replace('https','',$mobile);
$mobile = str_replace('http','',$mobile);
$mobile = str_replace(':','',$mobile);
$googleapps888844 = "$mobile";
$mobile = preg_replace('/([0-9]+)/','',$mobile);
$mobile = str_replace('search.php','',$mobile);
$mobile = str_replace('logout=1','',$mobile);
$mobile = str_replace('logout','',$mobile);
$mobile = preg_replace('/username=(.*?)$/','',$mobile);
$mobile = preg_replace('/\-+$/','',$mobile);
$mobile = preg_replace('/\++$/','',$mobile);
$mobile = preg_replace('/username/','',$mobile);
$mobile = str_replace('page','',$mobile);
$mobile = str_replace('=','',$mobile);
$installgoogleappsmobileapps84 = "$mobile";

$installappsmobileapps84 = "$mobile";

$mobileappsinstall84 = "$_SERVER[HTTP_HOST]";

$google88884474 = "$_GET[q]";

$google88884474 = preg_replace('/([0-9]+)/','',$google88884474);

$google88884474 = str_replace(' ','+',$google88884474);

$google88884474 = str_replace('-','+',$google88884474);

$google88884474 = preg_replace('/\-+$/','',$google88884474);
$google88884474 = preg_replace('/\++$/','',$google88884474);

$google88884474 = preg_replace('/^\-+/','',$google88884474);
$google88884474 = preg_replace('/^\++/','',$google88884474);

$google88884474 = preg_replace('/\-+/','-',$google88884474);
$google88884474 = preg_replace('/\++/','+',$google88884474);

$googleappsinstallapps84 = str_replace(",","-",$google88884474);
$googleappsinstallapps84 = str_replace(" ","-",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("–","",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("%96","",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(".","-",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(":","-",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("(","-",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace(")","-",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("+","-",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("|","-",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("/","-",$googleappsinstallapps84);
$googleappsinstallapps84 = str_replace("™","-",$googleappsinstallapps84);
$googleappsinstallapps84 = preg_replace("/-/","+",$googleappsinstallapps84);
$googleappsinstallapps84 = preg_replace("/-+/","+",$googleappsinstallapps84);
$google88884474 = preg_replace("/-$/","",$googleappsinstallapps84);

$google88884474 = preg_replace("/\…$/","",$google88884474);

$google88884474 = str_replace("%","",$google88884474);

$google88884474 = str_replace("@","",$google88884474);

$google88884474 = preg_replace('/\++/','+',$google88884474);

$google88884474 = preg_replace("/\+$/","",$google88884474);

$google88884474 = strtolower("$google88884474");

?>

<?php

$myvalue = "$google88884474";
$arr = explode('+',trim($myvalue));
$googleinstallapps888888884444 = $arr[0];

?>

<?php

$string_to_encrypt="$_GET[username]";
$string_to_encrypt = str_replace(" ","+",$string_to_encrypt);
$password="googleappsmobileapps888888884444";

$decrypted_string=openssl_decrypt($string_to_encrypt,"AES-128-ECB",$password);

?>

<?php

$string_to_encrypt8884="$_GET[password]";
$string_to_encrypt8884 = str_replace(" ","+",$string_to_encrypt8884);
$password8884="googleappsmobileapps888888884444";

$decrypted_string8884=openssl_decrypt($string_to_encrypt8884,"AES-128-ECB",$password8884);

?>

<style>

#image-search-results
{
right:0px;
top:0px;
}

</style>

<?php

date_default_timezone_set("America/Chicago");

?>

<?php

$installmobileapps84 = file_get_contents("http://api.bing.com/osjson.aspx?query=$google88884474");

?>

<?php

preg_match_all('/"(.*?)"/', $installmobileapps84, $googleapps84);
$google84 = $googleapps84[0][1];

$google84 = str_replace('"',"",$google84);

$googleinstallgoogleapps84 = "$google84";

$google84 = str_replace(" ","-",$google84);

$google8884 = str_replace("-","+",$google84);

$googleinstallapps88888844 = "$google8884";

?>

<?php

$googleinstall84 = "https://www.bing.com/search?q=$google88884474&qs=n&form=QBLH&sp=-1&pq=$google88884474&sc=8-6&sk=&cvid=334DE9719E0441688090B429D7E802AE";

$ch = curl_init($googleinstall84);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, TRUE);
curl_setopt($ch, CURLOPT_USERAGENT, "Opera/9.80 (X11; Linux i686; Ubuntu/14.10) Presto/2.12.388 Version/12.16");
curl_setopt($ch, CURLOPT_TIMEOUT, 12);
$install8484 = curl_exec($ch);
curl_close($ch);

?>

<?php

function DOMinnerHTML($element) 
{ 
    $innerHTML = ""; 
    $children = $element->childNodes; 
    foreach ($children as $child) 
    { 
        $tmp_dom = new DOMDocument(); 
        $tmp_dom->appendChild($tmp_dom->importNode($child, true)); 
        $innerHTML.=trim($tmp_dom->saveHTML()); 
    } 
    return $innerHTML; 
} 

$doc = new DOMDocument();
$doc -> loadHTML($install8484);
$divs = $doc->getElementsByTagName('li');
foreach($divs as $div) {
    if ($div->getAttribute('class') === 'b_algo') {
        $innerHtml = DOMinnerHTML($div);
    }
}

$DOM = new DOMDocument;
$DOM->loadHTML($innerHtml);

$items84 = $DOM->getElementsByTagName('h2');
$items8884 = $DOM->getElementsByTagName('p');

$googleapps84 = $items84->item(0)->nodeValue;
$googleapps8884 = $items8884->item(0)->nodeValue;

$google84 = mb_convert_encoding($googleapps84,"HTML-ENTITIES","UTF-8");
$google8884 = mb_convert_encoding($googleapps8884,"HTML-ENTITIES","UTF-8");

?>

<html>

<head>
<title><?php echo "$google84"; ?></title>
<meta name='description' content='<?php echo "$google8884"; ?>'>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="robots" content="index,nofollow">
<link rel="shortcut icon nofollow" href="http://mobile84.herokuapp.com/googleappslogoapps88888844.png" type="image/x-icon"/>
</head>

<?php

include "style.css";

?>

<style media="screen" type="text/css">

.signup84
{
position:absolute;
top:24px;
right:24px;
}

</style>

<?php

if(preg_match("/[\W\w]/","$decrypted_string"))

{

?>

<style media="screen" type="text/css">

.logout8884
{
display:none;
}

@media screen and (min-width: 960px)
{
.logout8884
{
display:none;
}
}

</style>

<?php

}

?>

<?php

if(!preg_match("/[\W\w]/","$decrypted_string"))

{

?>

<style media="screen" type="text/css">

.logout84
{
display:none;
}

.circleBase
{
display:none;
}

@media screen and (min-width: 960px)
{
.logout84
{
display:none;
}
}

.logout8884
{
background-color: #4285f4;
border-style: solid;
border-width: 1px;
border-radius: 4px;
padding-top: 8px;
padding-bottom: 8px;
padding-left: 18px;
padding-right: 18px;
margin-left: -40px;
margin-top:0px;
color: #ffffff;
position: absolute;
left:0px;
-webkit-user-select: none;
-webkit-transition: background .2s .1s;
transition: background .2s .1s;
border: 0;
-webkit-border-radius: 3px;
border-radius: 3px;
cursor: pointer;
display: inline-block;
font-size:small;
font-weight:bold;
min-width: 4em;
outline: none;
overflow: hidden;
position: relative;
text-align: center;
-webkit-tap-highlight-color: transparent;
z-index: 0;
text-decoration:none;
}

</style>

<?php

}

?>

<?php

session_start();

?>

<?php if($_GET['logout']==1) session_destroy(); ?>

<div class="signup84">

<a rel='nofollow' class="logout8884" onClick="window.open('http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/register/index.php?q=<?php echo "$_GET[q]"; ?>','_self');">Sign in</a>

<style>

.circleBase {
border-radius: 50%;
behavior: url(PIE.htc); /* remove if you don't care about IE8 */
}

.type1 {
width: 34px;
height: 34px;
background: #1565C0;
border: 2px solid #dddddd;
}
.type2 {
width: 50px;
height: 50px;
background: #ccc;
border: 3px solid #000;
}
.type3 {
width: 500px;
height: 500px;
background: aqua;
border: 30px solid blue;
}

.username84
{
margin-left: 10px;
padding-top: 9px;
color: #ffffff;
}

.username8884
{
margin-left: 10px;
padding-top: 9px;
color: #ffffff;
margin-left: 30px;
padding-top: 26px;
font-size: 34px;
}

@media screen and (max-width: 960px)
{
.circleBase
{
display:none;
}
}

#googleapps8884
{
position:absolute;
right:44px;
top:74px;
background-color:#ffffff;
height:208px;
width:308px;
right:26px;
z-index:4;
box-shadow:0 2px 10px rgba(0,0,0,.2);
border: 1px solid #ccc;
}

.circleBase84 {
border-radius: 50%;
behavior: url(PIE.htc); /* remove if you don't care about IE8 */
margin:24px;
}

.type84 {
width: 96px;
height: 96px;
background: #1565C0;
border: 2px solid #dddddd;
}
.type2 {
width: 50px;
height: 50px;
background: #ccc;
border: 3px solid #000;
}
.type3 {
width: 500px;
height: 500px;
background: aqua;
border: 30px solid blue;
}

.googleappsuserapps8884
{
position:absolute;
top:24px;
left:138px;
font-weight:bold;
font-size:small;
}

.logout84
{
border: 1px solid #c6c6c6;
border-radius: 2px;
font-family: arial,sans-serif;
font-size: small;
background-color: #f8f8f8;
color: #666666;
width: 74px;
text-decoration: none;
text-align: center;
height:22px;
padding-top:6px;
}

.googleappsuserapps88888844
{
width: 100%;
border-style: solid;
position: absolute;
bottom: 0px;
height: 62px;
border-width: 1px;
border-bottom: none;
border-left: none;
border-right: none;
border-color: #cccccc;
background-color:#f8f8f8;
}

</style>

<?php

$googleapps8884 = "$decrypted_string";

$googleapps8884 = strtoupper("$googleapps8884");

$googleapps888844 = "$decrypted_string";

?>

<div class="circleBase type1" onclick="googleapps8884();"><div class='username84'><?php echo "$googleapps8884[0]"; ?></div></div>

</div>

<div id="googleapps8884" style="display:none;">

<div class="circleBase84 type84" onclick="googleapps8884();"><div class='username8884'><?php echo "$googleapps8884[0]"; ?></div></div>

<div class="googleappsuserapps8884">

<?php

echo "$googleapps888844";

?>

</div>

<div class="googleappsuserapps88888844">

<a rel='nofollow' class="logout84" style="position:absolute;bottom:18px;right:18px;" onClick="window.open('/?q=<?php echo $_GET[q]; ?>&logout=1','_self')">Sign out</a>

</div>

</div>

<?php

$installmobileapps84 = rand(84,88888844);

?>

<?php

if(preg_match("/[\W\w]/","$mobile"))

{

?>

<?php

$googleapps84 = "

<style>

html
{
margin-left:0%;
margin:0px;
font-family: arial,sans-serif;
background-color:#ffffff;
}

body
{
margin:0px;
padding:0px;
}

cite
{
color:#006621;
font-size:15.2px;
font-style:normal;
}

.googlemobilegoogleblog
{
margin-left:208px;
margin-bottom:0px;
}

h3
{
font-weight:normal;
color:#1a0dab;
margin:0px;
font-size:18px;
}

h2
{
font-weight:normal;
color:#1a0dab;
margin:0px;
font-size:18px;
}

h3 strong
{
font-weight:normal;
}

h2 strong
{
font-weight:normal;
}

cite strong
{
font-weight:normal;
}

p
{
color:#545454;
font-size:small;
margin:0px;
padding-top: 1px;
padding-bottom:22px;
line-height: 1.4;
}

a
{
color:#1a0dab;
}

h3 a
{
color:#1a0dab;
text-decoration:none;
}

h2 a
{
color:#1a0dab;
text-decoration:none;
}

.installgoogleappsmobileapps84
{
width:100%;
height:108px;
background-color:#fafafa;
position:fixed;
bottom:0px;
left:0px
}

@media screen and (max-width: 960px)
{
.username84
{
display:none!important;
}
}

.installgoogleappsmobileapps8432
{
padding:8px;
}

.installgoogleapps84
{
margin:8px;
background-color:#ffffff;
margin:0px;
width:662px;
}

.installgoogleappsinstallappsgoogleapps84
{
margin:8px;
margin-top:0px;
}

.installgoogleappsinstallappsgoogleapps
{
margin-top:8px;
}

.installgoogleappsinstallappsgoogleapps8432
{
padding:8px;
width:100%;
margin-left:-4px;
}

.installgoogleapps84:hover {
}

.installgoogleapps8432
{
padding-left:24px;
padding-right:16px;
padding-top:0px;
padding-bottom:0px;
background-color:#ffffff;
}

ul
{
display:none;
}

mobileappsinstallapps84
{
display:inline-block;
width:678px;
background-color:#f2f2f2;
}

mobileapps4
{
display:inline-block;
margin:8px;
background-color:#ffffff;
}

.topbar
{
width:100%;
height:122px;
background-color:#fafafa;
top:0px;
border-style:solid;
border-width:1px;
border-left:none;
border-right:none;
border-top:none;
border-color:#ebebeb;
}

.footer
{
width:100%;
height:82px;
background-color:#dddddd;
position:absolute;
left:0px;
margin-top:22px!important;
}

.input
{
margin:0px;
padding:16px;
padding-bottom:0px;
}

#input84
{
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
width:632px;
height:44px;
padding-left:16px;
border:none;
background-color:#ffffff;
color:#000000;
background-color: #fff;
height: 44px;
vertical-align: top;
border-radius: 2px;
box-shadow: 0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08);
transition: box-shadow 200ms cubic-bezier(0.4, 0.0, 0.2, 1);
}

#chatbox
{
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
width:632px;
height:44px;
padding-left:16px;
border:none;
background-color:#ffffff;
color:#000000;
background-color: #fff;
height: 44px;
vertical-align: top;
border-radius: 2px;
box-shadow: 0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08);
transition: box-shadow 200ms cubic-bezier(0.4, 0.0, 0.2, 1);
}

#input84:hover
{
box-shadow: 0 3px 8px 0 rgba(0,0,0,0.2),0 0 0 1px rgba(0,0,0,0.08);
}

#chatbox:hover
{
box-shadow: 0 3px 8px 0 rgba(0,0,0,0.2),0 0 0 1px rgba(0,0,0,0.08);
}

#input84[type='text']
{
font-size:16px;
}

#chatbox[type='text']
{
font-size:16px;
}

mobilegoogleapps84
{
display:inline-block;
margin-left:134px;
width:674px;
}

mobilegoogleappsmobileapps84
{
display:inline-block;
margin-left:134px;
width:674px;
}

mobileinstallapps84
{
display:block;
padding:8px;
}

.test {
  margin: 25px 0;
  width: 52px;
  height: 52px;
  border-radius: 50%;
  border: 6px solid transparent;
  background-size: 100% 100%, 50% 50%, 50% 50%, 50% 50%, 50% 50%;
  background-repeat: no-repeat;
  background-position: center center, left top, right top, left bottom, right bottom;
  background-origin: content-box, border-box, border-box, border-box, border-box;
  background-clip: content-box, border-box, border-box, border-box, border-box;
  transform: rotate(30deg);
  margin:0px;
  background-color:#db4437;
}

.testmobileapps84
{
margin: 25px 0;
  width: 52px;
  height: 52px;
  border-radius: 50%;
  border: 6px solid transparent;
  background-size: 100% 100%, 50% 50%, 50% 50%, 50% 50%, 50% 50%;
  background-repeat: no-repeat;
  background-position: center center, left top, right top, left bottom, right bottom;
  background-origin: content-box, border-box, border-box, border-box, border-box;
  background-clip: content-box, border-box, border-box, border-box, border-box;
  transform: rotate(30deg);
  margin:0px;
position: fixed;
bottom: 0px;
right: 0px;
margin-bottom:82px;
margin-right:26px;
background-color:#db4437;
display:none;
}

.testmobileappsgoogleapps84
{
margin: 25px 0;
  width: 52px;
  height: 52px;
  border-radius: 50%;
  border: 6px solid transparent;
  background-size: 100% 100%, 50% 50%, 50% 50%, 50% 50%, 50% 50%;
  background-repeat: no-repeat;
  background-position: center center, left top, right top, left bottom, right bottom;
  background-origin: content-box, border-box, border-box, border-box, border-box;
  background-clip: content-box, border-box, border-box, border-box, border-box;
  transform: rotate(30deg);
  margin:0px;
position: fixed;
bottom: 0px;
right: 0px;
margin-bottom:116px;
margin-right:96px;
background-color:#db4437;
}

.test84
{
transform: rotate(330deg);
margin-left: 6px;
font-size: 26px;
font-family: Varela Round, sans-serif;
font-weight:bold;
}

.testgoogleapps84
{
transform: rotate(330deg);
margin-left:13.8px;
font-size: 26px;
font-family: Varela Round, sans-serif;
font-weight:bold;
margin-top:7.4px;
color:#ffffff;
}

.test84 a
{
text-decoration:none;
color:#000000;
}

.testgoogleapps84 a
{
text-decoration:none;
color:#000000;
}

.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: visible;
  opacity: 4;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 84px auto;
  padding: 0px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #ffffff;
}
.popup .close:hover {
  color: #ffffff;
}
.popup .content {
  max-height: 30%;
  overflow: visible;
  padding:16px;
}

@media screen and (max-width: 700px){
  .box{
width: 70%;
  }
  .popup{
width: 70%;
  }
}

#popup1 {
-moz-animation: cssAnimation 0s ease-in 12s forwards;
/* Firefox */
-webkit-animation: cssAnimation 0s ease-in 12s forwards;
/* Safari and Chrome */
-o-animation: cssAnimation 0s ease-in 12s forwards;
/* Opera */
animation: cssAnimation 0s ease-in 12s forwards;
-webkit-animation-fill-mode: forwards;
animation-fill-mode: forwards;
}

@keyframes cssAnimation {
to {
width:0;
height:0;
overflow:hidden;
}
}
@-webkit-keyframes cssAnimation {
to {
width:0;
height:0;
visibility:hidden;
}
}

.installgoogleappsinstallapps84
{
padding:8px;
}

.mobile84
{
background-color:#1565C0;
padding:16px;
font-size:34px;
}

.mobileinstallapps84
{
background-color:#1565C0;
padding:16px;
font-size:34px;
color:#ffffff;
}

.headerlinksinstallapps84
{
color:#828282;
font-size:12.8px;
text-decoration:none;
padding-bottom:16px;
padding-left:8px;
padding-right:8px;
}

.headerlinks1
{
color:#828282;
font-size:12.8px;
text-decoration:none;
padding-bottom:12px;
padding-left:4px;
padding-right:4px;
}

.headerlinks2
{
color:#828282;
font-size:12.8px;
text-decoration:none;
padding-bottom:12px;
padding-left:4px;
padding-right:4px;
}

.headerlinks3
{
color:#828282;
font-size:12.8px;
text-decoration:none;
padding-bottom:12px;
padding-left:4px;
padding-right:4px;
}

.headerlinksmaps84
{
color:#828282;
font-size:12.8px;
text-decoration:none;
padding-bottom:12px;
padding-left:4px;
padding-right:4px;
}

.headerlinksmoreapps84
{
color:#828282;
font-size:12.8px;
text-decoration:none;
padding-bottom:12px;
padding-left:4px;
padding-right:4px;
}

.headerlinks4
{
color:#828282;
font-size:12.8px;
text-decoration:none;
padding-bottom:12px;
padding-left:4px;
padding-right:4px;
}

.headerlinkstools
{
float:right;
color:#828282;
font-size:12.8px;
margin-top:2px;
text-decoration:none;
padding-bottom:16px;
padding-left:4px;
padding-right:4px;
padding-left: 12px;
padding-right: 12px;
padding-bottom: 6px;
right:18px;
z-index:1;
}

.headerlinkstools:hover
{
}

.headerlinkssettings
{
color:#828282;
font-size:12.8px;
margin-top:2px;
text-decoration:none;
}

.installgoogleappsmobileinstallapps84
{
margin-top:134px;
}

mobileappsinstallappsgoogleappsinstallapps84
{
background-color:fafafa;
}

@media screen and (min-width: 960px)
{
.googleappsinstallappsimg84
{
position:fixed;
left:752px;
top:24px;
}
.googleappsimg84
{
display:none;
}
.headerlinkstools84
{
color:#828282;
font-size:12.8px;
margin-top:2px;
text-decoration:none;
padding-bottom:16px;
padding-left:4px;
padding-right:4px;
padding-left: 12px;
padding-right: 12px;
padding-bottom: 6px;
padding-top:0px;
top:78px;
z-index:1;
}
.headerlinkstools84:hover
{
border-style:none;
border-width: 1px;
border-radius: 1px;
background-color: #f8f8f8;
border-radius: 2px;
border: 1px solid transparent;
display: inline-block;
text-align: center;
border-radius: 2px;
line-height: 19px;
cursor: pointer;
margin-left: -1px;
padding: 4px 15px;
border: 1px solid #c6c6c6;
margin-left:-4px;
position:absolute;
margin-top:7px;
margin-left:0.4px;
}
.headerlinkstools
{
display:none;
}
}

.installgoogleappsgoogleappsinstallappsgoogleapps84
{
padding-left:16px;
padding-top:0px;
padding-bottom:0px;
padding-top:5px;
}

.googleinstallappslinks1
{
position:relative;
top:18px;
margin-left:174px;
color:#828282;
font-size:12.8px;
}

.googleinstallappslinks2
{
position:relative;
top:18px;
margin-left:18px;
color:#828282;
font-size:12.8px;
}

.googleinstallappslinks3
{
position:relative;
top:18px;
margin-left:18px;
color:#828282;
font-size:12.8px;
}

.googleinstallappslinks4
{
position:relative;
top:18px;
margin-left:18px;
color:#828282;
font-size:12.8px;
}

#googleappsgoogleappsinstallgoogleapps84
{
position:fixed;
right:0px;
top:0px;
padding-bottom:108px;
}

#googleappsgoogleappsinstallgoogleapps84 img
{
width:82px;
height:82px;
}

.installbuttonappsgoogleapps84
{
position:fixed;
top:0px;
left:0px;
z-index:1;
}

.brandname
{
left:18px;
top:24px;
font-size:26px;
z-index:18;
position:absolute;
}

#googleapps84
{
border-radius:2px;
background-color:#ffffff;
padding-top:5px;
}

.installgoogleapps
{
margin-top:8px;
}

@media screen and (min-width: 960px)
{
mobileinstallapps84
{
display:block!important;
}
}

@media screen and (min-width: 960px)
{
.installgoogleappsinstallappsgoogleapps8432
{
padding-left:4px;!important;
}
.headerlinks1
{
padding-left:17px!important;
padding-right:18px!important;
}
.headerlinks2
{
padding-left:17px!important;
padding-right:17px!important;
}
.headerlinks3
{
padding-left:17px!important;
padding-right:17px!important;
}
.headerlinksmaps84
{
padding-left:17px!important;
padding-right:17px!important;
}
.headerlinksmoreapps84
{
padding-left:17px!important;
padding-right:17px!important;
}
.dropdown
{
margin-left:84px!important;
}
}

@media screen and (max-width: 960px)
{
html
{
margin-left:0px;
width:100%;
background-color:#f2f2f2!important;
}
mobileapps84
{
width:100%;
}
.topbar
{
width:100%;
height:96px;
}
.footer
{
width:100%;
margin-top:8px!important;
}
#input84
{
width:100%;
}
#chatbox
{
width:100%;
}
mobilegoogleapps84
{
margin-left:0px;
}
mobilegoogleapps84
{
width:100%;
}
mobilegoogleappsmobileapps84
{
margin-left:0px;
width:100%;
}
mobileappsinstallapps84
{
width:100%;
margin-left:0px;
background-color:#f2f2f2;
}
.installgoogleappsmobileapps84
{
width:100%;
}
.googleappsimg84
{
position:fixed;
right:22px;
top:86px;
}
.googleappsinstallappsimg84
{
display:none;
}
.installgoogleapps84
{
width:100%;
background-color:#f2f2f2;
}
mobileinstallapps84
{
margin-left:0px;
padding-top:0px;
}
.installgoogleappsgoogleappsinstallappsgoogleapps84
{
padding-left:10.2px;
}
.installgoogleapps8432
{
padding-left:16px;
margin:8px;
box-shadow:0 1px 2px rgba(0,0,0,0.2);
border-radius:2px;
background-color:#ffffff;
padding-top:16px;
margin-bottom:10px!important;
}
.headerlinkstools84
{
display:none;
}
#googleappsgoogleappsinstallgoogleapps84 img
{
width:44px;
height:44px;
}
#myDropdowngoogleapps84
{
display:none;
}
.googleappsgoogleappsinstallgoogleappsgoogleapps84
{
padding-left:16px;
}
.dropbtngoogleapps84
{
width:100%;
}
.testmobileappsgoogleapps84
{
margin-right:52px;
}
.brandname
{
top:0px;
left:0px;
z-index:0;
width:100%;
background-color:#dddddd;
position:relative;
}
.brandname84
{
margin-top:9px!important;
background-image:url(http://mobile84.herokuapp.com/googleappslogoapps88888844.png);
background-position:146px 0px;
background-repeat:no-repeat;
background-size:44px 44px;
}
.brandname
{
background-color:#f2f2f2!important;
}
.googleinstallappslinks1
{
margin-left:16px;
}
.headerlinks1
{
padding-bottom:6px;
font-family: Roboto-Regular,HelveticaNeue,Arial,sans-serif!important;
font-size: 12px;
text-transform: uppercase;
border-width:2px!important;
padding-bottom:11px!important;
text-shadow:none!important;
padding-left:15px;
padding-right:16px;
}
.headerlinks2
{
padding-bottom:6px;
font-family: Roboto-Regular,HelveticaNeue,Arial,sans-serif!important;
font-size: 12px;
text-transform: uppercase;
border-width:2px!important;
padding-bottom:11px!important;
text-shadow:none!important;
padding-left:11px;
padding-right:12px;
}
.headerlinks3
{
padding-bottom:6px;
font-family: Roboto-Regular,HelveticaNeue,Arial,sans-serif!important;
font-size: 12px;
text-transform: uppercase;
border-width:2px!important;
padding-bottom:11px!important;
text-shadow:none!important;
padding-left:12px!important;
padding-right:12px!important;
}
.headerlinksmaps84
{
padding-bottom:6px;
font-family: Roboto-Regular,HelveticaNeue,Arial,sans-serif!important;
font-size: 12px;
text-transform: uppercase;
border-width:2px!important;
padding-bottom:11px!important;
text-shadow:none!important;
padding-left:12px!important;
padding-right:12px!important;
}
.headerlinksmoreapps84
{
padding-bottom:6px;
font-family: Roboto-Regular,HelveticaNeue,Arial,sans-serif!important;
font-size: 12px;
text-transform: uppercase;
border-width:2px!important;
padding-bottom:11px!important;
text-shadow:none!important;
padding-left:12px!important;
padding-right:12px!important;
}
.headerlinks4
{
padding-bottom:6px;
font-family: Roboto-Regular,HelveticaNeue,Arial,sans-serif!important;
font-size: 12px;
text-transform: uppercase;
border-width:2px!important;
padding-bottom:11px!important;
text-shadow:none!important;
padding-left:16px!important;
padding-right:16px!important;
}
.installgoogleappsinstallappsgoogleapps8432
{
background-color:#dddddd;
margin-left:-8px;
}
.installgoogleappsinstallappsgoogleapps84
{
margin-left:16px;
margin-right:16px;
margin-bottom:0px;
}
.installgoogleappsinstallappsgoogleapps
{
margin-top:0px;
}
.brandname84
{
padding-left:16px;
padding-top:8px;
padding-bottom:8px;
background-color:#f2f2f2;
}
.googleappsimgapps84
{
padding-top:12px;
padding-left:8px;
padding-bottom:0px;
}
#input84
{
padding:8px;
height:39px;
box-shadow:none;
border-style:solid;
border-width:1px;
border-color:#dddddd;
border-bottom:none;
padding-left:16px!important;
}
#chatbox
{
padding:8px;
height:39px;
box-shadow:none;
border-style:solid;
border-width:1px;
border-color:#dddddd;
border-bottom:none;
padding-left:16px!important;
}
.input
{
padding:8px;
background-color:#f2f2f2!important;
}
.dropbtngoogleapps84
{
margin-top:0px!important;
}
mobileinstallapps84
{
background-color:#f2f2f2!important;
}
.installgoogleappsinstallappsgoogleapps8432
{
background-color:#f8f8f8!important;
}
.installgoogleappsinstallappsgoogleapps
{
margin-top:-8px!important;
}
.installgoogleappsinstallappsgoogleapps84
{
margin-left:8px!important;
margin-right:8px!important;
}
.installgoogleappsinstallappsgoogleapps8432
{
}
.installgoogleappsgoogleappsinstallappsgoogleapps84
{
display:none;
}
.installgoogleappsinstallappsgoogleapps8432
{
margin-left:-8px!important;
border-style:solid;
border-width:1px;
border-color:#dddddd;
padding-right:14px;
padding-bottom:0px;
border-bottom-left-radius:2px;
border-bottom-right-radius:2px;
border-bottom-width:2px;
padding-top:10px;
padding-left:0px;
}
mobilegoogleappsmobileapps84
{
margin-top:18px;
}
.installgoogleapps8432
{
margin-left:0px!important;
margin-right:0px!important;
margin-top:0px!important;
}
p
{
font-size:14px!important;
color:#222!important;
padding-top:16px;
padding-bottom:16px!important;
}
h3
{
font-size:16px!important;
}
h2
{
font-size:16px!important;
}
mobilegoogleappsmobileapps84
{
margin-top:-6px!important;
}
#input84:hover
{
box-shadow:none;
}
#chatbox:hover
{
box-shadow:none;
}
#googleapps84
{
box-shadow:none;
padding:0px;
}
.topbar
{
}
mobilegoogleappsmobileapps84
{
}
}

.brandname84
{
margin-top:0px;
margin-left:0px;
font-size:26px;
color:#4285f4;
}

@media screen and (max-width: 334px)
{
.headerlinks4
{
display:none;
}
}

@media screen and (min-width: 960px)
{
.headerlinks1
{
padding-left:12px;
padding-right:12px;
}
.headerlinks2
{
padding-left:12px;
padding-right:12px;
}
.headerlinks3
{
padding-left:12px;
padding-right:12px;
}
.headerlinksmaps84
{
padding-left:12px;
padding-right:12px;
}
.headerlinksmoreapps84
{
padding-left:12px;
padding-right:12px;
}
.headerlinks4
{
padding-left:12px;
padding-right:12px;
}
.installgoogleappsgoogleappsinstallappsgoogleapps84
{
margin-top:-3px!important;
padding-top:0px;
}
mobileinstallapps84
{
padding-bottom:0px;
}
p
{
padding-bottom:16px!important;
}
}

</style>

<style>
.dropbtn {
color:#828282;
font-size:12.8px;
margin-top:2px;
text-decoration:none;
padding-left:4px;
padding-right:0px;
border:none;
padding-right:12px;
}

.dropbtn:hover, .dropbtn:focus {
}

.dropdown {
position: relative;
display: inline-block;
margin-left:246px;
}

.dropdown-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
overflow: auto;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
top:26px;
}

.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
font-size:12.8px;
background-color:#ffffff;
padding-left:18px;
padding-top:8px;
padding-bottom:8px;
}

.dropdown a:hover
{
background-color: #f1f1f1
}

.show
{
display:block!important;
}

@media screen and (max-width: 960px)
{
.dropdown
{
display:none;
}
.headerlinkstools84
{
display:none;
}
}

</style>

<style>
.dropbtngoogleapps84 {
margin-right:8px;
color:#828282;
font-size:12.8px;
margin-top:4px;
text-decoration:none;
padding-left:4px;
padding-right:62px;
border:none;
background-image:url(googlesearchapps888844.png);
background-position:right;
background-repeat:no-repeat;
outline:none!important;
}

.dropbtngoogleapps84:hover, .dropbtngoogleapps84:focus {
}

.dropdowngoogleapps84 {
position: relative;
display: inline-block;
float:right;
}

.dropdown-contentgoogleapps84 {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
overflow: auto;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

.dropdown-contentgoogleapps84 a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
font-size:12.8px;
}

.dropdowngoogleapps84 a:hover
{
background-color: #f1f1f1
}

.show {display:block;}

#myDropdowngoogleapps84
{
left:534px;
top:74px;
z-index:2;
display:none;
}

.googleappsgoogleappsinstallgoogleappsgoogleapps84
{
padding-left:34px;
}

.googleappsplusapps84
{
position:fixed;
bottom:82px;
left:18px;
}

.googleappsinstallappsgoogleappsinstallappsgoogleapps84
{
background-color:#1565C0;
border-style:solid;
border-width:1px;
border-radius:2px;
padding-top:8px;
padding-bottom:8px;
padding-left:34px;
padding-right:34px;
width:62px;
position:fixed;
right:8px;
bottom:4px;
z-index:18;
color:#ffffff;
border-radius:4px;
}

@media screen and (max-width: 960px)
{
.dropbtn
{
}
strong
{
font-weight:normal!important;
}
.headerlinksmaps84
{
}
}

.googleappsinstallapps84 {
position: relative;
display: inline-block;
float:right;
}

.googleappsinstallappslinuxapps84 {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
overflow: auto;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
bottom:44px;
background-color:#dddddd;
left:0px;
}

.googleappsinstallappslinuxapps84 a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
font-size:12.8px;
position:fixed;
bottom:44px;
background-color:#dddddd;
left:0px;
height:208px;
width:100%;
}

.googleappsinstallapps84 a:hover
{
background-color: #f1f1f1
}

.show {display:block;}

.mobilelinuxapps84
{
width:100%;
height:44px;
background-color:#dddddd;
position:fixed;
bottom:0px;
z-index:4;
}

input[type='text'] {
background-image:url(googleapps84.png);
background-position:right 6px;
background-repeat:no-repeat;
}

.mobileappssettings84
{
padding:8px;
}

.mobileappssettings84:hover
{
background-color: rgba(0,0,0,0.1)!important;
}

mobileappsads84
{
border-style:solid;
border-width:1px;
border-radius:2px;
font-size:12px;
padding-left:2px;
padding-right:2px;
margin-right:6px;
height:8px;
}

.mobileappsinstallapps84
{
background: linear-gradient(to bottom, #f0f0f0, #e9e9e9);
-webkit-user-select: none;
-moz-user-select: none;
-o-user-select: none;
-ms-user-select: none;
-khtml-user-select: none; 
user-select: none;
box-shadow: 0 18px 40px 10px rgba(0, 0, 0, 0.34);
z-index:4;
border-radius:4px;
display:none;
}

.mobileapps8444
{
padding:12px;
background-color:#f4f4f4;
background: linear-gradient(to bottom, #f0f0f0, #e9e9e9);
border-radius:4px;
}

.dropbtnmobileappsappsmobileapps84
{
width: 108px;
background-color: #e7e7e7;
position: absolute;
border-top: none;
border-left: none;
border-width: 2px;
top: 0px;
padding:8px;
margin-left:54px;
}

.dropdown-contentmobileappsappsmobileapps84
{
overflow: auto;
top: 74px;
left: 24px;
width:274px;
height:408px;
background-color:#e7e7e7;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
padding:16px;
z-index:4;
}

.showmobileappsappsmobileapps84
{
display:block;
}

.b_factrow
{
display:none;
}

.logout84 a
{
top:24px!important;
right:24px!important;
position:absolute!important;
}

.signup84
{
top:24px!important;
right:24px!important;
position:absolute!important;
}

</style>

";

$googleapps84 = preg_replace("/\n/","",$googleapps84);

echo "$googleapps84";

?>

<body>

<style>

.googleapps888844
{
color:#4285f4;
}

.googleapps88888844
{
color:#4285f4;
}

</style>

<div class="brandname" onclick="">
<div class="brandname84">
<div onclick=window.open('<?php echo "http://$_SERVER[HTTP_HOST]/"; ?>','_self')><googleapps84 class="googleapps888844">Go</googleapps84><googleapps84 class="googleapps88888844">search</googleapps84></div>
</div>
</div>

<div class="googleappsinstallapps84">

<div id="googleappsinstallappslinuxapps84" class="googleappsinstallappslinuxapps84">
</div>
</div>

<?php

$str = "$mobile";
$googleapps8888884 = md5($str);

?>

<div class="topbar">

<mobilegoogleapps84>

<form action='http://mobile84.herokuapp.com/about/about.php' class="input" method="get" onsubmit="return submitchat();">

<input type="text" autocomplete="off" placeholder="" value="<?php echo "$google88884474"; ?>" onkeyup="showHint(this.value)" onclick="myFunctiongoogleapps84()" class="dropbtngoogleapps84" name='q' id='chatbox'>

<input type="hidden" name="url" value="<?php echo "$_SERVER[HTTP_HOST]"; ?>"></input>

<input type="hidden" name="username" value="<?php echo "$_GET[username]"; ?>"></input>

<input type="hidden" name="secureparameter" value="<?php echo "$googleapps8888884"; ?>"></input>

<input type="hidden" name="ssl" value="<?php echo "on"; ?>"></input>

</input>

</form>

<div class="dropdowngoogleapps84">

<div id="myDropdowngoogleapps84" class="dropdown-contentgoogleapps84">
</div>
</div>

<mobileapps84>
<mobileappsinstall84>
<mobileinstallapps84>
<mobileappsinstallappsgoogleappsinstallapps84>

<div class="installgoogleappsinstallappsgoogleapps">
<div class="installgoogleappsinstallappsgoogleapps84">
<div class="installgoogleappsinstallappsgoogleapps8432">

<style>

.wrapper {
  width:100%;
  white-space: nowrap;
  overflow-y: hidden;
  overflow-x: scroll;
  -webkit-overflow-scrolling: touch;
    &::-webkit-scrollbar {
        display: none;
    }
}

#internal {
  display: inline;
  &:nth-child(odd) {
  }
}

@media screen and (min-width: 960px)
{
.wrapper
{
width:100%;
overflow-x:hidden;
height:884px;
width:884px;
}
.googleappsmobileappsinstallapps8884
{
display:none;
}
}

@media screen and (max-width: 960px)
{
.headerlinksmoreapps84
{
display:none!important;
}
.wrapper
{
padding-bottom:12px;
}
}

.wrapper::-webkit-scrollbar
{
display:none;
}

.googleappsrecommendapps84
{
color:red;
}

.pulsate {
color:#222222;
font-weight:bold;
font-size:12px;
padding-bottom:12px!important;
}

a
{
text-decoration:none;
}

@media screen and (max-width: 960px)
{
.logout8884
{
display:none!important;
}
}

</style>

<div class="wrapper">

<a rel='nofollow' class="headerlinks1" id="internal" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=all&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');">All</a>

<a rel='nofollow' class="headerlinks2" id="internal" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=news&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');">News</a>

<a rel='nofollow' class="headerlinks4" id="internal" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=videos&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');">Videos</a>

<a rel='nofollow' class="headerlinks3" id="internal" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=images&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');">Images</a>

<a rel='nofollow' class="headerlinksmaps84" id="internal" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=maps&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');">Maps</a>

<googleapps84 class="googleappsmobileappsinstallapps8884"><a rel='nofollow' class="headerlinks3" id="internal" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=books&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');">Books</a></googleapps84>

<googleapps84 class="googleappsmobileappsinstallapps8884"><a rel='nofollow' class="headerlinks3" id="internal" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=personal&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');">Personal</a></googleapps84>

<googleapps84 class="googleappsmobileappsinstallapps8884"><a rel='nofollow' class="headerlinks3" id="internal" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=search-tools&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');">Search tools</a></googleapps84>

<a rel='nofollow' class="headerlinksmoreapps84" id="internal" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=more&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');">More</a>

<div class="dropdown">

<p onclick="myFunction()" class="dropbtn">Settings</p>

<div id="myDropdown" class="dropdown-content">
<a rel='nofollow' class="mobileappssettings84" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=search-settings&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');">Search settings</a>
<a rel='nofollow' class="mobileappssettings84" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=languages&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');">Languages</a>
<a rel='nofollow' class="mobileappssettings84" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=turn-on-safesearch&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');">Turn on SafeSearch</a>
<a rel='nofollow' class="mobileappssettings84" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=show-all-results&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');">Show all results</a>
<a rel='nofollow' class="mobileappssettings84" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=advanced-settings&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');">Advanced search</a>
<a rel='nofollow' class="mobileappssettings84" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=history&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');">History</a>
<a rel='nofollow' class="mobileappssettings84" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=search-help&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');">Search help</a>
</div>
</div>

<a rel='nofollow' class="headerlinkstools84" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=tools&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');">Tools</a>

</div>

</div>
</div>
</div>

</mobileappsinstallappsgoogleappsinstallapps84>
</mobileinstallapps84>
</mobileappsinstall84>
</mobileapps84>

</mobilegoogleapps84>

</div>

<mobilegoogleappsmobileapps84>

<mobileapps84>
<mobileappsinstall84>
<mobileinstallapps84 style="display:none;">
<mobileappsinstallapps84>

<div class="installgoogleapps" onscroll="myFunctiongoogleapps8884()">
<div class="installgoogleapps84">
<div class="installgoogleappsgoogleappsinstallappsgoogleapps84">

<a rel='nofollow' class="headerlinksinstallapps84" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=any-country','_self');">Any country</a>

<a rel='nofollow' class="headerlinksinstallapps84" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=any-time','_self');">Any time</a>

<a rel='nofollow' class="headerlinksinstallapps84" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=all-results','_self');">All results</a>

</div>
</div>
</div>

</mobileappsinstallapps84>
</mobileinstallapps84>
</mobileappsinstall84>
</mobileapps84>

<mobileapps84>
<mobileappsinstall84>
<mobileinstallapps84>
<mobileappsinstallapps84>

<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color:#ffffff;
    border: 1px solid #888;
    width: 678px;
    margin-left: 141px;
    margin-top: 61px;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    margin-right:12px;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

@media screen and (max-width: 960px)
{
.modal-content
{
width:100%;
margin-left:0px;
margin-top:55px;
border-style:none;
background-color:transparent;
}
.modal-content84
{
margin:8px;
}
.close
{
margin-top:8px;
}
.googlemobileinstallapps888844
{
left:96px!important;
top:38px!important;
}
.googleappsinstallapps44
{
display:none;
}
}

.googlemobileinstallapps888844
{
width:172px;
height:44px;
background-color:#ffffff;
position:absolute;
top:16px;
left:234px;
color: #545454;
font-size: small;
margin: 0px;
padding:8px;
line-height: 1.4;
}

.triangle {
  box-sizing: border-box;
}

.triangle {
  display: inline-block;
  margin: 0 5px;
  vertical-align: middle;
}
.triangle-5 {
    width: 26px;
    height: 30px;
    border-top: solid 12px #ffffff;
    border-left: solid 16px transparent;
    border-right: solid 16px transparent;
    margin-left:130px;
    margin-top:13.8px;
}

</style>

<style>

.divapps84 {
  box-sizing: border-box
}
.divapps84 {
  box-shadow: inset 0 0 3px 0px #484848, 0 0 6px 0px #484848;
  width: 18px;
  height: 18px;
  margin: 0 auto;
  border-radius: 50%;
  border-top: 4px solid #2E7D32;
  border-right: 4px solid #EF6C00;
  border-bottom: 4px solid #EF6C00;
  border-left: 4px solid #2E7D32;
  transform: rotate(54deg);
  position: relative;
  left: 158px;
  top: 30px;
  position: absolute;
}
.divapps84:before, .divapps84:after {
  content: "";
  position: absolute;
  left: -4px;
  top: -4px;
  width: 100%;
  height: 100%;
  border-radius: 50%;
}

.divapps84:before {
  border-top: 4px solid #F9A825;
  border-right: 4px solid transparent;
  border-bottom: 4px solid transparent;
  border-left: 4px solid transparent;
  transform: rotate(60deg)
}
.divapps84:after {
  border-top: 4px solid #F9A825;
  border-right: 4px solid transparent;
  border-bottom: 4px solid transparent;
  border-left: 4px solid transparent;
  transform: rotate(30deg)
}

.googleappslinksapps84
{
width:100%;
height:100%;
position:fixed;
}

@media screen and (min-width: 960px)
{
.input1
{
margin-bottom:12px;
}
}

.googleappsinstallappsappsappsapps8884
{
    background-color: #4285f4;
    border-style: solid;
    border-width: 1px;
    border-radius: 4px;
    padding-top: 8px;
    padding-bottom: 8px;
    padding-left: 18px;
    padding-right: 18px;
    margin-left: -40px;
    margin-top: 0px;
    color: #ffffff;
    position: absolute;
    left: 0px;
    -webkit-user-select: none;
    -webkit-transition: background .2s .1s;
    transition: background .2s .1s;
    border: 0;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    cursor: pointer;
    display: inline-block;
    font-size: small;
    font-weight: bold;
    min-width: 4em;
    outline: none;
    overflow: hidden;
    position: relative;
    text-align: center;
    -webkit-tap-highlight-color: transparent;
    z-index: 0;
    text-decoration: none;
}

.input1
{
border-style:solid;
border-width:1px;
height:34px;
width:172px;
border-color:#aaaaaa;
font-size:16px;
padding-left:12px;
border-radius:2px;
}

.googleappsadsgoogleapps888844
{
background-color: #fff;
border-radius: 3px;
color: #006621;
display: inline-block;
font-size: 11px;
border: 1px solid #006621;
padding: 1px 3px 0 2px;
line-height: 11px;
vertical-align: baseline;
margin-right:4px;
}

img
{
padding-bottom:18px;
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
display:none;
}

#input18
{
width:204px!important;
}

#input54
{
width:204px!important;
}

#inputapps84
{
width:204px!important;
}

</style>

<?php

$googleinstall84 = "http://www.bing.com/videos/search?q=$google88884474+location%3Aus&qs=n&form=QBVR&sp=-1&pq=$google88884474+location%3Aus&sc=8-18&sk=&cvid=515FE0F8CE11415BA7041287C01E97CB";

$ch = curl_init($googleinstall84);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, TRUE);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.52 Safari/537.36 OPR/15.0.1147.100");
curl_setopt($ch, CURLOPT_TIMEOUT, 12);
$install888888888484 = curl_exec($ch);
curl_close($ch);

?>

<?php

preg_match_all('/<li class="b_algo">(.*?)<\/li>/', $install8484, $googleapps);
$google = $googleapps[0][0];
preg_match_all('/<h2><a href="(.*?)"/', $google, $googleapps);
$google888844 = $googleapps[0][0];
$google888844 = str_replace('<h2><a href="',"",$google888844);
$google888844 = str_replace('"',"",$google888844);
preg_match_all('/<cite>(.*?)<\/cite>/', $google, $googleapps);
$google84 = $googleapps[0][0];
$google84 = strip_tags("$google84");
preg_match_all('/<p>(.*?)<\/p>/', $google, $googleapps);
$google8884 = $googleapps[0][0];
$google8884 = strip_tags("$google8884");
$google84 = str_replace("<a",'<a rel="nofollow"',$google84);
$google8884 = str_replace("<a",'<a rel="nofollow"',$google8884);
$google84 = mb_convert_encoding($google84,"HTML-ENTITIES","UTF-8");
$google8884 = mb_convert_encoding($google8884,"HTML-ENTITIES","UTF-8");

?>

<?php

$mobile8884 = str_replace("-"," ",$mobile);
$mobile8884 = str_replace("+"," ",$mobile8884);

$mobile8884 = ucfirst("$mobile8884");

?>

<style>

.googlemobileapps18
{
background-color:#3B5998;
padding:8px;
color:#ffffff;
}

.googlemobileapps44
{
background-color:#55ACEE;
padding:8px;
color:#ffffff;
}

.googlemobileapps84
{
background-color:#dd4b39;
padding:8px;
color:#ffffff;
}

</style>

<?php

echo "<div class='installgoogleapps'>";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432' style='margin-top:8px!important;'>";
echo "<div id='googleapps84'>";

?>

<h3><a rel="nofollow" onClick="window.open('<?php echo "/ads/index.php"; ?>','_self')">Gosearch Ads - Create Online Ads for Your Business - Gosearch</a></h3>
<mobileappsgoogleappsmobileapps8884 class='googleappsadsgoogleapps888844'>Ad</mobileappsgoogleappsmobileapps8884><cite><?php echo "$_SERVER[HTTP_HOST]"; ?></cite>
<p>Find out how Gosearch Ads can help you get your business in front of your customers using search and mobile advertising.</p>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

$file84 = file_get_contents("http://mobile84.herokuapp.com/ads/ads.sh");

preg_match_all("/<h3>(.*?)<\/h3>/", $file84, $match);

$google8884 = $match[1];

$nooflines = count($google8884);

$nooflines -= 1;

?>

<?php

$googleapps84 = rand(0,$nooflines);

?>

<?php

preg_match_all("/<div class=\'installgoogleapps\'>(.*?)<\/div>/s", $file84, $match);

$google8884 = $match[0][$googleapps84];

?>

<?php

echo "$google8884</div></div></div>";

?>

<?php

preg_match_all('/<h2>(.*?)<\/p>/', $install8484, $googleapps);
$google = $googleapps[0][0];
preg_match_all('/href="(.*?)"/', $google, $googleapps);
$google888844 = $googleapps[0][0];
$google888844 = str_replace("href=","",$google888844);
$google888844 = str_replace('"',"",$google888844);

echo "<div class='installgoogleapps' onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=$google888844&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\">";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432' style='margin-top:8px!important;'>";
echo "<div id='googleapps84'>";
preg_match_all('/<h2>(.*?)<\/p>/', $google, $googleapps);
$google = $googleapps[0][0];
$google = strip_tags("$google","<h2><cite><p><a>");
preg_match_all('/<cite>(.*?)<\/cite>/', $google, $googleapps);
$google888844 = $googleapps[0][0];
preg_match_all('/\.(.*?)\./', $google888844, $googleapps);
$google888844 = $googleapps[0][0];
$google888844 = str_replace(".","",$google888844);
$google = str_replace("h2","h3",$google);
$google = mb_convert_encoding($google,"HTML-ENTITIES","UTF-8");
$google = preg_replace("/<\/h3>(.*?)<cite>/","</h3><cite>",$google);
$google = preg_replace("/<\/cite>(.*?)<p>/","</cite><p>",$google);
$google = preg_replace('/href="(.*?)"/',"onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=$1&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\"",$google);
echo "$google";

preg_match_all('/<h3>(.*?)<\/h3>/', $google, $googleapps);
$google8884 = $googleapps[0][0];
$google8884 = strip_tags("$google8884");

$myvalue = "$google8884";
$arr = explode(' ',trim($myvalue));
$googleapps84 = $arr[0];

$googleapps84 = strtolower("$googleapps84");

?>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

preg_match_all('/<h2>(.*?)<\/p>/', $install8484, $googleapps);
$google = $googleapps[0][1];
preg_match_all('/href="(.*?)"/', $google, $googleapps);
$google888844 = $googleapps[0][0];
$google888844 = str_replace("href=","",$google888844);
$google888844 = str_replace('"',"",$google888844);

echo "<div class='installgoogleapps' onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=$google888844&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\">";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432' style='margin-top:8px!important;'>";
echo "<div id='googleapps84'>";
preg_match_all('/<h2>(.*?)<\/p>/', $google, $googleapps);
$google = $googleapps[0][0];
$google = strip_tags("$google","<h2><cite><p><a>");
preg_match_all('/<cite>(.*?)<\/cite>/', $google, $googleapps);
$google888844 = $googleapps[0][0];
preg_match_all('/\.(.*?)\./', $google888844, $googleapps);
$google888844 = $googleapps[0][0];
$google888844 = str_replace(".","",$google888844);
$google = str_replace("h2","h3",$google);
$google = mb_convert_encoding($google,"HTML-ENTITIES","UTF-8");
$google = preg_replace("/<\/h3>(.*?)<cite>/","</h3><cite>",$google);
$google = preg_replace("/<\/cite>(.*?)<p>/","</cite><p>",$google);
$google = preg_replace('/href="(.*?)"/',"onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=$1&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\"",$google);
echo "$google";

preg_match_all('/<h3>(.*?)<\/h3>/', $google, $googleapps);
$google8884 = $googleapps[0][0];
$google8884 = strip_tags("$google8884");

$myvalue = "$google8884";
$arr = explode(' ',trim($myvalue));
$googleapps84 = $arr[0];

$googleapps84 = strtolower("$googleapps84");

?>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<style>

.installgoogleappsappsgoogleappsinstallapps
{
background-color:#f8f8f8;
color: rgba(0,0,0,.54);
font-family: Roboto-Medium,HelveticaNeue-Medium,HelveticaNeue,sans-serif-medium,Arial,sans-serif;
font-size:14px;
border-style:solid;
border-width:1px;
border-top:none;
border-color:#dddddd;
display:block;
}

.installgoogleappsappsgoogleappsinstallapps84
{
padding:16px!important;
padding-bottom:14px;
padding-left:16px!important;
}

.installgoogleappsappsgoogleappsinstallapps8432
{
background-color:#f8f8f8;
padding-left:0px!important;
}

.installgoogleappsappsinstallapps
{
background-color:#ffffff;
color:#222;
font-family: Roboto-Medium,HelveticaNeue-Medium,HelveticaNeue,sans-serif-medium,Arial,sans-serif;
font-size:14px;
border-style:solid;
border-width:1px;
border-top:none;
border-color:#dddddd;
}

.installgoogleappsappsinstallapps84
{
padding:16px!important;
padding-bottom:14px;
padding-left:16px!important;
}

.installgoogleappsappsinstallapps8432
{
background-color:#f8f8f8;
padding-left:0px!important;
}

.installgoogleappsappsinstallapps a
{
color:#222;
text-decoration:none;
}

.installgoogleappsappsinstallappsinstallapps a
{
color:#222;
text-decoration:none;
}

.installgoogleappsappsinstallappsinstallapps
{
background-color:#f8f8f8;
color: rgba(0,0,0,.54);
font-family: Roboto-Medium,HelveticaNeue-Medium,HelveticaNeue,sans-serif-medium,Arial,sans-serif;
font-size:14px;
border-style:solid;
border-width:1px;
border-top:none;
border-color:#dddddd;
display:block;
margin-bottom:8px;
background-color:#ffffff;
border-bottom-width:2px;
}

.installgoogleappsappsinstallappsinstallapps84
{
padding:16px!important;
padding-bottom:14px;
padding-left:16px!important;
}

.installgoogleappsappsinstallappsinstallapps8432
{
background-color:#f8f8f8;
padding-left:0px!important;
}

@media screen and (min-width: 960px)
{
mobileappsinstallapps84
{
background-color:#ffffff!important;
}
}

.googleapps448888
{
}

</style>

<?php

$file_data84 = file_get_contents('https://bitbucket.org/christoh85/mobileappsinstallapps84/raw/master/chatdata84.sh');

echo "$file_data84";

?>

<div id='result'></div>

<?php

preg_match_all('/<h2>(.*?)<\/p>/', $install8484, $googleapps);
$google = $googleapps[0][2];
preg_match_all('/href="(.*?)"/', $google, $googleapps);
$google888844 = $googleapps[0][0];
$google888844 = str_replace("href=","",$google888844);
$google888844 = str_replace('"',"",$google888844);

echo "<div class='installgoogleapps' onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=$google888844&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\">";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432' style='margin-top:8px!important;'>";
echo "<div id='googleapps84'>";
preg_match_all('/<h2>(.*?)<\/p>/', $google, $googleapps);
$google = $googleapps[0][0];
$google = strip_tags("$google","<h2><cite><p><a>");
preg_match_all('/<cite>(.*?)<\/cite>/', $google, $googleapps);
$google888844 = $googleapps[0][0];
preg_match_all('/\.(.*?)\./', $google888844, $googleapps);
$google888844 = $googleapps[0][0];
$google888844 = str_replace(".","",$google888844);
$google = str_replace("h2","h3",$google);
$google = mb_convert_encoding($google,"HTML-ENTITIES","UTF-8");
$google = preg_replace("/<\/h3>(.*?)<cite>/","</h3><cite>",$google);
$google = preg_replace("/<\/cite>(.*?)<p>/","</cite><p>",$google);
$google = preg_replace('/href="(.*?)"/',"onClick=\"window.open('/page84.php?url8884=$1&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\"",$google);
echo "$google";

preg_match_all('/<h3>(.*?)<\/h3>/', $google, $googleapps);
$google8884 = $googleapps[0][0];
$google8884 = strip_tags("$google8884");

$myvalue = "$google8884";
$arr = explode(' ',trim($myvalue));
$googleapps84 = $arr[0];

$googleapps84 = strtolower("$googleapps84");

?>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

preg_match_all('/<h2>(.*?)<\/p>/', $install8484, $googleapps);
$google = $googleapps[0][3];
preg_match_all('/href="(.*?)"/', $google, $googleapps);
$google888844 = $googleapps[0][0];
$google888844 = str_replace("href=","",$google888844);
$google888844 = str_replace('"',"",$google888844);

echo "<div class='installgoogleapps' onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=$google888844&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\">";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432' style='margin-top:8px!important;'>";
echo "<div id='googleapps84'>";
preg_match_all('/<h2>(.*?)<\/p>/', $google, $googleapps);
$google = $googleapps[0][0];
$google = strip_tags("$google","<h2><cite><p><a>");
preg_match_all('/<cite>(.*?)<\/cite>/', $google, $googleapps);
$google888844 = $googleapps[0][0];
preg_match_all('/\.(.*?)\./', $google888844, $googleapps);
$google888844 = $googleapps[0][0];
$google888844 = str_replace(".","",$google888844);
$google = str_replace("h2","h3",$google);
$google = mb_convert_encoding($google,"HTML-ENTITIES","UTF-8");
$google = preg_replace("/<\/h3>(.*?)<cite>/","</h3><cite>",$google);
$google = preg_replace("/<\/cite>(.*?)<p>/","</cite><p>",$google);
$google = preg_replace('/href="(.*?)"/',"onClick=\"window.open('/page84.php?url8884=$1&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\"",$google);
echo "$google";

preg_match_all('/<h3>(.*?)<\/h3>/', $google, $googleapps);
$google8884 = $googleapps[0][0];
$google8884 = strip_tags("$google8884");

$myvalue = "$google8884";
$arr = explode(' ',trim($myvalue));
$googleapps84 = $arr[0];

$googleapps84 = strtolower("$googleapps84");

?>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

preg_match_all('/<h2>(.*?)<\/p>/', $install8484, $googleapps);
$google = $googleapps[0][4];
preg_match_all('/href="(.*?)"/', $google, $googleapps);
$google888844 = $googleapps[0][0];
$google888844 = str_replace("href=","",$google888844);
$google888844 = str_replace('"',"",$google888844);

echo "<div class='installgoogleapps' onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=$google888844&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\">";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432' style='margin-top:8px!important;'>";
echo "<div id='googleapps84'>";
preg_match_all('/<h2>(.*?)<\/p>/', $google, $googleapps);
$google = $googleapps[0][0];
$google = strip_tags("$google","<h2><cite><p><a>");
preg_match_all('/<cite>(.*?)<\/cite>/', $google, $googleapps);
$google888844 = $googleapps[0][0];
preg_match_all('/\.(.*?)\./', $google888844, $googleapps);
$google888844 = $googleapps[0][0];
$google888844 = str_replace(".","",$google888844);
$google = str_replace("h2","h3",$google);
$google = mb_convert_encoding($google,"HTML-ENTITIES","UTF-8");
$google = preg_replace("/<\/h3>(.*?)<cite>/","</h3><cite>",$google);
$google = preg_replace("/<\/cite>(.*?)<p>/","</cite><p>",$google);
$google = preg_replace('/href="(.*?)"/',"onClick=\"window.open('/page84.php?url8884=$1&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\"",$google);
echo "$google";

preg_match_all('/<h3>(.*?)<\/h3>/', $google, $googleapps);
$google8884 = $googleapps[0][0];
$google8884 = strip_tags("$google8884");

$myvalue = "$google8884";
$arr = explode(' ',trim($myvalue));
$googleapps84 = $arr[0];

$googleapps84 = strtolower("$googleapps84");

?>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

preg_match_all('/<h2>(.*?)<\/p>/', $install8484, $googleapps);
$google = $googleapps[0][5];
preg_match_all('/href="(.*?)"/', $google, $googleapps);
$google888844 = $googleapps[0][0];
$google888844 = str_replace("href=","",$google888844);
$google888844 = str_replace('"',"",$google888844);

echo "<div class='installgoogleapps' onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=$google888844&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\">";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432' style='margin-top:8px!important;'>";
echo "<div id='googleapps84'>";
preg_match_all('/<h2>(.*?)<\/p>/', $google, $googleapps);
$google = $googleapps[0][0];
$google = strip_tags("$google","<h2><cite><p><a>");
preg_match_all('/<cite>(.*?)<\/cite>/', $google, $googleapps);
$google888844 = $googleapps[0][0];
preg_match_all('/\.(.*?)\./', $google888844, $googleapps);
$google888844 = $googleapps[0][0];
$google888844 = str_replace(".","",$google888844);
$google = str_replace("h2","h3",$google);
$google = mb_convert_encoding($google,"HTML-ENTITIES","UTF-8");
$google = preg_replace("/<\/h3>(.*?)<cite>/","</h3><cite>",$google);
$google = preg_replace("/<\/cite>(.*?)<p>/","</cite><p>",$google);
$google = preg_replace('/href="(.*?)"/',"onClick=\"window.open('/page84.php?url8884=$1&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\"",$google);
echo "$google";

preg_match_all('/<h3>(.*?)<\/h3>/', $google, $googleapps);
$google8884 = $googleapps[0][0];
$google8884 = strip_tags("$google8884");

$myvalue = "$google8884";
$arr = explode(' ',trim($myvalue));
$googleapps84 = $arr[0];

$googleapps84 = strtolower("$googleapps84");

?>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

preg_match_all('/<h2>(.*?)<\/p>/', $install8484, $googleapps);
$google = $googleapps[0][6];
preg_match_all('/href="(.*?)"/', $google, $googleapps);
$google888844 = $googleapps[0][0];
$google888844 = str_replace("href=","",$google888844);
$google888844 = str_replace('"',"",$google888844);

echo "<div class='installgoogleapps' onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=$google888844&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\">";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432' style='margin-top:8px!important;'>";
echo "<div id='googleapps84'>";
preg_match_all('/<h2>(.*?)<\/p>/', $google, $googleapps);
$google = $googleapps[0][0];
$google = strip_tags("$google","<h2><cite><p><a>");
preg_match_all('/<cite>(.*?)<\/cite>/', $google, $googleapps);
$google888844 = $googleapps[0][0];
preg_match_all('/\.(.*?)\./', $google888844, $googleapps);
$google888844 = $googleapps[0][0];
$google888844 = str_replace(".","",$google888844);
$google = str_replace("h2","h3",$google);
$google = mb_convert_encoding($google,"HTML-ENTITIES","UTF-8");
$google = preg_replace("/<\/h3>(.*?)<cite>/","</h3><cite>",$google);
$google = preg_replace("/<\/cite>(.*?)<p>/","</cite><p>",$google);
$google = preg_replace('/href="(.*?)"/',"onClick=\"window.open('/page84.php?url8884=$1&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\"",$google);
echo "$google";

preg_match_all('/<h3>(.*?)<\/h3>/', $google, $googleapps);
$google8884 = $googleapps[0][0];
$google8884 = strip_tags("$google8884");

$myvalue = "$google8884";
$arr = explode(' ',trim($myvalue));
$googleapps84 = $arr[0];

$googleapps84 = strtolower("$googleapps84");

?>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

preg_match_all('/<h2>(.*?)<\/p>/', $install8484, $googleapps);
$google = $googleapps[0][7];
preg_match_all('/href="(.*?)"/', $google, $googleapps);
$google888844 = $googleapps[0][0];
$google888844 = str_replace("href=","",$google888844);
$google888844 = str_replace('"',"",$google888844);

echo "<div class='installgoogleapps' onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=$google888844&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\">";
echo "<div class='installgoogleapps84'>";
echo "<div class='installgoogleapps8432' style='margin-top:8px!important;'>";
echo "<div id='googleapps84'>";
preg_match_all('/<h2>(.*?)<\/p>/', $google, $googleapps);
$google = $googleapps[0][0];
$google = strip_tags("$google","<h2><cite><p><a>");
preg_match_all('/<cite>(.*?)<\/cite>/', $google, $googleapps);
$google888844 = $googleapps[0][0];
preg_match_all('/\.(.*?)\./', $google888844, $googleapps);
$google888844 = $googleapps[0][0];
$google888844 = str_replace(".","",$google888844);
$google = str_replace("h2","h3",$google);
$google = mb_convert_encoding($google,"HTML-ENTITIES","UTF-8");
$google = preg_replace("/<\/h3>(.*?)<cite>/","</h3><cite>",$google);
$google = preg_replace("/<\/cite>(.*?)<p>/","</cite><p>",$google);
$google = preg_replace('/href="(.*?)"/',"onClick=\"window.open('/page84.php?url8884=$1&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\"",$google);
echo "$google";

preg_match_all('/<h3>(.*?)<\/h3>/', $google, $googleapps);
$google8884 = $googleapps[0][0];
$google8884 = strip_tags("$google8884");

$myvalue = "$google8884";
$arr = explode(' ',trim($myvalue));
$googleapps84 = $arr[0];

$googleapps84 = strtolower("$googleapps84");

?>

<?php

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<style>

.installgoogleappsapps
{
}

.installgoogleappsapps84
{
background-color:#ffffff;
margin: 0px;
}

.installgoogleappsapps8432
{
padding-left: 24px;
padding-right: 16px;
padding-top: 0px;
padding-bottom: 0px;
background-color: #ffffff;
}

.installgoogleappsappsmobileapps
{
}
.installgoogleappsappsmobileapps84
{
}
.installgoogleappsappsmobileapps8432
{
padding-left: 24px;
padding-right: 16px;
padding-top: 0px;
padding-bottom: 0px;
background-color: #ffffff;
}
.installgoogleappsappsmobileapps a
{
}

.installgoogleappsappsgoogleapps
{
display:none;
}
.installgoogleappsappsgoogleapps84
{
}

.installgoogleappsappsgoogleapps8432
{
padding-left: 24px;
padding-right: 16px;
padding-top: 0px;
padding-bottom: 0px;
background-color: #ffffff;
}

@media screen and (max-width: 960px)
{
.installgoogleappsapps
{
background-color:#ffffff;
color:#222;
font-family: Roboto-Medium,HelveticaNeue-Medium,HelveticaNeue,sans-serif-medium,Arial,sans-serif;
font-size:14px;
border-style:solid;
border-width:1px;
border-top:none;
border-color:#dddddd;
}
.installgoogleappsapps84
{
padding:16px!important;
padding-bottom:14px;
padding-left:16px!important;
}
.installgoogleappsapps8432
{
padding-left:0px!important;
}
.installgoogleappsapps a
{
color:#222;
text-decoration:none;
}
.installgoogleappsappsgoogleapps
{
background-color:#f8f8f8;
color: rgba(0,0,0,.54);
font-family: Roboto-Medium,HelveticaNeue-Medium,HelveticaNeue,sans-serif-medium,Arial,sans-serif;
font-size:14px;
border-style:solid;
border-width:1px;
border-top:none;
border-color:#dddddd;
display:block;
}
.installgoogleappsappsgoogleapps84
{
padding:16px!important;
padding-bottom:14px;
padding-left:16px!important;
}
.installgoogleappsappsgoogleapps8432
{
background-color:#f8f8f8;
padding-left:0px!important;
}
.installgoogleappsappsmobileapps
{
background-color:#ffffff;
color:#222;
font-family: Roboto-Medium,HelveticaNeue-Medium,HelveticaNeue,sans-serif-medium,Arial,sans-serif;
font-size:14px;
border-style:solid;
border-width:1px;
border-top:none;
border-color:#dddddd;
border-bottom-width:2px;
}
.installgoogleappsappsmobileapps84
{
padding:16px!important;
padding-bottom:14px;
padding-left:16px!important;
}
.installgoogleappsappsmobileapps8432
{
padding-left:0px!important;
}
.installgoogleappsappsmobileapps a
{
color:#222;
text-decoration:none;
}
.installgoogleappsappsgoogleappsmobileapps
{
display:none
}
.installgoogleappsapps8432
{
padding-right:0px!important;
}
}

.installgoogleappsappsgoogleappsmobileapps8432
{
padding-left: 24px;
padding-right: 16px;
padding-top: 0px;
padding-bottom: 0px;
background-color: #ffffff;
font-size:1.17em;
color:#222222;
background-color:#ffffff;
}

.installgoogleappsappsgoogleappsmobileapps
{
background-color:#ffffff;
}

@media screen and (min-width: 960px)
{
.installgoogleappsappsmobileapps a
{
color:#1a0dab;
text-decoration:none;
line-height:26px;
font-size:14px;
font-weight:bold;
}
.installgoogleappsapps a
{
color:#1a0dab;
text-decoration:none;
line-height:26px;
font-size:14px;
font-weight:bold;
}
}

.installgoogleappsappsgoogleappsmobileapps
{
padding-bottom:18px;
}

</style>

<?php

echo "<div class='installgoogleappsappsgoogleapps'>";
echo "<div class='installgoogleappsappsgoogleapps84'>";
echo "<div class='installgoogleappsappsgoogleapps8432'>";
echo "<div id='googleappsappsgoogleapps84'>";

echo "Related searches";

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

echo "<div class='installgoogleappsappsgoogleappsmobileapps'>";
echo "<div class='installgoogleappsappsgoogleappsmobileapps84'>";
echo "<div class='installgoogleappsappsgoogleappsmobileapps8432'>";
echo "<div id='googleappsappsgoogleappsmobileapps84'>";

echo "Searches related to $google88884474";

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

$installmobileapps84 = file_get_contents("http://api.bing.com/osjson.aspx?query=$mobile");

$mobileapps84 = rand(2,8);

preg_match_all('/"(.*?)"/', $installmobileapps84, $googleapps84);
$google84 = $googleapps84[0][0];

$google84 = str_replace('"',"",$google84);

$googleinstallgoogleapps84 = "$google84";

$google84 = str_replace(" ","-",$google84);

$google8884 = str_replace("-"," ",$google84);

echo "<div class='installgoogleappsapps'>";
echo "<div class='installgoogleappsapps84'>";
echo "<div class='installgoogleappsapps8432'>";
echo "<div id='googleappsapps84'>";

echo "<a onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=http://$_SERVER[HTTP_HOST]/?q=$google84&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\">$google8884</a>";

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

preg_match_all('/"(.*?)"/', $installmobileapps84, $googleapps84);
$google84 = $googleapps84[0][1];

$google84 = str_replace('"',"",$google84);

$googleinstallgoogleapps84 = "$google84";

$google84 = str_replace(" ","-",$google84);

$google8884 = str_replace("-"," ",$google84);

echo "<div class='installgoogleappsapps'>";
echo "<div class='installgoogleappsapps84'>";
echo "<div class='installgoogleappsapps8432'>";
echo "<div id='googleappsapps84'>";

echo "<a onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=http://$_SERVER[HTTP_HOST]/?q=$google84&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\">$google8884</a>";

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

preg_match_all('/"(.*?)"/', $installmobileapps84, $googleapps84);
$google84 = $googleapps84[0][2];

$google84 = str_replace('"',"",$google84);

$googleinstallgoogleapps84 = "$google84";

$google84 = str_replace(" ","-",$google84);

$google8884 = str_replace("-"," ",$google84);

echo "<div class='installgoogleappsapps'>";
echo "<div class='installgoogleappsapps84'>";
echo "<div class='installgoogleappsapps8432'>";
echo "<div id='googleappsapps84'>";

echo "<a onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=http://$_SERVER[HTTP_HOST]/?q=$google84&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\">$google8884</a>";

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

preg_match_all('/"(.*?)"/', $installmobileapps84, $googleapps84);
$google84 = $googleapps84[0][3];

$google84 = str_replace('"',"",$google84);

$googleinstallgoogleapps84 = "$google84";

$google84 = str_replace(" ","-",$google84);

$google8884 = str_replace("-"," ",$google84);

echo "<div class='installgoogleappsapps'>";
echo "<div class='installgoogleappsappsmobileapps84'>";
echo "<div class='installgoogleappsappsmobileapps8432'>";
echo "<div id='googleappsappsmobileapps84'>";

echo "<a onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=http://$_SERVER[HTTP_HOST]/?q=$google84&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\">$google8884</a>";

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

preg_match_all('/"(.*?)"/', $installmobileapps84, $googleapps84);
$google84 = $googleapps84[0][4];

$google84 = str_replace('"',"",$google84);

$googleinstallgoogleapps84 = "$google84";

$google84 = str_replace(" ","-",$google84);

$google8884 = str_replace("-"," ",$google84);

echo "<div class='installgoogleappsapps'>";
echo "<div class='installgoogleappsapps84'>";
echo "<div class='installgoogleappsapps8432'>";
echo "<div id='googleappsapps84'>";

echo "<a onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=http://$_SERVER[HTTP_HOST]/?q=$google84&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\">$google8884</a>";

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

preg_match_all('/"(.*?)"/', $installmobileapps84, $googleapps84);
$google84 = $googleapps84[0][5];

$google84 = str_replace('"',"",$google84);

$googleinstallgoogleapps84 = "$google84";

$google84 = str_replace(" ","-",$google84);

$google8884 = str_replace("-"," ",$google84);

echo "<div class='installgoogleappsapps'>";
echo "<div class='installgoogleappsapps84'>";
echo "<div class='installgoogleappsapps8432'>";
echo "<div id='googleappsapps84'>";

echo "<a onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=http://$_SERVER[HTTP_HOST]/?q=$google84&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\">$google8884</a>";

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

preg_match_all('/"(.*?)"/', $installmobileapps84, $googleapps84);
$google84 = $googleapps84[0][6];

$google84 = str_replace('"',"",$google84);

$googleinstallgoogleapps84 = "$google84";

$google84 = str_replace(" ","-",$google84);

$google8884 = str_replace("-"," ",$google84);

echo "<div class='installgoogleappsapps'>";
echo "<div class='installgoogleappsapps84'>";
echo "<div class='installgoogleappsapps8432'>";
echo "<div id='googleappsapps84'>";

echo "<a onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=http://$_SERVER[HTTP_HOST]/?q=$google84&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\">$google8884</a>";

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

<?php

preg_match_all('/"(.*?)"/', $installmobileapps84, $googleapps84);
$google84 = $googleapps84[0][7];

$google84 = str_replace('"',"",$google84);

$googleinstallgoogleapps84 = "$google84";

$google84 = str_replace(" ","-",$google84);

$google8884 = str_replace("-"," ",$google84);

echo "<div class='installgoogleappsapps'>";
echo "<div class='installgoogleappsapps84'>";
echo "<div class='installgoogleappsapps8432'>";
echo "<div id='googleappsapps84'>";

echo "<a onClick=\"window.open('http://mobile84.herokuapp.com/url.php?url8884=http://$_SERVER[HTTP_HOST]/?q=$google84&username=9TVZl3NfY2lyQFss1o6GMQ==&password=9TVZl3NfY2lyQFss1o6GMQ==','_self');\">$google8884</a>";

echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

?>

</div>

</mobileappsinstallapps84>
</mobileinstallapps84>
</mobileappsinstall84>
</mobileapps84>

</mobilegoogleappsmobileapps84>

<style>

.mobileappsusernameapps8884
{
padding:12px;
font-size:14px;
}

@media screen and (min-width: 960px)
{
.mobileappsusernameapps8884
{
display:none;
}
.logout88888844
{
display:none;
}
}

.footer
{
margin-top:8px;
}

.logout88888844
{
color:#828282;
font-size:12.8px;
text-decoration:none;
padding:12px;
position:absolute;
}

.googleappsusermobileapps84
{
margin-left:18px;
color:#828282;
font-size:12.8px;
text-decoration:none;
position:absolute;
left:108px;
top:13.4px;
}

@media screen and (min-width: 960px)
{
.googleappsusermobileapps84
{
display:none;
}
}

</style>

<?php

if(preg_match("/[\W\w]/","$_GET[username]"))

{

?>

<style media="screen" type="text/css">

.logout88888844
{
display:none;
}

@media screen and (min-width: 960px)
{
.logout88888844
{
display:none;
}
}

</style>

<?php

}

?>

<?php

if(!preg_match("/[\W\w]/","$_GET[username]"))

{

?>

<style media="screen" type="text/css">

.googleappsusermobileapps84
{
display:none;
}

@media screen and (min-width: 960px)
{
.googleappsusermobileapps84
{
display:none;
}
}

</style>

<?php

}

?>

<div class="footer">

<a rel='nofollow' class="logout88888844" onClick="window.open('http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/register/index.php?q=<?php echo "$_GET[q]"; ?>','_self');">Sign in</a>

<div class='mobileappsusernameapps8884' style="color:#333;font-weight:bold;"><?php echo "$googleapps888844"; ?></div>

<a rel='nofollow' class="googleappsusermobileapps84" onClick="window.open('http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/register/index.php?q=<?php echo "$_GET[q]"; ?>','_self');"">Switch account</a>

<a rel="nofollow" class="googleinstallappslinks1" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=help','_self');">Help</a>

<a rel="nofollow" class="googleinstallappslinks2" onClick="window.open('http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/feedback/index.php?query=<?php echo "$mobile"; ?>&url=http://<?php echo "$_SERVER[HTTP_HOST]/"; ?>','_self');">Send feedback</a>

<a rel='nofollow' class="googleinstallappslinks3" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/privacy-policy.php','_self');">Privacy</a>

<a rel="nofollow" class="googleinstallappslinks4" onClick="window.open('http://mobile84.herokuapp.com/url.php?url8884=http://<?php echo "$_SERVER[HTTP_HOST]"; ?>/?q=terms','_self');">Terms</a>

<mobileapps84 style='color:#222222;text-decoration:none;position:absolute;bottom:4px;left:12px;font-size:12px;'>Copyright &copy; <?php echo date("Y"); ?> Gosearch All rights reserved.</mobileapps84>

</div>

<?php

if (preg_match("/cars/","$installgoogleappsmobileapps84"))

{

echo "<style>

html
{
background-color: rgb(32, 32, 32);
background-image: linear-gradient(45deg, black 25%, transparent 25%, transparent 75%, black 75%, black), linear-gradient(45deg, black 25%, transparent 25%, transparent 75%, black 75%, black), linear-gradient(to bottom, rgb(8, 8, 8), rgb(32, 32, 32));
background-size: 10px 10px, 10px 10px, 10px 5px;
background-position: 0px 0px, 5px 5px, 0px 0px;
}

.installgoogleapps8432
{
background-color: rgb(32, 32, 32);
background-image: linear-gradient(45deg, black 25%, transparent 25%, transparent 75%, black 75%, black), linear-gradient(45deg, black 25%, transparent 25%, transparent 75%, black 75%, black), linear-gradient(to bottom, rgb(8, 8, 8), rgb(32, 32, 32));
background-size: 10px 10px, 10px 10px, 10px 5px;
background-position: 0px 0px, 5px 5px, 0px 0px;
}

</style>";

}

if (preg_match("/pigeons/","$installgoogleappsmobileapps84"))

{

echo "<style>

html
{
background-color:#307d69;
}

.installgoogleapps8432
{
background-color:#5b4b66;
}

</style>";

}

if (!preg_match("/(news|images|videos|maps|more)/","$installgoogleappsmobileapps84"))

{

echo "<style>

.headerlinks1
{
color:#4285f4;
border-style:solid;
border-width:3px;
border-left:none;
border-right:none;
border-top:none;
text-shadow: 0.6px 0 0;
}

</style>";

}

if (preg_match("/news/","$installgoogleappsmobileapps84"))

{

echo "<style>

.headerlinks2
{
color:#4285f4;
border-style:solid;
border-width:3px;
border-left:none;
border-right:none;
border-top:none;
text-shadow: 0.6px 0 0;
}

</style>";

}

if (preg_match("/images/","$installgoogleappsmobileapps84"))

{

echo "<style>

.headerlinks3
{
color:#4285f4;
border-style:solid;
border-width:3px;
border-left:none;
border-right:none;
border-top:none;
text-shadow: 0.6px 0 0;
}

</style>";

}

if (preg_match("/videos/","$installgoogleappsmobileapps84"))

{

echo "<style>

.headerlinks4
{
color:#4285f4;
border-style:solid;
border-width:3px;
border-left:none;
border-right:none;
border-top:none;
text-shadow: 0.6px 0 0;
}

</style>";

}

if (preg_match("/maps/","$installgoogleappsmobileapps84"))

{

echo "<style>

.headerlinksmaps84
{
color:#4285f4;
border-style:solid;
border-width:3px;
border-left:none;
border-right:none;
border-top:none;
text-shadow: 0.6px 0 0;
}

</style>";

}

if (preg_match("/more/","$installgoogleappsmobileapps84"))

{

echo "<style>

.headerlinksmoreapps84
{
color:#4285f4;
border-style:solid;
border-width:3px;
border-left:none;
border-right:none;
border-top:none;
text-shadow: 0.6px 0 0;
}

</style>";

}

if (preg_match("/settings/","$installgoogleappsmobileapps84"))

{

echo "<style>

.headerlinkssettings
{
color:#4285f4;
border-style:solid;
border-width:4px;
border-left:none;
border-right:none;
border-top:none;
}

</style>";

}

if (preg_match("/tools/","$installgoogleappsmobileapps84"))

{

echo "<style>

.headerlinkstools
{
}

.headerlinkstools
{
}

</style>";

}

?>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function googleapps8884() {
document.getElementById("googleapps8884").classList.toggle("show");
}

</script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
document.getElementById("myDropdown").classList.toggle("show");
}

</script>

</body>

</html>

<?php

}

else

{

?>

<style>

html
{
margin-left:0%;
margin:0px;
font-family: Varela Round, sans-serif;
background-color:#ffffff;
}

#input84
{
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
width:644px;
height:44px;
padding-left:16px;
border:none;
background-color:#ffffff;
color:#000000;
margin-top:18px;
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
vertical-align:top;
border-radius:2px;
box-shadow:0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08);
transition:box-shadow 200ms cubic-bezier(0.4, 0.0, 0.2, 1);
}

#chatbox
{
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
width:644px;
height:44px;
padding-left:16px;
border:none;
background-color:#ffffff;
color:#000000;
margin-top:18px;
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
vertical-align:top;
border-radius:2px;
box-shadow:0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08);
transition:box-shadow 200ms cubic-bezier(0.4, 0.0, 0.2, 1);
}

#input84:hover
{
box-shadow: 0 3px 8px 0 rgba(0,0,0,0.2),0 0 0 1px rgba(0,0,0,0.08);
}

#chatbox:hover
{
box-shadow: 0 3px 8px 0 rgba(0,0,0,0.2),0 0 0 1px rgba(0,0,0,0.08);
}

#input84[type="text"]
{
font-size:16px;
}

#chatbox[type="text"]
{
font-size:16px;
}

.brandname84
{
font-size:26px;
margin-top:108px;
font-size:52px;
}

@media screen and (max-width: 960px)
{
#input84
{
width:100%;
}
#chatbox
{
width:100%;
}
.brandname84
{
margin-top:108px;
}
}

@media screen and (min-width: 960px)
{
.brandname84
{
margin-top:266px;
}
}

input[type="text"] {
background-image:url(googleapps84.png);
background-position:right 6px;
background-repeat:no-repeat;
}

.googleappsimg84
{
display:none;
}

.googleappsinstallappsimg84
{
display:none;
}

.divapps84
{
display:none;
}

.divappsmobileapps84
{
display:none;
}

.divappsmobileapps8884
{
display:none;
}

</style>

<style>

.googleapps888844
{
color:#4285f4;
}

.googleapps88888844
{
color:#4285f4;
}

.dropbtngoogleapps84
{
outline:none!important;
}

</style>

<center>

<div class="brandname84" onclick=window.open('<?php echo "http://$_SERVER[HTTP_HOST]/"; ?>','_self')><googleapps84 class="googleapps888844">Go</googleapps84><googleapps84 class="googleapps88888844">search</googleapps84></div>

</center>

<head>

<meta name="description" content="">

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">

<meta name="robots" content="index,follow">

</head>

<center>

<form action='' class="input" method="get">

<input type="text" name="q" autocomplete="off" id="input84" placeholder="" value="<?php echo "$installgoogleappsmobileapps84"; ?>" id="tags" onkeyup="showHint(this.value)" onclick="myFunctiongoogleapps84()" class="dropbtngoogleapps84">

</input>

<input type="hidden" name="username" value="<?php echo "$_GET[username]"; ?>"></input>

</form>

</center>

<style>

.googleappsbuywebsitescriptapps84
{
display:none;
}

</style>

<div class="googleappsadsapps84" style="position:absolute;bottom:0px;left:0px;width:100%;background-color:#dddddd;color:#222222;text-decoration:none;">

<div class="googleappsadsapps8884" style="padding:12px;">

<?php

echo "<mobileapps84 class='pulsate'><a rel='nofollow' href='/ads/index.php?url=http://$_SERVER[HTTP_HOST]/?q=$mobile' style='color:#222222;text-decoration:none;'>Business</a></mobileapps84>";

?>

<?php

echo "<mobileapps84><a rel='nofollow' href='/about/index.php' style='color:#222222;text-decoration:none;'>About</a></mobileapps84>";

?>

<?php

echo "<mobileapps84><a rel='nofollow' href='/analytics/login.php' style='color:#222222;text-decoration:none;'>Analytics</a></mobileapps84>";

?>

<mobileapps84 style='color:#222222;text-decoration:none;'>Copyright &copy; <?php echo date("Y"); ?> Gosearch All rights reserved.</mobileapps84>

</div>

</div>

<?php

}

?>

<style>

.googleappsbuywebsitescriptapps84
{
position:fixed;
width:100%;
background-color:#dddddd;
bottom:0px;
left:0px;
padding:12px;
}

</style>

<style>

.divapps84 {
  box-sizing: border-box
}
.divappsmobileapps84 {
  box-shadow: inset 0 0 3px 0px #484848, 0 0 6px 0px #484848;
  width: 18px;
  height: 18px;
  margin: 0 auto;
  border-radius: 50%;
  border-top: 4px solid #2E7D32;
  border-right: 4px solid #EF6C00;
  border-bottom: 4px solid #EF6C00;
  border-left: 4px solid #2E7D32;
  transform: rotate(54deg);
  position: relative;
  position:absolute;
  left:740px;
  top:30px;
}
.divappsmobileapps84:before, .divappsmobileapps84:after {
  content: "";
  position: absolute;
  left: -4px;
  top: -4px;
  width: 100%;
  height: 100%;
  border-radius: 50%;
}

.divappsmobileapps84:before {
  border-top: 4px solid #F9A825;
  border-right: 4px solid transparent;
  border-bottom: 4px solid transparent;
  border-left: 4px solid transparent;
  transform: rotate(60deg)
}
.divappsmobileapps84:after {
  border-top: 4px solid #F9A825;
  border-right: 4px solid transparent;
  border-bottom: 4px solid transparent;
  border-left: 4px solid transparent;
  transform: rotate(30deg)
}

@media screen and (max-width: 960px)
{
.divappsmobileapps84
{
display:none;
}
.divapps84 {
  box-sizing: border-box
}
.divappsmobileapps8884 {
  box-shadow: inset 0 0 3px 0px #484848, 0 0 6px 0px #484848;
  width: 18px;
  height: 18px;
  margin: 0 auto;
  border-radius: 50%;
  border-top: 4px solid #2E7D32;
  border-right: 4px solid #EF6C00;
  border-bottom: 4px solid #EF6C00;
  border-left: 4px solid #2E7D32;
  transform: rotate(54deg);
  position: relative;
  position:absolute;
  right:22px;
  top:72px;
}
.divappsmobileapps8884:before, .divappsmobileapps8884:after {
  content: "";
  position: absolute;
  left: -4px;
  top: -4px;
  width: 100%;
  height: 100%;
  border-radius: 50%;
}

.divappsmobileapps8884:before {
  border-top: 4px solid #F9A825;
  border-right: 4px solid transparent;
  border-bottom: 4px solid transparent;
  border-left: 4px solid transparent;
  transform: rotate(60deg)
}
.divappsmobileapps8884:after {
  border-top: 4px solid #F9A825;
  border-right: 4px solid transparent;
  border-bottom: 4px solid transparent;
  border-left: 4px solid transparent;
  transform: rotate(30deg)
}
}

</style>

<div class="divappsmobileapps84"></div>

<div class="divappsmobileapps8884"></div>

<?php

$referrer8884 = "$_SERVER[HTTP_REFERER]";

$parsed = parse_url( $referrer, PHP_URL_QUERY );

parse_str( $parsed, $query );

?>

