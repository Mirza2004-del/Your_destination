<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduler</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div style="background: #f8f9fa; border-radius: 15px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); transition: transform 0.3s;" class="service-item rounded pt-3">
                    <div style="padding: 1.5rem; text-align: center;">
                        <i class="fa fa-3x fa-calendar-alt text-warning mb-4"></i>
                        <h5 style="font-family: 'Arial', sans-serif; color: #333; font-weight: bold;">Scheduler Time</h5>
                        <p style="color: #555; font-family: 'Georgia', serif; line-height: 1.6;">Plan your activities seamlessly with our Scheduler. Just click below to set up your time!</p>
                        <button type="button" style="background-color: #ffc107; border: none; border-radius: 50px; padding: 0.5rem 1.5rem;" class="btn btn-warning rounded-pill py-2 px-4" data-toggle="modal" data-target="#schedulerModal">Schedule</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="schedulerModal" tabindex="-1" aria-labelledby="schedulerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div style="background: #ffc107; color: white;" class="modal-header">
                    <h5 class="modal-title" id="schedulerModalLabel">Schedule Your Time</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <div style="padding: 30px;" class="modal-body">
                    <form id="schedulerForm">
                        <div class="form-group">
                            <label for="date">Select Date:</label>
                            <input type="date" class="form-control" id="date" required>
                        </div>
                        <div class="form-group">
                            <label for="time">Select Time:</label>
                            <input type="time" class="form-control" id="time" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" rows="3" required></textarea>
                        </div>
                        <button type="submit" style="background-color: #ffc107; color: white;" class="btn btn-warning">Schedule</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('schedulerForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert("Scheduled successfully!");
            $('#schedulerModal').modal('hide');
        });
    </script>
</body>
</html>
