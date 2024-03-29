<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">

    <title>Web Storage API example</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Bitter|Ubuntu+Mono' rel='stylesheet' type='text/css'>
<!--    <link rel="stylesheet" href="style.css">-->
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>
  <div class="wrapper">
    <h1>Web storage</h1>

    <p>This example is designed to demonstrate usage of the <a href="http://dev.w3.org/html5/webstorage/">W3C Web Storage API</a>. It should work as far back as IE8. Choose custom background colours, logos and fonts from the below drop down menus, then try closing and reopening the page — you will find that your choices are remembered, as they are stored using Web Storage. You can also visit the <a href="event.html" target="_blank">storage event output</a> (opens in new tab). Open this, change some values in the index page, then look at the events page — you'll see the storage changes reported.</p>

    <form>
      <div>
        <label for="bgcolor">Choose background color:</label>
	    <input class="color" id="bgcolor" value="FF0000">
      </div>
      <div>
        <label for="font">Choose font style:</label>
        <select id="font">
        	<option value="'Open Sans Condensed', sans-serif" selected>Sans-serif</option>
        	<option value="'Bitter', serif">Serif</option>
        	<option value="'Ubuntu Mono'">Monospace</option>
        </select>
      </div>
      <div>
        <label for="image">Choose image:</label>
        <select id="image">
        	<option value="https://mdn.github.io/dom-examples/web-storage/images/firefoxos.png" selected>Firefox</option>
        	<option value="https://mdn.github.io/dom-examples/web-storage/images/crocodile.png">Crocodile</option>
        	<option value="https://mdn.github.io/dom-examples/web-storage/images/tortoise.png">Tortoise</option>
        </select>
      </div>
    </form>

    <footer></footer>
    <img src="https://mdn.github.io/dom-examples/web-storage/images/firefoxos.png">
  </div>
  </body>
  <script src="./scriptExo.js"></script>
  <script src="./mainExo.js"></script>
</html>

<style>
   /* General setup */

* {
	box-sizing: border-box;
}

html,body {
	margin: 0;
}

html {
	font-size: 10px;
	font-family: sans-serif;
}

/* Typography */

h1 {
	font-size: 6rem;
}

p,form,li {
	font-size: 1.6rem;
	line-height: 1.5;
	font-family: 'Open Sans Condensed', sans-serif;
}

/* Layout and styles */

html {
	background-color: #FF0000;
	height: 100%;
}

body {
	display: -webkit-box;
	display: -moz-box;
	display: box;
	display: flex;
    
    -webkit-box-align: center;
	-moz-box-align: center;
	box-align: center;
	justify-content: center;

    -webkit-box-pack: center;
	-moz-box-pack: center;
	box-pack: center;
    align-items: center;

    height: inherit;
}

body > .wrapper {
    width: 90%;
	max-width: 800px;
	background-color: rgb(250,250,250);
	padding: 2rem;
	position: relative;
	border: 5px solid black;
}

body > div > div {
	width: 300px;
}

h1 {
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	position: absolute;
	left: 2rem;
	top: -4.6rem;
	text-transform: uppercase;
	color: rgb(250,250,250);
	text-shadow: 0px -1px 1px black,
	             0px -2px 1px black,
	             0px -3px 1px black,
	             0px -4px 1px black,
	             0px -5px 1px black;
}

form div label {
  float: left;
  width: 45%;
  text-align: right;
}

form div input, form div select {
	float: right;
}

form div input {
	width: 49%;
	line-height: 1.5;
}

form div select {
	width: 50%;
}

form div option {
		height: 2rem;
}

form div {
	clear: both;
	margin: 0 auto;
	width: 70%;
	padding-bottom: 4rem;
}

footer {
	clear: both;
}

img {
	position: absolute;
	bottom: 1rem;
	left: 1rem;
}

@media (max-width: 800px) {
	body > div {
	  width: 100%;
	}
}

@media (max-width: 600px) {
    h1 {
      font-size: 3rem;
      top: -2.2rem;
    }

	form div label {
      float: none;
      width: 100%;
      text-align: left;
    }

    form div input, form div select {
	  float: none;
	  width: 100%;
    }

    form div {
	  padding-bottom: 1.5rem;
    }

    img {
	  bottom: -4rem;
    }

}
</style>