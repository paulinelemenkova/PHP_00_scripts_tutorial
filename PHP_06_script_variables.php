<html>
<head>
<title>PHP Variables, Pauline Tutorial</title>
    <body>
        <?php
            # PHP Local Variables
            $x = 4;
            function assignx () {
                $x = 0;
                print "\$x inside function is $x.
                ";
            }
            assignx();
            print "\$x outside of function is $x.
            ";
            
            # PHP Function Parameters
            // multiply a value by 10 and return it to the caller
            function multiply ($value) {
                $value = $value * 10;
                return $value;
            }
            $retval = multiply (10);
            Print "Return value is $retval\n";
            
            # PHP Global Variables
            $somevar = 15;
            function addit() {
                GLOBAL $somevar;
                $somevar++;
            print "Somevar is $somevar";
            }
            addit();
            
            # PHP Static Variables
            function keep_track() {
                STATIC $count = 0;
                $count++;
                print $count;
                print "
                ";
            }
            keep_track();
            keep_track();
            keep_track();
        ?>
    </body>
</html>
