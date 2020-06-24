<h1><?php echo $title;?></h1>


	<div class="exercises" style="background-image: url(images/fondo.png);">

		<div class="col-lg-12">
			<div class="table-responsive">
				<table id="example" class="table table-bordered">
					<thead>
						<th width="2%">#</th>
						<th>Clases</th>
						<th>Titulo</th> 
						<th width="10%">Accion</th>
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
	</div>
</div>
