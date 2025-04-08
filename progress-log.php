<?php
$pageTitle = 'Progress Log'; // Set the page title
$activePage = 'progress-log'; // Set the active page for the sidebar
include('includes/db.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');
?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Weekly Weight Log</h4>
                                <p class="category">Enter your weight for the week.</p>
                            </div>
                            <div class="content">
                                <form id="weight-log-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" class="form-control border-input" id="weight-date" value="<?php echo date('Y-m-d'); ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Weight (kg)</label>
                                                <input type="number" class="form-control border-input" id="weekly-weight" placeholder="Enter weight">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Log Weight</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Weight Trend</h4>
                                <p class="category">Your weight progress over time.</p>
                            </div>
                            <div class="content">
                                <canvas id="weight-trend-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Photo Gallery</h4>
                                <p class="category">Track your physical transformation.</p>
                            </div>
                            <div class="content">
                                <form id="upload-form" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="photo-upload">Upload Photo</label>
                                        <input type="file" class="form-control border-input" id="photo-upload" name="photo">
                                    </div>
                                    <div class="form-group">
                                        <label for="photo-caption">Caption</label>
                                        <input type="text" class="form-control border-input" id="photo-caption" name="caption" placeholder="Add a caption">
                                    </div>
                                    <button type="submit" class="btn btn-warning btn-fill btn-sm">Upload</button>
                                </form>
                                <div id="photo-gallery" class="row">
                                    <!-- Photo previews will be added here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Workout History</h4>
                                <p class="category">Your workout logs over time.</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    <th>Date</th>
                                    <th>Exercise</th>
                                    <th>Sets</th>
                                    <th>Reps</th>
                                    <th>Weight (kg)</th>
                                    <th>Notes</th>
                                    </thead>
                                    <tbody id="workout-history-table">
                                        <!-- Workout history will be populated here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php include('includes/footer.php'); ?>

<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio.js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="assets/js/paper-dashboard.js"></script>

<script>
    $(document).ready(function() {
        const editPlanButton = $('#edit-plan-button');
        const savePlanButton = $('#save-plan-button');
        const cancelPlanButton = $('#cancel-plan-button');
        const exerciseTexts = $('.exercise-text');
        const exerciseInputs = $('.exercise-input');
        const tipsTexts = $('.tips-text');
        const tipsInputs = $('.tips-input');

        editPlanButton.click(function() {
            exerciseTexts.hide();
            exerciseInputs.show();
            tipsTexts.hide();
            tipsInputs.show();
            editPlanButton.hide();
            savePlanButton.show();
            cancelPlanButton.show();
        });

        savePlanButton.click(function() {
            exerciseTexts.each(function(index) {
                $(this).text(exerciseInputs.eq(index).val());
            });
            tipsTexts.each(function(index) {
                $(this).text(tipsInputs.eq(index).val());
            });
            exerciseTexts.show();
            exerciseInputs.hide();
            tipsTexts.show();
            tipsInputs.hide();
            editPlanButton.show();
            savePlanButton.hide();
            cancelPlanButton.hide();
        });

        cancelPlanButton.click(function() {
            exerciseTexts.show();
            exerciseInputs.hide();
            tipsTexts.show();
            tipsInputs.hide();
            editPlanButton.show();
            savePlanButton.hide();
            cancelPlanButton.hide();
        });
    });
</script>
</html>