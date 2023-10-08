<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Staff Table</title>
    <style>
        body {
            background-color: #000;
        }

        /* Add custom CSS for the black background color */
    </style>
    <!-- Add Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        h4{
            text-align: -webkit-center;
            background-color: #085999;
            margin-top: 0;
            padding: 20px;
            color: white;
        }
        
        
    </style>
</head>

<body class="bg-black text-white">
    <h4>Staff Information Table</h4>
    <div class="container mt-5">
        <div class="search-container">
            <a href="<?= site_url('home')?>" class="btn btn-success mt-3">Add New Staff</a>
        </div>
        <br>
        <table class="table table-dark table-hover table-bordered text-center">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Birthdate</th>
                    <th>Contact</th>
                    <th>Job</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $info) : ?>
                    <tr>
                        <td><?= $info['id'] ?></td>
                        <td><?= $info['l_name'] ?></td>
                        <td><?= $info['f_name'] ?></td>
                        <td><?= $info['email'] ?></td>
                        <td><?= $info['birthday'] ?></td>
                        <td><?= $info['phone_num'] ?></td>
                        <td><?= $info['job'] ?></td>
                        <td>
                            <a href="<?= site_url('delete/' . $info['id']) ?>" class="btn btn-danger mb-3">Delete</a>
                            <a href="<?= site_url('edit/' . $info['id']) ?>" class="btn btn-primary mb-3">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
    </div>
</body>

</html>
