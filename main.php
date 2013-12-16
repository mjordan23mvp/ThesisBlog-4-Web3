<html>
 <head>
  <title>THESIS 13-14 | YU YI CHEN</title>
   <link type="text/css" rel="stylesheet" href="css/style.css"/>
 </head>

 <body id="main">
 	<div id="dtt">
        <a id="title"><img src=images/title.png alt=></a>
    </div>
     
 	<div id="d1">
 		<?php
        date_default_timezone_set("America/New_York");
 		$today = mktime(0,0,0,date("m"),date("d"),date("Y"));
        echo "TODAY IS ".date("m.d.Y", $today);
        ?>
 	</div>

 	<div id="d2">
 		<a id="thesis"><img src=images/thesis.png alt=thesis></a>
 	</div>

 	<div id="d3">
        <div id="article">
 		    <?php
            $file=fopen("files/Taiwan.txt","r") or exit("Unable to open file!");
            while (!feof($file)){ 
                echo fgetc($file); 
            }
            fclose($file);
            ?>
        </div>
    </div>

    <div id="d4">
 		<div id="feedback">FEEDBACK</div>
 		<div id="email">EMAIL</div>
 		<div id="yuyi">YUYI</div>
 	</div>

    <div id="guestbook">
        <div id="board">
            <?php
            include("db_conn.php");
            $sql="SELECT * FROM simple_board ORDER BY id DESC";
            $result=mysql_query($sql);
            ?>
            <a href="add.php"><font color="#999999", face="Sans-serif">LEAVE A MESSAGE</font></a><br><br>
            <table width="300" border="1" cellspacing="0" cellpadding="0" bgcolor="#999999">
                <tr>
                <td>TITLE</td>
                <td>CONTENT</td>
                <td>ID</td>
                <td>TIME</td>
                </tr>
 
                <?php
                if(mysql_num_rows($result)>0){
                    $num=mysql_num_rows($result);
                    for($i=0;$i<$num;$i++){
                        $row=mysql_fetch_array($result);
                        echo "<tr>";
                        echo "<td>".$row['title']."</td>";
                        echo "<td>".$row['content']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['time']."</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>

 	<div id="intro">
 		<a id="profile"><img src=images/profile.png alt=></a>
 		<p id="me">" I'M A MFA DESIGN & TECHNOLOGY STUDENT OF PARSONS<br><br>
 			AS WELL AS A DESIGNER,<br><br>
 			AN ARTIST,<br><br>
 			AND A SCULPTOR. "<br><br></p>
 	</div>

 	<div id="ee">
 		<div id="form">
 		<?php
            function spamcheck($field){
                $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  
                if(filter_var($field, FILTER_VALIDATE_EMAIL)){
                    return TRUE;
                }
                else{
                    return FALSE;
                }
            }

            if (isset($_REQUEST['email'])){
                $mailcheck = spamcheck($_REQUEST['email']);
                
                if ($mailcheck==FALSE){
                    echo "Invalid input";
                }
                else{
                    $email = $_REQUEST['email'] ; 
                    $subject = $_REQUEST['subject'] ;
                    $message = $_REQUEST['message'] ;
                    mail("mjordan23mvp@hotmail.com", "Subject: $subject",
                    $message, "From: $email" );
                    echo "THANK YOU FOR YOUR OPINION !";
                }
            }
            else{
                echo "<form method='post' action='main.php'>
                Email: <input name='email' type='text' /><br /><br />
                Subject: <input name='subject' type='text' /><br /><br />
                Message:<br />
                <textarea name='message' rows='15' cols='40'>
                </textarea><br />
                <input type='submit' />
                </form>";
            }
        ?></div>
 	</div>

  	<footer id="copyright">Copyright 2013 Yu Yi Chen | All Rights Reserved</footer>
 	
 	<script src="js/main.js"></script>
 </body>
</html>