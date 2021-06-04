<nav id="nav">
    <ul>
        <li class="<?php echo ($Page == "index" ? "current" : "")?>" ><a href="index.php">Home</a></li>
        <li>
            <a href="#">Dropdown</a>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Magna phasellus</a></li>
                <li>
                    <a href="#">Phasellus consequat</a>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor</a></li>
                        <li><a href="#">Phasellus consequat</a></li>
                        <li><a href="#">Magna phasellus</a></li>
                        <li><a href="#">Etiam dolore nisl</a></li>
                    </ul>
                </li>
                <li><a href="#">Veroeros feugiat</a></li>
            </ul>
        </li>
        <li class="<?php echo ($Page == "left-sidebar" ? "current" : "")?>" ><a href="left-sidebar.php">Left Sidebar</a></li>
        <li class="<?php echo ($Page == "right-sidebar" ? "current" : "")?>" ><a href="right-sidebar.php">Right Sidebar</a></li>
        <li class="<?php echo ($Page == "no-sidebar" ? "current" : "")?>" ><a href="no-sidebar.php">No Sidebar</a></li>
        <li class="<?php echo ($Page == "Wireframe_&_Mockups" ? "current" : "")?>" ><a href="Wireframe_&_Mockups.php">Wirefarme & Mockups</a></li>
        <li class="<?php echo ($Page == "Urheberrecht" ? "current" : "")?>" ><a href="Urheberrecht.php">Urheberrecht</a></li>
    </ul>
</nav>