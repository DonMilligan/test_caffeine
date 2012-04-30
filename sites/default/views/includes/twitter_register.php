		<!-- start content -->
		<div class="article">
		        <h1>Install</h1>
		        <?= Html::form()->open(null, 'post', false, array('id' => 'install', 'name' => 'install')); ?>
		            <ul style="margin-top: 18px;">
		                <li class="text full">
		                    <label>Email</label>
		                    <input type="text" name="email" />
		                </li>
		                <li class="text full">
		                    <label>Password</label>
		                    <input type="password" name="password" />
		                </li>
		                <li class="text full">
		                    <label>Confirm Password</label>
		                    <input type="password" name="conf_password" />
		                </li>
		                <li><br />
                			<input type="image" name="imageField" id="imageField" src="images/submit.gif" class="send" />
                			<div class="clr"></div>
		                </li>
		            </ul>
		        <?= Html::form()->close(); ?>
		</div>
		<!-- end content -->