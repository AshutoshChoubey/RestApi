<?php 
// for get user information 
//API URL
$url = 'http://localhost/CodeIgniter/index.php/UserRegistration/users';

//API key
$apiKey = 'syflex1234';

//Auth credentials
$username = "admin";
$password = "1234";

//create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

$result = curl_exec($ch);

//close cURL resource
curl_close($ch);

// for insert 

//API URL
$url = 'http://localhost/CodeIgniter/index.php/UserRegistration/users';

//API key
$apiKey = 'syflex1234';

//Auth credentials
$username = "admin";
$password = "1234";

//user information
$userData = array(
    'first_name' => 'ashutosh',
    'last_name' => 'choubey',
    'email' => 'ashuashutosh@example.com',
    'phone' => '9658476170'
);

//create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $userData);

$result = curl_exec($ch);

//close cURL resource
curl_close($ch);


// for update
//API URL
$url = 'http://localhost/CodeIgniter/index.php/UserRegistration/users';

//API key
$apiKey = 'syflex1234';

//Auth credentials
$username = "admin";
$password = "1234";

//user information
$userData = array(
    'id' => 2,
    'first_name' => 'ashutosh',
    'last_name' => 'choubey',
    'email' => 'ashuashutosh@example.com',
    'phone' => '9658476170'
);

//create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-API-KEY: '.$apiKey, 'Content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($userData));

$result = curl_exec($ch);

//for delete

//close cURL resource
curl_close($ch);

//API URL
$url = 'http://localhost/CodeIgniter/index.php/UserRegistration/users/1';

//API key
$apiKey = 'syflex1234';

//Auth credentials
$username = "admin";
$password = "1234";

//create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

$result = curl_exec($ch);

//close cURL resource
curl_close($ch);


// for Login 

//API URL
$url = 'http://localhost/CodeIgniter/index.php/UserRegistration/login';

//API key
$apiKey = 'syflex1234';

//Auth credentials
$username = "admin";
$password = "1234";

//user information
$userData = array(
    'email' => 'ashutosh',
    'password' => 'choubey',
);

//create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $userData);

$result = curl_exec($ch);

//close cURL resource
curl_close($ch);





//Indivisual User Detail

// for get user information 
//API URL
$url = 'http://localhost/CodeIgniter/index.php/IndivisualDetail/indivisualDetail';

//API key
$apiKey = 'syflex1234';

//Auth credentials
$username = "admin";
$password = "1234";

//create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

$result = curl_exec($ch);

//close cURL resource
curl_close($ch);

// for insert 

//API URL
$url = 'http://localhost/CodeIgniter/index.php/IndivisualDetail/indivisualDetail';

//API key
$apiKey = 'syflex1234';

//Auth credentials
$username = "admin";
$password = "1234";

//user information
$userData = array(
    'user_id' => 'user_id',
    'group_id' => 'group_id',
    'total_paid' => '200',
    'remaining_paid' => '100',
    'extra_paid' => '100'
);

//create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $userData);

$result = curl_exec($ch);

//close cURL resource
curl_close($ch);


// for update
//API URL
$url = 'http://localhost/CodeIgniter/index.php/IndivisualDetail/indivisualDetail';

//API key
$apiKey = 'syflex1234';

//Auth credentials
$username = "admin";
$password = "1234";

//user information
$userData = array(
	'id'=>1,
    'user_id' => 'user_id',
    'group_id' => 'group_id',
    'total_paid' => '200',
    'remaining_paid' => '100',
    'extra_paid' => '100'
);

//create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-API-KEY: '.$apiKey, 'Content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($userData));

$result = curl_exec($ch);

//close cURL resource
curl_close($ch);

// for delete

/for delete

//close cURL resource
curl_close($ch);

//API URL
$url = 'http://localhost/CodeIgniter/index.php/IndivisualDetail/indivisualDetail/1';

//API key
$apiKey = 'syflex1234';

//Auth credentials
$username = "admin";
$password = "1234";

//create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

$result = curl_exec($ch);

//close cURL resource
curl_close($ch);



//************ for Group ************************
//group Detail

// for get user information 
//API URL
$url = 'http://localhost/CodeIgniter/index.php/GroupDetails/groupDetails';

//API key
$apiKey = 'syflex1234';

//Auth credentials
$username = "admin";
$password = "1234";

//create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

$result = curl_exec($ch);

//close cURL resource
curl_close($ch);

// for insert 

//API URL
$url = 'http://localhost/CodeIgniter/index.php/GroupDetails/groupDetails';

//API key
$apiKey = 'syflex1234';

//Auth credentials
$username = "admin";
$password = "1234";

//user information
$userData = array(
    'group_name' => 'group_name',
    'total_budget' => 'total_budget',
    'group_created_by' => 'group_created_by',
    'total_member' => 'total_member',
    'total_paid' => 'total_paid',
    'gropu_discription'=>'fghfghfghn'
);

//create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $userData);

$result = curl_exec($ch);

//close cURL resource
curl_close($ch);


// for update
//API URL
$url = 'http://localhost/CodeIgniter/index.php/GroupDetails/groupDetails';

//API key
$apiKey = 'syflex1234';

//Auth credentials
$username = "admin";
$password = "1234";

//user information
$userData = array(
	'id'=>1,
    'group_name' => 'group_name',
    'total_budget' => 'total_budget',
    'group_created_by' => 'group_created_by',
    'total_member' => 'total_member',
    'total_paid' => 'total_paid',
    'gropu_discription'=>'fghfghfghn'
);

//create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-API-KEY: '.$apiKey, 'Content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($userData));

$result = curl_exec($ch);

//close cURL resource
curl_close($ch);

// for delete

/for delete

//close cURL resource
curl_close($ch);

//API URL
$url = 'http://localhost/CodeIgniter/index.php/GroupDetails/groupDetails/1';

//API key
$apiKey = 'syflex1234';

//Auth credentials
$username = "admin";
$password = "1234";

//create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

$result = curl_exec($ch);

//close cURL resource
curl_close($ch);

//************ for Group ************************


