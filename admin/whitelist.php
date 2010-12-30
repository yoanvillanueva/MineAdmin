<?php 
require_once('header_inc.php');
require_once('includes/header.php');
?>
	<div id="page_wrap">
	
		<div class="info">Info message</div>
        <div class="success">Successful operation message</div>
        <div class="warning">Warning message</div>
        <div class="error">Error message</div>
		<div id="white_wrap">
			<h1>White List</h1>
			<table>
				<th>Username</th>
				<th>Actions</th>
				<?php
				$white = $minecraft->white_list();
				$i=0;
				foreach ($white as $user) {
					echo "<tr>";
					//echo '<input type="text" name="'.$i.'" value="'.$user['name'].'" <br />';
					echo "<td>".$user['name']."</td>";
					echo "<td><a href='tools.php?action=dlwl&name=".$user['name']."'><img src='images/icons/delete.png'></a></td>";
					echo "</tr>";
				$i++;
				}
				?>
			</table>
		</div>	</div>
<?php require_once('includes/footer.php'); ?>
