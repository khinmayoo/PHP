<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    require("../database.php");
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    $name = $_GET['name'];
    echo $name;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = testInput($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = testInput($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["website"])) {
            $websiteErr = "Website URL is required";
        } else {
            $website = testInput($_POST["website"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = testInput($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = testInput($_POST["gender"]);
        }

        if (empty($_POST["password"]) || (preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["password"]) === 0)) {
            $passwordErr = "Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
        } else {
            $password = $_POST["gender"];
        }

        if (empty($_POST["confirm-password"]) || 
        ($_POST["confirm-password"] !== $_POST["password"])) {
            $confirmPasswordErr = "Password doesn't match";
        } 
    }

    function testInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
  }

    ?>
    <div class="container">
        <h1>PHP Form Validation Example</h1>
        <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group row">
                <label for="inputUser" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputUser" name="name" placeholder="Username" value="<?php echo $name;?>">
                    <?php if($nameErr) { ?>
                        <span style="color:red">
                            * <?php echo $nameErr; ?>
                        </span>
                    <?php } ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" value="<?php echo $email;?>">
                    <?php if($emailErr) { ?>
                        <span style="color:red">
                        * <?php echo $emailErr; ?>
                        </span>
                    <?php } ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputWebsite" class="col-sm-2 col-form-label">Website</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputWebsite" name="website" placeholder="Website" value="<?php echo $website;?>">
                    <?php if($websiteErr) { ?>
                        <span style="color:red">
                        * <?php echo $websiteErr; ?>
                        </span>
                    <?php } ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputWebsite" class="col-sm-2 col-form-label">Comment</label>
                <div class="col-sm-10">
                    <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputWebsite" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender=="female") echo "checked";?>>Female
                    <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>>Male
                    <input type="radio" name="gender" value="other" <?php if (isset($gender) && $gender=="other") echo "checked";?>>Other
                    <?php if($genderErr) { ?>
                        <span style="color:red">
                        * <?php echo $genderErr; ?>
                        </span>
                    <?php } ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" name="password"
                        placeholder="Password">
                    <?php if($passwordErr) { ?>
                        <span style="color:red">
                            * <?php echo $passwordErr; ?>
                        </span>
                    <?php } ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="confirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                    <input type="password" name="confirm-password" class="form-control" id="confirmPassword">
                    <?php if($confirmPasswordErr) { ?>
                        <span style="color:red">
                            * <?php echo $confirmPasswordErr; ?>
                        </span>
                    <?php } ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <input type="submit" value="Register" name="submit" class="btn btn-primary" />
                </div>
            </div>
            <?php echo $login ?>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>

</body>

</html>