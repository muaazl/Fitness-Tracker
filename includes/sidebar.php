<div class="sidebar" data-background-color="black" data-active-color="info">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                Solo Leveling Fitness
            </a>
        </div>

        <ul class="nav">
            <li <?php if ($activePage == 'dashboard') echo 'class="active"'; ?>>
                <a href="dashboard.php">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li <?php if ($activePage == 'workout-plan') echo 'class="active"'; ?>>
                <a href="workout-plan.php">
                    <i class="ti-calendar"></i>
                    <p>Workout Plan</p>
                </a>
            </li>
            <li <?php if ($activePage == 'workout-tracker') echo 'class="active"'; ?>>
                <a href="workout-tracker.php">
                    <i class="ti-pencil-alt"></i>
                    <p>Workout Tracker</p>
                </a>
            </li>
            <li <?php if ($activePage == 'progress-log') echo 'class="active"'; ?>>
                <a href="progress-log.php">
                    <i class="ti-stats-up"></i>
                    <p>Progress Log</p>
                </a>
            </li>
            <li <?php if ($activePage == 'motivation-zone') echo 'class="active"'; ?>>
                <a href="motivation-zone.php">
                    <i class="ti-bolt"></i>
                    <p>Motivation Zone</p>
                </a>
            </li>
            <li class="active-pro" <?php if ($activePage == 'user') echo 'class="active"'; ?>>
                <a href="user.php">
                    <i class="ti-user"></i>
                    <p>User Profile</p>
                </a>
            </li>
        </ul>
    </div>
</div>