<!DOCTYPE html>
<html>
    <body>
        <div class="topnav">
            <a class="active" href="#index.php">Home</a>
            <a href="#working.php">Working</a>
            <a href="#non-working.php">non-working</a>

        </div>    


        <?php
        # This is my script
        // It is for practice
        /* Thats why there
           is no static 
           format
        */
        echo "First PHP Script<br>";
        ?>
        <p>
            Random var stuff
        </p>
        <?php
            $txt = "Myself";
            echo "I Love $txt<br>";
            echo phpversion() . "<br>";
            $color = "purple";
            echo "My favorite color is " . $color . "<br>"; 
            $x = 6 /* + 20 */ + 5;
            echo $x . "<br>";
            var_dump($x)
        ?>

        <p> Random function stuff </p>

        <?php
            $testVar = 4;
            function test() {
                echo "<p>Test var is: $testVar"; // this should be an error
            }

            test();
        ?>
    </body>
</html>