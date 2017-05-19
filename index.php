<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>





body {
    background: black
}
* {
    box-sizing: border-box;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
	color: #ff0307;
    float: left;
    padding: 15px;
}
html {
    font-family: "Lucida Sans", sans-serif;
}
.header {
    background-color: powderblue;
    color: #ffffff;
    padding: 15px;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 8px;
    margin-bottom: 7px;
    background-color: powderblue;
    color: #ffffff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover {
    background-color: powerblue;
}
.aside {
    background-color: black;
    padding: 15px;
    color: #ffffff;
    text-align: center;
    font-size: 14px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.footer {
    background-color: powderblue;
    color: #ffffff;
    text-align: center;
    font-size: 12px;
    padding: 15px;
}
a{
	color:#000;
    text-decoration: none;
}
/* For mobile phones: */
[class*="col-"] {
    width: 100%;
}
@media only screen and (min-width: 600px) {
    /* For tablets: */
    .col-m-1 {width: 8.33%;}
    .col-m-2 {width: 16.66%;}
    .col-m-3 {width: 25%;}
    .col-m-4 {width: 33.33%;}
    .col-m-5 {width: 41.66%;}
    .col-m-6 {width: 50%;}
    .col-m-7 {width: 58.33%;}
    .col-m-8 {width: 66.66%;}
    .col-m-9 {width: 75%;}
    .col-m-10 {width: 83.33%;}
    .col-m-11 {width: 91.66%;}
    .col-m-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
    /* For desktop: */
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
}

</style>
</head>
<body>

<div class="header">
  <h1></h1>
</div>

<div class="row">
<! -- menu 1 -->
<div class="col-3 col-m-3 menu">
  <ul>
    <li><a href = "localhost/3000" >3000</a></li>
    <li><a href = "localhost/8080">8080</a></li>
    <li><a href = "downloads/" >downloads</a></li>
    <li><a href = "/kro">Logs</a></li>
    <li><a href = "logs/"> logs</a></li>
  </ul>
</div>

<div class="col-6 col-m-9">
	
  <h1>Quebec.ioe</h1>
  <p></p>
</div>

<div class="col-3 col-m-3 menu">
  <div class="aside">
       <li><a href = "https://sites.google.com/a/tritechsc.org/sidneyb/"> Google Site</a></li>
       <li><a href = "https://github.com/CorvusCoding"> CorvusCoding</a></li>
    <p></p>
  </div>
</div>

</div>

<div class="footer">
  <p></p>
</div>

</body>
</html>
