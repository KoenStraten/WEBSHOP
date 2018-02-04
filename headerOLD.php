<html>
<head>
<style type="text/css">
.coverphoto {
	background-size: cover;
	width: 100%;
	height: 250px;
	z-index: 1;
	position: relative;
	z-index: 1;
}

.logo {
	width: 150px;
	z-index: 2;
	position: absolute;
	left: 2%;
	top: 50px;
}

.search {
	z-index: 2;
	position: absolute;
	right: 5px;
	height: 25px;
	top: 215px;
}

input[type=text] {
	width: 130px;
	box-sizing: border-box;
	border: 2px solid #ccc;
	border-radius: 4px;
	font-size: 14px;
	background-color: white;
	background-image: url('searchicon.png');
	background-position: 10px 10px;
	background-repeat: no-repeat;
	padding: 12px 0px 12px 5px;
	-webkit-transition: width 0.4s ease-in-out;
	transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
	width: 20%;
}

.button {
	background-color: grey;
	color: black;
	text-align: center;
	text-decoration: none;
	font-size: 12px;
	margin: 4px 2px;
	padding: 5px;
	border-radius: 4px;
	background-color: white;
}

.buttons {
	float: left;
	z-index: 2;
	position: absolute;
	right: 5px;
	top: 15px;
}

.nav {
	border: 1px solid black;
	border-width: 1px 0;
	list-style: none;
	margin: 0;
	padding: 0;
	text-align: center;
	width: 100%;
}

.nav li {
	display: inline;
}

.nav a {
	display: inline-block;
	padding: 10px;
	color: black;
}

.nav a:hover {
	color: red;
}
</style>
</head>

<body>
	<input type="text" name="search" class="search" placeholder="Search..">
	<img class="coverphoto" alt="coverphoto"
		src="https://cdn6.f-cdn.com/contestentries/508287/15863345/57603d491b226_thumb900.jpg">

	<ul class="nav">
		<li><a href="/workspace/webshop/webshop/home.php">Home</a></li>
		<li><a href="#">Categories</a></li>
		<li><a href="/workspace/webshop/webshop/shoppingcart.php">Shopping
				cart</a></li>
		<li><a href="/workspace/webshop/webshop/about.php">About</a></li>
	</ul>

	<a href="/workspace/webshop/webshop/home.php"> <img class="logo"
		alt="logo"
		src="https://upload.wikimedia.org/wikipedia/commons/6/6f/HP_logo_630x630.png"></a>

	<div class="buttons">
		<a href="#" class="button home">Log in</a> <a href="#"
			class="button register">Register</a>
	</div>
</body>

</html>