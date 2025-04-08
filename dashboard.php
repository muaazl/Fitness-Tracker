<?php
$pageTitle = 'Dashboard'; // Set the page title
$activePage = 'dashboard'; // Set the active page for the sidebar
include('includes/db.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');
?>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-medall"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Current Rank</p>
                                            <span id="current-rank">E</span> <button id="edit-rank-button" class="btn btn-xs btn-default">Edit</button>
                                        </div>
                                        <div id="rank-editor" style="display: none;">
                                            <select id="new-rank">
                                                <option value="E">E</option>
                                                <option value="D">D</option>
                                                <option value="C">C</option>
                                                <option value="B">B</option>
                                                <option value="A">A</option>
                                                <option value="S">S</option>
                                            </select>
                                            <button id="save-rank-button" class="btn btn-xs btn-success">Save</button>
                                            <button id="cancel-rank-button" class="btn btn-xs btn-danger">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Rank can be updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-target"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Total Workouts Done</p>
                                            <span id="total-workouts">75</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> Track your progress
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-ruler-pencil"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Total Reps</p>
                                            <span id="total-reps">25,000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-pulse"></i> Push your limits!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Last Workout</p>
                                            <span id="last-workout-date">2024-01-27</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Keep the momentum
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Weekly Weight Lifted</h4>
                                <p class="category">Total weight lifted this week (kg)</p>
                            </div>
                            <div class="content">
                                <div id="chartWeeklyWeight" class="ct-chart">
                                    <canvas id="weekly-weight-chart"></canvas> <!-- Canvas for Chart.js -->
                                </div>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-check"></i> Data certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Weekly Workout Frequency</h4>
                                <p class="category">Number of workouts per day</p>
                            </div>
                            <div class="content">
                                <div id="chartWorkoutFrequency" class="ct-chart">
                                    <canvas id="workout-frequency-chart"></canvas> <!-- Canvas for Chart.js -->
                                </div>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-check"></i> Updated daily
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Shortcuts</h4>
                                <p class="category">Quick access to other pages</p>
                            </div>
                            <div class="content">
                                <div class="shortcuts">
                                    <a href="workout-plan.php" class="btn btn-info btn-fill">Workout Plan</a>
                                    <a href="workout-tracker.php" class="btn btn-success btn-fill">Workout Tracker</a>
                                    <a href="progress-log.php" class="btn btn-warning btn-fill">Progress Log</a>
                                    <a href="motivation-zone.php" class="btn btn-danger btn-fill">Motivation Zone</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            <?php include('includes/footer.php'); ?>

<script>
    $(document).ready(function(){

        // Rank Edit Feature
        const currentRankDisplay = $('#current-rank');
        const editRankButton = $('#edit-rank-button');
        const rankEditor = $('#rank-editor');
        const newRankSelect = $('#new-rank');
        const saveRankButton = $('#save-rank-button');
        const cancelRankButton = $('#cancel-rank-button');

        editRankButton.click(function() {
            currentRankDisplay.hide();
            editRankButton.hide();
            rankEditor.show();
        });

        saveRankButton.click(function() {
            const selectedRank = newRankSelect.val();
            currentRankDisplay.text(selectedRank).show();
            editRankButton.show();
            rankEditor.hide();

             // AJAX request
            $.ajax({
                url: 'update_rank.php',
                type: 'POST',
                data: { newRank: selectedRank },
                dataType: 'json',
                success: function(data) {
                    if (data.status === 'success') {
                        console.log('Rank updated successfully');
                    } else {
                        console.error('Failed to update rank:', data.message);
                        alert('Failed to update rank. Please try again.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    alert('There was a problem updating the rank. Please try again later.');
                }
            });
        });

        cancelRankButton.click(function() {
            currentRankDisplay.show();
            editRankButton.show();
            rankEditor.hide();
        });


        // Chart Data (Dummy - Replace with your data)
        const workoutFrequencyData = {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Workouts',
                data: [3, 1, 4, 2, 5, 0, 2],
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        const weeklyWeightData = {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Weight (kg)',
                data: [200, 300, 250, 400, 350, 100, 280],
                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        };

        // Chart Configuration
        const workoutFrequencyConfig = {
            type: 'bar',
            data: workoutFrequencyData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        };

        const weeklyWeightConfig = {
            type: 'line', // Line chart for weight
            data: weeklyWeightData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        // Create Charts
        const workoutFrequencyChart = new Chart(
            document.getElementById('workout-frequency-chart'),
            workoutFrequencyConfig
        );

        const weeklyWeightChart = new Chart(
            document.getElementById('weekly-weight-chart'),
            weeklyWeightConfig
        );

    });
</script>

</html>