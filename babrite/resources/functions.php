<?php
            function set_message($msg){
                
                if(!empty($msg)){
                    $_SESSION['message'] = $msg;
                }
                else {
                    $msg = "";
                }
            }
            
            function display_message(){
                
                if(isset($_SESSION['message'])){
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
                
            }
            function redirect($location){

                header("Location: $location");
            }

            function query($sql){

                global $connection;
                return mysqli_query($connection,$sql);
            }

            function confirm($result){

                global $connection;
                if (!$result)
                {
                    die("QUERY FAILED". mysqli_error($connection));
                }
            }

            function escape_string($string){
                global $connection;

                return mysqli_real_escape_string($connection,$string);
            }

            function fetch_array($result){
                
                return mysqli_fetch_array($result);
            
            }


/*********************************front end*************************************/


            //get functions
            function get_products(){
                $query = query("SELECT * FROM products");
                confirm($query);

                while ($row = fetch_array ($query))
                {
                    $product =  <<<DELIMETER
<div class="col-sm-4 col-lg-4 col-md-4">
<div class="thumbnail">
    <a target="_blank" href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
    <div class="caption">
        <h4 class="pull-right">&#8358;{$row['product_price']}</h4>
        <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
        </h4>
        <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
        <a class="btn btn-primary" target="_blank" href="cart.php?add={$row['product_id']}">Buy</a>
    </div>
   
</div>
</div>


DELIMETER;
echo $product;
         }

     } 

     function get_categories(){

        $query = query("SELECT * FROM categories");
        confirm($query);
        while ($row = fetch_array($query))
        {
            $categories_links = <<<DELIMETER
            <a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>
DELIMETER;
            echo $categories_links;
        }
        
     }


function get_products_in_cat(){
                $query = query("SELECT * FROM products WHERE product_category_id=".escape_string($_GET["id"])."");
                confirm($query);

                while ($row = fetch_array ($query))
                {
                    $product =  <<<DELIMETER
    <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <a target="_blank" href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
                    <div class="caption">
                        <h3><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a></h3>
                        <p>{$row['product_desc']}</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>
            
DELIMETER;
echo $product;
         }

     } 

function get_products_in_shop(){
                $query = query("SELECT * FROM products");
                confirm($query);

                while ($row = fetch_array ($query))
                {
                    $product =  <<<DELIMETER
    <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <a target="_blank" href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
                    <div class="caption">
                        <h3><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a></h3>
                        <p>{$row['product_desc']}</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>
            
DELIMETER;
echo $product;
         }

     } 


function login_user(){

if(isset($_POST['submit'])){


    $username = escape_string($_POST['username']);
    $password = escape_string($_POST['password']);

    $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' ");

    confirm($query);

    if (mysqli_num_rows($query) == 0)
    {   
        set_message("incorrect username or password");
        redirect("login.php");
    }    
    else {
        redirect("admin");
    }


    }

}
function send_message(){

if(isset($_POST['submit'])){
    
    $to = "ainaniran@yahoo.com";
    $from_name = $_POST['name'];
    $subject   = $_POST['subject'];
    $email     = $_POST['email'];
    $message   = $_POST['message'];
    
    $header = " from: {$from_name}  {$email} ";
    
    $result = mail($to, $subject, $message, $header); 
    
    if(!$result){
        set_message("YOUR MESSAGE CANNOT BE SENT");
    }
    else {
        set_message("YOUR MESSAGE IS SENT");
    }
    }
}

/*********************back end***********************************************/


?>