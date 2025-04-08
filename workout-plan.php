<?php
$pageTitle = 'Workout Plan'; // Set the page title
$activePage = 'workout-plan'; // Set the active page for the sidebar
include('includes/db.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');
?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Weekly Workout Plan</h4>
                                <p class="category">Your personalized training schedule</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <div class="text-right">
                                    <button id="edit-plan-button" class="btn btn-info btn-fill btn-sm">Edit Plan</button>
                                    <button id="save-plan-button" class="btn btn-success btn-fill btn-sm" style="display: none;">Save Plan</button>
                                    <button id="cancel-plan-button" class="btn btn-danger btn-fill btn-sm" style="display: none;">Cancel</button>
                                </div>

                                <table class="table table-striped">
                                    <thead>
                                    <th>Day</th>
                                    <th>Muscle Group</th>
                                    <th>Exercises</th>
                                    <th>Tips</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Day 1</td>
                                        <td>Chest & Triceps</td>
                                        <td>
                                            <span class="exercise-text">Bench Press, Incline Press, Flyes, Triceps Extensions, Dips</span>
                                            <input type="text" class="form-control exercise-input" style="display: none;" value="Bench Press, Incline Press, Flyes, Triceps Extensions, Dips">
                                        </td>
                                        <td>
                                            <span class="tips-text">Focus on form.</span>
                                            <input type="text" class="form-control tips-input" style="display: none;" value="Focus on form.">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Day 2</td>
                                        <td>Back & Biceps</td>
                                        <td>
                                            <span class="exercise-text">Pull-ups, Rows, Lat Pulldowns, Bicep Curls, Hammer Curls</span>
                                            <input type="text" class="form-control exercise-input" style="display: none;" value="Pull-ups, Rows, Lat Pulldowns, Bicep Curls, Hammer Curls">
                                        </td>
                                        <td>
                                            <span class="tips-text">Squeeze back muscles.</span>
                                            <input type="text" class="form-control tips-input" style="display: none;" value="Squeeze back muscles.">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Day 3</td>
                                        <td>Legs & Shoulders</td>
                                        <td>
                                            <span class="exercise-text">Squats, Leg Press, Lunges, Overhead Press, Lateral Raises</span>
                                            <input type="text" class="form-control exercise-input" style="display: none;" value="Squats, Leg Press, Lunges, Overhead Press, Lateral Raises">
                                        </td>
                                        <td>
                                            <span class="tips-text">Full range of motion.</span>
                                            <input type="text" class="form-control tips-input" style="display: none;" value="Full range of motion.">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Day 4</td>
                                        <td>Rest</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Day 5</td>
                                        <td>Chest & Triceps</td>
                                        <td>
                                            <span class="exercise-text">Bench Press, Incline Press, Flyes, Triceps Extensions, Dips</span>
                                            <input type="text" class="form-control exercise-input" style="display: none;" value="Bench Press, Incline Press, Flyes, Triceps Extensions, Dips">
                                        </td>
                                        <td>
                                            <span class="tips-text">Focus on form.</span>
                                            <input type="text" class="form-control tips-input" style="display: none;" value="Focus on form.">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Day 6</td>
                                        <td>Back & Biceps</td>
                                        <td>
                                            <span class="exercise-text">Pull-ups, Rows, Lat Pulldowns, Bicep Curls, Hammer Curls</span>
                                            <input type="text" class="form-control exercise-input" style="display: none;" value="Pull-ups, Rows, Lat Pulldowns, Bicep Curls, Hammer Curls">
                                        </td>
                                        <td>
                                            <span class="tips-text">Squeeze back muscles.</span>
                                            <input type="text" class="form-control tips-input" style="display: none;" value="Squeeze back muscles.">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Day 7</td>
                                        <td>Rest</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            
                <?php include('includes/footer.php'); ?>

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