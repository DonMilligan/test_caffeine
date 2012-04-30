<?php

class Twitter_TwitterController extends Controller {

    public static function hello()
    {
        View::data('name', 'Gavin');
        View::data('color', 'Green');
    }

    public static function bye()
    {
        Log::debug('twitter', 'asdfalsdjflaksdjflasdjfalsdjfadslf');
    }   
    
    public static function entryPoint()
    {
		$posts = self::_getTweets();
		View::data('posts', $posts);
    }
	
	public static function register()
	{
		$loggedin = false;	
		$register = true;
		View::data('register', $register);
		View::data('loggedin', $loggedin);
	}
    /**
     * Displays a form for creating a new tweet.
     *
     * Route: twitter/tweet
     */
    
    public static function tweet()
    {

    	if(isset($_POST['name']))
    	{
    		$postId = Twitter::tweet()->insert(array(
    				'name' => $_POST['name'],
    				'email' => $_POST['email'],
    				'subject' => $_POST['subject'],
    				'tweet' => $_POST['tweet']
    		));
    	
    		if($postId)
    		{
    	
    			Message::ok('Post created successfully.');
    			Log::debug('twitter', 'insert success');
    			$_POST = array(); // Clear form
    		}
    		else
    			Message::error('Error creating post. Please try again.');
    			Log::debug('twitter', 'insert fail');
    	}
    	
    	self::_getTweets();
    }
    
    private static function _getTweets()
    {
    	$posts = Twitter::tweet()
    	->select('*')
    	->orderBy('twitter_tweets.created_at', 'DESC')
    	->all(); 

    	View::data('posts', $posts);

    }
   
//    private static function _loggedIn()
//    {
//    		if(User::current()->isAnonymous()){
// 			return false;
//    		}
// 		else { return true; }
//    }
   
   public static function login()
   {
       if($_POST)
       {
           $user = User::user()
               ->where('email', '=', $_POST['email'])
               ->andWhere('pass', '=', md5($_POST['password']))->first();
           if($user)
           {
               $_SESSION[Config::get('user.session_key')] = $user->id;
               Url::redirect('admin');
           }
           else
               Message::error('Invalid login details.');
       }
   }

    public static function logout()
    {
        unset($_SESSION[Config::get('user.session_key')]);
        Url::redirect('admin/logout');
    }
   

}
