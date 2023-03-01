<?php
    echo '
        <div class="content header-content">
            <a href="../store.php" class="left">
                <img class="logo" src="../static/images/coffee.png">
                <h1>Coffee Shop</h1>
            </a>
            <div class="links">
            
                <a class="<?php if($uri == /) { echo active; } else { echo none; } ?>" href="../store.php">Shop</a>
                <a href="../about.php">About</a>
                <a href="/">Home</a>
            </div>
            <div class="user">
    ';
                if (!$_SESSION['user']) {
                    echo '
                        <a class="login-link" href="../login.php">Sign In</a>
                        <a class="reg-link" href="../register.php">Sign Up</a>
                    ';
                } else {
                    echo '
                        <a href="/cart"><img class="cart" src="../static/images/empty_cart.png" alt="cart"></a>
                        <p>
                    ';
                    echo $_SESSION['username'];
                    echo '
                        </p>
                        <a class="exit" href="../vendor/exit.php">Exit</a>
                    ';
                }

    echo '</div>
        </div>
        <script src="../static/js/currentLink.js"></script>
    ';