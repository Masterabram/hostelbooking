  <?php 
  require_once '../config/functions.php';

    $stmt = $DB->prepare("SELECT * FROM chatting ORDER BY id ASC");
    $stmt->execute();
    $rest = $stmt->fetchAll();
	    foreach ($rest as $res)
	    { 
	     echo "<li><p> <strong><i>" . $res['user'] . "</i></strong> | ". $res['message']. "</p></li>";
	   } 



   ?>