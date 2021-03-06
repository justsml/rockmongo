<?php
/**
 * RockMongo configuration
 *
 * Defining default options and server configuration
 *
 * Copy config-sample.php > config.php and make your changes to the config.php.
 *
 * @package rockmongo
 */
 

$GLOBALS["collection_preview_enabled"] = false; // Enables or disable collection preview (when you click on a collection)
$GLOBALS["collection_pagesize"] = 10; // Controls the collection preview pagesize
 
$MONGO = array();
$MONGO["features"]["log_query"] = "on";//log queries
$MONGO["features"]["theme"] = "default";//theme
$MONGO["features"]["plugins"] = "on";//plugins

$i = 0;

/**
* Configuration of MongoDB servers
* 
* @see more details at http://rockmongo.com/wiki/configuration?lang=en_us
*/
$MONGO["servers"][$i]["mongo_name"] = "Localhost";//mongo server name
//$MONGO["servers"][$i]["mongo_sock"] = "/var/run/mongo.sock";//mongo socket path (instead of host and port)
$MONGO["servers"][$i]["mongo_host"] = "127.0.0.1";//mongo host
$MONGO["servers"][$i]["mongo_port"] = "27017";//mongo port
$MONGO["servers"][$i]["mongo_timeout"] = 0;//mongo connection timeout
//$MONGO["servers"][$i]["mongo_db"] = "MONGO_DATABASE";//default mongo db to connect, works only if mongo_auth=false
//$MONGO["servers"][$i]["mongo_user"] = "MONGO_USERNAME";//mongo authentication user name, works only if mongo_auth=false
//$MONGO["servers"][$i]["mongo_pass"] = "MONGO_PASSWORD";//mongo authentication password, works only if mongo_auth=false
$MONGO["servers"][$i]["mongo_auth"] = false;//enable mongo authentication?

$MONGO["servers"][$i]["control_auth"] = true;//enable control users, works only if mongo_auth=false
$MONGO["servers"][$i]["control_users"]["admin"] = "admin";//one of control users ["USERNAME"]=PASSWORD, works only if mongo_auth=false

$MONGO["servers"][$i]["ui_only_dbs"] = "";//databases to display
$MONGO["servers"][$i]["ui_hide_dbs"] = "";//databases to hide
$MONGO["servers"][$i]["ui_hide_collections"] = "";//collections to hide
$MONGO["servers"][$i]["ui_hide_system_collections"] = false;//whether hide the system collections

//$MONGO["servers"][$i]["docs_nature_order"] = false;//whether show documents by nature order, default is by _id field
//$MONGO["servers"][$i]["docs_render"] = "mixed";//document highlight render, can be "default", "plain" or "mixed"
//$MONGO["servers"][$i]["docs_render_limit"] = 2000; //in "mixed" mode, documents smaller than this size will highlighted, rest in plain.

$i ++;

/**
 * mini configuration for another mongo server
 */
/**
$MONGO["servers"][$i]["mongo_name"] = "Localhost2";
$MONGO["servers"][$i]["mongo_host"] = "127.0.0.1";
$MONGO["servers"][$i]["mongo_port"] = "27017";
$MONGO["servers"][$i]["control_users"]["admin"] = "password";
$i ++;
**/


?>
