<div class="nav-wrapper">
    <ul class="navbar">
        <li><a href="#" class="toggle">Search</a>
            <ul class="dropdown-menu">
                <li>
                    <form name='fullsearch' method='GET' action='fullsearch.php'>
                    <input type='hidden' name='isearchtype' value='' />
                    <input
                        onfocus="if(this.value == 'All...') { this.value = ''; }"
                        onkeypress="var key=event.keyCode || event.which; if(key==13){ this.form.isearchtype.value = 'id'; this.form.submit(); } else {return true;}"
                        type='text'
                        name='iid'
                        placeholder='All...' />
                    <div class="full-search">
                        <a href="fullsearch.php">more</a>
                    </div>
                    </form>
                </li>
                <li>
                    <form name='fullsearch' method='GET' action='fullsearch.php'>
                    <input type='hidden' name='isearchtype' value='' />
                    <input
                        onfocus="if(this.value == 'Item...') { this.value = ''; }"
                        onkeypress="var key=event.keyCode || event.which; if(key==13){ this.form.isearchtype.value = 'name'; this.form.submit(); } else {return true;}"
                        type='text'
                        name='iname'
                        placeholder='Item...' />
                    <div class="full-search">
                        <a href="items.php">more</a>
                    </div>
                    </form>
                </li>
                <li>
                    <form method='GET' action='spells.php'>
                    <input
                        onfocus="if(this.value == 'Spell...') { this.value = ''; }"
                        onkeypress="var key=event.keyCode || event.which; if(key==13){ this.form.isearchtype.value = 'id'; this.form.submit(); } else {return true;}"
                        type='text'
                        name='name'
                        placeholder='Spell...' />
                    <div class="full-search">
                        <a href="spells.php">more</a>
                    </div>
                    </form>
                </li>
                <li>
                    <form method='GET' action='factions.php'>
                    <input
                        onfocus="if(this.value == 'Faction...') { this.value = ''; }"
                        onkeypress="var key=event.keyCode || event.which; if(key==13){ this.form.isearchtype.value = 'id'; this.form.submit(); } else {return true;}"
                        type='text'
                        name='iname'
                        placeholder='Faction...' />
                    <div class="full-search">
                        <a href="factions.php">more</a>
                    </div>
                    </form>
                </li>
                <li>
                    <form method='GET' action='recipes.php'>
                    <input
                        onfocus="if(this.value == 'Recipe...') { this.value = ''; }"
                        onkeypress="var key=event.keyCode || event.which; if(key==13){ this.form.isearchtype.value = 'id'; this.form.submit(); } else {return true;}"
                        type='text'
                        name='iname'
                        placeholder='Recipe...' />
                    <div class="full-search">
                        <a href="recipes.php">more</a>
                    </div>
                    <input type="hidden" name="isearch" value="Search" />
                    </form>
                </li>
            </ul>
        </li>
        <?php if ($EnableNews) : ?>
        <li><a href = "<?php echo $root_url; ?>news.php" >News</a ></li>
        <?php endif; ?>

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
        <li><a href="<?php echo $root_url; ?>items.php">Items</a></li>
        <li><a href="#" class="toggle">Bestiary</a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo $root_url; ?>npcs.php">NPC Search</a></li>
                <li><a href="<?php echo $root_url; ?>advnpcs.php">Advanced NPC Search</a></li>
                <li><a href="<?php echo $root_url; ?>pets.php">Pets</a></li>
            </ul>
        </li>
        <li><a href="#" class="toggle">Resources</a>
            <ul class="dropdown-menu">
                <li><a href="http://wiki.takp.info">TAKP Wiki</a></li>
                <li><a href="http://www.takproject.net/forums/index.php?forums/changelog.24/" target="_blank">TAKP Change Log</a></li>
            </ul>
        </li>
    </ul>
</div>
