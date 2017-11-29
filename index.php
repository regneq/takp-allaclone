<?php

	include('./revision.php');
	include('./includes/config.php');
	include($includes_dir.'constantes.php');

	include($includes_dir.'mysql.php');
	include($includes_dir.'functions.php');

	$Title="Welcome to TAKP AllaClone!";
	include($includes_dir.'headers.php');
    echo'<img style="max-height:50%; margin:0 auto; display: block;" src="'. $root_url .'images/eqmac.jpg" />';


	if (file_exists("design/index.html"))
	{
		print "<center><table width=95% border=0><tr valign=top><td>";
		include("design/index.html");
		print "</td></tr></table></center>";
	}
	
	include($includes_dir."footers.php");
?>


