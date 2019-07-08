<html>
    <head>
        <title>K-SPORTS</title>
        <link rel="stylesheet" type="text/css" href="css/event.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <script accesskey=""src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
        <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
         <link rel="shortcut icon" href="css/Images/_ico-2.png" type="image/x-icon">
        
        
          <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="css/Images/_ico-2.png" type="image/x-icon">
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">



        <script type="text/javascript">
            $(window).on('scroll',function() {
                if($(window).scrollTop()) {
                    $('nav').addClass('black');
                }
                else{
                    $('nav').removeClass('black');


                })

        </script>
        
        <script>
            //            $(document).ready(function(){
            //                $("#Date1").datepicker({
            //                    showAnim:'drop',
            //                    numberOfMonth:1,
            //                    dateFormat:'dd/mm/yy',
            //                    onClose: function(selectedDate){
            //                    
            //                }
            //                    
            //                    
            //                });
            //                
            //            });

            $(document).ready(function () {
                $("#Datepick").datepicker({
                    minDate: today
                });
            });
        </script>
    </head>
    <body>
        <div class="wrapper">
            <nav>
                <div class="logo">K-SPORTS</div>
                <ul>
                    <li><a href="update.php">Update</a></li>
                    <li><a  class="active" href="adminlogout.php">Logout</a>

                </ul>
            </nav>
            <section></section>
            <section class="content">


            </section>
        </div>
        <div class="loginbox">
            <img src="css/Images/event.png" class="avatar">
            <h1>Add Events</h1>
            <form method="post">
                <p>Event</p>
                <input type="file" name="Event_img" required>

                <p>Event</p>
                <input type="text" name="Event_name" placeholder="Enter Event name" required>
                <p>Location</p>
                <input type="text" name="Location" placeholder="Enter Location" required>
                <p>Category</p>
                <select name="Category">
                    <option>Select category</option>
                    <option>Football</option>
                    <option>Basketball</option>
                    <option>Boxing</option>
                    <option>Athletics</option>
                    <option>Netball</option>
                    <option>Handball</option>
                    <option>Other...</option>
                </select>
                <br/>
                <p>Date</p>
                <input type="date" name="Date" id="Datepick" placeholder="Enter date" pattern="\d{1,2}/\d{1,2}/\d{4}" min="da" required>
<!--
                <p>Date</p>
                <input type="text" name="Date" id="Date1" placeholder="Enter date" pattern="\d{1,2}/\d{1,2}/\d{4}" min="d" required>
-->
                <p>Begin Time</p>
                <input type="Time" name="Begin_Time" placeholder="Enter starting time"  required>
                <p>Finish Time</p>
                <input type="Time" name="Finish_Time" placeholder="Enter finish time" required>
                <p>Ticket Price</p>
                <input type="text" name="Ticket_Price" placeholder="Enter ticket price" required>
                <input type="submit" name="" formaction="addevents.php" value="Submit">

            </form>
        </div>
    </body>
</html>