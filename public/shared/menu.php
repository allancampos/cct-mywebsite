<div class="menu">
                <nav >
                <!-- check if the user is logged or not -->
                
                <?php 
                    $link = basename($_SERVER['PHP_SELF']);
                    if (!$_SESSION['login_user']) : 
                ?>

                    <button type = "button" class="button-login"><a href="login.php"> Login</a></button>
                    <a href="index.php" <?php if ($link == "index.php") { echo "class='active'"; } ?> > Home </a> 
                    
                <?php else : ?>
                    <button type = "button" class="button-login"><a href="logout.php"> Logout</a></button>
                    <a href="databasereview.php" <?php if ($link == "databasereview.php") { echo "class='active'"; } ?>>Database Review</a>
                    <!-- <a href="contact.php" <?php if ($link == "contact.php") { echo "class='active'"; } ?>>Contact</a> -->
                    <a href="education.php" <?php if ($link == "education.php") { echo "class='active'"; } ?>>Education</a>
                    <a href="work_experience.php" <?php if ($link == "work_experience.php") { echo "class='active'"; } ?>>Work Experience</a>  
                    <a href="skills.php" <?php if ($link == "skills.php") { echo "class='active'"; } ?>>Skills</a>           
                    <a href="index.php" <?php if ($link == "index.php") { echo "class='active'"; } ?> > Home </a>

                <?php endif; ?>
                    
                </nav>
                <a href="index.php" class="logo"> <img src="img/brand.png" class="brand" alt="brand"> </a> 
                
</div>