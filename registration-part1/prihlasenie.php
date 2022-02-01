</ul>
<ul class="nav navbar-nav navbar-right">

    <?php
        if(isset($_SESSION['user'])){?>
            <li><span class="navbar-text"><?php echo $_SESSION['user']?></span></li>
            <li style="margin-left: 10px;"><a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        <?php }
        else{ ?>
            <li><a href="login.php" class="nav-link"><i class="fas fa-sign-in-alt"></i>Login</a></li>   <!--ak nie som prihlaseny bude LOGIN-->
            <li><a href="registration.php" class="nav-link"><i class="fas fa-edit"></i>Registration</a></li>    <!--registrovanie do databazy-->
        <?php } ?>

</ul>
</div>
</nav>
</header>

<!--Start content-->

<main role ="main">
    <div class="container">