<nav class="navbar fixed-top navbar-expand-lg navbar-light" id="nav-container">


        <a class="navbar-brand white-text-color" href="index.php">FitAesthetics.LK</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">

            <ul class="navbar-nav">

              <form class="form-inline mr-3 " action="./search.php" method="post">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
              <button class="btn white-text-color red-button-color my-2 my-sm-0" type="submit" name="search-button">Search</button>
              </form>


                <li class="nav-item active">
                    <a class="nav-link white-text-color" href="./editProfile.php">My Profile<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link white-text-color" href="./search.php">View All</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link white-text-color" href="./logout.php">Logout</a>
                </li>




            </ul>
        </div>
    </nav>
