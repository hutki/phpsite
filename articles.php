<?php
    include "blocks/bd.php";
    $result = mysqli_query($bd, "SELECT title,meta_d,meta_k,text FROM settings WHERE page='articles'");

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
                 <?php echo $myrow['text'];?>

                  <?php
                    $result = mysqli_query($bd, 'SELECT id,title,description,author,date FROM articles');
                    $myrow = mysqli_fetch_array($result);


                do{
               
                printf('<table align="center" class="lesson" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="lesson_title">
                            <p class="lesson_name"><a href="view_articles.php?id=%s">%s</a></p>
                            <p class="lesson_adds">Дата добавления: %s</p>
                            <p class="lesson_adds">Автор урока: %s</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>%s</p>
                        </td>
                    </tr>
                </table><br><br>', $myrow["id"],$myrow["title"],$myrow["date"],$myrow["author"],$myrow["description"]);
                }
                while ($myrow = mysqli_fetch_array($result));
                ?>
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