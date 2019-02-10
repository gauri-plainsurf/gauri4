

<!DOCTYPE html>
<html lan
      <head>
        <title>Eduversity Education Category Flat Bootstrap Responsive Website Template | Contact : W3layouts</title>
    </head>
    <?php include_once './includes/global_css.php'; ?>
    <body>


        <!-- header -->
        <header>
            <?php include_once './includes/header.php'; ?>
        </header>
        <!-- //header -->
        <!-- inner banner -->
        <?php include_once './includes/inner_banner.php'; ?>
        <!-- inner banner -->

        <!-- breadcrumbs -->
        <?php include_once './includes/breadcrumbs.php'; ?>	
        <!-- //breadcrumbs -->

        <!-- contact -->
        <?php include_once './includes/contact1.php'; ?>	
        <!-- //contact -->
        
        <div class="container">

            <table class="table">
                <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>description</th>
                        <th>opt</th>
                    </tr>
                </thead>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "form";

// Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT first_name,last_name,email_id,phone_no,description,opt FROM contact";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" . $row["first_name"] . "</td><td> " . $row["last_name"] . "</td><td> " . $row["email_id"] . "</td><td>" . $row["phone_no"] . "</td><td>" . $row["description"] . "</td><td>" . $row["opt"] . "</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }

                mysqli_close($conn);
                ?>

            </table>
        </div>



        <!-- footer -->	
        <footer>
            <?php include_once './includes/footer.php'; ?>
        </footer>
        <!-- footer -->
        <!-- Login modal -->
        <?php include_once './includes/login.php'; ?>
        <!-- //Login modal -->

        <!-- Register modal -->
        <?php include_once './includes/register.php'; ?>
        <!-- //Register modal -->

        <!-- Gloabl JS Start -->
        <?php include_once './includes/global_js.php'; ?>
        <!-- Gloabl JS End -->

        <!--bootstrap table-->

        

    </body>
</html>