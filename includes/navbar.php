<div class="nav-wrapper">
    <ul class="navbar container">
        <li><a href="<?php echo $root_url; ?>index.php" title="">Home</a>
        <?php if ($EnableNews) : ?>
        <li><a href = "<?php echo $root_url; ?>news.php" >News</a ></li>
        <?php endif; ?>

        <li><a href="http://www.takproject.net/forums/index.php?forums/changelog.24/" target="_blank">Change Log</a></li>
        <li><a href="http://www.eqemulator.org" target="_blank">EQEmulator</a></li>
        <li><a href="http://everquest.allakhazam.com/" target="_blank">ZAM</a></li>
        <li><a href="#" class="toggle">Zones</a>
            <ul class="dropdown-menu">
                <?php if ($UseCustomZoneList==TRUE) : ?>
                <li><a href="<?php echo $root_url; ?>customzoneslist.php">Custom Zone List</a></li>';
                <?php ; else : ?>
                <li><a href="<?php echo $root_url; ?>zonelist.php">By Expansion</a></li>
                <li><a href="<?php echo $root_url; ?>zoneslevels.php">By Level</a></li>
                <li><a href="<?php echo $root_url; ?>zones.php">Populated</a></li>
                <?php ; endif; ?>
            </ul>
        </li>
        <li><a href="#" class="toggle">Items</a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo $root_url; ?>items.php">Search</a></li>
            </ul>
        </li>
        <li><a href="#" class="toggle">Bestiary</a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo $root_url; ?>npcs.php">NPC Search</a></li>
                <li><a href="<?php echo $root_url; ?>advnpcs.php">Advanced NPC Search</a></li>
                <li><a href="<?php echo $root_url; ?>pets.php">Pets</a></li>
            </ul>
        </li>
        <li><a href="#" class="toggle">Factions</a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo $root_url; ?>factions.php">Faction Search</a></li>
                <li><a href="<?php echo $root_url; ?>npcfactions.php">NPCs By Faction</a></li>
            </ul>
        </li>
        <li><a href="#" class="toggle">Spells</a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo $root_url; ?>spells.php">Spell Search</a></li>
            </ul>
        </li>
        <li><a href="#" class="toggle">Recipes</a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo $root_url; ?>recipes.php">Recipe Search</a></li>
            </ul>
        </li>
    </ul>
</div>