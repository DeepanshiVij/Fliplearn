<?php  // Moodle configuration file
unset($CFG);
global $CFG;


$domain = "default";
$domain = $_SERVER['HTTP_HOST'];
$items = explode(".",$domain, 3);
$db_name = $items[0];
$school_key = $db_name;
if($db_name === "local")
  $db_name = "moodle";
else
  $db_name = "flip_$db_name";
$data_root = "C:\\var\\moodle\\m3.10\\$db_name\\moodledata";
//echo "$data_root";
if (!is_dir($data_root)) {
  //Create our directory if it does not exist
  mkdir("C:\\var\\moodle\\m3.10\\$db_name");
  mkdir($data_root);
}



$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '';
$CFG->dbname    = $db_name; // 'moodle';
$CFG->dbuser    = '';
$CFG->dbpass    = '';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   =  "http://$domain"; // 'http://local.ajayspaces.in';
$CFG->dataroot  = $data_root; //'C:\\var\\moodle\\local\\moodledata';
$CFG->admin     = 'admin';


    $CFG->session_handler_class = '\core\session\redis';
    $CFG->session_redis_host = '';
    $CFG->session_redis_port = 6379;  // Optional.
    $CFG->session_redis_database = 2;  // Optional, default is db 0.
    $CFG->session_redis_prefix = "local_".$school_key."_com_"; // Optional, default is don't set one.
    $CFG->session_redis_acquire_lock_timeout = 120;
    $CFG->session_redis_lock_expire = 7200;



$CFG->directorypermissions = 0777;

$CFG->extramemorylimit = '1024M';
//$CFG->altcacheconfigpath = '/fliplearn/projects/moodle/Moodle39Xampp/server/cache/moodle.cache.config.php';

$CFG->directorypermissions = 0777;
//$CFG->session_handler_class = '\core\session\database';
//$CFG->session_database_acquire_lock_timeout = 120;
$CFG->GURU_ANNOUNCEMENT     = 'GURU_ANNOUNCEMENT';
$CFG->CONTEXT_LEVEL     = 50;
$CFG->SEND_NOTIFICATION     = false;
$CFG->COMMUNICATION_API_URL = '';
$CFG->AVG_RATING = 3;
$CFG->MAX_USER = 5;


    define('ENABLE_VIMEO_PLAYER', true);
    define('UNSUBSCRIBE_MSG', 'You are not authorized to view this content. Please purchase license to view this content.');
    define('API_FAIL_MSG', 'Content cannot be played right now. Please try again later.');
    define('USER_MAPPING_MISSING_MSG', 'User UUID Mapping not found.');
    define('JWPLAYER_KEY', '');
    header('Access-Control-Allow-Origin: *');
    header('X-Frame-Options: *');
    define('C_NAME',["WS"=>"Work Sheet","WL"=>"Web Links", "WKS"=>"Printable Worksheet", "VDOEN"=>"Animation", "TS"=>"Topic Synopsis", "TI"=>"Teaching Idea", "SP"=>"Sample Papers", "RAP"=>"Real Life Application", "PYP"=>"Past Year Papers", "PA"=>"Practice Assignment", "OTWSR"=>"Animation", "OTWS"=>"Animation", "OTWG"=>"Animation", "OTNS1"=>"Animation", "NTWG"=>"Animation", "ILNEW"=>"Animation", "ILGUJ"=>"Animation", "ILAS3"=>"Animation", "HA"=>"Home Assignment", "H5P"=>"Interactive Worksheet", "DM"=>"Diagram Maker", "CM"=>"Mind Maps", "BQ"=>"Board Questions", "AFL"=>"Assessment For Learning", "IL-TOS-2D"=>"Animation", "IL-FS-2D"=>"Animation", "CR"=>"Community Resource", "3d"=>"3D Animation", "NCERT"=>"NCERT E-book", "MPE"=>"Practice Exercise", "PHET"=>"HTML 5 Simulations"]);
    $CFG->domainList = array('guru.fliplearn.com');

    $CFG->liveclass_path = '/var/www/s3_liveclass/';
    $CFG->wowza_key = '';
    $CFG->wowza_token_end_days = 365;
    $CFG->wowza_cdn_url = '';
    $CFG->path_to_media_file = '';
    $CFG->liveclass_bucket = '';
    $CFG->amazon_sqs_url = '';
    $CFG->amazon_key = "";
    $CFG->amazon_secret = "";
    $CFG->amazon_region = "";

    $CFG->video_bl = '';

    $CFG->amazon_vmcdoc = "";
    $CFG->amazon_sqs_key = "";
    $CFG->amazon_sqs_secret = "";
    $CFG->amazon_vmcdoc_bucket = '';

    $CFG->preventfilelocking = true;

    $CFG->GoogleClientId = '';
    $CFG->GoogleClientSecret = '';
    // ADDED AT 12 NOV 2020 START
    $CFG->quiz_sqs_to_mongo = "";
    $CFG->quiz_mongo_to_process = "";
    $CFG->school_key = $school_key;
    // ADDED AT 12 NOV 2020 END

    //ADDED AT 13 NOV 2020
    $CFG->MicrosoftClientId = '';
    $CFG->MicrosoftClientSecret = '';
    $CFG->MicrosoftTenantId = '';
    //ADDED AT 13 NOV 2020
    
    // ADDED AT 18 NOV 2020
    $CFG->wstoken = '';
    $CFG->password_change_email = [];
    // ADDED AT 18 NOV 2020
    
    //ADDED AT 20 NOV
    $CFG->mongodbhost = '';
    $CFG->mongodbport = '';
    $CFG->mongodbcollection = "";
    //ADDED AT 20 NOV
    $CFG->enableTeam =false;
//    require_once(__DIR__ . '/lib/setup.php');
    $CFG->svgicons = true;
    define('LOG_URL', '');

    // CONFIG ENDS HERE
    

//$CFG->preventfilelocking = true;

@error_reporting(E_ALL | E_STRICT); // NOT FOR PRODUCTION SERVERS!
//@ini_set('display_errors', '1');    // NOT FOR PRODUCTION SERVERS!
 $CFG->debug = (E_ALL | E_STRICT);   // === DEBUG_DEVELOPER - NOT FOR PRODUCTION SERVERS!
//$CFG->debugdisplay = 1;             // NOT FOR PRODUCTION SERVERS!

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
