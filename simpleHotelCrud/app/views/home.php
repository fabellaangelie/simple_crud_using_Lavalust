<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Registration Form</title>

    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* h3 {
            text-align: center;
            background-color: #085999;
            margin-top: 0;
            padding: 20px;
            color: white;
        } */

        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body{
            background-color: black;
        }
        form{
            box-shadow:    #ffffff;
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-dark text-light py-3 text-center">
        <header>
            <h1 class="display-6">Staff Registration Form</h1>
        </header>
    </div>

    <section class="container my-2 bg-dark w-50 text-light">
        <form action="<?php echo site_url('add');?>" method="post" >
            <div class="row">
                <div class="col-md-6">
                    <label for="f_name" class="form-label">First Name</label>
                    <input type="text" name="f_name" id="f_name" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="l_name" class="form-label">Last Name</label>
                    <input type="text" name="l_name" id="l_name" class="form-control">
                </div>
            </div>
            <div class="col-12">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" name="birthday" id="birthday" class="form-control">
            </div>
            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="phone_num" class="form-label">Phone Number</label>
                    <input type="tel" name="phone_num" id="phone_num" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="job" class="form-label">Choose Job</label>
                    <select class="form-select" name="job" id="job">
                        <option disabled selected>Choose option</option>
                        <option value="Pastry Chef">Pastry Chef</option>
                        <option value="Catering Manager">Catering manager</option>
                        <option value="Maintenance Worker">Maintenance worker</option>
                        <option value="Parking lot attendant">Parking lot attendant</option>
                        <option value="Reservations Agent">Reservations agent</option>
                        <option value="Accounts Manager">Accounts manager</option>
                        <option value="Director Sales of Hotel">Director of hotel sales</option>
                        <option value="Convention Planner">Convention planner</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="mb-3 ">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit">
            </div>
            <br>
        </form>
    </section>

    <!-- Add Bootstrap JS scripts if needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
