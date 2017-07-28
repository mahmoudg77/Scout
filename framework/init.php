<?
namespace Framework;

foreach (glob(dirname(__FILE__)."/models/*.php") as $filename)
{
    $name=explode('/',$filename);
    $name=$name[count($name)-1];
   if($name!='init.php') include_once $filename;
}
foreach (glob(dirname(__FILE__)."/models/*/*.php") as $filename)
{
    $name=explode('/',$filename);
    $name=$name[count($name)-1];
   if($name!='init.php') include_once $filename;
}
// include "models/Context.php";

// include "models/database.php";
// include "models/BLL.php";
// include "models/Functions.php";
// include "models/Models.php";
// include "models/Request.php";

include 'addons/init.php';
include('framework/controller/BaseController.php');

$APP_Controllers=[
        'auth.AccessRight','auth.GroupCategory','auth.Login','auth.UserGroup','auth.UserGroupRel','auth.Users'
    ];
?>
