<?php
$pageTitle = 'Motivation Zone'; // Set the page title
$activePage = 'motivation-zone'; // Set the active page for the sidebar
include('includes/db.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');
?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Motivational Quotes</h4>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled">
                                    <li>"Arise and level up!"</li>
                                    <li>"Weak? Keep trying. You'll break through."</li>
                                    <li>"Every drop of sweat is a step towards power."</li>
                                    <li>"Today's struggle, tomorrow's strength."</li>
                                    <li>"Evolve. Conquer. Ascend."</li>
                                </ul>
                                <button id="random-quote-button" class="btn btn-info btn-fill btn-sm">Get Random Quote</button>
                                <p id="random-quote"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Epic Music to Grind To</h4>
                            </div>
                            <div class="content">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                                </div>
                                <p>Eminem - Till I Collapse (Replace with your preferred hype music)</p>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                                </div>
                                <p>Eminem - Till I Collapse (Replace with your preferred hype music)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Solo Leveling Anime Art</h4>
                                <p class="category">Images to fuel your hunter spirit.</p>
                            </div>
                            <div class="content">
                                <div id="anime-slider" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#anime-slider" data-slide-to="0" class="active"></li>
                                        <li data-target="#anime-slider" data-slide-to="1"></li>
                                        <li data-target="#anime-slider" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="assets/img/sl_1.jpg" alt="Solo Leveling Image 1" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="assets/img/sl_2.jpg" alt="Solo Leveling Image 2" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="assets/img/sl_3.jpg" alt="Solo Leveling Image 3" class="img-responsive">
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#anime-slider" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#anime-slider" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Daily Journal</h4>
                                <p class="category">Reflect on your progress and mindset.</p>
                            </div>
                            <div class="content">
                                <textarea rows="5" class="form-control border-input" id="journal-entry" placeholder="Write your thoughts here..."></textarea>
                                <button id="save-journal-button" class="btn btn-success btn-fill btn-sm">Save Entry</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php include('includes/footer.php'); ?>

<script>
    $(document).ready(function() {
        // ---- Random Quote Generator ----
        const quotes = [
            "Arise and level up!",
            "Weak? Keep trying. You'll break through.",
            "Every drop of sweat is a step towards power.",
            "Today's struggle, tomorrow's strength.",
            "Evolve. Conquer. Ascend."
        ];

        $('#random-quote-button').click(function() {
            const randomIndex = Math.floor(Math.random() * quotes.length);
            $('#random-quote').text(quotes[randomIndex]);
        });

        // ---- Journal Entry ----
        $('#save-journal-button').click(function() {
            const journalEntry = $('#journal-entry').val();

            $.ajax({
                url: 'save_journal.php',  // Replace with your PHP script URL
                type: 'POST',
                data: {
                    entry: journalEntry
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        alert('Journal entry saved!');
                    } else {
                        alert('Error saving journal entry: ' + response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    alert('There was a problem saving the journal entry. Please try again later.');
                }
            });
        });
    });
</script>

</html>