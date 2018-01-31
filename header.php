<html>
<head>
<style type="text/css">
.coverphoto {
	background-size: cover;
	width: 100%;
	height: 250px;
	z-index: 1;
	position: absolute;
	z-index: 1;
}

.logo {
	width: 150px;
	z-index: 2;
	position: relative;
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
	font-size: 16px;
	margin: 4px 2px;
	padding: 5px;
	border-radius: 4px;
}

.buttons {
	float: left;
	z-index: 2;
	position: absolute;
	right: 5px;
	top: 15px;
}
</style>
</head>

<body>
	<input type="text" name="search" class="search" placeholder="Search..">
	<img class="coverphoto" alt="coverphoto"
		src="https://cdn6.f-cdn.com/contestentries/508287/15863345/57603d491b226_thumb900.jpg">
	<img class="logo" alt="logo"
		src="https://upload.wikimedia.org/wikipedia/commons/6/6f/HP_logo_630x630.png">

	<div class="buttons">
		<a href="#" class="button login">Log in</a> <a href="#"
			class="button register">Register</a>
	</div>
</body>

</html>