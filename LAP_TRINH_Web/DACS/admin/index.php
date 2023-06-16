
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin .//</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    
</head>

<body>

    <?php 
    session_start();
    include'database/database.php';
    
  if(isset($_SESSION['user'])){
        include'modues/menu.php';
    
        include'modues/main.php';
    
        include'modues/footer.php';
  }else{
     header('Location:login.php');
  }
    ?>
    <script>
        // $('.taikhoan').click(function(){
        //     $('.menutren').toggleClass("show");
            
        // });
        // // $('ul li').click(function(){
        // //     $(this).toggleClass("active").siblings().removeClass("active");
        // // });

        var menu_c = document.querySelectorAll(".silebar ul>li");
        for(var i=1 ; i<menu_c.length; i++){
            menu_c[i].addEventListener('click',function(){
                var menu = document.querySelectorAll(".silebar ul>li>a>ul");
                for(var j=0 ; j<menu.length ; j++){
                    menu[j].style.display = "none";
                }
                this.children[1].style.display ="block";
            });
        }
    </script>
</body>
</html>
     