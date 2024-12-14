<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Association Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            text-align: center;
            margin-bottom: 20px;
            color: #495057;
        }

        .btn-submit {
            background-color: #007bff;
            color: #fff;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        .gender-box h3 {
            margin-top: 20px;
        }

        .header-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .header-section img {
            width: 80px;
            height: auto;
        }

        .header-section h1, .header-section h2 {
            margin: 10px 0;
            color: #495057;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <!-- Header Section -->
        <div class="header-section">
            <img src="img/logo_site.png" alt="NIIBS Logo">
            <h1>Nāgānanda International Institute for Buddhist Studies</h1>
            <h2>(NIIBS)</h2>
            <p>Manelwatta Bollagala, Kelaniya</p>
            <p>Email: info@niibs.ac.lk | Phone: 0112 994 666</p>
            <h3>SICT</h3>
        </div>
        <h2 class="form-title">Alumni Association Registration Form</h2>
        <form action="process_registration.php" method="POST">
            <div class="mb-3">
                <label for="full_name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter full name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Enter phone number" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="birth_date" class="form-label">Birth Date</label>
                    <input type="date" class="form-control" id="birth_date" name="birth_date" required>
                </div>
            </div>

            <div class="mb-3">
                <h3 class="form-label">Gender</h3>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="male" name="gender" value="male" checked>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="female" name="gender" value="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter street address" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" id="country" name="country" required>
                        <option hidden>Country</option>
                        <option value="Srilanka">Srilanka</option>
                        <option value="Thailand">Thailand</option>
                        <option value="India">India</option>
                        <option value="Nepal">Nepal</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city" required>
                </div>
            </div>

            <button type="submit" class="btn btn-submit w-100">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
