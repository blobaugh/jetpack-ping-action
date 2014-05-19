= Jetpack Monitor Ping =
This is a proof of concept plugin written from the conversation stemming from https://github.com/Automattic/jetpack/issues/560 on how to hook into the Jetpack Monitor Ping to fire off custom actions.

== Installation ==
* Drop this plugin into your WordPress plugins folder and activate Jetpack Ping Action
* Alternatively you can drop just the php file into the mu-plugins folder to have it run transperantly

== Usage ==
Hook into the `jetpack_monitor_ping` action and do what you want!

=== Example of sending an email ===
```
add_action( 'jetpack_monitor_ping', 'email_the_ping' );

function email_the_ping() {
	mail( 'your@email.com', 'Recieved ping', 'I got a ping from the monitor' );
}
```
