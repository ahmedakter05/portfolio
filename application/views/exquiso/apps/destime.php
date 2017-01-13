<!-- begin page title -->
    <section id="page-title">
    	<div class="container clearfix">
            <h1><?php echo $activepage; ?></h1>
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a> &rsaquo;</li>
                    <li>Login</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
    
    	<!-- begin contact form -->
		<!-- begin content -->
    <section id="content" class="container clearfix">
		<!-- begin main content -->
		<h3><b> Download Estimated Time Apps</b><br /><br /></h3>
        <section id="main" class="three-fourths">
		<table class="gen-table" align="left" cellspacing="5" border="5">
			<thead>
			<tr>
				<th>
				<?php echo validation_errors(); ?>
				<?php echo $errspds; ?>
				
				<br />

				<?php echo form_open('apps/destime') ?>

				<label for="size">Est Size: </label>
				<input type="number" name="size" />&nbsp;&nbsp;MB<br /><br />
				

				<label for="speeds">&nbsp;&nbsp;Speeds: </label>
				<input type="number" name="speeds" />&nbsp;&nbsp;KBPS<br />or<br />
				
				<label for="speed">Speed: </label>
				<input type="number" name="speed" />&nbsp;&nbsp;Kb/s<br /><br />

				<input type="submit" class="button blue-2" name="submit" value="Calculate" />

				</form>
				</th>
				
				<th> <br><br />
				<?php echo "File Size: ". $size/1024 . " MB<br />"; ?>
				<?php if (!($dwldspds == null)){ echo "Shared Speed: " . $dwldspds . " KBPS<br />";
				} elseif (!($dwldspd == null)){?>
				<?php echo "Direct Speed: " . $dwldspd . " Kb/s<br />"; } else { echo "Speed: 0 TBPS";}?>
				
				<?php echo "<br> Estimated Time: " . sprintf('%0.2f', $estime) . " Min<br />"; ?>
				</th>
			</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
		

			</section>
        <!-- end main content -->
        <!-- end contact form -->
        
        <!-- begin sidebar -->
        <?php echo (isset($sidebar) ? $sidebar : '');?>
        <!-- end sidebar -->
    </section>
    <!-- end content -->  