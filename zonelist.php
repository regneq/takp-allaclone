<?php
$Title="Zone List";
include('./includes/config.php');
include($includes_dir.'constantes.php');
include($includes_dir.'headers.php');
include($includes_dir.'mysql.php');
include($includes_dir.'functions.php');
CreateToolTip("kunark", '<center><img src="http://media.giantbomb.com/uploads/0/1593/370230-everquest_ruins_of_kunark_large.jpg"></center>');
CreateToolTip("velious", '<center><img src="http://upload.wikimedia.org/wikipedia/en/d/d5/EverQuest_-_The_Scars_of_Velious_Coverart.png"></center>');
CreateToolTip("luclin", '<center><img src="http://upload.wikimedia.org/wikipedia/en/1/19/EverQuest_-_The_Shadows_of_Luclin_Coverart.png"></center>');
CreateToolTip("pop", '<center><img src="http://cdn.wikimg.net/strategywiki/images/thumb/4/45/EverQuest_The_Planes_of_Power_cover_art.jpg/250px-EverQuest_The_Planes_of_Power_cover_art.jpg"></center>');
echo '<center>';
echo '<a href=static/antonica.php>Antonica</a><br>                        ';
echo '<a href=static/odus.php>Odus</a><br>                                ';
echo '<a href=static/faydwer.php>Faydwer</a><br>                          ';
echo '<a href=static/planes.php>Old	 World Planes</a><br>                  ';
echo '<a href=static/kunark.php id="kunark">Ruins of Kunark</a><br>                   ';
echo '<a href=static/velious.php id="velious">Scars of Velious</a><br>                 ';
echo '<a href=static/luclin.php id="luclin">Shadows of Luclin</a><br>                 ';
echo '<a href=static/power.php id="pop">The Planes of Power</a><br>                ';
echo '</center>';
include($includes_dir."footers.php");
?>