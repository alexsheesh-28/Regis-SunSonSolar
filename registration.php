<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sun Son Solar - Registration</title>

    <link rel="stylesheet" href="css/registration.css">
</head>

<body>
   
    <div class="registration-container">

        <h1>Sun Son Solar</h1>
        <p class="subtitle">Create Account</p>

        <form action="register.php" method="POST">

            <div class="form-group">
                <label for="user_type">Account Type</label>

                <select name="user_type" id="user_type" required>
                    <option value="">Select Account Type</option>
                    <option value="Customer">Customer</option>
                    <option value="Employee">Employee</option>
                </select>
            </div>

           <div id="registration-fields">

             <div class="form-row">

                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" required>
                </div>

                <div class="form-group">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" name="middle_name" id="middle_name">
                </div>

            </div>


            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" required>
            </div>


            <div class="form-row">

                <div class="form-group">
                    <label for="birthdate">Birthdate</label>
                    <input type="date" name="birthdate" id="birthdate" required>
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>

                    <select name="gender" id="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

            </div>


            <div class="form-row">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input
                        type="text"
                        name="phone_number"
                        id="phone_number"
                        placeholder="09XXXXXXXXX"
                        required
                    >
                </div>

            </div>


            <div class="form-group">
                <label for="address">Address</label>

                <textarea
                    name="address"
                    id="address"
                    rows="3"
                    required
                ></textarea>
            </div>


            <div class="form-row">

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

            </div>


            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>

                <input
                    type="password"
                    name="confirm_password"
                    id="confirm_password"
                    required
                >
            </div>


            <div class="form-group" id="department-container">

                <label for="department_id">Department</label>

                <select name="department_id" id="department_id">

                    <option value="">Select Department</option>

                    <option value="1">Technician</option>
                    <option value="2">Dispatcher</option>
                    <option value="3">Administration</option>

                </select>

            </div>


            <button type="submit">Register</button>

        </form>

    </div>


    <script src="js/registration.js"></script>

</body>
</html>