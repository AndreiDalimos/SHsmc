<div style="min-height: 400px;width:100%;background-color: black;text-align: center;">
	<div style="padding: 20px;max-width:350px;display: inline-block;">
		<form method="post" enctype="multipart/form-data">

  						
            <?php

				$settings_class = new Settings();

				$settings = $settings_class->get_settings($_SESSION['student_userid']);

				if(is_array($settings)){

					echo "<br>About me:<br>
							<div id='textbox' style='height:200px;border:solid 3px #FF5757; background-color:white;' >".htmlspecialchars($settings['about'])."</div>
						";


				}

            ?>

		</form>
	</div>
</div>