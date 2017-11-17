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
                    <tr>
                        <td>1,003</td>
                        <td>Integer</td>
                        <td>nec</td>
                        <td>odio</td>
                        <td>Praesent</td>
                    </tr>
                    <tr>
                        <td>1,003</td>
                        <td>libero</td>
                        <td>Sed</td>
                        <td>cursus</td>
                        <td>ante</td>
                    </tr>
                    <tr>
                        <td>1,004</td>
                        <td>dapibus</td>
                        <td>diam</td>
                        <td>Sed</td>
                        <td>nisi</td>
                    </tr>
                    <tr>
                        <td>1,005</td>
                        <td>Nulla</td>
                        <td>quis</td>
                        <td>sem</td>
                        <td>at</td>
                    </tr>
                    <tr>
                        <td>1,006</td>
                        <td>nibh</td>
                        <td>elementum</td>
                        <td>imperdiet</td>
                        <td>Duis</td>
                    </tr>
                    <tr>
                        <td>1,007</td>
                        <td>sagittis</td>
                        <td>ipsum</td>
                        <td>Praesent</td>
                        <td>mauris</td>
                    </tr>
                    <tr>
                        <td>1,008</td>
                        <td>Fusce</td>
                        <td>nec</td>
                        <td>tellus</td>
                        <td>sed</td>
                    </tr>
                    <tr>
                        <td>1,009</td>
                        <td>augue</td>
                        <td>semper</td>
                        <td>porta</td>
                        <td>Mauris</td>
                    </tr>
                    <tr>
                        <td>1,010</td>
                        <td>massa</td>
                        <td>Vestibulum</td>
                        <td>lacinia</td>
                        <td>arcu</td>
                    </tr>
                    <tr>
                        <td>1,011</td>
                        <td>eget</td>
                        <td>nulla</td>
                        <td>Class</td>
                        <td>aptent</td>
                    </tr>
                    <tr>
                        <td>1,012</td>
                        <td>taciti</td>
                        <td>sociosqu</td>
                        <td>ad</td>
                        <td>litora</td>
                    </tr>
                    <tr>
                        <td>1,013</td>
                        <td>torquent</td>
                        <td>per</td>
                        <td>conubia</td>
                        <td>nostra</td>
                    </tr>
                    <tr>
                        <td>1,014</td>
                        <td>per</td>
                        <td>inceptos</td>
                        <td>himenaeos</td>
                        <td>Curabitur</td>
                    </tr>
                    <tr>
                        <td>1,015</td>
                        <td>sodales</td>
                        <td>ligula</td>
                        <td>in</td>
                        <td>libero</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>
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
</body>
</html>
<?php
// Setup of files

DEFINE("DB_FILE", "./mini_stalk.db");

class Logger {
    private $log_file, $fp;

    private function lopen(){
	    if (gethostname() === 'localhost') {
		    $log_file_default = '.mini_logfile.txt';
	    } else {
		    $log_file_default = ini_get('error_log');
	    }
	    $lfile = $this->log_file ? $this->log_file : $log_file_default;
	    $this->fp = fopen($lfile, 'a') or exit("Can't open $lfile!");
    }

    public function lwrite($message, $level){
        if (!is_resource($this->fp)){
            $this->lopen();
        }
	    $script_name = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
	    $time = @date('[d/M/Y:H:i:s]');
	    fwrite($this->fp, "$time ($script_name) [$level] $message" . PHP_EOL);
    }

	public function debug($message){ $this->lopen(); $this->lwrite($message, 'DEBUG'); $this->lclose();}
	public function info($message){ $this->lopen(); $this->lwrite($message, 'INFO');  $this->lclose();}
	public function warn($message){ $this->lopen(); $this->lwrite($message, 'WARN');  $this->lclose();}
	public function error($message){ $this->lopen(); $this->lwrite($message, 'ERROR');  $this->lclose();}
	public function fatal($message){ $this->lopen(); $this->lwrite($message, 'FATAL');  $this->lclose();}

    public function lclose(){
        fclose($this->fp);
    }
}

class Utils {

    public static function exists($filename){
        if (file_exists($filename)) {
	        return true;
        } else {
            return false;
        }
    }

    public static function generateRandomString($length = 64) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
		    $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
    }

    public static function config_template($secret_key){
        $template = "<?php
			 return [
			    'secret_key' => '$secret_key',
			 ];
			?>";
        return $template;
    }

    public static function config_write($config_file, $template){
        file_put_contents($config_file, $template, FILE_APPEND | LOCK_EX);
    }

    public static function config_read($config_file){
        $config = include_once($config_file);
        return $config;
    }

    public static function config_update($config_file, $template){
        $log = new Logger();
        if ($this->exists($config_file)) {
	        file_put_contents( $config_file, template, FILE_APPEND | LOCK_EX );
        } else {
            $log->error("Failed to update config file");
        }
    }

}

class Connect extends SQLite3 {
	function __construct(){
		$this->open(DB_FILE);
	}
}

class DB extends SQLite3 {

    private $connection = false;
    private $cursor = false;

    DEFINE("CREATE_CONFIG_TABLE", 'CREATE TABLE "config" (
	  "id" INTEGER CONSTRAINT "pk_config" PRIMARY KEY AUTOINCREMENT,
	  "category" VARCHAR(128) NOT NULL,
	  "name" VARCHAR(128) NOT NULL,
	  "key" VARCHAR(128) NOT NULL,
	  "value" TEXT NOT NULL,
	  "owner" INTEGER,
	  "updated" DATETIME
	);');

    DEFINE("CREATE_USER_TABLE", 'CREATE TABLE "users" (
	  "id" INTEGER CONSTRAINT "pk_users" PRIMARY KEY AUTOINCREMENT,
	  "username" VARCHAR(255) UNIQUE,
	  "password" VARCHAR(255) NOT NULL,
	  "created" DATETIME,
	  "active" BOOLEAN DEFAULT 1
	)');

    DEFINE("INSERT_USER", 'INSERT INTO "users"
      (username, password, created, active)
      VALUES
      (:username, :password, now(), 1);');

    DEFINE("INSERT_CONFIG", 'INSERT INTO "config"
      (category, name, key, value, owner, updated)
      VALUES
      (:category, :name, :key, :value, :owner, now()');

    function __construct(){
        $db = new Connect();
        $log = new Logger();
        if (!Utils::exists(DB_FILE)){
            $c_user_result = $db->exec(CREATE_USER_TABLE);
            $c_config_result = $db->exec(CREATE_CONFIG_TABLE);
            $db->close();
            if (!$c_user_result || !$c_config_result){
	            $log->error($db->lastErrorMsg());
            }
        }
    }

    function add_user($username, $password){
        $db = new Connect();
        $statement = $db->prepare(INSERT_USER);
        $statement->bindValue(':username', $username, SQLITE3_TEXT);
	    $statement->bindValue(':password', $password, SQLITE3_TEXT);
        $statement->execute();
    }

    function add_config($name, $key, $value){
        $db = new Connect();
        $statement = $db->prepare(INSERT_USER);
        $statement->bindValue(':category', $cat, SQLITE3_TEXT);
        $statement->bindValue(':name', $name, SQLITE3_TEXT);
        $statement->bindValue(':key', $key, SQLITE3_TEXT);
        $statement->bindValue(':value', $value, SQLITE3_TEXT);
        $statement->bindValue(':owner', $owner, SQLITE3_TEXT);
        $statement->execute();
    }

    }

?>
