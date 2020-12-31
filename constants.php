    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
    define("ROOT", "fyp"); //Application root folder
    //define("ROOT", "BCS22432019/CB17021"); //Application root folder

    //Roles
    define("COORDINATOR", "Coordinator");
    define("STUDENT", "Student");
    define("LECTURER", "Lecturer");
   
    define("UNAUTHORIZED", "<span style='color:red; font-weight:bold'>Sorry, this action is unauthorized. Ask administrator for more details.</span>");

    function IsInRole($role) {
        if ($_SESSION['role'] == $role) {
            return true;
        }
    }

    function CheckRole($roles) {
        if (is_array($roles))
        {
            foreach($roles as $role){
                if ($_SESSION['role'] == $role) {
                    return;
                }
            }
        }
        else if ($_SESSION['role'] == $roles) {
            return;
        }
        echo UNAUTHORIZED;
        exit;
    }   
    
    function ErrorMessage($message) {
        echo "<div class='alert alert-danger' role='alert'>" . $message . "</div>";  
    }   

    function SuccessMessage($message) {
        echo "<div class='alert alert-success' role='alert'>" . $message . "</div>";  
    }

?>