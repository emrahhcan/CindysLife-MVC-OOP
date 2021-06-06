<div class="container">
    <?php
        require APPROOT . '/views/includes/head.php';
        require APPROOT . '/views/includes/navigation.php';
    ?>
    <header class="login-container">
        <h1 class="font-property">Register</h1>
        <div class="tags-divider">
            <div class="tags-divider-line"></div>
            <div class="tags-divider-icon"><i class="fas fa-star"></i></div>
            <div class="tags-divider-line"></div>
        </div>
        <form action="<?php echo URLROOT; ?>/users/register" method ="POST" id="register-form">
            <input type="text" placeholder="Username" name="username">
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="password">
            <input type="password" placeholder="Confirm Password" name="confirmPassword">
            <button id="submit" type="submit" value="submit">Sign in</button>
            <p class="options">
                Already Have an Account
                <a href="<?php echo URLROOT; ?>/users/login">
                    Let's Sign In
                </a>
            </p>
            <span class="invalidFeedback">
                <?php
                    echo $data['usernameError'];
                    echo $data['emailError'];
                    echo $data['passwordError'];
                    echo $data['confirmPasswordError'];
                ?>
            </span>
        </form>
    </header>
    <?php 
        require APPROOT . '/views/includes/footer.php';
    ?>
</div>