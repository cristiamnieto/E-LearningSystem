<h1><?php echo $title;?></h1>

<link rel="stylesheet" type="text/css" href="css/newstyle.css">

<div class="leccion">
	<div class="col-lg-6" id="col-lg-6">
		<h3>PDF</h3>
		<div class="table-responsive" id="table-responsive">
			<table id="example" class="table table-bordered">
				<thead>
					<th width="2%">#</th>
					<th>Chapter</th>
					<th>Title</th>
					<th width="2%">Action</th>
				</thead>
				<tbody>
					<?php 
					$sql = "SELECT * FROM tbllesson WHERE Category='Docs'";
					$mydb->setQuery($sql);
					$cur = $mydb->loadResultList();
					foreach ($cur as $result) {
						# code...
						echo '<tr>';
						echo '<td></td>';
						echo '<td>'.$result->LessonChapter.'</td>';
						echo '<td>'.$result->LessonTitle.'</td>';
						echo '<td><a href="index.php?q=viewpdf&id='.$result->LessonID.'" class="btn btn-xs btn-info"><i class="fa fa-info"></i> View File</a></td>';
						echo '</tr>';
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-lg-6" id="video">
		<h3>VIDEO</h3>
		<div class="table-responsive">
			<table id="example2" class="table table-bordered">
				<thead>
					<th width="2%">#</th>
					<th>Decription</th>
					<th width="2%">Action</th>
				</thead>
				<tbody>
					<?php 
					$sql = "SELECT * FROM tbllesson WHERE Category='Video'";
					$mydb->setQuery($sql);
					$cur = $mydb->loadResultList();
					foreach ($cur as $result) {
						# code...
						echo '<tr>';
						echo '<td></td>';
						echo '<td>'.$result->LessonTitle.'</td>'; 
						echo '<td><a href="index.php?q=playvideo&id='.$result->LessonID.'" class="btn btn-xs btn-info"><i class="fa fa-play"></i> Play Video</a></td>';
						echo '</tr>';
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

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