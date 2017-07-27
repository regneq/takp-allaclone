<form name='fullsearch' method='GET' action='fullsearch.php'>
    <h3>Search</h3>
    <input type='hidden' name='isearchtype' value='' />
    <input type='text' name='iname' placeholder='Name...' />
    <input type='text' name='iid' placeholder='ID...' />
    <p><a href="<?php echo $root_url; ?>strategy/melee.php">Melee Damage Calculator</a></p>
    
    <?php  if($AllowQuestsNPC) : ?>
    <a href='".$root_url."quests/zones.php'>Quests by Zone</a>
    <?php endif; ?>

    <?php if($ShowAccount) : ?>
    <a href="<?php echo $root_url; ?>accounts.php">Player Accounts</a>
    <?php endif; ?>

    <?php if($ShowCharacters) : ?>
    <a href="<?php echo $root_url; ?>chars.php">Player Characters</a>
    <?php endif; ?>
</form>

<?php if($UseZAMSearch) : ?>
    <div class="zam-search">
        <script type="text/javascript">
            var zam_searchbox_site = "everquest";
            var zam_searchbox_format = "160x130";
        </script>
        <script type="text/javascript" src="http://zam.zamimg.com/j/searchbox.js"></script>
    </div>
<?php endif; ?>