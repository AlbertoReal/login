<?php 
// comprobador del nivel de acceso

//si el nivel de acceso no es ADMIN acceso restringido a la pagina de login basica

if(isset($_SESSION['acces_level']) && $_SESSION['acces_level']=="Admin"){
header("Location: {$home_url}admin/index.php?action=logged_in_as_admin");
}

// si se $require_login tiene valor "true"

else if (isset($require_login) && $require_login==true) {
	//si el usuario no esta logeado redirigir a la pagina de login
	if(isset($_SESSION['acces_level']){
	header("Location: {$home_url}login.php?action=please_login");
	}
}

// si el usuario esta en la pagina 'logeo', 'registro' o e'sing up' pero el usuario ya ha iniciado sesion
else if(isset($page_title) && ($page_title=="Login" || $page_title=="Sign Up")){
	if (isset($_SESSION['acces_level']) && $_SESSION['acces_level']=="Customer"){
		header("Location: {$home_url}index.php?action=already_logged_in");
	}
}
else {
	//sin fallos ubicacion del usuario correcta
}
?>