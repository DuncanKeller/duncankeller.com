<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
	<?php include "libraries.php" ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".scroll-pane").jScrollPane();
        });
    </script>


</head>
<body>
	<div class = "sideBar">
		<?php include "src/sideBar.php"; ?>
	</div>
	<div class = "page">
		
		<div class = "titleBar">
			<?php include "src/titleBar.php"; ?>
		</div>

		<div class = "content " id = "content">
            <?php include "src/content.php"; ?>
            <div id = "innerContent" >
                <div id = "innerContentText" class = "scroll-pane vertical-only"></div>
            <!--  class = "scroll-pane jspScrollable" -->
	 	    </div>
	 	</div>

       
	</div>



</body>

</html>
