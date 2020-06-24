<h1><?php echo $title;?></h1>

<link rel="stylesheet" type="text/css" href="css/newstyle.css">

<div class="exercises">
	<div class="col-lg-12">
		<div class="table-responsive">
			<table id="example" class="table table-bordered">
				<thead>
					<th width="2%">#</th>
					<th>Chapter</th>
					<th>Title</th> 
					<th width="2%">Action</th>
				</thead>
				<tbody>
					<?php 
					$sql = "SELECT * FROM tbllesson";
					$mydb->setQuery($sql);
					$cur = $mydb->loadResultList();
					foreach ($cur as $result) {
						# code...
						echo '<tr>';
						echo '<td></td>';
						echo '<td>'.$result->LessonChapter.'</td>';
						echo '<td>'.$result->LessonTitle.'</td>';
						echo '<td><a href="index.php?q=question&id='.$result->LessonID.'" class="btn btn-xs btn-info">View Exercises</a></td>';
						echo '</tr>';
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
<div>	


<footer class="footer-1">
    <div class="footer-text">
      <p>&copy: Grupo Mecánica Dental - 2020 || Todos los derechos reservados</p>
    </div>
  </footer>
