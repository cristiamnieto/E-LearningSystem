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
<div class="footer-content">
	<div class="footer-text1">
		<p>&copy: Grupo Mecánica dental - 2020 // Todos los derechos reservados</p>
	</div>

	<div class="redes-sociales">
		<h1>Sigános en redes Sociales y en nuestra página web<h1>
		<a href="https://es-la.facebook.com/politecnicointernacionalcolombia/"> <img src="images/facebook.png" alt="" ></a>
		<a href="https://twitter.com/PolitecnicoIn?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="images/twitter.png" alt="" ></a>
		<a href="https://politecnicointernacional.edu.co/sw/es/home"><img src="images/Poli.png" alt="" ></a>
	</div>
</div>
</foter>