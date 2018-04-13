<?php
require "vendor/autoload.php";
use Intercom\IntercomClient;

$client = new IntercomClient('dG9rOjRiYzBiYjM0X2E3YmZfNDQwMV9hMmYxXzExMmFkYzZkNGM3MjoxOjA=', null);
?>
<?php
$events = $client->events->getEvents(["user_id" => "55566"]);
echo '<pre>';
print_r($events);
foreach ($events->events as $event) {
    print "id:".$event->id." name:".$event->event_name."\n";
}?>