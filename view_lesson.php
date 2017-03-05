<?php
    include "blocks/bd.php";

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $result = mysqli_query($bd, "SELECT * FROM lessons WHERE id='$id'");

    $myrow = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title><?php echo $myrow['title'];?></title>
        <meta name="description" content="<?php echo $myrow['meta_d'];?>">
        <meta name="keywords" content="<?php echo $myrow['meta_k'];?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table class="main_border" align="center" cellpadding="0" cellspacing="0"> 
        <?php
            include("blocks/header.php");
        ?>

        <tr>
            <td>
              <table align="center" cellpadding="0" cellspacing="0">
         <tr>
        <?php
            include("blocks/lefttd.php");
        ?>
            <td width="508px" class="v_top">
                <h2 class="view_title">
                    <?php 
                        echo $myrow["title"];
                     ?>
                </h2>
                   <p class="view_date">
                   Дата добавления: 
                        <?php 
                        echo $myrow["date"];
                     ?>  
                   </p>   
                    <p class="view_date">
                        Автор:
                     <?php 
                        echo $myrow["author"];
                     ?>
                     </p>
                 <?php echo $myrow['text'];?>
            </td>
        </tr>

        </table>

            </td>
        </tr>
        <?php
            include("blocks/footer.php");
        ?>
        
    </table>
    
    
</body>
</html>