<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Add Tailwind CSS for black background -->
    <style>
        body {
            background-color: #000; /* Black background color */
        }

        h2 {
            text-align: center;
            background-color: #085999;
            margin-top: 0;
            padding: 20px;
            color: white;
        }
    </style>
    <title>Edit Staff Info</title>
</head>
<body>
<div class="container-fluid bg-dark text-light py-3 text-center">
    <header>
        <h2 class="h2">Update Staff Information</h2>
    </header>
    <section class="container my-2 bg-dark w-50 text-light">
        <form action="<?php echo site_url('update');?>" method="post">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <label for="f_name" class="form-label">First Name</label>
                    <input type="hidden" name="id" value="<?=$data['id']?>">
                    <input type="text" name="f_name" id="f_name" value="<?=$data['f_name']?>" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label for="l_name" class="form-label">Last Name</label>
                    <input type="text" name="l_name" id="l_name" value="<?=$data['l_name']?>" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" name="birthday" id="birthday" value="<?=$data['birthday']?>" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" value="<?=$data['email']?>" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="phone_num" class="form-label">Phone Number</label>
                    <input type="tel" name="phone_num" id="phone_num" value="<?=$data['phone_num']?>" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="subject" class="form-label">Choose Your Job</label>
                    <select class="form-control" name="job" value="<?=$data['job']?>">
                        <option disabled>Choose option</option>
                        <option value="Pastry_Chef">Pastry Chef</option>
                        <option value="Catering_manager">Catering manager</option>
                        <option value="Maintenance_worker">Maintenance worker</option>
                        <option value="Parking_lot_attendant">Parking lot attendant</option>
                        <option value="Reservations_agent">Reservations agent</option>
                        <option value="Accounts_manager">Accounts manager</option>
                        <option value="Director_Sales">Director of hotel sales</option>
                        <option value="Convention_planner">Convention planner</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="mb-3 text-center">
                <input class="btn btn-primary" type="submit" value="Update">
            </div>
        </form>
    </section>
</div>
</body>
</html>
