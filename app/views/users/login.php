<div class="container">
    <?php
        require APPROOT . '/views/includes/head.php';
        require APPROOT . '/views/includes/navigation.php';
    ?>
    <header class="login-container">
        <h1 class="font-property">Sign In</h1>
        <div class="tags-divider">
            <div class="tags-divider-line"></div>
            <div class="tags-divider-icon"><i class="fas fa-star"></i></div>
            <div class="tags-divider-line"></div>
        </div>
        <form action="<?php echo URLROOT; ?>/users/login" method ="POST">
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <button id="submit" type="submit">Sign in</button>
            <p class="options">
                Not Registered Yet? 
                <a href="<?php echo URLROOT; ?>/users/register">
                    Create an Account!
                </a>
            </p>
            <span class="invalidFeedback">
                <?php
                    echo $data['usernameError'];
                    echo $data['passwordError'];
                ?>
        </span>
        </form>
    </header>
    <?php 
        require APPROOT . '/views/includes/footer.php';
    ?>
</div>