
<div class="header">
    <div id="logo">
        <img src="assets/img/logo.jpg" alt="Cit Logo">
    </div>

</div>
<div id="map-canvas">
    
    
    </div>
<div id="wrapper">

    <div id="left">

        <form name="login" class="forms" id="logIn" action="<?php $this->student->login();  ?>" method="post">
            <h2>Log In</h2>
            <input type="text" class="input"  name="email" placeholder="Email"><br>
            <input type="password"  name="password" class="input" placeholder="Password"><br>
            <input type="submit" value="Login">
            <p class="orRegister">Or register</p>
        </form>


        <form name="register" class="forms" id="register" action="<?php $this->student->registration();  ?>" method="post">
            <h2>Enter details</h2>
            <input id="homeForm1" type="text" name="fName" placeholder="First Name"required><br>
            <input id="homeForm2" type="text" name="lName" placeholder="Last Name"required><br>
			<label id="studentNumberLabel"></label>
            <input id="studentNumberForm" type="text"  name="studentId" placeholder="Student ID"required><br>
            <input id="homeForm3" type="email" name="email" placeholder="Email" required><br>
            <input id="homeForm4" type="text" name="address" placeholder="Address"required><br>
            <label id="phoneNumberLabel"></label>
            <input id="homeForm5" type="text" name="phone" placeholder="phone"required><br>
            <input id="pass1" type="password" name="password" placeholder="Password" required><br>
            <input id="pass2" type="password" name="rpassword" placeholder="Re-enter Password" required><br>
            <div id="notWorkingButton">Sign Up</div>
            <input id="confirmButton" type="submit" value="Sign Up">
            <p class="orSign">log in</p>
        </form>


    </div>

    <div id="right">

        <a class="twitter-timeline" width="399" height="399" data-link-color="#FAFAFA" data-border-color="#FAFAFA"  data-theme="light"
           href="https://twitter.com/CIT_Gym" data-widget-id="520628858203025408"></a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


    </div>
</div>