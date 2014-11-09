
<div class="header" id="profileHeader">
    <div id="nav">


        <ul id="menu">
            <li id="menuButton"></li>
            <li class="menuItem">
                <a href="index.php?profile=true"><img src="<?php  echo 'assests/img/profilePhotos/' . $_SESSION['id'] . '.png' ?>"  width="90" height="90" alt="Profile Picture"></a>
            </li>

            <li class="menuItem">
                <a href="index.php?profile=true">Home</a>
            </li>
            <li class="menuItem">
                <a href="index.php?workout=true">Workout</a>
            </li>
            <li class="menuItem">
                <a href="index.php?booking=true">Book </a>
            </li>

            <?php
            if ($_SESSION["status"] == 3)
            {
                ?>

                <li class="menuItem">
                    <a href="index.php?timetable=true">Time Table</a>
                </li>
                <li class="menuItem">
                    <a href="index.php?admin=true">Admin</a>
                </li>

            <?php
            }


            ?>
            <li class="menuItem">
                <a href="index.php?settings=true">Settings</a>
            </li>
            <li class="menuItem">
                <a href="index.php?logout=true"> Logout</a>
            </li>
        </ul>
    </div>
</div>




<div id="wrapperProfile">



    <ul id="booking">

        <li>
         <div id="date">

            <input type="text" name="date" id="dateBox" hidden>
            <input type="text" name="id" id="idtrainer" hidden>
         </div>
        </li>

        <li>





                <div id="calendar_wrapper" class="left">
                    <h2 id="day"></h2>
                </div>



                    <div id="day_calendar">
                    </div>




        </li>

    </ul>


</div>












            <script src="assests/javascript/jqueryui/external/jquery/jquery.js"></script>
            <script src="assests/javascript/jqueryui/jquery-ui.min.js"></script>
            <script src="assests/javascript/calendarScript.js"></script>








