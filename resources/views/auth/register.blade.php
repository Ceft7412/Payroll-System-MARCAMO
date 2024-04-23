<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

    <link rel="stylesheet" href="../dest/css/style.css">
</head>

<body>

    <div class="register-container">

        <div class="register-wrapper">

            <div class="register-header">
                <div class="brand">
                    <a href="payroll.php"><img src="../assets/imgs/brand.png" alt="MPS"></a>
                </div>
                <span>Online Registration</span>
            </div>
            <div class="register-body">
                <div class="register-flex-body">    
                    <form action="{{ route('register.store')}}" method="POST" class="">
                        @csrf
                        <div class="item1">
                            <div class="input">
                                <label for="" class="">First Name</label>
                                <input type="text" name="firstname" class="" placeholder="First Name">
                            </div>
                            <div class="input">
                                <label for="" class="">Last Name</label>
                                <input type="text" name="lastname" class="" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="item1">
                            <div class="input">
                                <label for="" class="">Email Address</label>
                                <input type="text" name="email" class=""
                                    placeholder="e.g. robertfalle@gmail.com">
                            </div>
                        </div>
                        <div class="item1">
                            <div class="input">
                                <label for="" class="">Username</label>
                                <input type="text" name="username" class="" placeholder="Username">
                            </div>
                        </div>
                        <div class="item1">
                            <div class="input">
                                <label for="" class="">Address</label>
                                <input type="text" name="address" class="" placeholder="Address">
                            </div>
                            <div class="input">
                                <label for="" class="">Contact No.</label>
                                <input type="tel" name="contact" class="" placeholder="Contact No.">
                            </div>
                        </div>
                        <div class="item1">
                            <div class="input">
                                <label for="" class="">Date-of-Birth</label>
                                <input type="date" name="birthdate" class="" placeholder="Date">
                            </div>
                            <div class="input">
                                <label for="" class="">Gender</label>
                                <select name="gender" id="" class="">
                                    <option value="1" class="">Male</option>
                                    <option value="2" class="">Female</option>


                                </select>
                            </div>
                        </div>
                        <div class="item1">
                            <div class="input">
                                <label for="" class="">Status</label>
                                <input type="text" name="status" class="" placeholder="Status">
                            </div>
                            <div class="input">
                                <label for="" class="">Nationality</label>
                                <input type="text" name="nationality" class="" placeholder="Nationality">
                            </div>
                        </div>

                        <div class="item1">
                            <div class="input buttons">
                                <a href="{{ route('login') }}" class=""><button type="button" class="">Cancel</button></a>
                                <button type="submit"  class="">Submit</button>
                            </div>
                        </div>

                    </form>

                    
                    
                </div>

                <!--
                First Name
                Last Name
                Username
                Email
                Contact Number
                Status
                Nationality
                VBirthdate
                Gender
                Address
             -->
            </div>
        </div>

    </div>

</body>

</html>
