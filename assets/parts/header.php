<header id="#top">
<?php session_start(); ?>
<nav class="main-navigation navbar navbar-expand-lg navbar-light">
    <div class="container">
    <?php if (isset($_SESSION['user_id'])): ?>
            <div style="text-align: center; margin-top: 20px;">
                <span style="color: black; font-size: 14px;">
                    You are logged in as <strong><?php echo htmlspecialchars($_SESSION['login']); ?></strong> 
                    <!-- (<?php echo htmlspecialchars($_SESSION['rola']); ?>) -->
                </span>
                <form action="logout.php" method="POST" style="margin-top: 5px;">
                    <button type="submit" class="btn btn-danger" style="font-size: 13px;">Log out</button>
                </form>
            </div>
        <?php else: ?>
            <div style="text-align: center; margin-top: 20px;">
                <span style="color: black; font-size: 14px;">
                    You are not logged in. Please <a href="http://localhost/design/loginpage.php" style="color: blue;">log in</a> 
                </span>
            </div>
        <?php endif; ?>
      <a class="navbar-brand" href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Homepage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="explore.php">Explore Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="trending.php">Trending</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
</nav>

</header>