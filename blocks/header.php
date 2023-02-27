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
                <a href="/cart"><img class="cart" src="../static/images/empty_cart.png" alt="cart"></a>
            </div>
        </div>
        <script src="../static/js/currentLink.js"></script>
    ';