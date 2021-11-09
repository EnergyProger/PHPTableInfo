<?php include('data/userInfo.php');
$className = '';
$classAge = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPTask1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main__block">
    <table class="main__table">
        <tr>
            <th>ПIБ</th>
            <th>Вiк</th>
            <th>Освiта</th>
            <th>Досвiд</th>
        </tr>
        <?php foreach ($users as $key => $user):?>
        
            <?php if($user['education'] == 'Вища'):?>
               <?php $className .= "education "?>
            <?php endif;?>

            <?php if($user['experience'] < 3):?>
               <?php $className .= "greenBackground "?>
            <?php endif;?>

            <?php if($user['age'] < 18):?>
               <?php $classAge .= "ageFontLess"?>
            <?php elseif($user['age'] >= 30):?> 
                <?php $classAge .= "ageFontMore"?>
            <?php else:?>
                <?php $classAge .= "ageFontMiddle"?>
            <?php endif;?>

            <tr>  
                <?php foreach($user as $key=> $value):?>
                    <?php if($key == 'age'):?>
                        <td class="<?php echo $className.' '.$classAge;?>"><?php echo $value;?></td>
                    <?php else:?>   
                        <td class="<?php echo $className;?>"><?php echo $value;?></td>
                    <?php endif;?>
                       
                <?php endforeach;?>  
            </tr>
            <?php $className = '';?>
            <?php $classAge = '';?>
        <?php endforeach;?>
    </table>
   </div>
</body>
</html>