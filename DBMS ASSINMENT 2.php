
   
   
   
// Solutions: <br><br>

<?php
    
    session_start();

    //Collecting Variables and using static values

    //$raw_username               = trim($_POST['username']);
    
    $raw_username               = "kobbyb";    
    
    $raw_secretword             = "nba";
    
    $raw_email                  = "kbriend@virtualines.com"; 
    
    $raw_age                    = 40;
    
    $raw_fullname               = "Kobby Briend";
    
    $raw_address                = "New York";
    
    $raw_customer_complaint     = "My Credit Card got decline twice today";   
   
   
    //Solution for Question i.

//    $_SERVER[PHP_SELF];
//
//    $_SERVER[REQUEST_METHOD] "POST";
//
//    $_POST;


    //Solution for Question ii.
   
    $c_username               = filter_var($raw_username, FILTER_SANITIZE_STRING);    
    
    $c_secretword             = filter_var($raw_secretword, FILTER_SANITIZE_STRING);
    
    $c_email                  = filter_var($raw_email, FILTER_VALIDATE_EMAIL); 
    
    $c_age                    = filter_var($raw_age, FILTER_VALIDATE_INT);
    
    $c_fullname               = filter_var($raw_fullname, FILTER_SANITIZE_STRING);
    
    $c_address                = filter_var($raw_address, FILTER_SANITIZE_STRING);
    
    $c_customer_complaint     = filter_var($raw_customer_complaint, FILTER_SANITIZE_STRING);  



    //Solution for Question iii.

    $_SESSION['customer_info'] = array(
    
        'username'      =>  $c_username,
        'email'         =>  $c_email
    
    );
   

    echo "Session username is: " . $_SESSION['customer_info']['username'] . "<br> Email is: " .  $_SESSION['customer_info']['email'] ;


    echo "<br><br>";


    //Solution for Question iv.

    function minsecretword($c_secretword){
        
        $counted_secretword = strlen($c_secretword);
        
        if($counted_secretword >= 8){
            
            echo "Your Secret Word is: '" . $c_secretword . "' and it's correct";
            
        }else{
            
            echo "Your Secret Word '" . $c_secretword . "' cannot be less than 8 characters";
        }
        
    }
    
    //Calling our minsecretword function
    minsecretword($c_secretword);


     echo "<br><br>";

    //Solution for Question v.

    $all_customers_data = array(
    
        
    'userName'                  =>  $c_username,             
    
    'secretWord'                =>  $c_secretword,         
    
    'userEmail'                 =>  $c_email,             
    
    'userAge'                   =>  $c_age,                  
    
    'userFullname'              =>  $c_fullname,         
    
    'userAddress'               => $c_address,               
    
    'userComplaint'             => $c_customer_complaint 
        
    );


    function display_all_customers($all_customers_data){
        
        echo "Hi Support Team, This query just came in: <br><br>";
        
        foreach($all_customers_data as $customer_data){
            
            
            
            echo $customer_data . "<br>";
            
        }
        
    }
    
    //Calling our display_all_customers function
    display_all_customers($all_customers_data);


?>
   
   
   
   
    
