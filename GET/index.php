<!DOCTYPE>
<html>
    <head>
        <title>Alumni INC.</title>    
        <link rel="stylesheet" href="style.css"> 
    </head>
    <body>
    <h2>Alumni INC.</h2>
<div class="navbar" class="Block">
    <ul class="page_bar" class="Block"> 
        <a href="index.php"><li>Home</li><a>
        <li>Order an apple</li>
        <a href="index.php?PageName=about"><li>About</li></a>
        <li>Meet ori-ginal apple</li>
        <li>Become an apple</li>
        <a href="index.php?PageName=contact"><li>Contact us</li><a>
    </ul>
</div> 
<div class="container">
 <header>
 <h1> NEWS </h1>
 <p>logo</p>
 </header>
    <div class="content_area group">
    <div class="Main_area">
   <?php
    $PageDir = "PagesFolder";
//Main SHITTTTT
    if(!empty($_GET['PageName']))
    {       
        $PageFolder = scandir($PageDir,0);
        unset($PageFolder[0],$PageFolder[1]);
        $PageName = $_GET['PageName'];
        if(in_array($PageName.".inc.php",$PageFolder))
        {
            include($PageDir."/".$PageName.".inc.php");
        }
        else {
            echo "ERORR 404 <br> iawioj dofin nseo iuzhv hwf89cos  wefo cvsdbx ciyhsoivj efvj 8esocvj 09ejsjos ce oewjs cs8uwkj vse zs9efno wn9hw
            sljvc lj0wio eflc 0jwsnzo srihve aejp ecvn jdfchv 9o rdfcjn xjvosez oer dvunhfv zenjfierio zndfin esdihv seci hniewjc oejefwc ojesfco se snuwe dsijse
            bjdss sei sesjme ru rmns seiumej aioj mrijnr loijseoi";
        }
    }
    else {
        include ($PageDir."/home.inc.php");
    }    
      
   ?>

    <div class="Side_area">
    oiawioj dofin nseo iuzhv hwf89cos  wefo cvsdbx ciyhsoivj efvj 8esocvj 09ejsjos ce oewjs cs8uwkj vse zs9efno wn9hw
    sljvc lj0wio eflc 0jwsnzo srihve aejp ecvn jdfchv 9o rdfcjn xjvosez oer dvunhfv zenjfierio zndfin esdihv seci hniewjc oejefwc ojesfco se snuwe dsijse
    bjdss sei sesjme ru rmns seiumej aioj mrijnr loijseoie, 
    </div> 
        

</div>

</div> 
<footer>
&copy 2018 NEON STUDIO
</footer>
    </body>
</html>