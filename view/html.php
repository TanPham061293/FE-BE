<!DOCTYPE html>
<html>
<head>
<meta charset="${encoding}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link  href ="view/css/format.css" rel ="stylesheet">
<title>FE-BE</title>
</head>
<body>
<?php 

$html ='';
$id   = '';
if (isset($this->post)){
    $html = $this->post['content'];
    $id   = $this->post['id'] + 1;
    if ($id == 5 ){
        $id = 1;
    }
}else{
    $html = $this->notice;
}

?>
    <div id ="warper" >
    	<div class ="img"><img class ="img1" alt="chua tai" src="view/img/Joke2.png">
    	<p><i>Handicrafted by</i><br><span class = "bolder">Jim HLS</span></p>
    					  <img class ="img2" alt="chua tai" src="view/img/Joke1.png"></div>	
    <div id ="header" ><p class ="main">A joke a day keeps the doctor away</p>
    			       <p class = "other"> If you joke wrong way, your teeth have to pay. (Serious)</p>
        </div>
        <div id ="content"> 
                <div class ="text"><?php echo $html;?></div>
                
                <?php 
                if ($id != null)
                    echo '<div class ="action" >
                    <a class ="like" href ="index.php?controller=controller&action=display&id='.$id.'&like=like"><p>This is Funny!</p></a>
                    <a class ="dislike" href ="index.php?controller=controller&action=display&id='.$id.'&like=dislike"><p>This is not Funny.</p?</a>
                    </div>'
                ?>	
        </div>
        <div id ="footer" ><p>This website is created as part of Hisolutions program.  The materials contained on this website are provided for general<br> 
                                information only and do not constitute any form of advice.  HLS assumes no responsibility for the accuracy of any particular statement and <br>
                                accepts no liability for any loss or damage which may arise from reliance on the information contained on this site.<br></p>
                                <p class = "bolder">Copyright 2021 HLS</p>
          </div>
    </div>
	
</body>
</html>