<?php require("form.php") ?>

<?php
$firstName = $lastName = $initials = $email = $postalCode = $houseNumber = $address = $country = $phoneNumber = $password ='';
$errors = array('firstName' => '', 'lastName' => '', 'initials' => '', 'email' => '', 'postalCode' => '', 'houseNumber' => '', 'address' => '', 'country' => '', 'phoneNumber' => '');

if(isset($_POST['submit'])){

    // check first name
    if(empty($_POST['firstName'])){
        echo 'A first name is required <br />';
    } else{
        $firstName = $_POST['firstName'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $firstName)){
            echo 'First name can only contain letters';
        }
    }
    // check last name
    if(empty($_POST['lastName'])){
        echo 'A last name is required <br />';
    } else{
        $lastName = $_POST['lastName'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $lastName)){
            echo 'Last name can only contain letters';
        }
    }
    // check Initials
    if(empty($_POST['initials'])){
        echo 'Initials are required <br />';
    } else{
        $initials = $_POST['initials'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $initials)){
            echo 'An initial is th first letter of your first and last name';
        }
    }
    // check Email
    if(empty($_POST['email'])){
        echo 'An email is required<br />';
    } else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email must be a valid email address';
        }
        if (!checkdnsrr($email, 'MX')) {
            // Email is non-existing
        }
    }
    // check postal code
    if(empty($_POST['postalCode'])){
        echo 'A postal code is required <br />';
    } else{
        $postalCode = $_POST['postalCode'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $postalCode)){
            echo 'Postal code must contain letters and numbers';
        }
    }
    // check house number
    if(empty($_POST['houseNumber'])){
        echo 'A house number is required <br />';
    } else{
        $houseNumber = $_POST['houseNumber'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $houseNumber)){
            echo 'House number not valid';
        }
    }

    // check adress
    if(empty($_POST['adress'])){
        echo 'An adress is required <br />';
    } else{
        $address = $_POST['adress'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $address)){
            echo 'An address can only contain letters';
        }
    }
    // check country
    if(empty($_POST['country'])){
        echo 'Selecting a country is required <br />';
    } else{
        $country = $_POST['country'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $country)){
            echo 'Must choose either Dutch or German';
        }
    }

    // check phone number
    if(empty($_POST['phoneNumber'])){
        echo 'Phone number is required <br />';
    } else{
        $phoneNumber = $_POST['phoneNumber'];
        function validate_country_number($phoneNumber){
            preg_match('/^[ -]*(\+31)?[ -]*[(0)]*[ -]*([123457]0|23|24|26|35|45|71|73|570)[ -]*((?:\d[ -]*)+)/', $phoneNumber);
        }
    }

} // end

?>