<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="page2.css"> -->
    <title>Document</title>
</head>
<style>







body{
       margin: 0px;
       padding: 0px;
       box-sizing: border-box;
       font-family: Arial,  sans-serif;
       width: 100%;
       
   }
nav {
       padding-bottom: 30px;
       border-bottom: 1px solid gray;
       margin-bottom: 15px;

}
/* la barre bleu flottante sous les icons */
   li:hover{
      margin-top: 3px 3px;
      color:#007FFF;
      padding-bottom: 3px;
      border-bottom: 4px solid;
   }
ul{
    margin-left: 10%;
}


/* liste alignée des icons */
li{
    list-style-type: none;
    padding-right: 20px;
    text-transform: capitalize;
    float:left;
    color:darkgrey;
    margin-bottom: 20px;
    padding-left: 2px;

    
}
hr{
    width: 100%;
    color:darkgrey;
}
#tools:hover{
    display: inline;
    border: 1px solid;
    border-radius: 4px;
}
#tools{
    color:darkgrey;
    text-transform: capitalize;
    margin-left:55%;
    margin-top:-4.5%;
    float:left;
    cursor: pointer;
    
    
}
#presentation{
    border: 1px solid gray;
    width: 100%;
}
span{
    
    
    border: 1px solid black;
    padding: 10px;
    padding-left: 100px;
    border-radius: 5px;
}



.bannière{
    width: 100vw;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.ban-content{
    padding: 10px;
    margin-bottom: 10px;
    height: 3rem; 
    display: flex;
    align-items: center;
    justify-content: center;
  }

.bannière .ban-content .ban2{
    width: calc(100% / 14);
    height: 120%;
    display: flex;
    align-items: center;
    border: 1px solid #ccc;
   
    margin-right: 10px;
    border-radius: 5px;
}
.bannière .ban-content .ban2 img {
    width: 40%;
    height: 100%;
    border-top-left-radius:5px;
    border-bottom-left-radius:5px;
}


.bannière .ban-content .ban2 span {
    font-size: 10px;
    width: 80%;
    text-align: center;
    margin-left: -5px;
    }

.circle{
    width: 4rem;
    height: 3rem;
    border-radius: 50%;
    padding: 20px;
    display: none;

}    

div .containt{
    width: 200px;
    margin-right: 20px;
    height: 350px;
   
    
    
    
}
div.containt img{ 
    width: 100%;
    height: 200px;
    
    
}
div.container-fluid .row .containt img {
               display: flex;
               flex-direction: row;
               background-color: black;
               
           }
  
/* couleur de la page entière */
div.row{
    margin-top: 22px;
    background-color: black;
   
}
/* mise de mes images en galérie */
 div.containt {
   
position: relative;
 float: left;
  }
  /* couleur de ma box de description */
div.col-md-3{
    background-color: black; 
    height: 780px;
    border: 5px solid;
}
/*couleur des nom de plante*/
div.NomPlante{
    color: silver;
}
/* couleur de la descriptipon */
div.desc{
    color:silver;
}

.
header {
    background-color: black;
}

body{
    background-color: black;
}  

*{
    margin: 0px;
padding: 0px;
box-sizing: border-box;
font-family: Arial,  sans-serif;

}

nav {
padding-bottom: 30px;
border-bottom: 1px solid gray;
margin-bottom: 10px;
}

/* li:hover{
color:#0066ff;
padding-bottom: 10px;
border-bottom: 2px solid;

} */
ul{
    margin-left: 10%;
    margin-top: 10px;
    width: 10;
    height: 10;
    background-color:blue;
    }

  
#tools:hover{
    width: 40px;
    background-color:silver;


}

/* li{
    list-style-type: none;
text-transform: capitalize;
float:left;
color:rgb(133, 138, 137);
margin-bottom: 20px;
padding-left: 7px;

} */
hr{
width: 100%;
color:darkgrey;
}
#tools{
color:rgb(128, 123, 123);
text-transform: capitalize;
width:20px;
margin-left:60%;
margin-top:-5%;
float:left;
}


.bannière{
    width: 75vw;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.ban-content{
    padding: 10px;
    margin-bottom: 10px;
    height: 3rem; 
    display: flex;
    align-items: center;
    justify-content: center;
  }

.bannière .ban-content .ban2{
    width: calc(100% / 14);
    height: 120%;
    display: flex;
    align-items: center;
    border: 1px solid #ccc;
   
    margin-right: 13px;
    border-radius: 5px;
}
.bannière .ban-content .ban2 img {
    width: 40%;
    height: 100%;
    border-top-left-radius:5px;
    border-bottom-left-radius:5px;
}


.bannière .ban-content .ban2 span {
    font-size: 10px;
    width: 50%;
    text-align: center;
    margin-left: -2px;
    color:silver;
    
    }

    span {
    padding: 10px;
    outline: none;
    margin-right: 45px;
    color:silver;
}




    </style>
   
    <header>
        <div style="align-items: center;">
            
         <img src="img2/google.png" style="width: 150px; margin-top: 5px;"> 
         <div style="margin-top: -50px; margin-left: 12%;"><input type="text" 
            style="padding: 13px; background-color:black;color:white;  padding-left: 50px;padding-right: 60px;
            border-radius: 30px; border:4px solid gray; outline: none; width: 80%;"> 
            <img src="img2/loupegoogle.jpg" style="width: 20px; margin-left: -8%; margin-bottom: -4px;">
    <img src="img/mic.png" style="width: 15px; margin-left: -8%; margin-bottom: -4px;"><img src="img/cam.jpeg" style="width: 40px; margin-left:-8%; margin-bottom: -7px;">
    </div>
        </div>
       
    </header>


    <body>

    <div style="align-items: center;">




<nav>
<ul>
    <a href="#">
        <li> <img src="img/loupe.png" style="width: 15px; margin-right: 5px; ">all</li>
    </a>
    <a href="#">
        <li><img src="img2/iconimage.png" style="width: 15px; margin-right: 5px; ">images</li>
    </a>
    <a href="#">
        <li><img src="img2/images.png" style="width: 15px; margin-right: 5px;">videos</li>
    </a>
    <a href="#">
        <li><img src="img/position.jpg" . style="width: 15px; margin-right: 2px;">maps</li>
    </a>
    <a href="#">
        <li><img src="img2/news-paper-vector-icon-png_308917.jpg" style="width: 15px; margin-right: 5px;">news</li>
    </a>
    <a href="#">
        <li> <img src="img2/three-dots.jpg" style="width: 15px; margin-right: 5px;">more</li>
    </a>
</ul>
</nav><br>
<p id="tools">tools</p>
</div>



<div class="bannière">
        <div class="ban-content">
            
            <div class="ban2">
                <img src="img2/fleurs-locales_c93ed81e6bbfd86626d3807d1ed68918.jpg"  alt="fleur" class="fleur">
                <span>bouquet</span>
            </div>
            <div class="ban2">
                <img src="img2/depositphotos_185308152-stock-photo-close-up-view-of-beautiful.jpg" alt="fleur" class="fleur">
                <span>love</span>
            </div>
            <div class="ban2">
                <img src="img2/Roses cJFC 670.jpeg" alt="fleur" class="fleur">
                <span>blanc</span>
            </div>
            <div class="ban2">
                <img src="img2/fleurs-locales_c93ed81e6bbfd86626d3807d1ed68918.jpg" alt="fleur" class="fleur">
                <span>nature</span>
            </div>
            <div class="ban2">
                <img src="img2/fleurs-locales_c93ed81e6bbfd86626d3807d1ed68918.jpg" alt="fleur" class="fleur">
                <span>flowers</span>
            </div>
            <div class="ban2">
                <img src="img2/Rose Orange.jpg" alt="fleur" class="fleur">
                <span>belles</span>
            </div>
            <div class="ban2">
                <img src="img2/Roses cJFC 670.jpeg" alt="fleur" class="fleur">
                <span>petit</span>
            </div>
            <div class="ban2">
                <img src="img2/Oiellet de poete.jpg" alt="fleur" class="fleur">
                <span>Oiellet</span>
            </div>
            
            <div class="ban2">
                <img src="img2/fleurs-locales_c93ed81e6bbfd86626d3807d1ed68918.jpg"  alt="fleur" class="fleur">
                <span>bouquet</span>
            </div>
            <div class="ban2">
                <img src="img2/depositphotos_185308152-stock-photo-close-up-view-of-beautiful.jpg" alt="fleur" class="fleur">
                <span>love</span>
            </div>
            <div class="ban2">
                <img src="img2/depositphotos_185308152-stock-photo-close-up-view-of-beautiful.jpg" alt="fleur" class="fleur">
                <span>love</span>
            </div>
              <div class="ban2">
                <img src="img2/depositphotos_185308152-stock-photo-close-up-view-of-beautiful.jpg" alt="fleur" class="fleur">
                <span>love</span>
            </div>
            
           
            </div>
      
        </div>


  

    <div class="container-fluid">
        

    <div class="row"> 
            <div class="col-md-9">
    
            <?php



// connection a la base de donnée
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdplante";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//fin connexion

// $mark = $_POST['mark'];
$idplante = $_GET['id'];


$sql = "SELECT* FROM TableInformationPlante WHERE IDplante  != $idplante ";
  $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
     while($row = mysqli_fetch_assoc($result)) {//tant qu'il y'a des informations

       $id = $row['IDplante'];
       $TypePlante = $row['TypePlante'];  
       $Nom = $row['NomPlante'];
       $DesciptionPlante = $row['DesciptionPlante'];
       $date = $row['DateEnrgPlante'];

    //    Requete pour avoir l'image de la fleur concernée en fonction de son ID
    $takeit = "SELECT* FROM TableInfoFleurImage WHERE IDInformationPlante = '$id'";
    $actionresult = mysqli_query($conn, $takeit); //execute la requête takeit
    $rowimg = mysqli_fetch_assoc($actionresult); //stockage du résulat de la requête
    $imgfleur = $rowimg['LienPlante'];
  
     
            

    ?> 




<div class="containt">
    
    <a  href="page3.php?id=<?php echo $id;?>">
        <img src="<?php echo $imgfleur ?>" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="NomPlante"><?php echo  $Nom ?></div>
    <div class="desc"><?php echo substr($row['DesciptionPlante'], 0, 100) .((strlen($row['DesciptionPlante']) > 100) ? '...' : ''); ?> </div>


 
    



</div>



<?php   

     }
} else {
    echo "0 resultat";
}
mysqli_close($conn);


?>



            </div>
 <div class="col-md-3">

           
            <?php

            // connection a la base de donnée
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdplante";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
$idplante = $_GET['id'];


$sql = "SELECT * FROM TableInfoFleurImage WHERE IDInformationPlante = '$idplante'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result) > 0) {

    //output data for each row

    $idfleur = $row['IDInformationPlante'];
    $lienImage = $row['LienPlante'];
    

    //get image information : requete pour avoir l'image de la fleur concernée en fonction de son ID
    $sql2 = "SELECT * FROM TableInformationPlante WHERE IDplante = $idfleur";
    $result2 = mysqli_query($conn, $sql2);//execute la requete $takeit
    $row2 = mysqli_fetch_assoc($result2);//connection a la base de donnée

    if(mysqli_num_rows($result) > 0) {

        //code...
        $nomplante = $row2['NomPlante'];
        $TypePlante = $row2['TypePlante'];
        $description = $row2['DesciptionPlante'];
    }


    //...........start HTML........


            ?>  
        <div class="images22">
            <div class="icon">

            </div>
      <img src="<?php echo $lienImage;?>" class="img-thumbnail"  alt="...">


            <p>information de l'image 
                <ul>

                   <li>Nom : <?php echo $nomplante; ?></li>
                   <li>Type : <?php echo $TypePlante; ?></li>
                   <li>Description: <?php echo $description; ?></li>


                </ul>


            </p>
            </div>
            <?php
} else{ 
    echo "0 results";  
}

mysqli_close($conn);
?>


        </div>
   
   
    </div>


 </div>
 <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>

    
    