<?php
$pageTitle = 'Workout Tracker'; // Set the page title
$activePage = 'workout-tracker'; // Set the active page for the sidebar
include('includes/db.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');
?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Log Your Workout</h4>
                                <p class="category">Record your daily progress.</p>
                            </div>
                            <div class="content">
                                <form id="workout-form">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" class="form-control border-input" id="workout-date" value="<?php echo date('Y-m-d'); ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Exercise Name</label>
                                                <input type="text" class="form-control border-input" id="exercise-name" placeholder="Enter exercise name">
                                                <small class="text-muted">e.g., Bench Press, Squats</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sets</label>
                                                <input type="number" class="form-control border-input" id="sets" placeholder="Enter sets">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Reps</label>
                                                <input type="number" class="form-control border-input" id="reps" placeholder="Enter reps">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Weight (kg)</label>
                                                <input type="number" class="form-control border-input" id="weight" placeholder="Enter weight">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Notes</label>
                                                <textarea rows="3" class="form-control border-input" id="notes" placeholder="Enter any notes about the workout (e.g., pain, fatigue)"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success btn-fill btn-wd">Submit Log</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php include('includes/footer.php'); ?>
<script>
    $(document).ready(function() {
        $('#workout-form').submit(function(event) {
            event.preventDefault(); // Prevent the form from submitting in the traditional way

            const workoutDate = $('#workout-date').val();
            const exerciseName = $('#exercise-name').val();
            const sets = $('#sets').val();
            const reps = $('#reps').val();
            const weight = $('#weight').val();
            const notes = $('#notes').val();

            // AJAX submission (replace with your actual endpoint)
            $.ajax({
                url: 'log_workout.php',  // Replace with your PHP script URL
                type: 'POST',
                data: {
                    workoutDate: workoutDate,
                    exerciseName: exerciseName,
                    sets: sets,
                    reps: reps,
                    weight: weight,
                    notes: notes
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        alert('Workout logged successfully!');
                        $('#workout-form')[0].reset(); // Clear the form
                    } else {
                        alert('Error logging workout: ' + response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    alert('There was a problem submitting the log. Please try again later.');
                }
            });
        });
    });
</script>

</html>