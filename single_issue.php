<!DOCTYPE html>
<html lang="en">

<head>
 <meta name="generator" content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org">
 <meta charset="utf-8">
 <title>
  ArgentineRose Student Issue Tracking System
 </title>
 <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" type="text/css">
 <link rel="stylesheet" href="css/app.css" type="text/css">
 <script src="vendor/modernizr.js" type="text/javascript">
 </script>
</head>

<body>
 <div class="container" style="margin-top:10px; width:70%">
  <div class="panel panel-primary">
   <div class="panel-heading">
    <?php session_start(); 
		$name=$_POST['studentName']; 
		$number=$_POST['studentNumber']; 
		$section=$_POST['section']; 
		$title=$_POST['title']; 
		$description=$_POST['description']; 
		$assignment=$_POST['assignedTo']; 
		$label=$_POST['label']; 
		$_SESSION['name']=$name; 
		$_SESSION['number']=$number; 
		$_SESSION['section']=$section;
		$_SESSION['title']=$title; 
		$_SESSION['description']=$description; 
		$_SESSION['assignment']=$assignment; 
		$_SESSION['label']=$label; 
	?>
    <h2 style="margin:0px">
     Issue #37:
     <?php echo $title. "<br>"; ?>
    </h2>
   </div>

   <div class="panel-body" id="opened_issue_tab">
    
    <div class="row">
     <div class="col-md-8">
	  <p>
		Reported by Alyssa Dunn on Oct 17th 2013 2:13pm
      </p>
	 
      <p>
       Assigned to
       <?php echo $assignment. "<br>"; ?>
      </p>

      <p>
       Labels: #
       <?php echo $label. "<br>"; ?>
      </p>

      <h3>
       Status:
       <font color="red">Unresolved</font>
      </h3>
     </div>

     <div class="col-md-4">
      <p>
       Student Name:
       <?php echo $name. "<br>"; ?>
      </p>

      <p>
       Student Number:
       <?php echo $number. "<br>"; ?>
      </p>

      <p>
       Section:
       <?php echo $section. "<br>"; ?>
      </p>
     </div>
    </div>
    <br>

    <div class="btn-group">
     <button type="button" class="btn btn-default">Edit</button>
     <button type="button" class="btn btn-default">Follow</button>
     <button type="button" class="btn btn-default" onclick="window.location.href='resolve.php'">Resolve</button>
    </div>

    <hr>

    <div class="container">
     <h3 style="margin-top:0px">
      Description:
     </h3>

     <p>
      <?php echo $description. "<br>"; ?>
     </p>
     <br>

     <h3>
      Comments:
     </h3>
  	 <img src="assets/person.png" alt="James Bond">
     <table>
      <tr>
       <td width="730"><strong><font size="1">  </font></strong><font size="1"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Me</strong>
        </font>
        <font color="gray">
        </font>
       </td>
      </tr>   
      
	<form class="form-horizontal" role="form" method="POST" action="single_issue.php">
            
      <tr>
       <td>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="comment" name="comment" placeholder="Write a comment">
        </div>
</td>
      </tr>

<tr>   
<td align="right">          
	<button type="submit" class="btn btn-default">Comment</button>
    </form>
    <td>
    </tr>
     </table>
  </div>
 </div>
</body>

</html>
