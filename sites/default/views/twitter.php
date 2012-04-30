<?php
View::insert('includes/header');
?>
<div class="main">
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
		    <? if(User::current()->isAnonymous()): ?>
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
		     <? if(isset($error)): ?>
		        <h3 class="error"><?=$error?></h3>
		     <? endif; ?>         
		     <? else: ?>
		      <!-- begin content -->
			<div class="article">
	          <h2><span><?php echo count($posts);?></span> Responses</h2>
	          <div class="clr"></div>
	         <?php  foreach($posts as $tweet){
	         			echo '<div class="comment"> <a href="#"><img src="images/userpic.gif" width="40" height="40" alt="" class="userpic" /></a>
	           				 <p><a href="#">'.$tweet->name.'</a> Says:<br />
	             			 '.date( "F j, Y, g:i a", $tweet->updated_at).'</p>
	           				 <p>'.$tweet->tweet.'</p>
	          				</div>'; } 
	         ?>
	        </div>
	        <div class="article">
	          <h2><span>Leave a</span> Tweet</h2>
	          <div class="clr"></div>
	          <?= Html::form()->open('twitter/tweet', 'post'); ?>
	            <ol>
	              <li>
	                <label for="name">Name (required)</label><br />
	                <input id="name" name="name" class="text" value="<?php $id =User::current()->id; echo $id; ?>" />
	              </li>
	              <li>
	                <label for="email">Email Address (required)</label><br />
	                <input id="email" name="email" class="text" value="<?php echo User::current()->email; ?>"/>
	              </li>
	              <li>
	                <label for="subject">Subject</label><br />
	                <input id="subject" name="subject" class="text" />
	              </li>
	              <li>
	                <label for="tweet">Your Tweet</label><br />
	                <textarea id="tweet" name="tweet" rows="8" cols="50"></textarea>
	              </li>
	              <li><br />
	                <input type="image" name="imageField" id="imageField" src="images/submit.gif" class="send" />
	                <div class="clr"></div>
	              </li>
	            </ol>
	          <?= Html::form()->close(); ?>
	        </div>
	        <!-- end content -->
		      <? endif; ?>
      </div>
      <div class="clr"></div>
    </div>
  </div>
</div>
<?php
View::insert('includes/footer'); 
?>
