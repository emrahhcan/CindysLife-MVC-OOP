<nav class="navbar">
    <a href="#" class="logo">Cindy's Life</a>
    <div class="navigation">
        <ul>
            <li>
                <a href="<?php echo URLROOT; ?>/index/#home">Home</a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/index/#tags">Tags</a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/index/#about">About</a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/index/#contact">Contact</a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/posts/index">Blog</a>
            </li>
            <li class="dropdown">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <a href="#" id="dropdown">
                        <?php 
                            echo $_SESSION['username'];
                        ?>
                    </a>  
                    <div class="dropdown-content">
                        <a href="<?php echo URLROOT; ?>/users/logout">Log Out</a>
                    </div>
                <?php else : ?>
                    <a href="<?php echo URLROOT; ?>/users/login">Login</a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</nav>
<script src="<?php echo URLROOT ?>/public/javascript/dropdown.js" type="text/javascript"></script>