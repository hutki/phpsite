<?php
    include "blocks/bd.php";
    $result = mysql_query("SELECT title,meta_d,meta_k,text FROM settings WHERE page='contacts'",$bd);

    $myrow = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
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