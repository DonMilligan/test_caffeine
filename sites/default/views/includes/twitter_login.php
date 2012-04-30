
		<!-- start content -->
		<div class="article">
		        <h1>Login</h1>
		        <?= Html::form()->open(null, 'post', false, array('id' => 'login', 'name' => 'login')); ?>
		            <ul style="margin-top: 18px;">
		                <li class="text full">
		                    <label>Email</label>
		                    <input type="text" name="email" />
		                </li>
		                <li class="text full">
		                    <label>Password</label>
		                    <input type="password" name="password" />
		                </li>
		                <li><br />
                			<input type="image" name="imageField" id="imageField" src="images/submit.gif" class="send" />
                			<div class="clr"></div>
		                </li>
		            </ul>
		        <?= Html::form()->close(); 
		        	echo '<br />';
		        	Html::a('Register Here', 'twitter/register', array('target' => '_blank')); ?>
		        
		</div>

