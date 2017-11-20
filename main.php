<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Git Integrator</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style>
        /*
	 * Base structure
	 */

        /* Move down content because we have a fixed navbar that is 50px tall */
        body {
            padding-top: 50px;
        }

        /*
         * Typography
         */

        h1 {
            margin-bottom: 20px;
            padding-bottom: 9px;
            border-bottom: 1px solid #eee;
        }

        /*
         * Sidebar
         */

        .sidebar {
            position: fixed;
            top: 51px;
            bottom: 0;
            left: 0;
            z-index: 1000;
            padding: 20px;
            overflow-x: hidden;
            overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
            border-right: 1px solid #eee;
        }

        /* Sidebar navigation */
        .sidebar {
            padding-left: 0;
            padding-right: 0;
        }

        .sidebar .nav {
            margin-bottom: 20px;
        }

        .sidebar .nav-item {
            width: 100%;
        }

        .sidebar .nav-item + .nav-item {
            margin-left: 0;
        }

        .sidebar .nav-link {
            border-radius: 0;
        }

        /*
         * Dashboard
         */

        /* Placeholders */
        .placeholders {
            padding-bottom: 3rem;
        }

        .placeholder img {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .modal-header-success {
            color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #5cb85c;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .modal-header-warning {
            color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #f0ad4e;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .modal-header-danger {
            color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #d9534f;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .modal-header-info {
            color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #5bc0de;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .modal-header-primary {
            color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #428bca;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Git Integrator</a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <!--
            <li class="nav-item">
                <a class="nav-link" href="#">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
            </li>
            -->
        </ul>
        <li class="form-inline mt-2 mr-sm-0 text-success">
            v0.0.1
        </li>
        <!--
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        -->
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Analytics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Export</a>
                </li>
            </ul>

            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">Nav item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nav item again</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">One more nav</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Another nav item</a>
                </li>
            </ul>

            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">Nav item again</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">One more nav</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Another nav item</a>
                </li>
            </ul>
        </nav>

        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
            <h1>Dashboard</h1>

            <section class="row text-center placeholders">
                <div class="col-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <div class="text-muted">Something else</div>
                </div>
                <div class="col-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
                <div class="col-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
                <div class="col-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
            </section>

            <h2>Section title</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Header</th>
                        <th>Header</th>
                        <th>Header</th>
                        <th>Header</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1,001</td>
                        <td>Lorem</td>
                        <td>ipsum</td>
                        <td>dolor</td>
                        <td>sit</td>
                    </tr>
                    <tr>
                        <td>1,002</td>
                        <td>amet</td>
                        <td>consectetur</td>
                        <td>adipiscing</td>
                        <td>elit</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<!-- Info Modal -->
<div class="modal fade" id="infoModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header modal-header-info">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 id="infoModalHeader" class="modal-title">Header</h4>
            </div>
            <div class="modal-body">
                <p id="infoModalMessage">Message</p>
            </div>
            <div class="modal-footer">
                <button id="infoModalButton" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!-- Form Modal -->
<div class="modal fade" id="formModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header modal-header-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 id="formModalHeader" class="modal-title">Header</h4>
            </div>
            <div class="modal-body">
                <form id="formname">
                    <div class="form-group">
                        <div id="dynamicForm">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="formModalButton" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ie8/0.7.1/ie8.js"></script>

<script type="application/javascript">
    // Javascript territory

    $(document).ready(function() {
        // Nothing here yet
    });

	function infoModaljs(header, message, button, clickMethod) {
		$("#infoModalHeader").html(header);
		$("#infoModalMessage").html(message);
		$("#infoModalButton").html(button);
		$("#infoModal").modal();
		$("infoModalButton").click(clickMethod());
	}


</script>

</body>
</html>
<?php
/**
 * Conglomeration of pieces of code written to help this script along the way.
 * @Author Juan Castro
 */


DEFINE("DB_FILE", dirname(__FILE__) . "/mini_stalk.db");

/**
 * Class Logger
 * Custom log handler to simplify usage closer to other languages.
 * To avoid bloated unnecessary documentation, only methods that need explanation
 * will be explained.
 */
class Logger {

	/**
	 * @var
	 */
	private $log_file, $fp;

	private function lopen(){
	    if (empty(ini_get('error_log'))) {
		    $log_file_default = '.mini_logfile.txt';
	    } else {
		    $log_file_default = ini_get('error_log');
	    }
	    $lfile = $log_file_default;
	    $this->log_file = $log_file_default;
		$this->fp = fopen( $lfile, 'a' ) or exit( "Can't open $lfile!" );
    }

    public function lwrite($message, $level){
        if (!is_resource($this->fp)){
            $this->lopen();
        }
	    $script_name = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
	    $time = @date('[d/M/Y:H:i:s]');
	    fwrite($this->fp, "$time ($script_name) [$level] $message" . PHP_EOL);
    }

	/**
	 * @param $message
     * debug, info, warn, error and fatal all can be represented as such:
     * $log->error($message_to_log);
	 */
	public function debug($message){ $this->lopen(); $this->lwrite($message, 'DEBUG'); $this->lclose();}
	public function info($message){ $this->lopen(); $this->lwrite($message, 'INFO');  $this->lclose();}
	public function warn($message){ $this->lopen(); $this->lwrite($message, 'WARN');  $this->lclose();}
	public function error($message){ $this->lopen(); $this->lwrite($message, 'ERROR');  $this->lclose();}
	public function fatal($message){ $this->lopen(); $this->lwrite($message, 'FATAL');  $this->lclose();}

    public function lclose(){
        fclose($this->fp);
    }
}

/**
 * Class Security
 * Security bound operations that should help foster better practices.
 */
class Security {

	/**
     * Function generateRandomString
     *  - Utilized to generate the initial secret_key upon runtime.
	 * @param int $length
	 *
	 * @return string
     *
	 */
	public static function generateRandomString($length = 64) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	/**
     * Function generate_salt
     * - Utilized at runtime to generate the salt individual per installation.
	 * @return string
	 */
	public static function generate_salt(){
		return uniqid(mt_rand(), true);
	}

	/**
     * Function encrypt
     * - Since 7.1 will be deprecating mcrypt, encrypt and decrypt will utilize openssl_cipher for encryption
	 * @param $string
	 * @param $secret_key
	 * @param $salt
	 *
	 * @return string
	 */
	public static function encrypt($string, $secret_key, $salt){
		$key = hash('SHA256', $salt . $secret_key, true);
		$ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
		$iv = openssl_random_pseudo_bytes($ivlen);
		$ciphertext_raw = openssl_encrypt($string, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
		$hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
		return base64_encode( $iv.$hmac.$ciphertext_raw );
	}

	/**
     * Function decrypt
     * - Same as encrypt, cept the other way :D
	 * @param $encstring
	 * @param $secret_key
	 * @param $salt
	 *
	 * @return string
	 */
	public static function decrypt($encstring, $secret_key, $salt){
		$key = hash('SHA256', $salt . $secret_key, true);
		$c = base64_decode($encstring);
		$ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
		$iv = substr($c, 0, $ivlen);
		$hmac = substr($c, $ivlen, $sha2len=32);
		$ciphertext_raw = substr($c, $ivlen+$sha2len);
		$original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
		$calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
		if (hash_equals($hmac, $calcmac))  //PHP 5.6+ timing attack safe comparison
		{
			echo $original_plaintext."\n";
			return $original_plaintext;
		}
	}

	/**
     * Function get_salt
     * - simplified get_salt() directed towards the query
	 * @return mixed
	 */
	public static function get_salt(){
		$db = new DB();
		$salt = $db->get_config('salt');
		return $salt['config_value'];
	}

	/**
     * Function get_secret_key
     * - simplified get_secret_key() directed towards the query
	 * @return mixed
	 */
	public static function get_secret_key(){
		$db = new DB();
		$secret_key = $db->get_config('secret_key');
		return $secret_key['config_value'];
	}


}


/**
 * Class Utils
 * Miscellaneous utilities that I couldn't quite find a home for.
 */
class Utils {

	/**
     * Function exists
     * - Simple boolean response for if a file exists.
	 * @param $filename
	 *
	 * @return bool
	 */
    public function exists($filename){
        if (file_exists($filename)) {
	        return true;
        } else {
            return false;
        }
    }


	/**
     * Function config_template
     * - the initial outline for the array formatted configuration file created on the local fs.
	 * @param $secret_key
	 * @param $salt
	 *
	 * @return string
	 */
    public function config_template($secret_key, $salt){
        $template = "<?php
			 return [
			    'secret_key' => '$secret_key',
			    'salt' => '$salt'
			 ];
			?>";
        return $template;
    }

	/**
	 * @param $config_file
	 * @param $template
	 */
    public function config_write($config_file, $template){
        file_put_contents($config_file, $template, FILE_APPEND | LOCK_EX);
    }

	/**
	 * @param $config_file
	 *
	 * @return mixed
	 */
    public function config_read($config_file){
        $config = include_once($config_file);
        return $config;
    }

	/**
	 * @param $config_file
	 * @param $template
	 */
    public function config_update($config_file, $template){
        $log = new Logger();
        if ($this->exists($config_file)) {
	        file_put_contents( $config_file, template, FILE_APPEND | LOCK_EX );
        } else {
            $log->error("Failed to update config file");
        }
    }


	/**
     * Function startsWith
     * - Easy way of determining if my string key is Error or not
	 * @param $haystack
	 * @param $needle
	 *
	 * @return bool
	 */
	public static function startsWith($haystack, $needle)
	{
		$length = strlen($needle);
		return (substr($haystack, 0, $length) === $needle);
	}

	/**
     * Function endsWith
     * - Same as the above, cept the other way around.
	 * @param $haystack
	 * @param $needle
	 *
	 * @return bool
	 */
	public static function endsWith($haystack, $needle)
	{
		$length = strlen($needle);

		return $length === 0 ||
		       (substr($haystack, -$length) === $needle);
	}

}

/**
 * Class Connect
 * Initial DB connection for SQLITE3
 */
class Connect extends SQLite3 {
	function __construct(){
		$this->open(DB_FILE);
	}
}



DEFINE( "CREATE_CONFIG_TABLE", 'CREATE TABLE IF NOT EXISTS "config" (
	      "id" INTEGER CONSTRAINT "pk_config" PRIMARY KEY AUTOINCREMENT,
	      "category" VARCHAR(128) NOT NULL,
	      "config_name" VARCHAR(128) NOT NULL,
	      "config_key" VARCHAR(128) NOT NULL,
	      "config_value" TEXT NOT NULL,
	      "updated" DATETIME DEFAULT CURRENT_TIMESTAMP
	    );' );

DEFINE( "CREATE_USER_TABLE", 'CREATE TABLE IF NOT EXISTS "users" (
	      "id" INTEGER CONSTRAINT "pk_users" PRIMARY KEY AUTOINCREMENT,
	      "username" VARCHAR(255) UNIQUE,
	      "password" VARCHAR(255) NOT NULL,
	      "created" DATETIME DEFAULT CURRENT_TIMESTAMP,
	      "active" INTEGER DEFAULT 1
	    )' );

DEFINE( "INSERT_USER", 'INSERT INTO "users"
          (username, password)
          VALUES
          (:username, :password);' );

DEFINE( "INSERT_CONFIG", 'INSERT INTO "config"
          (category, config_name, config_key, config_value)
          VALUES
          (:category, :config_name, :config_key, :config_value)' );

DEFINE( "DELETE_USER", 'DELETE FROM "users" WHERE username = :username' );

DEFINE( "DELETE_CONFIG", 'DELETE FROM "config" WHERE id = :id' );


/**
 * Class DB
 * Consolidation database related calls
 */
class DB {
    function __construct(){
        $db = new Connect();
        $log = new Logger();
        if(!$db) {
            $log->fatal("<center>Failed to open db</center>");
        }
	    $secret_key = $this->get_config('secret_key');
	    if (!$secret_key) {
	        $message = "Creating Database...";
	        $log->debug($message);
            $c_user_result = $db->exec(CREATE_USER_TABLE);
            $c_config_result = $db->exec(CREATE_CONFIG_TABLE);
            $db->close();
            if (!$c_user_result || !$c_config_result){
	            $log->error($db->lastErrorMsg());
	            echo $db->lastErrorMsg();
            }
        }
    }

	/**
     * Function add_user
     * - Adds a user to the database
	 * @param $username
	 * @param $password
	 */
    function add_user($username, $password){
        $db = new Connect();
        $secret_key = Utils::config_read()['secret_key'];
        $salt = Utils::config_read()['salt'];
        $enc_password = Security::encrypt($password, $secret_key, $salt);
        $statement = $db->prepare(INSERT_USER);
        $statement->bindValue(':username', $username, SQLITE3_TEXT);
	    $statement->bindValue(':password', $enc_password, SQLITE3_TEXT);
        $statement->execute();
        $db->close();
    }

	/**
     * Function add_config
     * - Adds a configuration key, value store to the database.
	 * @param $name
	 * @param $key
	 * @param $value
	 */
    function add_config($name, $key, $value){
        $db = new Connect();
        $log = new Logger();
        $db->enableExceptions(true);
        $cat = "git";
        $entry_exists = $this->get_config($name);
        if ($entry_exists){
            $message = "Entry already exists";
            $log->warn($message);
        } else {
	        try {
		        $statement = $db->prepare( INSERT_CONFIG );
		        $statement->bindValue( ':category', $cat, SQLITE3_TEXT );
		        $statement->bindValue( ':config_name', $name, SQLITE3_TEXT );
		        $statement->bindValue( ':config_key', $key, SQLITE3_TEXT );
		        $statement->bindValue( ':config_value', $value, SQLITE3_TEXT );
		        $statement->execute();
		        $db->close();
	        } catch ( Exception $exception ) {
		        $log->error( "Failed to insert config $name: $exception" );
		        echo "Failed to insert config $name: $exception";
	        }
        }
    }

	/**
     * Function get_config
     * - wraps query with a try for returning config_values
	 * @param $name
	 *
	 * @return array|bool|string
	 */
    function get_config($name){
        $db = new Connect();
        $log = new Logger();
        $db->enableExceptions(true);
	    $query = 'SELECT config_key, config_value FROM "config" WHERE config_key = :config_key;';
        try {
	        $statement = $db->prepare($query);
	        $statement->bindValue( ':config_key', $name, SQLITE3_TEXT );
	        $result = $statement->execute();
	        $output = $result->fetchArray();
	        return $output;
        }
        catch (Exception $exception) {
		    $output = "Error: $exception";
		    $log->error($output);
	        return false;
		}
    }

	/**
     * Function get_user
     * - Returns the username and password for login comparision.
	 * @param $username
	 *
	 * @return array|bool|string
	 */
    function get_user($username){
        $db = new Connect();
        $log = new Logger();
        $db->enableExceptions(true);
        $query = 'SELECT username, password FROM "users" WHERE username = :username;';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':username', $username, SQLITE3_TEXT);
            $result = $statement->execute();
            $output = $result->fetchArray();
            return $output;
        }
        catch (Exception $exception){
            $output = "Error: $exception";
            $log->error($output);
            return false;
        }
    }

	/**
     * Function delete_user
     * - deletes a user
	 * @param $username
	 */
    function delete_user($username){
        $db = new Connect();
        $statement = $db->prepare(DELETE_USER);
        $statement->bindValue(':username', $username, SQLITE3_TEXT);
        $statement->execute();
        $db->close();
    }

	/**
     * Function delete_config
     * - deletes a specific config by id
	 * @param $config_id
	 */
    function delete_config($config_id){
        $db = new Connect();
        $statement = $db->prepare(DELETE_CONFIG);
        $statement->bindValue(':id', $config_id, SQLITE3_TEXT);
        $statement->execute();
        $db->close();
    }

    }

/**
 * Class UI
 * Organized local php based UI functions to create a more dynamic interface.
 */
class UI{

	/**
     * Binds the PHP representation of info modal to the javascript method.
	 * @param $header
	 * @param $message
	 * @param $button
	 */
    public static function info_modal($header, $message, $button, $clickmethod){
        echo "<script>infoModaljs(\"$header\", \"$message\", \"$button\", \"clickMethod()\");</script>";
    }

	/**
     * Binds the PHP representation of the form modal to the javascript method.
	 * @param $header
	 * @param $form_component
	 * @param $button
	 */
    public static function form_modal($header, $form_component, $button){
        echo "<script>formModaljs(\"$header\", \"$form_component\", \"$button\")</script>";
    }

	/**
     * Responsible for the dynamic text type html form element.
	 * @param $id
	 * @param $label
	 * @param $name
	 * @param $placeholder
	 *
	 * @return string
	 */
    public static function text($id, $label, $name, $placeholder){
        $inputForm = '<div class="form-group">
			<label for="'.$id.'">'.$label.'</label>
			<input type="text" name="'.$name.'" class="form-control" id="'.$id.'" placeholder="'.$placeholder.'">
		  </div>';
        return $inputForm;
    }

	/**
     * Responsible for the dynamic password type html form element.
	 * @param $id
	 * @param $label
	 * @param $name
	 * @param $placeholder
	 *
	 * @return string
	 */
	public static function textPassword($id, $label, $name, $placeholder){
		$inputForm = '<div class="form-group">
			<label for="'.$id.'">'.$label.'</label>
			<input type="password" name="'.$name.'" class="form-control" id="'.$id.'" placeholder="'.$placeholder.'">
		  </div>';
		return $inputForm;
	}

	/**
     * Responsible for the select type html form element.
	 * @param $id
	 * @param $label
	 * @param $name
	 * @param array $options
	 *
	 * @return string
	 */
    public static function select($id, $label, $name, array $options){
        $option_values = "";
        foreach($options as $optionid => $optionname){
            $option_values .= '<option id="'.$optionid.'">'.$optionname.'</option>';
        }
        $selectForm = '<div class="form-group">
			<label for="exampleSelect1">'.$label.'</label>
			<select name="'.$name.'" class="form-control" id="'.$id.'">
			    '.$option_values.'
			</select></div>';
        return $selectForm;
    }

	/**
     * Binding method for the form construction.
	 * @param $elements
	 *
	 * @return string
	 */
    public static function formAssembly($elements){
        return '<form>' . $elements . '</form>';
    }

    public static function form_submit_button($text, $type='btn-primary'){
        $button = '<button type="submit" class="btn '.$type.'">'.$text.'</button>';
        return $button;
    }

}


class Response{
    function __construct() {
        if (isset($_POST)){
            $post_payload = array();
            foreach($_POST as $key => $value){
                $post_payload[$key] = $value;
            }
        }
        if (isset($_GET)){
            $get_payload = array();
            foreach($_GET as $key => $value){
                $get_payload[$key] = $value;
            }
        }
    }

}


/**
 * Class Main
 * Conductor of events to take place in order that adheres all the functionality.
 */
class Main {

    public function construct_user_form_init(){
        $create_fuser = UI::text('create_fuser', 'Username', 'create_fuser', 'Username');
        $create_fuser .= UI::textPassword('create_fpass', 'Password', 'create_fpass', 'Password');
        $form = UI::formAssembly($create_fuser);
        return UI::form_modal('Create User', $form, UI::form_submit_button('Create User'));
    }

    public function start(){
	    $db = new DB();
	    $log = new Logger();
	    $secret_key = $db->get_config('secret_key');
	    echo "<center>". __FUNCTION__ ."</center>";
	    if (!$secret_key) {
	        $modal_header = "First run - Setup";
	        $modal_message = "<h4>Since this is the first run, we'll be creating some data files.</h4>";
	        $modal_message .= "<ul><li>Creating database...</li>";
	        $modal_message .= "<li>Creating tables...</li>";
	        $modal_message .= "<li>Generating and adding secret_key...</li>";
	        $modal_message .= "<li>Generating and adding salt...</li></ul>";
	        $modal_button = "Continue";
	        UI::info_modal($modal_header, $modal_message, $modal_button);
	        $message = "<center>Adding Entries</center>";
	        $log->debug($message);
            $secret_key = Security::generateRandomString();
            $salt = Security::generate_salt();
            $db->add_config('application', 'secret_key', $secret_key);
            $db->add_config('application', 'salt', $salt);
            $this->construct_user_form_init();
        }
    }
}
?>
<div align="center";>
    <div>
<?php
$run = new Main();
$run->start();

?>
    </div>
</div>

