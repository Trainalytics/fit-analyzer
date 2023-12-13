<?php

// VERSION: 21.126
// Automatically extracted from FIT SDK https://developer.garmin.com/fit/download/
// Extracted from CSV versions of the Profile Message tab in Profile.xlsx
// add private in front of $data_mesg_info when updating FITFile.php


$data_mesg_info = [
	0 => ['mesg_name' => 'file_id', 'field_defns' => [
		0 => ['field_name' => 'type', 'field_type' => 'file', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'manufacturer', 'field_type' => 'manufacturer', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => [
			'field_name' => 'product', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
			0 => ['field_name' => 'favero_product', 'field_type' => 'favero_product', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'favero_electronics', 'ref_field_name' => 'manufacturer'],
			1 => ['field_name' => 'garmin_product', 'field_type' => 'garmin_product', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'garmin,dynastream,dynastream_oem,tacx', 'ref_field_name' => 'manufacturer,manufacturer,manufacturer,manufacturer'],
		],
		3 => ['field_name' => 'serial_number', 'field_type' => 'uint32z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'time_created', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Only set for files that are can be created/erased. (e.g. 1)
		5 => ['field_name' => 'number', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Only set for files that are not created/erased. (e.g. 1)
		8 => ['field_name' => 'product_name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Optional free form string to indicate the devices name or model (e.g. 20)
	]],
	49 => ['mesg_name' => 'file_creator', 'field_defns' => [
		0 => ['field_name' => 'software_version', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'hardware_version', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	162 => ['mesg_name' => 'timestamp_correlation', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Whole second part of UTC timestamp at the time the system timestamp was recorded. (e.g. )
		0 => ['field_name' => 'fractional_timestamp', 'field_type' => 'uint16', 'scale' => 32768, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Fractional part of the UTC timestamp at the time the system timestamp was recorded. (e.g. )
		1 => ['field_name' => 'system_timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Whole second part of the system timestamp (e.g. )
		2 => ['field_name' => 'fractional_system_timestamp', 'field_type' => 'uint16', 'scale' => 32768, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Fractional part of the system timestamp (e.g. )
		3 => ['field_name' => 'local_timestamp', 'field_type' => 'local_date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // timestamp epoch expressed in local time used to convert timestamps to local time (e.g. )
		4 => ['field_name' => 'timestamp_ms', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Millisecond part of the UTC timestamp at the time the system timestamp was recorded. (e.g. )
		5 => ['field_name' => 'system_timestamp_ms', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Millisecond part of the system timestamp (e.g. )
	]],
	35 => ['mesg_name' => 'software', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'version', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'part_number', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	106 => [
		'mesg_name' => 'slave_device', 'field_defns' => [
			0 => ['field_name' => 'manufacturer', 'field_type' => 'manufacturer', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			1 => [
				'field_name' => 'product', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
				0 => ['field_name' => 'favero_product', 'field_type' => 'favero_product', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'favero_electronics', 'ref_field_name' => 'manufacturer'],
				1 => ['field_name' => 'garmin_product', 'field_type' => 'garmin_product', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'garmin,dynastream,dynastream_oem,tacx', 'ref_field_name' => 'manufacturer,manufacturer,manufacturer,manufacturer'],
			],
		],
		'capabilities' => [
			0 => ['field_name' => 'languages', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Use language_bits_x types where x is index of array. (e.g. 4)
			1 => ['field_name' => 'sports', 'field_type' => 'sport_bits_0', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Use sport_bits_x types where x is index of array. (e.g. 1)
			21 => ['field_name' => 'workouts_supported', 'field_type' => 'workout_capabilities', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			23 => ['field_name' => 'connectivity_supported', 'field_type' => 'connectivity_capabilities', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		]
	],
	37 => ['mesg_name' => 'file_capabilities', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'type', 'field_type' => 'file', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'flags', 'field_type' => 'file_flags', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'directory', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'max_count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'max_size', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'bytes', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	38 => [
		'mesg_name' => 'mesg_capabilities', 'field_defns' => [
			254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			0 => ['field_name' => 'file', 'field_type' => 'file', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			1 => ['field_name' => 'mesg_num', 'field_type' => 'mesg_num', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			2 => ['field_name' => 'count_type', 'field_type' => 'mesg_count', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			3 => [
				'field_name' => 'count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
				0 => ['field_name' => 'num_per_file', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'num_per_file', 'ref_field_name' => 'count_type'],
				1 => ['field_name' => 'max_per_file', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'max_per_file', 'ref_field_name' => 'count_type'],
				2 => ['field_name' => 'max_per_file_type', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'max_per_file_type', 'ref_field_name' => 'count_type'],
			],
		],
		'field_capabilities' => [
			254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			0 => ['field_name' => 'file', 'field_type' => 'file', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			1 => ['field_name' => 'mesg_num', 'field_type' => 'mesg_num', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			2 => ['field_name' => 'field_num', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			3 => ['field_name' => 'count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		]
	],
	2 => ['mesg_name' => 'device_settings', 'field_defns' => [
		0 => ['field_name' => 'active_time_zone', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Index into time zone arrays. (e.g. 1)
		1 => ['field_name' => 'utc_offset', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Offset from system time. Required to convert timestamp from system time to UTC. (e.g. 1)
		2 => ['field_name' => 'time_offset', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Offset from system time. (e.g. 2)
		4 => ['field_name' => 'time_mode', 'field_type' => 'time_mode', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Display mode for the time (e.g. 2)
		5 => ['field_name' => 'time_zone_offset', 'field_type' => 'sint8', 'scale' => 4, 'offset' => 0, 'units' => 'hr', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // timezone offset in 1/4 hour increments (e.g. 2)
		12 => ['field_name' => 'backlight_mode', 'field_type' => 'backlight_mode', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Mode for backlight (e.g. 1)
		36 => ['field_name' => 'activity_tracker_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Enabled state of the activity tracker functionality (e.g. 1)
		39 => ['field_name' => 'clock_time', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // UTC timestamp used to set the devices clock and date (e.g. 1)
		40 => ['field_name' => 'pages_enabled', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Bitfield to configure enabled screens for each supported loop (e.g. 1)
		46 => ['field_name' => 'move_alert_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Enabled state of the move alert (e.g. 1)
		47 => ['field_name' => 'date_mode', 'field_type' => 'date_mode', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Display mode for the date (e.g. 1)
		55 => ['field_name' => 'display_orientation', 'field_type' => 'display_orientation', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		56 => ['field_name' => 'mounting_side', 'field_type' => 'side', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		57 => ['field_name' => 'default_page', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Bitfield to indicate one page as default for each supported loop (e.g. 1)
		58 => ['field_name' => 'autosync_min_steps', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'steps', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Minimum steps before an autosync can occur (e.g. 1)
		59 => ['field_name' => 'autosync_min_time', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'minutes', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Minimum minutes before an autosync can occur (e.g. 1)
		80 => ['field_name' => 'lactate_threshold_autodetect_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Enable auto-detect setting for the lactate threshold feature. (e.g. )
		86 => ['field_name' => 'ble_auto_upload_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Automatically upload using BLE (e.g. )
		89 => ['field_name' => 'auto_sync_frequency', 'field_type' => 'auto_sync_frequency', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Helps to conserve battery by changing modes (e.g. )
		90 => ['field_name' => 'auto_activity_detect', 'field_type' => 'auto_activity_detect', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Allows setting specific activities auto-activity detect enabled/disabled settings (e.g. )
		94 => ['field_name' => 'number_of_screens', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Number of screens configured to display (e.g. )
		95 => ['field_name' => 'smart_notification_display_orientation', 'field_type' => 'display_orientation', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Smart Notification display orientation (e.g. )
		134 => ['field_name' => 'tap_interface', 'field_type' => 'switch', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		174 => ['field_name' => 'tap_sensitivity', 'field_type' => 'tap_sensitivity', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Used to hold the tap threshold setting (e.g. 1)
	]],
	3 => ['mesg_name' => 'user_profile', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'friendly_name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'gender', 'field_type' => 'gender', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'age', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'years', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'height', 'field_type' => 'uint8', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'weight', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => 'kg', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'language', 'field_type' => 'language', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'elev_setting', 'field_type' => 'display_measure', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'weight_setting', 'field_type' => 'display_measure', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		8 => ['field_name' => 'resting_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		9 => ['field_name' => 'default_max_running_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		10 => ['field_name' => 'default_max_biking_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		11 => ['field_name' => 'default_max_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		12 => ['field_name' => 'hr_setting', 'field_type' => 'display_heart', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		13 => ['field_name' => 'speed_setting', 'field_type' => 'display_measure', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		14 => ['field_name' => 'dist_setting', 'field_type' => 'display_measure', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		16 => ['field_name' => 'power_setting', 'field_type' => 'display_power', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		17 => ['field_name' => 'activity_class', 'field_type' => 'activity_class', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		18 => ['field_name' => 'position_setting', 'field_type' => 'display_position', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		21 => ['field_name' => 'temperature_setting', 'field_type' => 'display_measure', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		22 => ['field_name' => 'local_id', 'field_type' => 'user_local_id', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		23 => ['field_name' => 'global_id', 'field_type' => 'byte', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		28 => ['field_name' => 'wake_time', 'field_type' => 'localtime_into_day', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Typical wake time (e.g. )
		29 => ['field_name' => 'sleep_time', 'field_type' => 'localtime_into_day', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Typical bed time (e.g. )
		30 => ['field_name' => 'height_setting', 'field_type' => 'display_measure', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		31 => ['field_name' => 'user_running_step_length', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // User defined running step length set to 0 for auto length (e.g. 1)
		32 => ['field_name' => 'user_walking_step_length', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // User defined walking step length set to 0 for auto length (e.g. 1)
		47 => ['field_name' => 'depth_setting', 'field_type' => 'display_measure', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		49 => ['field_name' => 'dive_count', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	4 => ['mesg_name' => 'hrm_profile', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'hrm_ant_id', 'field_type' => 'uint16z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'log_hrv', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'hrm_ant_id_trans_type', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	5 => ['mesg_name' => 'sdm_profile', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'sdm_ant_id', 'field_type' => 'uint16z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'sdm_cal_factor', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'odometer', 'field_type' => 'uint32', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'speed_source', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Use footpod for speed source instead of GPS (e.g. 1)
		5 => ['field_name' => 'sdm_ant_id_trans_type', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'odometer_rollover', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Rollover counter that can be used to extend the odometer (e.g. 1)
	]],
	6 => ['mesg_name' => 'bike_profile', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'sport', 'field_type' => 'sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'sub_sport', 'field_type' => 'sub_sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'odometer', 'field_type' => 'uint32', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'bike_spd_ant_id', 'field_type' => 'uint16z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'bike_cad_ant_id', 'field_type' => 'uint16z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'bike_spdcad_ant_id', 'field_type' => 'uint16z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'bike_power_ant_id', 'field_type' => 'uint16z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		8 => ['field_name' => 'custom_wheelsize', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		9 => ['field_name' => 'auto_wheelsize', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		10 => ['field_name' => 'bike_weight', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => 'kg', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		11 => ['field_name' => 'power_cal_factor', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		12 => ['field_name' => 'auto_wheel_cal', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		13 => ['field_name' => 'auto_power_zero', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		14 => ['field_name' => 'id', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		15 => ['field_name' => 'spd_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		16 => ['field_name' => 'cad_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		17 => ['field_name' => 'spdcad_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		18 => ['field_name' => 'power_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		19 => ['field_name' => 'crank_length', 'field_type' => 'uint8', 'scale' => 2, 'offset' => -110, 'units' => 'mm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		20 => ['field_name' => 'enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		21 => ['field_name' => 'bike_spd_ant_id_trans_type', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		22 => ['field_name' => 'bike_cad_ant_id_trans_type', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		23 => ['field_name' => 'bike_spdcad_ant_id_trans_type', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		24 => ['field_name' => 'bike_power_ant_id_trans_type', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		37 => ['field_name' => 'odometer_rollover', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Rollover counter that can be used to extend the odometer (e.g. 1)
		38 => ['field_name' => 'front_gear_num', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Number of front gears (e.g. 1)
		39 => ['field_name' => 'front_gear', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Number of teeth on each gear 0 is innermost (e.g. 1)
		40 => ['field_name' => 'rear_gear_num', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Number of rear gears (e.g. 1)
		41 => ['field_name' => 'rear_gear', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Number of teeth on each gear 0 is innermost (e.g. 1)
		44 => ['field_name' => 'shimano_di2_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	127 => ['mesg_name' => 'connectivity', 'field_defns' => [
		0 => ['field_name' => 'bluetooth_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Use Bluetooth for connectivity features (e.g. 1)
		1 => ['field_name' => 'bluetooth_le_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Use Bluetooth Low Energy for connectivity features (e.g. 1)
		2 => ['field_name' => 'ant_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Use ANT for connectivity features (e.g. 1)
		3 => ['field_name' => 'name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'live_tracking_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'weather_conditions_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'weather_alerts_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'auto_activity_upload_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		8 => ['field_name' => 'course_download_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		9 => ['field_name' => 'workout_download_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		10 => ['field_name' => 'gps_ephemeris_download_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		11 => ['field_name' => 'incident_detection_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		12 => ['field_name' => 'grouptrack_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	159 => [
		'mesg_name' => 'watchface_settings', 'field_defns' => [
			254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			0 => ['field_name' => 'mode', 'field_type' => 'watchface_mode', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			1 => [
				'field_name' => 'layout', 'field_type' => 'byte', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
				0 => ['field_name' => 'digital_layout', 'field_type' => 'digital_watchface_layout', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'digital', 'ref_field_name' => 'mode'],
				1 => ['field_name' => 'analog_layout', 'field_type' => 'analog_watchface_layout', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'analog', 'ref_field_name' => 'mode'],
			],
		],
		'ohr_settings' => [
			253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			0 => ['field_name' => 'enabled', 'field_type' => 'switch', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		]
	],
	216 => ['mesg_name' => 'time_in_zone', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'reference_mesg', 'field_type' => 'mesg_num', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'reference_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'time_in_hr_zone', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'time_in_speed_zone', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'time_in_cadence_zone', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'time_in_power_zone', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'hr_zone_high_boundary', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'speed_zone_high_boundary', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		8 => ['field_name' => 'cadence_zone_high_bondary', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		9 => ['field_name' => 'power_zone_high_boundary', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		10 => ['field_name' => 'hr_calc_type', 'field_type' => 'hr_zone_calc', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		11 => ['field_name' => 'max_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		12 => ['field_name' => 'resting_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		13 => ['field_name' => 'threshold_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		14 => ['field_name' => 'pwr_calc_type', 'field_type' => 'pwr_zone_calc', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		15 => ['field_name' => 'functional_threshold_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	7 => ['mesg_name' => 'zones_target', 'field_defns' => [
		1 => ['field_name' => 'max_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'threshold_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'functional_threshold_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'hr_calc_type', 'field_type' => 'hr_zone_calc', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'pwr_calc_type', 'field_type' => 'pwr_zone_calc', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	12 => ['mesg_name' => 'sport', 'field_defns' => [
		0 => ['field_name' => 'sport', 'field_type' => 'sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'sub_sport', 'field_type' => 'sub_sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	8 => ['mesg_name' => 'hr_zone', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'high_bpm', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	53 => ['mesg_name' => 'speed_zone', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'high_value', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	131 => ['mesg_name' => 'cadence_zone', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'high_value', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	9 => ['mesg_name' => 'power_zone', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'high_value', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	10 => ['mesg_name' => 'met_zone', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'high_bpm', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'calories', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => 'kcal / min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'fat_calories', 'field_type' => 'uint8', 'scale' => 10, 'offset' => 0, 'units' => 'kcal / min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	258 => [
		'mesg_name' => 'dive_settings', 'field_defns' => [
			254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			0 => ['field_name' => 'name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			1 => ['field_name' => 'model', 'field_type' => 'tissue_model_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			2 => ['field_name' => 'gf_low', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			3 => ['field_name' => 'gf_high', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			4 => ['field_name' => 'water_type', 'field_type' => 'water_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			5 => ['field_name' => 'water_density', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'kg/m^3', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Fresh water is usually 1000; salt water is usually 1025 (e.g. )
			6 => ['field_name' => 'po2_warn', 'field_type' => 'uint8', 'scale' => 100, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Typically 1.40 (e.g. )
			7 => ['field_name' => 'po2_critical', 'field_type' => 'uint8', 'scale' => 100, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Typically 1.60 (e.g. )
			8 => ['field_name' => 'po2_deco', 'field_type' => 'uint8', 'scale' => 100, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			9 => ['field_name' => 'safety_stop_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			10 => ['field_name' => 'bottom_depth', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			11 => ['field_name' => 'bottom_time', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			12 => ['field_name' => 'apnea_countdown_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			13 => ['field_name' => 'apnea_countdown_time', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			14 => ['field_name' => 'backlight_mode', 'field_type' => 'dive_backlight_mode', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			15 => ['field_name' => 'backlight_brightness', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			16 => ['field_name' => 'backlight_timeout', 'field_type' => 'backlight_timeout', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			17 => ['field_name' => 'repeat_dive_interval', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Time between surfacing and ending the activity (e.g. )
			18 => ['field_name' => 'safety_stop_time', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Time at safety stop (if enabled) (e.g. )
			19 => ['field_name' => 'heart_rate_source_type', 'field_type' => 'source_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			20 => [
				'field_name' => 'heart_rate_source', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
				0 => ['field_name' => 'heart_rate_antplus_device_type', 'field_type' => 'antplus_device_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'antplus', 'ref_field_name' => 'heart_rate_source_type'],
				1 => ['field_name' => 'heart_rate_local_device_type', 'field_type' => 'local_device_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'local', 'ref_field_name' => 'heart_rate_source_type'],
			],
			21 => ['field_name' => 'travel_gas', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Index of travel dive_gas message
			22 => ['field_name' => 'ccr_low_setpoint_switch_mode', 'field_type' => 'ccr_setpoint_switch_mode', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // If low PO2 should be switched to automatically
			23 => ['field_name' => 'ccr_low_setpoint', 'field_type' => 'uint8', 'scale' => 100, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Target PO2 when using low setpoint
			24 => ['field_name' => 'ccr_low_setpoint_depth', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Depth to switch to low setpoint in automatic mode
			25 => ['field_name' => 'ccr_high_setpoint_switch_mode', 'field_type' => 'ccr_setpoint_switch_mode', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // If high PO2 should be switched to automatically
			26 => ['field_name' => 'ccr_high_setpoint', 'field_type' => 'uint8', 'scale' => 100, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Target PO2 when using high setpoint
			27 => ['field_name' => 'ccr_high_setpoint_depth', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Depth to switch to high setpoint in automatic mode
			29 => ['field_name' => 'gas_consumption_display', 'field_type' => 'gas_consumption_rate_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Type of gas consumption rate to display. Some values are only valid if tank volume is known.
			30 => ['field_name' => 'up_key_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Indicates whether the up key is enabled during dives
			35 => ['field_name' => 'dive_sounds', 'field_type' => 'tone', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Sounds and vibration enabled or disabled in-dive
			36 => ['field_name' => 'last_stop_multiple', 'field_type' => 'uint8', 'scale' => 10, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Usually 1.0/1.5/2.0 representing 3/4.5/6m or 10/15/20ft
			37 => ['field_name' => 'no_fly_time_mode', 'field_type' => 'no_fly_time_mode', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Indicates which guidelines to use for no-fly surface interval.
		],
		'dive_alarm' => [
			254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Index of the alarm (e.g. )
			0 => ['field_name' => 'depth', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Depth setting (m) for depth type alarms (e.g. )
			1 => ['field_name' => 'time', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Time setting (s) for time type alarms (e.g. )
			2 => ['field_name' => 'enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Enablement flag (e.g. )
			3 => ['field_name' => 'alarm_type', 'field_type' => 'dive_alarm_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Alarm type setting (e.g. )
			4 => ['field_name' => 'sound', 'field_type' => 'tone', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Tone and Vibe setting for the alarm (e.g. )
			5 => ['field_name' => 'dive_types', 'field_type' => 'sub_sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Dive types the alarm will trigger on (e.g. )
			6 => ['field_name' => 'id', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Alarm ID
			7 => ['field_name' => 'popup_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Show a visible pop-up for this alarm
			8 => ['field_name' => 'trigger_on_descent', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Trigger the alarm on descent
			9 => ['field_name' => 'trigger_on_ascent', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Trigger the alarm on ascent
			10 => ['field_name' => 'repeating', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Repeat alarm each time threshold is crossed?
			11 => ['field_name' => 'speed', 'field_type' => 'sint32', 'scale' => 1000, 'offset' => 0, 'units' => 'mps', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Ascent/descent rate (mps) setting for speed type alarms
		],
		'dive_apnea_alarm' => [
			254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Index of the alarm
			0 => ['field_name' => 'depth', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Depth setting (m) for depth type alarms (e.g. )
			1 => ['field_name' => 'time', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Time setting (s) for time type alarms (e.g. )
			2 => ['field_name' => 'enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Enablement flag (e.g. )
			3 => ['field_name' => 'alarm_type', 'field_type' => 'dive_alarm_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Alarm type setting (e.g. )
			4 => ['field_name' => 'sound', 'field_type' => 'tone', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Tone and Vibe setting for the alarm (e.g. )
			5 => ['field_name' => 'dive_types', 'field_type' => 'sub_sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Dive types the alarm will trigger on (e.g. )
			6 => ['field_name' => 'id', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Alarm ID
			7 => ['field_name' => 'popup_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Show a visible pop-up for this alarm
			8 => ['field_name' => 'trigger_on_descent', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Trigger the alarm on descent
			9 => ['field_name' => 'trigger_on_ascent', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Trigger the alarm on ascent
			10 => ['field_name' => 'repeating', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Repeat alarm each time threshold is crossed?
			11 => ['field_name' => 'speed', 'field_type' => 'sint32', 'scale' => 1000, 'offset' => 0, 'units' => 'mps', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Ascent/descent rate (mps) setting for speed type alarms
		]
	],
	259 => ['mesg_name' => 'dive_gas', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'helium_content', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'oxygen_content', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'status', 'field_type' => 'dive_gas_status', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'mode', 'field_type' => 'dive_gas_mode', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	15 => ['mesg_name' => 'goal', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'sport', 'field_type' => 'sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'sub_sport', 'field_type' => 'sub_sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'start_date', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'end_date', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'type', 'field_type' => 'goal', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'value', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'repeat', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'target_value', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		8 => ['field_name' => 'recurrence', 'field_type' => 'goal_recurrence', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		9 => ['field_name' => 'recurrence_value', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		10 => ['field_name' => 'enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		11 => ['field_name' => 'source', 'field_type' => 'goal_source', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	34 => ['mesg_name' => 'activity', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'total_timer_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Exclude pauses (e.g. 1)
		1 => ['field_name' => 'num_sessions', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'type', 'field_type' => 'activity', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'event', 'field_type' => 'event', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'event_type', 'field_type' => 'event_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'local_timestamp', 'field_type' => 'local_date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // timestamp epoch expressed in local time, used to convert activity timestamps to local time (e.g. 1)
		6 => ['field_name' => 'event_group', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	18 => ['mesg_name' => 'session', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Selected bit is set for the current session. (e.g. 1)
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Sesson end time. (e.g. 1)
		0 => ['field_name' => 'event', 'field_type' => 'event', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // session (e.g. 1)
		1 => ['field_name' => 'event_type', 'field_type' => 'event_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // stop (e.g. 1)
		2 => ['field_name' => 'start_time', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'start_position_lat', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'start_position_long', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'sport', 'field_type' => 'sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'sub_sport', 'field_type' => 'sub_sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'total_elapsed_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Time (includes pauses) (e.g. 1)
		8 => ['field_name' => 'total_timer_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Timer Time (excludes pauses) (e.g. 1)
		9 => ['field_name' => 'total_distance', 'field_type' => 'uint32', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		10 => [
			'field_name' => 'total_cycles', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'cycles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
			0 => ['field_name' => 'total_strides', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'strides', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'running,walking', 'ref_field_name' => 'sport,sport'],
			1 => ['field_name' => 'total_strokes', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'strokes', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'cycling,swimming,rowing,stand_up_paddleboarding', 'ref_field_name' => 'sport,sport,sport,sport'],
		],
		11 => ['field_name' => 'total_calories', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'kcal', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		13 => ['field_name' => 'total_fat_calories', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'kcal', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		14 => ['field_name' => 'avg_speed', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '16', 'accumulate' => '', 'component' => 'enhanced_avg_speed', 'ref_field_type' => '', 'ref_field_name' => ''], // total_distance / total_timer_time (e.g. 1)
		15 => ['field_name' => 'max_speed', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '16', 'accumulate' => '', 'component' => 'enhanced_max_speed', 'ref_field_type' => '', 'ref_field_name' => ''],
		16 => ['field_name' => 'avg_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // average heart rate (excludes pause time) (e.g. 1)
		17 => ['field_name' => 'max_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		18 => [
			'field_name' => 'avg_cadence', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '', // total_cycles / total_timer_time if non_zero_avg_cadence otherwise total_cycles / total_elapsed_time (e.g. 1)
			0 => ['field_name' => 'avg_running_cadence', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'strides/min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'running', 'ref_field_name' => 'sport'],
		],
		19 => [
			'field_name' => 'max_cadence', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
			0 => ['field_name' => 'max_running_cadence', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'strides/min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'running', 'ref_field_name' => 'sport'],
		],
		20 => ['field_name' => 'avg_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // total_power / total_timer_time if non_zero_avg_power otherwise total_power / total_elapsed_time (e.g. 1)
		21 => ['field_name' => 'max_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		22 => ['field_name' => 'total_ascent', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		23 => ['field_name' => 'total_descent', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		24 => ['field_name' => 'total_training_effect', 'field_type' => 'uint8', 'scale' => 10, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		25 => ['field_name' => 'first_lap_index', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		26 => ['field_name' => 'num_laps', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		27 => ['field_name' => 'event_group', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		28 => ['field_name' => 'trigger', 'field_type' => 'session_trigger', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		29 => ['field_name' => 'nec_lat', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // North east corner latitude (e.g. 1)
		30 => ['field_name' => 'nec_long', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // North east corner longitude (e.g. 1)
		31 => ['field_name' => 'swc_lat', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // South west corner latitude (e.g. 1)
		32 => ['field_name' => 'swc_long', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // South west corner longitude (e.g. 1)
		33 => ['field_name' => 'num_lengths', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'lengths', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // # of lengths of swim pool (e.g. 1)
		34 => ['field_name' => 'normalized_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		35 => ['field_name' => 'training_stress_score', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => 'tss', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		36 => ['field_name' => 'intensity_factor', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'if', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		37 => ['field_name' => 'left_right_balance', 'field_type' => 'left_right_balance_100', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		38 => ['field_name' => 'end_position_lat', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		39 => ['field_name' => 'end_position_long', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		41 => ['field_name' => 'avg_stroke_count', 'field_type' => 'uint32', 'scale' => 10, 'offset' => 0, 'units' => 'strokes/lap', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		42 => ['field_name' => 'avg_stroke_distance', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		43 => ['field_name' => 'swim_stroke', 'field_type' => 'swim_stroke', 'scale' => 1, 'offset' => 0, 'units' => 'swim_stroke', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		44 => ['field_name' => 'pool_length', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		45 => ['field_name' => 'threshold_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		46 => ['field_name' => 'pool_length_unit', 'field_type' => 'display_measure', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		47 => ['field_name' => 'num_active_lengths', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'lengths', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // # of active lengths of swim pool (e.g. 1)
		48 => ['field_name' => 'total_work', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'J', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		49 => ['field_name' => 'avg_altitude', 'field_type' => 'uint16', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '16', 'accumulate' => '', 'component' => 'enhanced_avg_altitude', 'ref_field_type' => '', 'ref_field_name' => ''],
		50 => ['field_name' => 'max_altitude', 'field_type' => 'uint16', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '16', 'accumulate' => '', 'component' => 'enhanced_max_altitude', 'ref_field_type' => '', 'ref_field_name' => ''],
		51 => ['field_name' => 'gps_accuracy', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		52 => ['field_name' => 'avg_grade', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		53 => ['field_name' => 'avg_pos_grade', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		54 => ['field_name' => 'avg_neg_grade', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		55 => ['field_name' => 'max_pos_grade', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		56 => ['field_name' => 'max_neg_grade', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		57 => ['field_name' => 'avg_temperature', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		58 => ['field_name' => 'max_temperature', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		59 => ['field_name' => 'total_moving_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		60 => ['field_name' => 'avg_pos_vertical_speed', 'field_type' => 'sint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		61 => ['field_name' => 'avg_neg_vertical_speed', 'field_type' => 'sint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		62 => ['field_name' => 'max_pos_vertical_speed', 'field_type' => 'sint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		63 => ['field_name' => 'max_neg_vertical_speed', 'field_type' => 'sint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		64 => ['field_name' => 'min_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		65 => ['field_name' => 'time_in_hr_zone', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		66 => ['field_name' => 'time_in_speed_zone', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		67 => ['field_name' => 'time_in_cadence_zone', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		68 => ['field_name' => 'time_in_power_zone', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		69 => ['field_name' => 'avg_lap_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		70 => ['field_name' => 'best_lap_index', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		71 => ['field_name' => 'min_altitude', 'field_type' => 'uint16', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '16', 'accumulate' => '', 'component' => 'enhanced_min_altitude', 'ref_field_type' => '', 'ref_field_name' => ''],
		82 => ['field_name' => 'player_score', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		83 => ['field_name' => 'opponent_score', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		84 => ['field_name' => 'opponent_name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		85 => ['field_name' => 'stroke_count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'counts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // stroke_type enum used as the index (e.g. 1)
		86 => ['field_name' => 'zone_count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'counts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // zone number used as the index (e.g. 1)
		87 => ['field_name' => 'max_ball_speed', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		88 => ['field_name' => 'avg_ball_speed', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		89 => ['field_name' => 'avg_vertical_oscillation', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => 'mm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		90 => ['field_name' => 'avg_stance_time_percent', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		91 => ['field_name' => 'avg_stance_time', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		92 => ['field_name' => 'avg_fractional_cadence', 'field_type' => 'uint8', 'scale' => 128, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // fractional part of the avg_cadence (e.g. 1)
		93 => ['field_name' => 'max_fractional_cadence', 'field_type' => 'uint8', 'scale' => 128, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // fractional part of the max_cadence (e.g. 1)
		94 => ['field_name' => 'total_fractional_cycles', 'field_type' => 'uint8', 'scale' => 128, 'offset' => 0, 'units' => 'cycles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // fractional part of the total_cycles (e.g. 1)
		95 => ['field_name' => 'avg_total_hemoglobin_conc', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'g/dL', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Avg saturated and unsaturated hemoglobin (e.g. )
		96 => ['field_name' => 'min_total_hemoglobin_conc', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'g/dL', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Min saturated and unsaturated hemoglobin (e.g. )
		97 => ['field_name' => 'max_total_hemoglobin_conc', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'g/dL', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Max saturated and unsaturated hemoglobin (e.g. )
		98 => ['field_name' => 'avg_saturated_hemoglobin_percent', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Avg percentage of hemoglobin saturated with oxygen (e.g. )
		99 => ['field_name' => 'min_saturated_hemoglobin_percent', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Min percentage of hemoglobin saturated with oxygen (e.g. )
		100 => ['field_name' => 'max_saturated_hemoglobin_percent', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Max percentage of hemoglobin saturated with oxygen (e.g. )
		101 => ['field_name' => 'avg_left_torque_effectiveness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		102 => ['field_name' => 'avg_right_torque_effectiveness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		103 => ['field_name' => 'avg_left_pedal_smoothness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		104 => ['field_name' => 'avg_right_pedal_smoothness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		105 => ['field_name' => 'avg_combined_pedal_smoothness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		110 => ['field_name' => 'sport_profile_name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Sport name from associated sport mesg
		111 => ['field_name' => 'sport_index', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		112 => ['field_name' => 'time_standing', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Total time spend in the standing position (e.g. )
		113 => ['field_name' => 'stand_count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Number of transitions to the standing state (e.g. )
		114 => ['field_name' => 'avg_left_pco', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'mm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average platform center offset Left (e.g. )
		115 => ['field_name' => 'avg_right_pco', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'mm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average platform center offset Right (e.g. )
		116 => ['field_name' => 'avg_left_power_phase', 'field_type' => 'uint8', 'scale' => 0.7111111, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average left power phase angles. Indexes defined by power_phase_type. (e.g. )
		117 => ['field_name' => 'avg_left_power_phase_peak', 'field_type' => 'uint8', 'scale' => 0.7111111, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average left power phase peak angles. Data value indexes defined by power_phase_type. (e.g. )
		118 => ['field_name' => 'avg_right_power_phase', 'field_type' => 'uint8', 'scale' => 0.7111111, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average right power phase angles. Data value indexes defined by power_phase_type. (e.g. )
		119 => ['field_name' => 'avg_right_power_phase_peak', 'field_type' => 'uint8', 'scale' => 0.7111111, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average right power phase peak angles data value indexes defined by power_phase_type. (e.g. )
		120 => ['field_name' => 'avg_power_position', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average power by position. Data value indexes defined by rider_position_type. (e.g. )
		121 => ['field_name' => 'max_power_position', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Maximum power by position. Data value indexes defined by rider_position_type. (e.g. )
		122 => ['field_name' => 'avg_cadence_position', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average cadence by position. Data value indexes defined by rider_position_type. (e.g. )
		123 => ['field_name' => 'max_cadence_position', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Maximum cadence by position. Data value indexes defined by rider_position_type. (e.g. )
		124 => ['field_name' => 'enhanced_avg_speed', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // total_distance / total_timer_time (e.g. 1)
		125 => ['field_name' => 'enhanced_max_speed', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		126 => ['field_name' => 'enhanced_avg_altitude', 'field_type' => 'uint32', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		127 => ['field_name' => 'enhanced_min_altitude', 'field_type' => 'uint32', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		128 => ['field_name' => 'enhanced_max_altitude', 'field_type' => 'uint32', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		129 => ['field_name' => 'avg_lev_motor_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // lev average motor power during session (e.g. )
		130 => ['field_name' => 'max_lev_motor_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // lev maximum motor power during session (e.g. )
		131 => ['field_name' => 'lev_battery_consumption', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // lev battery consumption during session (e.g. )
		132 => ['field_name' => 'avg_vertical_ratio', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		133 => ['field_name' => 'avg_stance_time_balance', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		134 => ['field_name' => 'avg_step_length', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => 'mm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		137 => ['field_name' => 'total_anaerobic_training_effect', 'field_type' => 'uint8', 'scale' => 10, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		139 => ['field_name' => 'avg_vam', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '16', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		140 => ['field_name' => 'avg_depth', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '16', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // 0 if above water
		141 => ['field_name' => 'max_depth', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '16', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // 0 if above water
		142 => ['field_name' => 'surface_interval', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '16', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Time since end of last dive
		143 => ['field_name' => 'start_cns', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '16', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		144 => ['field_name' => 'end_cns', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '16', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		145 => ['field_name' => 'start_n2', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '16', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		146 => ['field_name' => 'end_n2', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '16', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		147 => ['field_name' => 'avg_respiration_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '8', 'accumulate' => '', 'component' => 'enhanced_avg_respiration_rate', 'ref_field_type' => '', 'ref_field_name' => ''],
		148 => ['field_name' => 'max_respiration_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '8', 'accumulate' => '', 'component' => 'enhanced_max_respiration_rate', 'ref_field_type' => '', 'ref_field_name' => ''],
		149 => ['field_name' => 'min_respiration_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '8', 'accumulate' => '', 'component' => 'enhanced_min_respiration_rate', 'ref_field_type' => '', 'ref_field_name' => ''],
		150 => ['field_name' => 'min_temperature', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'C', 'bits' => '8', 'accumulate' => '', 'component' => 'enhanced_min_respiration_rate', 'ref_field_type' => '', 'ref_field_name' => ''],
		155 => ['field_name' => '02_toxicity', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'OTUs', 'bits' => '8', 'accumulate' => '', 'component' => 'enhanced_min_respiration_rate', 'ref_field_type' => '', 'ref_field_name' => ''],
		156 => ['field_name' => 'dive_number', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '8', 'accumulate' => '', 'component' => 'enhanced_min_respiration_rate', 'ref_field_type' => '', 'ref_field_name' => ''],
		168 => ['field_name' => 'training_load_peak', 'field_type' => 'sint32', 'scale' => 65536, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		169 => ['field_name' => 'enhanced_avg_respiration_rate', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'Breaths/min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		170 => ['field_name' => 'enhanced_max_respiration_rate', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'Breaths/min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		180 => ['field_name' => 'enhanced_min_respiration_rate', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		181 => ['field_name' => 'total_grit', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'kGrit', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // The grit score estimates how challenging a route could be for a cyclist in terms of time spent going over sharp turns or large grade slopes. (e.g. )
		182 => ['field_name' => 'total_flow', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'Flow', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // The flow score estimates how long distance wise a cyclist deaccelerates over intervals where deacceleration is unnecessary such as smooth turns or small grade angle intervals. (e.g. )
		183 => ['field_name' => 'jump_count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		186 => ['field_name' => 'avg_grit', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'kGrit', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // The grit score estimates how challenging a route could be for a cyclist in terms of time spent going over sharp turns or large grade slopes. (e.g. )
		187 => ['field_name' => 'avg_flow', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'Flow', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // The flow score estimates how long distance wise a cyclist deaccelerates over intervals where deacceleration is unnecessary such as smooth turns or small grade angle intervals. (e.g. )
		194 => ['field_name' => 'avg_spo2', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average SPO2 for the monitoring session
		195 => ['field_name' => 'avg_stress', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average stress for the monitoring session
		197 => ['field_name' => 'sdrr_hrv', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Standard deviation of R-R interval (SDRR) - Heart rate variability measure most useful for wellness users.
		198 => ['field_name' => 'rmssd_hrv', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Root mean square successive difference (RMSSD) - Heart rate variability measure most useful for athletes
		199 => ['field_name' => 'total_fractional_ascent', 'field_type' => 'uint8', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // fractional part of total_ascent (e.g. )
		200 => ['field_name' => 'total_fractional_descent', 'field_type' => 'uint8', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // fractional part of total_descent (e.g. )
		208 => ['field_name' => 'avg_core_temperature', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		209 => ['field_name' => 'min_core_temperature', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		210 => ['field_name' => 'max_core_temperature', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	19 => ['mesg_name' => 'lap', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Lap end time. (e.g. 1)
		0 => ['field_name' => 'event', 'field_type' => 'event', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'event_type', 'field_type' => 'event_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'start_time', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'start_position_lat', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'start_position_long', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'end_position_lat', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'end_position_long', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'total_elapsed_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Time (includes pauses) (e.g. 1)
		8 => ['field_name' => 'total_timer_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Timer Time (excludes pauses) (e.g. 1)
		9 => ['field_name' => 'total_distance', 'field_type' => 'uint32', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		10 => [
			'field_name' => 'total_cycles', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'cycles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
			0 => ['field_name' => 'total_strides', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'strides', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'running,walking', 'ref_field_name' => 'sport,sport'],
			1 => ['field_name' => 'total_strokes', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'strokes', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'cycling,swimming,rowing,stand_up_paddleboarding', 'ref_field_name' => 'sport,sport,sport,sport'],
		],
		11 => ['field_name' => 'total_calories', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'kcal', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		12 => ['field_name' => 'total_fat_calories', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'kcal', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // If New Leaf (e.g. 1)
		13 => ['field_name' => 'avg_speed', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '16', 'accumulate' => '', 'component' => 'enhanced_avg_speed', 'ref_field_type' => '', 'ref_field_name' => ''],
		14 => ['field_name' => 'max_speed', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '16', 'accumulate' => '', 'component' => 'enhanced_max_speed', 'ref_field_type' => '', 'ref_field_name' => ''],
		15 => ['field_name' => 'avg_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		16 => ['field_name' => 'max_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		17 => [
			'field_name' => 'avg_cadence', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '', // total_cycles / total_timer_time if non_zero_avg_cadence otherwise total_cycles / total_elapsed_time (e.g. 1)
			0 => ['field_name' => 'avg_running_cadence', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'strides/min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'running', 'ref_field_name' => 'sport'],
		],
		18 => [
			'field_name' => 'max_cadence', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
			0 => ['field_name' => 'max_running_cadence', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'strides/min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'running', 'ref_field_name' => 'sport'],
		],
		19 => ['field_name' => 'avg_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // total_power / total_timer_time if non_zero_avg_power otherwise total_power / total_elapsed_time (e.g. 1)
		20 => ['field_name' => 'max_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		21 => ['field_name' => 'total_ascent', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		22 => ['field_name' => 'total_descent', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		23 => ['field_name' => 'intensity', 'field_type' => 'intensity', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		24 => ['field_name' => 'lap_trigger', 'field_type' => 'lap_trigger', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		25 => ['field_name' => 'sport', 'field_type' => 'sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		26 => ['field_name' => 'event_group', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		32 => ['field_name' => 'num_lengths', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'lengths', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // # of lengths of swim pool (e.g. 1)
		33 => ['field_name' => 'normalized_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		34 => ['field_name' => 'left_right_balance', 'field_type' => 'left_right_balance_100', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		35 => ['field_name' => 'first_length_index', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		37 => ['field_name' => 'avg_stroke_distance', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		38 => ['field_name' => 'swim_stroke', 'field_type' => 'swim_stroke', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		39 => ['field_name' => 'sub_sport', 'field_type' => 'sub_sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		40 => ['field_name' => 'num_active_lengths', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'lengths', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // # of active lengths of swim pool (e.g. 1)
		41 => ['field_name' => 'total_work', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'J', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		42 => ['field_name' => 'avg_altitude', 'field_type' => 'uint16', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '16', 'accumulate' => '', 'component' => 'enhanced_avg_altitude', 'ref_field_type' => '', 'ref_field_name' => ''],
		43 => ['field_name' => 'max_altitude', 'field_type' => 'uint16', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '16', 'accumulate' => '', 'component' => 'enhanced_max_altitude', 'ref_field_type' => '', 'ref_field_name' => ''],
		44 => ['field_name' => 'gps_accuracy', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		45 => ['field_name' => 'avg_grade', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		46 => ['field_name' => 'avg_pos_grade', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		47 => ['field_name' => 'avg_neg_grade', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		48 => ['field_name' => 'max_pos_grade', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		49 => ['field_name' => 'max_neg_grade', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		50 => ['field_name' => 'avg_temperature', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		51 => ['field_name' => 'max_temperature', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		52 => ['field_name' => 'total_moving_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		53 => ['field_name' => 'avg_pos_vertical_speed', 'field_type' => 'sint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		54 => ['field_name' => 'avg_neg_vertical_speed', 'field_type' => 'sint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		55 => ['field_name' => 'max_pos_vertical_speed', 'field_type' => 'sint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		56 => ['field_name' => 'max_neg_vertical_speed', 'field_type' => 'sint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		57 => ['field_name' => 'time_in_hr_zone', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		58 => ['field_name' => 'time_in_speed_zone', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		59 => ['field_name' => 'time_in_cadence_zone', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		60 => ['field_name' => 'time_in_power_zone', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		61 => ['field_name' => 'repetition_num', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		62 => ['field_name' => 'min_altitude', 'field_type' => 'uint16', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '16', 'accumulate' => '', 'component' => 'enhanced_min_altitude', 'ref_field_type' => '', 'ref_field_name' => ''],
		63 => ['field_name' => 'min_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		71 => ['field_name' => 'wkt_step_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		74 => ['field_name' => 'opponent_score', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		75 => ['field_name' => 'stroke_count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'counts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // stroke_type enum used as the index (e.g. 1)
		76 => ['field_name' => 'zone_count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'counts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // zone number used as the index (e.g. 1)
		77 => ['field_name' => 'avg_vertical_oscillation', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => 'mm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		78 => ['field_name' => 'avg_stance_time_percent', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		79 => ['field_name' => 'avg_stance_time', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		80 => ['field_name' => 'avg_fractional_cadence', 'field_type' => 'uint8', 'scale' => 128, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // fractional part of the avg_cadence (e.g. 1)
		81 => ['field_name' => 'max_fractional_cadence', 'field_type' => 'uint8', 'scale' => 128, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // fractional part of the max_cadence (e.g. 1)
		82 => ['field_name' => 'total_fractional_cycles', 'field_type' => 'uint8', 'scale' => 128, 'offset' => 0, 'units' => 'cycles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // fractional part of the total_cycles (e.g. 1)
		83 => ['field_name' => 'player_score', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		84 => ['field_name' => 'avg_total_hemoglobin_conc', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'g/dL', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Avg saturated and unsaturated hemoglobin (e.g. 1)
		85 => ['field_name' => 'min_total_hemoglobin_conc', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'g/dL', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Min saturated and unsaturated hemoglobin (e.g. 1)
		86 => ['field_name' => 'max_total_hemoglobin_conc', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'g/dL', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Max saturated and unsaturated hemoglobin (e.g. 1)
		87 => ['field_name' => 'avg_saturated_hemoglobin_percent', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Avg percentage of hemoglobin saturated with oxygen (e.g. 1)
		88 => ['field_name' => 'min_saturated_hemoglobin_percent', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Min percentage of hemoglobin saturated with oxygen (e.g. 1)
		89 => ['field_name' => 'max_saturated_hemoglobin_percent', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Max percentage of hemoglobin saturated with oxygen (e.g. 1)
		91 => ['field_name' => 'avg_left_torque_effectiveness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		92 => ['field_name' => 'avg_right_torque_effectiveness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		93 => ['field_name' => 'avg_left_pedal_smoothness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		94 => ['field_name' => 'avg_right_pedal_smoothness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		95 => ['field_name' => 'avg_combined_pedal_smoothness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		98 => ['field_name' => 'time_standing', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Total time spent in the standing position (e.g. )
		99 => ['field_name' => 'stand_count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Number of transitions to the standing state (e.g. )
		100 => ['field_name' => 'avg_left_pco', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'mm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average left platform center offset (e.g. )
		101 => ['field_name' => 'avg_right_pco', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'mm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average right platform center offset (e.g. )
		102 => ['field_name' => 'avg_left_power_phase', 'field_type' => 'uint8', 'scale' => 0.7111111, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average left power phase angles. Data value indexes defined by power_phase_type. (e.g. )
		103 => ['field_name' => 'avg_left_power_phase_peak', 'field_type' => 'uint8', 'scale' => 0.7111111, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average left power phase peak angles. Data value indexes defined by power_phase_type. (e.g. )
		104 => ['field_name' => 'avg_right_power_phase', 'field_type' => 'uint8', 'scale' => 0.7111111, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average right power phase angles. Data value indexes defined by power_phase_type. (e.g. )
		105 => ['field_name' => 'avg_right_power_phase_peak', 'field_type' => 'uint8', 'scale' => 0.7111111, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average right power phase peak angles. Data value indexes defined by power_phase_type. (e.g. )
		106 => ['field_name' => 'avg_power_position', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average power by position. Data value indexes defined by rider_position_type. (e.g. )
		107 => ['field_name' => 'max_power_position', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Maximum power by position. Data value indexes defined by rider_position_type. (e.g. )
		108 => ['field_name' => 'avg_cadence_position', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average cadence by position. Data value indexes defined by rider_position_type. (e.g. )
		109 => ['field_name' => 'max_cadence_position', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Maximum cadence by position. Data value indexes defined by rider_position_type. (e.g. )
		110 => ['field_name' => 'enhanced_avg_speed', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		111 => ['field_name' => 'enhanced_max_speed', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		112 => ['field_name' => 'enhanced_avg_altitude', 'field_type' => 'uint32', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		113 => ['field_name' => 'enhanced_min_altitude', 'field_type' => 'uint32', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		114 => ['field_name' => 'enhanced_max_altitude', 'field_type' => 'uint32', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		115 => ['field_name' => 'avg_lev_motor_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // lev average motor power during lap (e.g. )
		116 => ['field_name' => 'max_lev_motor_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // lev maximum motor power during lap (e.g. )
		117 => ['field_name' => 'lev_battery_consumption', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // lev battery consumption during lap (e.g. )
		118 => ['field_name' => 'avg_vertical_ratio', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		119 => ['field_name' => 'avg_stance_time_balance', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		120 => ['field_name' => 'avg_step_length', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => 'mm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		121 => ['field_name' => 'avg_vam', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '16', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		122 => ['field_name' => 'avg_depth', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // 0 if above water
		123 => ['field_name' => 'max_depth', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // 0 if above water
		124 => ['field_name' => 'min_temperature', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'c', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		136 => ['field_name' => 'enhanced_avg_respiration_rate', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'Breaths/min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		137 => ['field_name' => 'enhanced_max_respiration_rate', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'Breaths/min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		147 => ['field_name' => 'avg_respiration_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '8', 'accumulate' => '', 'component' => 'enhanced_avg_respiration_rate', 'ref_field_type' => '', 'ref_field_name' => ''],
		148 => ['field_name' => 'max_respiration_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '8', 'accumulate' => '', 'component' => 'enhanced_max_respiration_rate', 'ref_field_type' => '', 'ref_field_name' => ''],
		149 => ['field_name' => 'total_grit', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'kGrit', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // The grit score estimates how challenging a route could be for a cyclist in terms of time spent going over sharp turns or large grade slopes. (e.g. )
		150 => ['field_name' => 'total_flow', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'Flow', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // The flow score estimates how long distance wise a cyclist deaccelerates over intervals where deacceleration is unnecessary such as smooth turns or small grade angle intervals. (e.g. )
		151 => ['field_name' => 'jump_count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		153 => ['field_name' => 'avg_grit', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'kGrit', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // The grit score estimates how challenging a route could be for a cyclist in terms of time spent going over sharp turns or large grade slopes. (e.g. )
		154 => ['field_name' => 'avg_flow', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'Flow', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // The flow score estimates how long distance wise a cyclist deaccelerates over intervals where deacceleration is unnecessary such as smooth turns or small grade angle intervals. (e.g. )
		156 => ['field_name' => 'total_fractional_ascent', 'field_type' => 'uint8', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // fractional part of total_ascent (e.g. )
		157 => ['field_name' => 'total_fractional_descent', 'field_type' => 'uint8', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // fractional part of total_descent (e.g. )
		158 => ['field_name' => 'avg_core_temperature', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		159 => ['field_name' => 'min_core_temperature', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		160 => ['field_name' => 'max_core_temperature', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	101 => ['mesg_name' => 'length', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'event', 'field_type' => 'event', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'event_type', 'field_type' => 'event_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'start_time', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'total_elapsed_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'total_timer_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'total_strokes', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'strokes', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'avg_speed', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'swim_stroke', 'field_type' => 'swim_stroke', 'scale' => 1, 'offset' => 0, 'units' => 'swim_stroke', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		9 => ['field_name' => 'avg_swimming_cadence', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'strokes/min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		10 => ['field_name' => 'event_group', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		11 => ['field_name' => 'total_calories', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'kcal', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		12 => ['field_name' => 'length_type', 'field_type' => 'length_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		18 => ['field_name' => 'player_score', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		19 => ['field_name' => 'opponent_score', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		20 => ['field_name' => 'stroke_count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'counts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // stroke_type enum used as the index (e.g. 1)
		21 => ['field_name' => 'zone_count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'counts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // zone number used as the index (e.g. 1)
		22 => ['field_name' => 'enhanced_avg_respiration_rate', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'Breaths/min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		23 => ['field_name' => 'enhanced_max_respiration_rate', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'Breaths/min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		24 => ['field_name' => 'avg_respiration_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '8', 'accumulate' => '', 'component' => 'enhanced_avg_respiration_rate', 'ref_field_type' => '', 'ref_field_name' => ''],
		25 => ['field_name' => 'max_respiration_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '8', 'accumulate' => '', 'component' => 'enhanced_max_respiration_rate', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	20 => ['mesg_name' => 'record', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'position_lat', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'position_long', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'altitude', 'field_type' => 'uint16', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '16', 'accumulate' => '', 'component' => 'enhanced_altitude', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'cadence', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'distance', 'field_type' => 'uint32', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'speed', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '16', 'accumulate' => '', 'component' => 'enhanced_speed', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		8 => ['field_name' => 'compressed_speed_distance', 'field_type' => 'byte', 'scale' => '100,16', 'offset' => 0, 'units' => 'm/s,m', 'bits' => '12,12', 'accumulate' => '0,1', 'component' => 'speed,distance', 'ref_field_type' => '', 'ref_field_name' => ''],
		9 => ['field_name' => 'grade', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		10 => ['field_name' => 'resistance', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Relative. 0 is none 254 is Max. (e.g. 1)
		11 => ['field_name' => 'time_from_course', 'field_type' => 'sint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		12 => ['field_name' => 'cycle_length', 'field_type' => 'uint8', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		13 => ['field_name' => 'temperature', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		17 => ['field_name' => 'speed_1s', 'field_type' => 'uint8', 'scale' => 16, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Speed at 1s intervals. Timestamp field indicates time of last array element. (e.g. 5)
		18 => ['field_name' => 'cycles', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'cycles', 'bits' => '8', 'accumulate' => '1', 'component' => 'total_cycles', 'ref_field_type' => '', 'ref_field_name' => ''],
		19 => ['field_name' => 'total_cycles', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'cycles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		28 => ['field_name' => 'compressed_accumulated_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '16', 'accumulate' => '1', 'component' => 'accumulated_power', 'ref_field_type' => '', 'ref_field_name' => ''],
		29 => ['field_name' => 'accumulated_power', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		30 => ['field_name' => 'left_right_balance', 'field_type' => 'left_right_balance', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		31 => ['field_name' => 'gps_accuracy', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		32 => ['field_name' => 'vertical_speed', 'field_type' => 'sint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		33 => ['field_name' => 'calories', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'kcal', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		39 => ['field_name' => 'vertical_oscillation', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => 'mm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		40 => ['field_name' => 'stance_time_percent', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		41 => ['field_name' => 'stance_time', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		42 => ['field_name' => 'activity_type', 'field_type' => 'activity_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		43 => ['field_name' => 'left_torque_effectiveness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		44 => ['field_name' => 'right_torque_effectiveness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		45 => ['field_name' => 'left_pedal_smoothness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		46 => ['field_name' => 'right_pedal_smoothness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		47 => ['field_name' => 'combined_pedal_smoothness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		48 => ['field_name' => 'time128', 'field_type' => 'uint8', 'scale' => 128, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		49 => ['field_name' => 'stroke_type', 'field_type' => 'stroke_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		50 => ['field_name' => 'zone', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		51 => ['field_name' => 'ball_speed', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		52 => ['field_name' => 'cadence256', 'field_type' => 'uint16', 'scale' => 256, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Log cadence and fractional cadence for backwards compatability (e.g. 1)
		53 => ['field_name' => 'fractional_cadence', 'field_type' => 'uint8', 'scale' => 128, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		54 => ['field_name' => 'total_hemoglobin_conc', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'g/dL', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Total saturated and unsaturated hemoglobin (e.g. 1)
		55 => ['field_name' => 'total_hemoglobin_conc_min', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'g/dL', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Min saturated and unsaturated hemoglobin (e.g. 1)
		56 => ['field_name' => 'total_hemoglobin_conc_max', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'g/dL', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Max saturated and unsaturated hemoglobin (e.g. 1)
		57 => ['field_name' => 'saturated_hemoglobin_percent', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Percentage of hemoglobin saturated with oxygen (e.g. 1)
		58 => ['field_name' => 'saturated_hemoglobin_percent_min', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Min percentage of hemoglobin saturated with oxygen (e.g. 1)
		59 => ['field_name' => 'saturated_hemoglobin_percent_max', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Max percentage of hemoglobin saturated with oxygen (e.g. 1)
		62 => ['field_name' => 'device_index', 'field_type' => 'device_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		67 => ['field_name' => 'left_pco', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'mm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Left platform center offset (e.g. )
		68 => ['field_name' => 'right_pco', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'mm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Right platform center offset (e.g. )
		69 => ['field_name' => 'left_power_phase', 'field_type' => 'uint8', 'scale' => 0.7111111, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Left power phase angles. Data value indexes defined by power_phase_type. (e.g. )
		70 => ['field_name' => 'left_power_phase_peak', 'field_type' => 'uint8', 'scale' => 0.7111111, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Left power phase peak angles. Data value indexes defined by power_phase_type. (e.g. )
		71 => ['field_name' => 'right_power_phase', 'field_type' => 'uint8', 'scale' => 0.7111111, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Right power phase angles. Data value indexes defined by power_phase_type. (e.g. )
		72 => ['field_name' => 'right_power_phase_peak', 'field_type' => 'uint8', 'scale' => 0.7111111, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Right power phase peak angles. Data value indexes defined by power_phase_type. (e.g. )
		73 => ['field_name' => 'enhanced_speed', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		78 => ['field_name' => 'enhanced_altitude', 'field_type' => 'uint32', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		81 => ['field_name' => 'battery_soc', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // lev battery state of charge (e.g. )
		82 => ['field_name' => 'motor_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // lev motor power (e.g. )
		83 => ['field_name' => 'vertical_ratio', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		84 => ['field_name' => 'stance_time_balance', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		85 => ['field_name' => 'step_length', 'field_type' => 'uint16', 'scale' => 10, 'offset' => 0, 'units' => 'mm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		86 => ['field_name' => 'cycle_length16', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Supports larger cycle sizes needed for paddlesports. Max cycle size: 655.35
		91 => ['field_name' => 'absolute_pressure', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'Pa', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Includes atmospheric pressure (e.g. )
		92 => ['field_name' => 'depth', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // 0 if above water (e.g. )
		93 => ['field_name' => 'next_stop_depth', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // 0 if above water (e.g. )
		94 => ['field_name' => 'next_stop_time', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		95 => ['field_name' => 'time_to_surface', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		96 => ['field_name' => 'ndl_time', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		97 => ['field_name' => 'cns_load', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		98 => ['field_name' => 'n2_load', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		99 => ['field_name' => 'respiration_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '8', 'accumulate' => '', 'component' => 'enhanced_respiration_rate', 'ref_field_type' => '', 'ref_field_name' => ''],
		108 => ['field_name' => 'enhanced_respiration_rate', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'Breaths/min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		114 => ['field_name' => 'grit', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // The grit score estimates how challenging a route could be for a cyclist in terms of time spent going over sharp turns or large grade slopes. (e.g. )
		115 => ['field_name' => 'flow', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // The flow score estimates how long distance wise a cyclist deaccelerates over intervals where deacceleration is unnecessary such as smooth turns or small grade angle intervals. (e.g. )
		116 => ['field_name' => 'current_stress', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Current Stress value
		117 => ['field_name' => 'ebike_travel_range', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'km', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		118 => ['field_name' => 'ebike_battery_level', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		119 => ['field_name' => 'ebike_assist_mode', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'depends on sensor', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		120 => ['field_name' => 'ebike_assist_level_percent', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		123 => ['field_name' => 'air_time_remaining', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		124 => ['field_name' => 'pressure_sac', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'bar/min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Pressure-based surface air consumption
		125 => ['field_name' => 'volume_sac', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'L/min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Volumetric surface air consumption
		126 => ['field_name' => 'rmv', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'L/min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Respiratory minute volume
		127 => ['field_name' => 'ascent_rate', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		128 => ['field_name' => 'po2', 'field_type' => 'uint8', 'scale' => 100, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Current partial pressure of oxygen
		139 => ['field_name' => 'core_temperature', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	21 => ['mesg_name' => 'event', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'event', 'field_type' => 'event', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'event_type', 'field_type' => 'event_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'data16', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '16', 'accumulate' => '', 'component' => 'data', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => [
			'field_name' => 'data', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
			0 => ['field_name' => 'timer_trigger', 'field_type' => 'timer_trigger', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'timer', 'ref_field_name' => 'event'],
			1 => ['field_name' => 'course_point_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'course_point', 'ref_field_name' => 'event'],
			2 => ['field_name' => 'battery_level', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'V', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'battery', 'ref_field_name' => 'event'],
			3 => ['field_name' => 'virtual_partner_speed', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'virtual_partner_pace', 'ref_field_name' => 'event'],
			4 => ['field_name' => 'hr_high_alert', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'hr_high_alert', 'ref_field_name' => 'event'],
			5 => ['field_name' => 'hr_low_alert', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'hr_low_alert', 'ref_field_name' => 'event'],
			6 => ['field_name' => 'speed_high_alert', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'speed_high_alert', 'ref_field_name' => 'event'],
			7 => ['field_name' => 'speed_low_alert', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'speed_low_alert', 'ref_field_name' => 'event'],
			8 => ['field_name' => 'cad_high_alert', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'cad_high_alert', 'ref_field_name' => 'event'],
			9 => ['field_name' => 'cad_low_alert', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'cad_low_alert', 'ref_field_name' => 'event'],
			10 => ['field_name' => 'power_high_alert', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'power_high_alert', 'ref_field_name' => 'event'],
			11 => ['field_name' => 'power_low_alert', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'power_low_alert', 'ref_field_name' => 'event'],
			12 => ['field_name' => 'time_duration_alert', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'time_duration_alert', 'ref_field_name' => 'event'],
			13 => ['field_name' => 'distance_duration_alert', 'field_type' => 'uint32', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'distance_duration_alert', 'ref_field_name' => 'event'],
			14 => ['field_name' => 'calorie_duration_alert', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'calories', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'calorie_duration_alert', 'ref_field_name' => 'event'],
			15 => ['field_name' => 'fitness_equipment_state', 'field_type' => 'fitness_equipment_state', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'fitness_equipment', 'ref_field_name' => 'event'],
			16 => ['field_name' => 'sport_point', 'field_type' => 'uint32', 'scale' => '1,1', 'offset' => 0, 'units' => '', 'bits' => '16,16', 'accumulate' => '', 'component' => 'score,opponent_score', 'ref_field_type' => 'sport_point', 'ref_field_name' => 'event'],
			17 => ['field_name' => 'gear_change_data', 'field_type' => 'uint32', 'scale' => '1,1,1,1', 'offset' => 0, 'units' => '', 'bits' => '8,8,8,8', 'accumulate' => '', 'component' => 'rear_gear_num,rear_gear,front_gear_num,front_gear', 'ref_field_type' => 'front_gear_change,rear_gear_change', 'ref_field_name' => 'event,event'],
			18 => ['field_name' => 'rider_position', 'field_type' => 'rider_position_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'rider_position_change', 'ref_field_name' => 'event'], // Indicates the rider position value. (e.g. )
			19 => ['field_name' => 'comm_timeout', 'field_type' => 'comm_timeout_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'comm_timeout', 'ref_field_name' => 'event'],
			20 => ['field_name' => 'dive_alert', 'field_type' => 'dive_alert', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'dive_alert', 'ref_field_name' => 'event'],
			21 => ['field_name' => 'auto_activity_detect_duration', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'auto_activity_detect_duration', 'ref_field_name' => 'event'],
			22 => ['field_name' => 'radar_threat_alert', 'field_type' => 'uint32', 'scale' => '1,1,10,10', 'offset' => 0, 'units' => '', 'bits' => '8,8,8,8', 'accumulate' => '', 'component' => 'radar_threat_level_max,radar_threat_count,radar_threat_avg_approach_speed,radar_threat_max_approach_speed', 'ref_field_type' => 'radar_threat_alert', 'ref_field_name' => 'event'], // The first byte is the radar_threat_level_max, the second byte is the radar_threat_count, third bytes is the average approach speed, and the 4th byte is the max approach speed (e.g. )
		],
		4 => ['field_name' => 'event_group', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'score', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Do not populate directly. Autogenerated by decoder for sport_point subfield components (e.g. 1)
		8 => ['field_name' => 'opponent_score', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Do not populate directly. Autogenerated by decoder for sport_point subfield components (e.g. 1)
		9 => ['field_name' => 'front_gear_num', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Do not populate directly. Autogenerated by decoder for gear_change subfield components. Front gear number. 1 is innermost. (e.g. 1)
		10 => ['field_name' => 'front_gear', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Do not populate directly. Autogenerated by decoder for gear_change subfield components. Number of front teeth. (e.g. 1)
		11 => ['field_name' => 'rear_gear_num', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Do not populate directly. Autogenerated by decoder for gear_change subfield components. Rear gear number. 1 is innermost. (e.g. 1)
		12 => ['field_name' => 'rear_gear', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Do not populate directly. Autogenerated by decoder for gear_change subfield components. Number of rear teeth. (e.g. 1)
		13 => ['field_name' => 'device_index', 'field_type' => 'device_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],

		// TODO : Complete these lines
		14 => ['field_name' => 'activity_type', 'field_type' => 'device_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		15 => ['field_name' => 'start_timestamp', 'field_type' => 'device_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		16 => ['field_name' => 'auto_activity_detect_start_timestamp', 'field_type' => 'device_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],

		21 => ['field_name' => 'radar_threat_level_max', 'field_type' => 'radar_threat_level_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Do not populate directly. Autogenerated by decoder for threat_alert subfield components. (e.g. 1)
		22 => ['field_name' => 'radar_threat_count', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Do not populate directly. Autogenerated by decoder for threat_alert subfield components. (e.g. 1)
		23 => ['field_name' => 'radar_threat_avg_approach_speed', 'field_type' => 'uint8', 'scale' => 10, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Do not populate directly. Autogenerated by decoder for radar_threat_alert subfield components (e.g. )
		24 => ['field_name' => 'radar_threat_max_approach_speed', 'field_type' => 'uint8', 'scale' => 10, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Do not populate directly. Autogenerated by decoder for radar_threat_alert subfield components (e.g. )
	]],
	23 => ['mesg_name' => 'device_info', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'device_index', 'field_type' => 'device_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => [
			'field_name' => 'device_type', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
			0 => ['field_name' => 'ble_device_type', 'field_type' => 'ble_device_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'bluetooth_low_energy', 'ref_field_name' => 'source_type'],
			1 => ['field_name' => 'antplus_device_type', 'field_type' => 'antplus_device_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'antplus', 'ref_field_name' => 'source_type'],
			2 => ['field_name' => 'ant_device_type', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'ant', 'ref_field_name' => 'source_type'],
			3 => ['field_name' => 'local_device_type', 'field_type' => 'local_device_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'local', 'ref_field_name' => 'source_type'],
		],
		2 => ['field_name' => 'manufacturer', 'field_type' => 'manufacturer', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'serial_number', 'field_type' => 'uint32z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => [
			'field_name' => 'product', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
			0 => ['field_name' => 'favero_product', 'field_type' => 'favero_product', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'favero_electronics', 'ref_field_name' => 'manufacturer'],
			1 => ['field_name' => 'garmin_product', 'field_type' => 'garmin_product', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'garmin,dynastream,dynastream_oem,tacx', 'ref_field_name' => 'manufacturer,manufacturer,manufacturer,manufacturer'],
		],
		5 => ['field_name' => 'software_version', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'hardware_version', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'cum_operating_time', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Reset by new battery or charge. (e.g. 1)
		10 => ['field_name' => 'battery_voltage', 'field_type' => 'uint16', 'scale' => 256, 'offset' => 0, 'units' => 'V', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		11 => ['field_name' => 'battery_status', 'field_type' => 'battery_status', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		18 => ['field_name' => 'sensor_position', 'field_type' => 'body_location', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Indicates the location of the sensor (e.g. 1)
		19 => ['field_name' => 'descriptor', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Used to describe the sensor or location (e.g. 1)
		20 => ['field_name' => 'ant_transmission_type', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		21 => ['field_name' => 'ant_device_number', 'field_type' => 'uint16z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		22 => ['field_name' => 'ant_network', 'field_type' => 'ant_network', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		25 => ['field_name' => 'source_type', 'field_type' => 'source_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		27 => ['field_name' => 'product_name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Optional free form string to indicate the devices name or model (e.g. 20)
		32 => ['field_name' => 'battery_level', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	375 => ['mesg_name' => 'device_aux_battery_info', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'device_index', 'field_type' => 'device_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'battery_voltage', 'field_type' => 'uint16', 'scale' => 256, 'offset' => 0, 'units' => 'V', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'battery_status', 'field_type' => 'battery_status', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'battery_identifier', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	72 => ['mesg_name' => 'training_file', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'type', 'field_type' => 'file', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'manufacturer', 'field_type' => 'manufacturer', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => [
			'field_name' => 'product', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
			0 => ['field_name' => 'favero_product', 'field_type' => 'favero_product', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'favero_electronics', 'ref_field_name' => 'manufacturer'],
			1 => ['field_name' => 'garmin_product', 'field_type' => 'garmin_product', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'garmin,dynastream,dynastream_oem,tacx', 'ref_field_name' => 'manufacturer,manufacturer,manufacturer,manufacturer'],
		],
		3 => ['field_name' => 'serial_number', 'field_type' => 'uint32z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'time_created', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	128 => ['mesg_name' => 'weather_conditions', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // time of update for current conditions, else forecast time (e.g. 1)
		0 => ['field_name' => 'weather_report', 'field_type' => 'weather_report', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Current or forecast (e.g. 1)
		1 => ['field_name' => 'temperature', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'condition', 'field_type' => 'weather_status', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Corresponds to GSC Response weatherIcon field (e.g. 1)
		3 => ['field_name' => 'wind_direction', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'wind_speed', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'precipitation_probability', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // range 0-100 (e.g. 1)
		6 => ['field_name' => 'temperature_feels_like', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Heat Index if GCS heatIdx above or equal to 90F or wind chill if GCS windChill below or equal to 32F (e.g. 1)
		7 => ['field_name' => 'relative_humidity', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		8 => ['field_name' => 'location', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // string corresponding to GCS response location string (e.g. 64)
		9 => ['field_name' => 'observed_at_time', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		10 => ['field_name' => 'observed_location_lat', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		11 => ['field_name' => 'observed_location_long', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		12 => ['field_name' => 'day_of_week', 'field_type' => 'day_of_week', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		13 => ['field_name' => 'high_temperature', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		14 => ['field_name' => 'low_temperature', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	129 => ['mesg_name' => 'weather_alert', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'report_id', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Unique identifier from GCS report ID string, length is 12 (e.g. 12)
		1 => ['field_name' => 'issue_time', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Time alert was issued (e.g. 1)
		2 => ['field_name' => 'expire_time', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Time alert expires (e.g. 1)
		3 => ['field_name' => 'severity', 'field_type' => 'weather_severity', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Warning, Watch, Advisory, Statement (e.g. 1)
		4 => ['field_name' => 'type', 'field_type' => 'weather_severe_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Tornado, Severe Thunderstorm, etc. (e.g. 1)
	]],
	160 => ['mesg_name' => 'gps_metadata', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Whole second part of the timestamp. (e.g. )
		0 => ['field_name' => 'timestamp_ms', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Millisecond part of the timestamp. (e.g. )
		1 => ['field_name' => 'position_lat', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'position_long', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'enhanced_altitude', 'field_type' => 'uint32', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'enhanced_speed', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'heading', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'utc_timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Used to correlate UTC to system time if the timestamp of the message is in system time. This UTC time is derived from the GPS data. (e.g. )
		7 => ['field_name' => 'velocity', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // velocity[0] is lon velocity. Velocity[1] is lat velocity. Velocity[2] is altitude velocity. (e.g. )
	]],
	161 => ['mesg_name' => 'camera_event', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Whole second part of the timestamp. (e.g. )
		0 => ['field_name' => 'timestamp_ms', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Millisecond part of the timestamp. (e.g. )
		1 => ['field_name' => 'camera_event_type', 'field_type' => 'camera_event_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'camera_file_uuid', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'camera_orientation', 'field_type' => 'camera_orientation_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	164 => ['mesg_name' => 'gyroscope_data', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Whole second part of the timestamp (e.g. )
		0 => ['field_name' => 'timestamp_ms', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Millisecond part of the timestamp. (e.g. )
		1 => ['field_name' => 'sample_time_offset', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Each time in the array describes the time at which the gyro sample with the corrosponding index was taken. Limited to 30 samples in each message. The samples may span across seconds. Array size must match the number of samples in gyro_x and gyro_y and gyro_z (e.g. )
		2 => ['field_name' => 'gyro_x', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'counts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // These are the raw ADC reading. Maximum number of samples is 30 in each message. The samples may span across seconds. A conversion will need to be done on this data once read. (e.g. )
		3 => ['field_name' => 'gyro_y', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'counts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // These are the raw ADC reading. Maximum number of samples is 30 in each message. The samples may span across seconds. A conversion will need to be done on this data once read. (e.g. )
		4 => ['field_name' => 'gyro_z', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'counts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // These are the raw ADC reading. Maximum number of samples is 30 in each message. The samples may span across seconds. A conversion will need to be done on this data once read. (e.g. )
		5 => ['field_name' => 'calibrated_gyro_x', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'deg/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Calibrated gyro reading (e.g. )
		6 => ['field_name' => 'calibrated_gyro_y', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'deg/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Calibrated gyro reading (e.g. )
		7 => ['field_name' => 'calibrated_gyro_z', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'deg/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Calibrated gyro reading (e.g. )
	]],
	165 => ['mesg_name' => 'accelerometer_data', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Whole second part of the timestamp (e.g. )
		0 => ['field_name' => 'timestamp_ms', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Millisecond part of the timestamp. (e.g. )
		1 => ['field_name' => 'sample_time_offset', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Each time in the array describes the time at which the accelerometer sample with the corrosponding index was taken. Limited to 30 samples in each message. The samples may span across seconds. Array size must match the number of samples in accel_x and accel_y and accel_z (e.g. )
		2 => ['field_name' => 'accel_x', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'counts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // These are the raw ADC reading. Maximum number of samples is 30 in each message. The samples may span across seconds. A conversion will need to be done on this data once read. (e.g. )
		3 => ['field_name' => 'accel_y', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'counts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // These are the raw ADC reading. Maximum number of samples is 30 in each message. The samples may span across seconds. A conversion will need to be done on this data once read. (e.g. )
		4 => ['field_name' => 'accel_z', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'counts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // These are the raw ADC reading. Maximum number of samples is 30 in each message. The samples may span across seconds. A conversion will need to be done on this data once read. (e.g. )
		5 => ['field_name' => 'calibrated_accel_x', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'g', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Calibrated accel reading (e.g. )
		6 => ['field_name' => 'calibrated_accel_y', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'g', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Calibrated accel reading (e.g. )
		7 => ['field_name' => 'calibrated_accel_z', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'g', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Calibrated accel reading (e.g. )
		8 => ['field_name' => 'compressed_calibrated_accel_x', 'field_type' => 'sint16', 'scale' => 1, 'offset' => 0, 'units' => 'mG', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Calibrated accel reading (e.g. )
		9 => ['field_name' => 'compressed_calibrated_accel_y', 'field_type' => 'sint16', 'scale' => 1, 'offset' => 0, 'units' => 'mG', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Calibrated accel reading (e.g. )
		10 => ['field_name' => 'compressed_calibrated_accel_z', 'field_type' => 'sint16', 'scale' => 1, 'offset' => 0, 'units' => 'mG', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Calibrated accel reading (e.g. )
	]],
	208 => ['mesg_name' => 'magnetometer_data', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Whole second part of the timestamp (e.g. )
		0 => ['field_name' => 'timestamp_ms', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Millisecond part of the timestamp. (e.g. )
		1 => ['field_name' => 'sample_time_offset', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Each time in the array describes the time at which the compass sample with the corrosponding index was taken. Limited to 30 samples in each message. The samples may span across seconds. Array size must match the number of samples in cmps_x and cmps_y and cmps_z (e.g. )
		2 => ['field_name' => 'mag_x', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'counts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // These are the raw ADC reading. Maximum number of samples is 30 in each message. The samples may span across seconds. A conversion will need to be done on this data once read. (e.g. )
		3 => ['field_name' => 'mag_y', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'counts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // These are the raw ADC reading. Maximum number of samples is 30 in each message. The samples may span across seconds. A conversion will need to be done on this data once read. (e.g. )
		4 => ['field_name' => 'mag_z', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'counts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // These are the raw ADC reading. Maximum number of samples is 30 in each message. The samples may span across seconds. A conversion will need to be done on this data once read. (e.g. )
		5 => ['field_name' => 'calibrated_mag_x', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'G', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Calibrated Magnetometer reading (e.g. )
		6 => ['field_name' => 'calibrated_mag_y', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'G', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Calibrated Magnetometer reading (e.g. )
		7 => ['field_name' => 'calibrated_mag_z', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'G', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Calibrated Magnetometer reading (e.g. )
	]],
	209 => ['mesg_name' => 'barometer_data', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Whole second part of the timestamp (e.g. )
		0 => ['field_name' => 'timestamp_ms', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Millisecond part of the timestamp. (e.g. )
		1 => ['field_name' => 'sample_time_offset', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Each time in the array describes the time at which the barometer sample with the corrosponding index was taken. The samples may span across seconds. Array size must match the number of samples in baro_cal (e.g. )
		2 => ['field_name' => 'baro_pres', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'Pa', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // These are the raw ADC reading. The samples may span across seconds. A conversion will need to be done on this data once read. (e.g. )
	]],
	167 => ['mesg_name' => 'three_d_sensor_calibration', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Whole second part of the timestamp (e.g. )
		0 => ['field_name' => 'sensor_type', 'field_type' => 'sensor_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Indicates which sensor the calibration is for (e.g. )
		1 => [
			'field_name' => 'calibration_factor', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '', // Calibration factor used to convert from raw ADC value to degrees, g, etc. (e.g. )
			0 => ['field_name' => 'accel_cal_factor', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'g', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'accelerometer', 'ref_field_name' => 'sensor_type'], // Accelerometer calibration factor (e.g. )
			1 => ['field_name' => 'gyro_cal_factor', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'deg/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'gyroscope', 'ref_field_name' => 'sensor_type'], // Gyro calibration factor (e.g. )
		],
		2 => ['field_name' => 'calibration_divisor', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'counts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Calibration factor divisor (e.g. )
		3 => ['field_name' => 'level_shift', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Level shift value used to shift the ADC value back into range (e.g. )
		4 => ['field_name' => 'offset_cal', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Internal calibration factors, one for each: xy, yx, zx (e.g. )
		5 => ['field_name' => 'orientation_matrix', 'field_type' => 'sint32', 'scale' => 65535, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // 3 x 3 rotation matrix (row major) (e.g. )
	]],
	210 => ['mesg_name' => 'one_d_sensor_calibration', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Whole second part of the timestamp (e.g. )
		0 => ['field_name' => 'sensor_type', 'field_type' => 'sensor_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Indicates which sensor the calibration is for (e.g. )
		1 => [
			'field_name' => 'calibration_factor', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '', // Calibration factor used to convert from raw ADC value to degrees, g, etc. (e.g. )
			0 => ['field_name' => 'baro_cal_factor', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'Pa', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'barometer', 'ref_field_name' => 'sensor_type'], // Barometer calibration factor (e.g. )
		],
		2 => ['field_name' => 'calibration_divisor', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'counts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Calibration factor divisor (e.g. )
		3 => ['field_name' => 'level_shift', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Level shift value used to shift the ADC value back into range (e.g. )
		4 => ['field_name' => 'offset_cal', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Internal Calibration factor (e.g. )
	]],
	169 => ['mesg_name' => 'video_frame', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Whole second part of the timestamp (e.g. )
		0 => ['field_name' => 'timestamp_ms', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Millisecond part of the timestamp. (e.g. )
		1 => ['field_name' => 'frame_number', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Number of the frame that the timestamp and timestamp_ms correlate to (e.g. )
	]],
	174 => ['mesg_name' => 'obdii_data', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Timestamp message was output (e.g. )
		0 => ['field_name' => 'timestamp_ms', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Fractional part of timestamp, added to timestamp (e.g. )
		1 => ['field_name' => 'time_offset', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Offset of PID reading [i] from start_timestamp+start_timestamp_ms. Readings may span accross seconds. (e.g. )
		2 => ['field_name' => 'pid', 'field_type' => 'byte', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Parameter ID (e.g. )
		3 => ['field_name' => 'raw_data', 'field_type' => 'byte', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Raw parameter data (e.g. )
		4 => ['field_name' => 'pid_data_size', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Optional, data size of PID[i]. If not specified refer to SAE J1979. (e.g. )
		5 => ['field_name' => 'system_time', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // System time associated with sample expressed in ms, can be used instead of time_offset. There will be a system_time value for each raw_data element. For multibyte pids the system_time is repeated. (e.g. )
		6 => ['field_name' => 'start_timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Timestamp of first sample recorded in the message. Used with time_offset to generate time of each sample (e.g. )
		7 => ['field_name' => 'start_timestamp_ms', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Fractional part of start_timestamp (e.g. )
	]],
	177 => ['mesg_name' => 'nmea_sentence', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Timestamp message was output (e.g. 1)
		0 => ['field_name' => 'timestamp_ms', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Fractional part of timestamp, added to timestamp (e.g. 1)
		1 => ['field_name' => 'sentence', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // NMEA sentence (e.g. 83)
	]],
	178 => ['mesg_name' => 'aviation_attitude', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Timestamp message was output (e.g. 1)
		0 => ['field_name' => 'timestamp_ms', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Fractional part of timestamp, added to timestamp (e.g. 1)
		1 => ['field_name' => 'system_time', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // System time associated with sample expressed in ms. (e.g. 1)
		2 => ['field_name' => 'pitch', 'field_type' => 'sint16', 'scale' => 10430.38, 'offset' => 0, 'units' => 'radians', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Range -PI/2 to +PI/2 (e.g. 1)
		3 => ['field_name' => 'roll', 'field_type' => 'sint16', 'scale' => 10430.38, 'offset' => 0, 'units' => 'radians', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Range -PI to +PI (e.g. 1)
		4 => ['field_name' => 'accel_lateral', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => 'm/s^2', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Range -78.4 to +78.4 (-8 Gs to 8 Gs) (e.g. 1)
		5 => ['field_name' => 'accel_normal', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => 'm/s^2', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Range -78.4 to +78.4 (-8 Gs to 8 Gs) (e.g. 1)
		6 => ['field_name' => 'turn_rate', 'field_type' => 'sint16', 'scale' => 1024, 'offset' => 0, 'units' => 'radians/second', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Range -8.727 to +8.727 (-500 degs/sec to +500 degs/sec) (e.g. 1)
		7 => ['field_name' => 'stage', 'field_type' => 'attitude_stage', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		8 => ['field_name' => 'attitude_stage_complete', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // The percent complete of the current attitude stage. Set to 0 for attitude stages 0, 1 and 2 and to 100 for attitude stage 3 by AHRS modules that do not support it. Range - 100 (e.g. 1)
		9 => ['field_name' => 'track', 'field_type' => 'uint16', 'scale' => 10430.38, 'offset' => 0, 'units' => 'radians', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Track Angle/Heading Range 0 - 2pi (e.g. 1)
		10 => ['field_name' => 'validity', 'field_type' => 'attitude_validity', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	184 => ['mesg_name' => 'video', 'field_defns' => [
		0 => ['field_name' => 'url', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'hosting_provider', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'duration', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Playback time of video (e.g. )
	]],
	185 => ['mesg_name' => 'video_title', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Long titles will be split into multiple parts (e.g. 1)
		0 => ['field_name' => 'message_count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Total number of title parts (e.g. 1)
		1 => ['field_name' => 'text', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	186 => ['mesg_name' => 'video_description', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Long descriptions will be split into multiple parts (e.g. 1)
		0 => ['field_name' => 'message_count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Total number of description parts (e.g. 1)
		1 => ['field_name' => 'text', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	187 => ['mesg_name' => 'video_clip', 'field_defns' => [
		0 => ['field_name' => 'clip_number', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'start_timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'start_timestamp_ms', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'end_timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'end_timestamp_ms', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'clip_start', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Start of clip in video time (e.g. )
		7 => ['field_name' => 'clip_end', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'ms', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // End of clip in video time (e.g. )
	]],
	225 => ['mesg_name' => 'set', 'field_defns' => [
		254 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Timestamp of the set (e.g. )
		0 => ['field_name' => 'duration', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'repetitions', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // # of repitions of the movement (e.g. )
		4 => ['field_name' => 'weight', 'field_type' => 'uint16', 'scale' => 16, 'offset' => 0, 'units' => 'kg', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Amount of weight applied for the set (e.g. )
		5 => ['field_name' => 'set_type', 'field_type' => 'set_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'start_time', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Start time of the set (e.g. )
		7 => ['field_name' => 'category', 'field_type' => 'exercise_category', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		8 => ['field_name' => 'category_subtype', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Based on the associated category, see [category]_exercise_names (e.g. )
		9 => ['field_name' => 'weight_display_unit', 'field_type' => 'fit_base_unit', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		10 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		11 => ['field_name' => 'wkt_step_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	285 => ['mesg_name' => 'jump', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'distance', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'height', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'rotations', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'hang_time', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'score', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // A score for a jump calculated based on hang time, rotations, and distance. (e.g. )
		5 => ['field_name' => 'position_lat', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'position_long', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'speed', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '16', 'accumulate' => '', 'component' => 'enhanced_speed', 'ref_field_type' => '', 'ref_field_name' => ''],
		8 => ['field_name' => 'enhanced_speed', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	312 => ['mesg_name' => 'split', 'field_defns' => [
		0 => ['field_name' => 'split_type', 'field_type' => 'split_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'total_elapsed_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'total_timer_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'total_distance', 'field_type' => 'uint32', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		9 => ['field_name' => 'start_time', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	317 => ['mesg_name' => 'climb_pro', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'position_lat', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'position_long', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'climb_pro_event', 'field_type' => 'climb_pro_event', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'climb_number', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'climb_category', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'current_dist', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	206 => ['mesg_name' => 'field_description', 'field_defns' => [
		0 => ['field_name' => 'developer_data_index', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'field_definition_number', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'fit_base_type_id', 'field_type' => 'fit_base_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'field_name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'array', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'components', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'scale', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'offset', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		8 => ['field_name' => 'units', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		9 => ['field_name' => 'bits', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		10 => ['field_name' => 'accumulate', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		13 => ['field_name' => 'fit_base_unit_id', 'field_type' => 'fit_base_unit', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		14 => ['field_name' => 'native_mesg_num', 'field_type' => 'mesg_num', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		15 => ['field_name' => 'native_field_num', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	207 => ['mesg_name' => 'developer_data_id', 'field_defns' => [
		0 => ['field_name' => 'developer_id', 'field_type' => 'byte', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'application_id', 'field_type' => 'byte', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'manufacturer_id', 'field_type' => 'manufacturer', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'developer_data_index', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'application_version', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	31 => ['mesg_name' => 'course', 'field_defns' => [
		4 => ['field_name' => 'sport', 'field_type' => 'sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'capabilities', 'field_type' => 'course_capabilities', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'sub_sport', 'field_type' => 'sub_sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	32 => ['mesg_name' => 'course_point', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'position_lat', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'position_long', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'distance', 'field_type' => 'uint32', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'type', 'field_type' => 'course_point', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		8 => ['field_name' => 'favorite', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	148 => ['mesg_name' => 'segment_id', 'field_defns' => [
		0 => ['field_name' => 'name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Friendly name assigned to segment (e.g. 1)
		1 => ['field_name' => 'uuid', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // UUID of the segment (e.g. 1)
		2 => ['field_name' => 'sport', 'field_type' => 'sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Sport associated with the segment (e.g. 1)
		3 => ['field_name' => 'enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Segment enabled for evaluation (e.g. 1)
		4 => ['field_name' => 'user_profile_primary_key', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Primary key of the user that created the segment (e.g. 1)
		5 => ['field_name' => 'device_id', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // ID of the device that created the segment (e.g. 1)
		6 => ['field_name' => 'default_race_leader', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Index for the Leader Board entry selected as the default race participant (e.g. 1)
		7 => ['field_name' => 'delete_status', 'field_type' => 'segment_delete_status', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Indicates if any segments should be deleted (e.g. 1)
		8 => ['field_name' => 'selection_type', 'field_type' => 'segment_selection_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Indicates how the segment was selected to be sent to the device (e.g. 1)
	]],
	149 => ['mesg_name' => 'segment_leaderboard_entry', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Friendly name assigned to leader (e.g. 1)
		1 => ['field_name' => 'type', 'field_type' => 'segment_leaderboard_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Leader classification (e.g. 1)
		2 => ['field_name' => 'group_primary_key', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Primary user ID of this leader (e.g. 1)
		3 => ['field_name' => 'activity_id', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // ID of the activity associated with this leader time (e.g. 1)
		4 => ['field_name' => 'segment_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Segment Time (includes pauses) (e.g. 1)
		5 => ['field_name' => 'activity_id_string', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // String version of the activity_id. 21 characters long, express in decimal (e.g. )
	]],
	150 => ['mesg_name' => 'segment_point', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'position_lat', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'position_long', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'distance', 'field_type' => 'uint32', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Accumulated distance along the segment at the described point (e.g. 1)
		4 => ['field_name' => 'altitude', 'field_type' => 'uint16', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '16', 'accumulate' => '', 'component' => 'enhanced_altitude', 'ref_field_type' => '', 'ref_field_name' => ''], // Accumulated altitude along the segment at the described point (e.g. 1)
		5 => ['field_name' => 'leader_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Accumualted time each leader board member required to reach the described point. This value is zero for all leader board members at the starting point of the segment. (e.g. 1)
		6 => ['field_name' => 'enhanced_altitude', 'field_type' => 'uint32', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Accumulated altitude along the segment at the described point (e.g. )
	]],
	142 => ['mesg_name' => 'segment_lap', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Lap end time. (e.g. 1)
		0 => ['field_name' => 'event', 'field_type' => 'event', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'event_type', 'field_type' => 'event_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'start_time', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'start_position_lat', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'start_position_long', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'end_position_lat', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'end_position_long', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'total_elapsed_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Time (includes pauses) (e.g. 1)
		8 => ['field_name' => 'total_timer_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Timer Time (excludes pauses) (e.g. 1)
		9 => ['field_name' => 'total_distance', 'field_type' => 'uint32', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		10 => [
			'field_name' => 'total_cycles', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'cycles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
			0 => ['field_name' => 'total_strokes', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'strokes', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'cycling', 'ref_field_name' => 'sport'],
		],
		11 => ['field_name' => 'total_calories', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'kcal', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		12 => ['field_name' => 'total_fat_calories', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'kcal', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // If New Leaf (e.g. 1)
		13 => ['field_name' => 'avg_speed', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		14 => ['field_name' => 'max_speed', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		15 => ['field_name' => 'avg_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		16 => ['field_name' => 'max_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		17 => ['field_name' => 'avg_cadence', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // total_cycles / total_timer_time if non_zero_avg_cadence otherwise total_cycles / total_elapsed_time (e.g. 1)
		18 => ['field_name' => 'max_cadence', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		19 => ['field_name' => 'avg_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // total_power / total_timer_time if non_zero_avg_power otherwise total_power / total_elapsed_time (e.g. 1)
		20 => ['field_name' => 'max_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		21 => ['field_name' => 'total_ascent', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		22 => ['field_name' => 'total_descent', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		23 => ['field_name' => 'sport', 'field_type' => 'sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		24 => ['field_name' => 'event_group', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		25 => ['field_name' => 'nec_lat', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // North east corner latitude. (e.g. 1)
		26 => ['field_name' => 'nec_long', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // North east corner longitude. (e.g. 1)
		27 => ['field_name' => 'swc_lat', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // South west corner latitude. (e.g. 1)
		28 => ['field_name' => 'swc_long', 'field_type' => 'sint32', 'scale' => 1, 'offset' => 0, 'units' => 'semicircles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // South west corner latitude. (e.g. 1)
		29 => ['field_name' => 'name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		30 => ['field_name' => 'normalized_power', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		31 => ['field_name' => 'left_right_balance', 'field_type' => 'left_right_balance_100', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		32 => ['field_name' => 'sub_sport', 'field_type' => 'sub_sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		33 => ['field_name' => 'total_work', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'J', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		34 => ['field_name' => 'avg_altitude', 'field_type' => 'uint16', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '16', 'accumulate' => '', 'component' => 'enhanced_avg_altitude', 'ref_field_type' => '', 'ref_field_name' => ''],
		35 => ['field_name' => 'max_altitude', 'field_type' => 'uint16', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '16', 'accumulate' => '', 'component' => 'enhanced_max_altitude', 'ref_field_type' => '', 'ref_field_name' => ''],
		36 => ['field_name' => 'gps_accuracy', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		37 => ['field_name' => 'avg_grade', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		38 => ['field_name' => 'avg_pos_grade', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		39 => ['field_name' => 'avg_neg_grade', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		40 => ['field_name' => 'max_pos_grade', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		41 => ['field_name' => 'max_neg_grade', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		42 => ['field_name' => 'avg_temperature', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		43 => ['field_name' => 'max_temperature', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		44 => ['field_name' => 'total_moving_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		45 => ['field_name' => 'avg_pos_vertical_speed', 'field_type' => 'sint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		46 => ['field_name' => 'avg_neg_vertical_speed', 'field_type' => 'sint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		47 => ['field_name' => 'max_pos_vertical_speed', 'field_type' => 'sint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		48 => ['field_name' => 'max_neg_vertical_speed', 'field_type' => 'sint16', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		49 => ['field_name' => 'time_in_hr_zone', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		50 => ['field_name' => 'time_in_speed_zone', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		51 => ['field_name' => 'time_in_cadence_zone', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		52 => ['field_name' => 'time_in_power_zone', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		53 => ['field_name' => 'repetition_num', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		54 => ['field_name' => 'min_altitude', 'field_type' => 'uint16', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '16', 'accumulate' => '', 'component' => 'enhanced_min_altitude', 'ref_field_type' => '', 'ref_field_name' => ''],
		55 => ['field_name' => 'min_heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		56 => ['field_name' => 'active_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		57 => ['field_name' => 'wkt_step_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		58 => ['field_name' => 'sport_event', 'field_type' => 'sport_event', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		59 => ['field_name' => 'avg_left_torque_effectiveness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		60 => ['field_name' => 'avg_right_torque_effectiveness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		61 => ['field_name' => 'avg_left_pedal_smoothness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		62 => ['field_name' => 'avg_right_pedal_smoothness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		63 => ['field_name' => 'avg_combined_pedal_smoothness', 'field_type' => 'uint8', 'scale' => 2, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		64 => ['field_name' => 'status', 'field_type' => 'segment_lap_status', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		65 => ['field_name' => 'uuid', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		66 => ['field_name' => 'avg_fractional_cadence', 'field_type' => 'uint8', 'scale' => 128, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // fractional part of the avg_cadence (e.g. 1)
		67 => ['field_name' => 'max_fractional_cadence', 'field_type' => 'uint8', 'scale' => 128, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // fractional part of the max_cadence (e.g. 1)
		68 => ['field_name' => 'total_fractional_cycles', 'field_type' => 'uint8', 'scale' => 128, 'offset' => 0, 'units' => 'cycles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // fractional part of the total_cycles (e.g. 1)
		69 => ['field_name' => 'front_gear_shift_count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		70 => ['field_name' => 'rear_gear_shift_count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		71 => ['field_name' => 'time_standing', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Total time spent in the standing position (e.g. )
		72 => ['field_name' => 'stand_count', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Number of transitions to the standing state (e.g. )
		73 => ['field_name' => 'avg_left_pco', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'mm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average left platform center offset (e.g. )
		74 => ['field_name' => 'avg_right_pco', 'field_type' => 'sint8', 'scale' => 1, 'offset' => 0, 'units' => 'mm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average right platform center offset (e.g. )
		75 => ['field_name' => 'avg_left_power_phase', 'field_type' => 'uint8', 'scale' => 0.7111111, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average left power phase angles. Data value indexes defined by power_phase_type. (e.g. )
		76 => ['field_name' => 'avg_left_power_phase_peak', 'field_type' => 'uint8', 'scale' => 0.7111111, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average left power phase peak angles. Data value indexes defined by power_phase_type. (e.g. )
		77 => ['field_name' => 'avg_right_power_phase', 'field_type' => 'uint8', 'scale' => 0.7111111, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average right power phase angles. Data value indexes defined by power_phase_type. (e.g. )
		78 => ['field_name' => 'avg_right_power_phase_peak', 'field_type' => 'uint8', 'scale' => 0.7111111, 'offset' => 0, 'units' => 'degrees', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average right power phase peak angles. Data value indexes defined by power_phase_type. (e.g. )
		79 => ['field_name' => 'avg_power_position', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average power by position. Data value indexes defined by rider_position_type. (e.g. )
		80 => ['field_name' => 'max_power_position', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Maximum power by position. Data value indexes defined by rider_position_type. (e.g. )
		81 => ['field_name' => 'avg_cadence_position', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average cadence by position. Data value indexes defined by rider_position_type. (e.g. )
		82 => ['field_name' => 'max_cadence_position', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Maximum cadence by position. Data value indexes defined by rider_position_type. (e.g. )
		83 => ['field_name' => 'manufacturer', 'field_type' => 'manufacturer', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Manufacturer that produced the segment (e.g. )
		84 => ['field_name' => 'total_grit', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'kGrit', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // The grit score estimates how challenging a route could be for a cyclist in terms of time spent going over sharp turns or large grade slopes. (e.g. )
		85 => ['field_name' => 'total_flow', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'Flow', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // The flow score estimates how long distance wise a cyclist deaccelerates over intervals where deacceleration is unnecessary such as smooth turns or small grade angle intervals. (e.g. )
		86 => ['field_name' => 'avg_grit', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'kGrit', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // The grit score estimates how challenging a route could be for a cyclist in terms of time spent going over sharp turns or large grade slopes. (e.g. )
		87 => ['field_name' => 'avg_flow', 'field_type' => 'float32', 'scale' => 1, 'offset' => 0, 'units' => 'Flow', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // The flow score estimates how long distance wise a cyclist deaccelerates over intervals where deacceleration is unnecessary such as smooth turns or small grade angle intervals. (e.g. )
		89 => ['field_name' => 'total_fractional_ascent', 'field_type' => 'uint8', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // fractional part of total_ascent (e.g. )
		90 => ['field_name' => 'total_fractional_descent', 'field_type' => 'uint8', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // fractional part of total_descent (e.g. )
		91 => ['field_name' => 'enhanced_avg_altitude', 'field_type' => 'uint32', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		92 => ['field_name' => 'enhanced_max_altitude', 'field_type' => 'uint32', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		93 => ['field_name' => 'enhanced_min_altitude', 'field_type' => 'uint32', 'scale' => 5, 'offset' => 500, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	151 => ['mesg_name' => 'segment_file', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'file_uuid', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // UUID of the segment file (e.g. 1)
		3 => ['field_name' => 'enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Enabled state of the segment file (e.g. 1)
		4 => ['field_name' => 'user_profile_primary_key', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Primary key of the user that created the segment file (e.g. 1)
		7 => ['field_name' => 'leader_type', 'field_type' => 'segment_leaderboard_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Leader type of each leader in the segment file (e.g. 1)
		8 => ['field_name' => 'leader_group_primary_key', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Group primary key of each leader in the segment file (e.g. 1)
		9 => ['field_name' => 'leader_activity_id', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Activity ID of each leader in the segment file (e.g. 1)
		10 => ['field_name' => 'leader_activity_id_string', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // String version of the activity ID of each leader in the segment file. 21 characters long for each ID, express in decimal (e.g. )
		11 => ['field_name' => 'default_race_leader', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Index for the Leader Board entry selected as the default race participant (e.g. )
	]],
	26 => ['mesg_name' => 'workout', 'field_defns' => [
		4 => ['field_name' => 'sport', 'field_type' => 'sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'capabilities', 'field_type' => 'workout_capabilities', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'num_valid_steps', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // number of valid steps (e.g. 1)
		8 => ['field_name' => 'wkt_name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		11 => ['field_name' => 'sub_sport', 'field_type' => 'sub_sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		14 => ['field_name' => 'pool_length', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		15 => ['field_name' => 'pool_length_unit', 'field_type' => 'display_measure', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	158 => ['mesg_name' => 'workout_session', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'sport', 'field_type' => 'sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'sub_sport', 'field_type' => 'sub_sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'num_valid_steps', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'first_step_index', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'pool_length', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'pool_length_unit', 'field_type' => 'display_measure', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	27 => [
		'mesg_name' => 'workout_step', 'field_defns' => [
			254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			0 => ['field_name' => 'wkt_step_name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			1 => ['field_name' => 'duration_type', 'field_type' => 'wkt_step_duration', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			2 => [
				'field_name' => 'duration_value', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
				0 => ['field_name' => 'duration_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'time,repetition_time', 'ref_field_name' => 'duration_type,duration_type'],
				1 => ['field_name' => 'duration_distance', 'field_type' => 'uint32', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'distance', 'ref_field_name' => 'duration_type'],
				2 => ['field_name' => 'duration_hr', 'field_type' => 'workout_hr', 'scale' => 1, 'offset' => 0, 'units' => '% or bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'hr_less_than,hr_greater_than', 'ref_field_name' => 'duration_type,duration_type'],
				3 => ['field_name' => 'duration_calories', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'calories', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'calories', 'ref_field_name' => 'duration_type'],
				4 => ['field_name' => 'duration_step', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'repeat_until_steps_cmplt,repeat_until_time,repeat_until_distance,repeat_until_calories,repeat_until_hr_less_than,repeat_until_hr_greater_than,repeat_until_power_less_than,repeat_until_power_greater_than', 'ref_field_name' => 'duration_type,duration_type,duration_type,duration_type,duration_type,duration_type,duration_type,duration_type'], // message_index of step to loop back to. Steps are assumed to be in the order by message_index. custom_name and intensity members are undefined for this duration type. (e.g. 1)
				5 => ['field_name' => 'duration_power', 'field_type' => 'workout_power', 'scale' => 1, 'offset' => 0, 'units' => '% or watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'power_less_than,power_greater_than', 'ref_field_name' => 'duration_type,duration_type'],
				6 => ['field_name' => 'duration_reps', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'reps', 'ref_field_name' => 'duration_type'],
			],
			3 => ['field_name' => 'target_type', 'field_type' => 'wkt_step_target', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			4 => [
				'field_name' => 'target_value', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
				0 => ['field_name' => 'target_speed_zone', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'speed', 'ref_field_name' => 'target_type'], // speed zone (1-10);Custom =0; (e.g. 1)
				1 => ['field_name' => 'target_hr_zone', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'heart_rate', 'ref_field_name' => 'target_type'], // hr zone (1-5);Custom =0; (e.g. 1)
				2 => ['field_name' => 'target_cadence_zone', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'cadence', 'ref_field_name' => 'target_type'], // Zone (1-?); Custom = 0; (e.g. 1)
				3 => ['field_name' => 'target_power_zone', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'power', 'ref_field_name' => 'target_type'], // Power Zone ( 1-7); Custom = 0; (e.g. 1)
				4 => ['field_name' => 'repeat_steps', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'repeat_until_steps_cmplt', 'ref_field_name' => 'duration_type'], // # of repetitions (e.g. 1)
				5 => ['field_name' => 'repeat_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'repeat_until_time', 'ref_field_name' => 'duration_type'],
				6 => ['field_name' => 'repeat_distance', 'field_type' => 'uint32', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'repeat_until_distance', 'ref_field_name' => 'duration_type'],
				7 => ['field_name' => 'repeat_calories', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'calories', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'repeat_until_calories', 'ref_field_name' => 'duration_type'],
				8 => ['field_name' => 'repeat_hr', 'field_type' => 'workout_hr', 'scale' => 1, 'offset' => 0, 'units' => '% or bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'repeat_until_hr_less_than,repeat_until_hr_greater_than', 'ref_field_name' => 'duration_type,duration_type'],
				9 => ['field_name' => 'repeat_power', 'field_type' => 'workout_power', 'scale' => 1, 'offset' => 0, 'units' => '% or watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'repeat_until_power_less_than,repeat_until_power_greater_than', 'ref_field_name' => 'duration_type,duration_type'],
				10 => ['field_name' => 'target_stroke_type', 'field_type' => 'swim_stroke', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'swim_stroke', 'ref_field_name' => 'target_type'],
			],
			5 => [
				'field_name' => 'custom_target_value_low', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
				0 => ['field_name' => 'custom_target_speed_low', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'speed', 'ref_field_name' => 'target_type'],
				1 => ['field_name' => 'custom_target_heart_rate_low', 'field_type' => 'workout_hr', 'scale' => 1, 'offset' => 0, 'units' => '% or bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'heart_rate', 'ref_field_name' => 'target_type'],
				2 => ['field_name' => 'custom_target_cadence_low', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'cadence', 'ref_field_name' => 'target_type'],
				3 => ['field_name' => 'custom_target_power_low', 'field_type' => 'workout_power', 'scale' => 1, 'offset' => 0, 'units' => '% or watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'power', 'ref_field_name' => 'target_type'],
			],
			6 => [
				'field_name' => 'custom_target_value_high', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
				0 => ['field_name' => 'custom_target_speed_high', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'speed', 'ref_field_name' => 'target_type'],
				1 => ['field_name' => 'custom_target_heart_rate_high', 'field_type' => 'workout_hr', 'scale' => 1, 'offset' => 0, 'units' => '% or bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'heart_rate', 'ref_field_name' => 'target_type'],
				2 => ['field_name' => 'custom_target_cadence_high', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'cadence', 'ref_field_name' => 'target_type'],
				3 => ['field_name' => 'custom_target_power_high', 'field_type' => 'workout_power', 'scale' => 1, 'offset' => 0, 'units' => '% or watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'power', 'ref_field_name' => 'target_type'],
			],
			7 => ['field_name' => 'intensity', 'field_type' => 'intensity', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			8 => ['field_name' => 'notes', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			9 => ['field_name' => 'equipment', 'field_type' => 'workout_equipment', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			10 => ['field_name' => 'exercise_category', 'field_type' => 'exercise_category', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			11 => ['field_name' => 'exercise_name', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			12 => ['field_name' => 'exercise_weight', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'kg', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			13 => ['field_name' => 'weight_display_unit', 'field_type' => 'fit_base_unit', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			19 => ['field_name' => 'secondary_target_type', 'field_type' => 'wkt_step_target', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			20 => [
				'field_name' => 'secondary_target_value', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
				0 => ['field_name' => 'secondary_target_speed_zone', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'speed', 'ref_field_name' => 'secondary_target_type'], // speed zone (1-10);Custom =0; (e.g. 1)
				1 => ['field_name' => 'secondary_target_hr_zone', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'heart_rate', 'ref_field_name' => 'secondary_target_type'], // hr zone (1-5);Custom =0; (e.g. 1)
				2 => ['field_name' => 'secondary_target_cadence_zone', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'cadence', 'ref_field_name' => 'secondary_target_type'], // Zone (1-?); Custom = 0; (e.g. 1)
				3 => ['field_name' => 'secondary_target_power_zone', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'power', 'ref_field_name' => 'secondary_target_type'], // Power Zone ( 1-7); Custom = 0; (e.g. 1)
				4 => ['field_name' => 'secondary_target_stroke_type', 'field_type' => 'swim_stroke', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'swim_stroke', 'ref_field_name' => 'secondary_target_type'],
			],
			21 => [
				'field_name' => 'secondary_custom_target_value_low', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
				0 => ['field_name' => 'secondary_custom_target_speed_low', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'speed', 'ref_field_name' => 'secondary_target_type'],
				1 => ['field_name' => 'secondary_custom_target_heart_rate_low', 'field_type' => 'workout_hr', 'scale' => 1, 'offset' => 0, 'units' => '% or bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'heart_rate', 'ref_field_name' => 'secondary_target_type'],
				2 => ['field_name' => 'secondary_custom_target_cadence_low', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'cadence', 'ref_field_name' => 'secondary_target_type'],
				3 => ['field_name' => 'secondary_custom_target_power_low', 'field_type' => 'workout_power', 'scale' => 1, 'offset' => 0, 'units' => '% or watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'power', 'ref_field_name' => 'secondary_target_type'],
			],
			22 => [
				'field_name' => 'secondary_custom_target_value_high', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '',
				0 => ['field_name' => 'secondary_custom_target_speed_high', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'speed', 'ref_field_name' => 'secondary_target_type'],
				1 => ['field_name' => 'secondary_custom_target_heart_rate_high', 'field_type' => 'workout_hr', 'scale' => 1, 'offset' => 0, 'units' => '% or bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'heart_rate', 'ref_field_name' => 'secondary_target_type'],
				2 => ['field_name' => 'secondary_custom_target_cadence_high', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'rpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'cadence', 'ref_field_name' => 'secondary_target_type'],
				3 => ['field_name' => 'secondary_custom_target_power_high', 'field_type' => 'workout_power', 'scale' => 1, 'offset' => 0, 'units' => '% or watts', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'power', 'ref_field_name' => 'secondary_target_type'],
			],
		],
		'exercise_title' => [
			254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			0 => ['field_name' => 'exercise_category', 'field_type' => 'exercise_category', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			1 => ['field_name' => 'exercise_name', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
			2 => ['field_name' => 'wkt_step_name', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		]
	],
	28 => ['mesg_name' => 'schedule', 'field_defns' => [
		0 => ['field_name' => 'manufacturer', 'field_type' => 'manufacturer', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Corresponds to file_id of scheduled workout / course. (e.g. 1)
		1 => [
			'field_name' => 'product', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '', // Corresponds to file_id of scheduled workout / course. (e.g. 1)
			0 => ['field_name' => 'favero_product', 'field_type' => 'favero_product', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'favero_electronics', 'ref_field_name' => 'manufacturer'],
			1 => ['field_name' => 'garmin_product', 'field_type' => 'garmin_product', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'garmin,dynastream,dynastream_oem,tacx', 'ref_field_name' => 'manufacturer,manufacturer,manufacturer,manufacturer'],
		],
		2 => ['field_name' => 'serial_number', 'field_type' => 'uint32z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Corresponds to file_id of scheduled workout / course. (e.g. 1)
		3 => ['field_name' => 'time_created', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Corresponds to file_id of scheduled workout / course. (e.g. 1)
		4 => ['field_name' => 'completed', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // TRUE if this activity has been started (e.g. 1)
		5 => ['field_name' => 'type', 'field_type' => 'schedule', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'scheduled_time', 'field_type' => 'local_date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	33 => ['mesg_name' => 'totals', 'field_defns' => [
		254 => ['field_name' => 'message_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'timer_time', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Excludes pauses (e.g. 1)
		1 => ['field_name' => 'distance', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'calories', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'kcal', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'sport', 'field_type' => 'sport', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'elapsed_time', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Includes pauses (e.g. 1)
		5 => ['field_name' => 'sessions', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'active_time', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		9 => ['field_name' => 'sport_index', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	30 => ['mesg_name' => 'weight_scale', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'weight', 'field_type' => 'weight', 'scale' => 100, 'offset' => 0, 'units' => 'kg', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'percent_fat', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'percent_hydration', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => '%', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'visceral_fat_mass', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'kg', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'bone_mass', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'kg', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'muscle_mass', 'field_type' => 'uint16', 'scale' => 100, 'offset' => 0, 'units' => 'kg', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'basal_met', 'field_type' => 'uint16', 'scale' => 4, 'offset' => 0, 'units' => 'kcal/day', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		8 => ['field_name' => 'physique_rating', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		9 => ['field_name' => 'active_met', 'field_type' => 'uint16', 'scale' => 4, 'offset' => 0, 'units' => 'kcal/day', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // ~4kJ per kcal, 0.25 allows max 16384 kcal (e.g. 1)
		10 => ['field_name' => 'metabolic_age', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'years', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		11 => ['field_name' => 'visceral_fat_rating', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		12 => ['field_name' => 'user_profile_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Associates this weight scale message to a user. This corresponds to the index of the user profile message in the weight scale file. (e.g. 1)
	]],
	51 => ['mesg_name' => 'blood_pressure', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'systolic_pressure', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'mmHg', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'diastolic_pressure', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'mmHg', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'mean_arterial_pressure', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'mmHg', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'map_3_sample_mean', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'mmHg', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'map_morning_values', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'mmHg', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'map_evening_values', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'mmHg', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'heart_rate_type', 'field_type' => 'hr_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		8 => ['field_name' => 'status', 'field_type' => 'bp_status', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		9 => ['field_name' => 'user_profile_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Associates this blood pressure message to a user. This corresponds to the index of the user profile message in the blood pressure file. (e.g. 1)
	]],
	103 => ['mesg_name' => 'monitoring_info', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'local_timestamp', 'field_type' => 'local_date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Use to convert activity timestamps to local time if device does not support time zone and daylight savings time correction. (e.g. 1)
		1 => ['field_name' => 'activity_type', 'field_type' => 'activity_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'cycles_to_distance', 'field_type' => 'uint16', 'scale' => 5000, 'offset' => 0, 'units' => 'm/cycle', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Indexed by activity_type (e.g. )
		4 => ['field_name' => 'cycles_to_calories', 'field_type' => 'uint16', 'scale' => 5000, 'offset' => 0, 'units' => 'kcal/cycle', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Indexed by activity_type (e.g. )
		5 => ['field_name' => 'resting_metabolic_rate', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'kcal / day', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	55 => ['mesg_name' => 'monitoring', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Must align to logging interval, for example, time must be 00:00:00 for daily log. (e.g. 1)
		0 => ['field_name' => 'device_index', 'field_type' => 'device_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Associates this data to device_info message. Not required for file with single device (sensor). (e.g. 1)
		1 => ['field_name' => 'calories', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'kcal', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Accumulated total calories. Maintained by MonitoringReader for each activity_type. See SDK documentation (e.g. 1)
		2 => ['field_name' => 'distance', 'field_type' => 'uint32', 'scale' => 100, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Accumulated distance. Maintained by MonitoringReader for each activity_type. See SDK documentation. (e.g. 1)
		3 => [
			'field_name' => 'cycles', 'field_type' => 'uint32', 'scale' => 2, 'offset' => 0, 'units' => 'cycles', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => '', // Accumulated cycles. Maintained by MonitoringReader for each activity_type. See SDK documentation. (e.g. 1)
			0 => ['field_name' => 'steps', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 'steps', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'walking,running', 'ref_field_name' => 'activity_type,activity_type'],
			1 => ['field_name' => 'strokes', 'field_type' => 'uint32', 'scale' => 2, 'offset' => 0, 'units' => 'strokes', 'bits' => '', 'accumulate' => '', 'ref_field_type' => 'cycling,swimming', 'ref_field_name' => 'activity_type,activity_type'],
		],
		4 => ['field_name' => 'active_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'activity_type', 'field_type' => 'activity_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'activity_subtype', 'field_type' => 'activity_subtype', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'activity_level', 'field_type' => 'activity_level', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		8 => ['field_name' => 'distance_16', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '100 * m', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		9 => ['field_name' => 'cycles_16', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => '2 * cycles (steps)', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		10 => ['field_name' => 'active_time_16', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		11 => ['field_name' => 'local_timestamp', 'field_type' => 'local_date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Must align to logging interval, for example, time must be 00:00:00 for daily log. (e.g. 1)
		12 => ['field_name' => 'temperature', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Avg temperature during the logging interval ended at timestamp (e.g. )
		14 => ['field_name' => 'temperature_min', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Min temperature during the logging interval ended at timestamp (e.g. )
		15 => ['field_name' => 'temperature_max', 'field_type' => 'sint16', 'scale' => 100, 'offset' => 0, 'units' => 'C', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Max temperature during the logging interval ended at timestamp (e.g. )
		16 => ['field_name' => 'activity_time', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'minutes', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Indexed using minute_activity_level enum (e.g. )
		19 => ['field_name' => 'active_calories', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'kcal', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		24 => ['field_name' => 'current_activity_type_intensity', 'field_type' => 'byte', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '5,3', 'accumulate' => '', 'component' => 'activity_type,intensity', 'ref_field_type' => '', 'ref_field_name' => ''], // Indicates single type / intensity for duration since last monitoring message. (e.g. )
		25 => ['field_name' => 'timestamp_min_8', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		26 => ['field_name' => 'timestamp_16', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		27 => ['field_name' => 'heart_rate', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		28 => ['field_name' => 'intensity', 'field_type' => 'uint8', 'scale' => 10, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		29 => ['field_name' => 'duration_min', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'min', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		30 => ['field_name' => 'duration', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		31 => ['field_name' => 'ascent', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		32 => ['field_name' => 'descent', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		33 => ['field_name' => 'moderate_activity_minutes', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'minutes', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		34 => ['field_name' => 'vigorous_activity_minutes', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'minutes', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	132 => ['mesg_name' => 'hr', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'fractional_timestamp', 'field_type' => 'uint16', 'scale' => 32768, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'time256', 'field_type' => 'uint8', 'scale' => 256, 'offset' => 0, 'units' => 's', 'bits' => '8', 'accumulate' => '', 'component' => 'fractional_timestamp', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'filtered_bpm', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'bpm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		9 => ['field_name' => 'event_timestamp', 'field_type' => 'uint32', 'scale' => 1024, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		10 => ['field_name' => 'event_timestamp_12', 'field_type' => 'byte', 'scale' => '1024,1024,1024,1024,1024,1024,1024,1024,1024,1024', 'offset' => 0, 'units' => 's', 'bits' => '12,12,12,12,12,12,12,12,12,12', 'accumulate' => '1,1,1,1,1,1,1,1,1,1', 'component' => 'event_timestamp,event_timestamp,event_timestamp,event_timestamp,event_timestamp,event_timestamp,event_timestamp,event_timestamp,event_timestamp,event_timestamp', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	227 => ['mesg_name' => 'stress_level', 'field_defns' => [
		0 => ['field_name' => 'stress_level_value', 'field_type' => 'sint16', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'stress_level_time', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Time stress score was calculated (e.g. )
	]],
	145 => ['mesg_name' => 'memo_glob', 'field_defns' => [
		250 => ['field_name' => 'part_index', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Sequence number of memo blocks (e.g. )
		0 => ['field_name' => 'memo', 'field_type' => 'byte', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Deprecated. Use data field. (e.g. )
		1 => ['field_name' => 'mesg_num', 'field_type' => 'mesg_num', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Message Number of the parent message (e.g. )
		2 => ['field_name' => 'parent_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Index of mesg that this glob is associated with. (e.g. )
		3 => ['field_name' => 'field_num', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Field within the parent that this glob is associated with (e.g. )
		4 => ['field_name' => 'data', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Block of utf8 bytes. Note, mutltibyte characters may be split across adjoining memo_glob messages. (e.g. )
	]],
	82 => ['mesg_name' => 'ant_channel_id', 'field_defns' => [
		0 => ['field_name' => 'channel_number', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'device_type', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'device_number', 'field_type' => 'uint16z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'transmission_type', 'field_type' => 'uint8z', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'device_index', 'field_type' => 'device_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	80 => ['mesg_name' => 'ant_rx', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'fractional_timestamp', 'field_type' => 'uint16', 'scale' => 32768, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'mesg_id', 'field_type' => 'byte', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'mesg_data', 'field_type' => 'byte', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '8,8,8,8,8,8,8,8,8', 'accumulate' => '', 'component' => 'channel_number,data,data,data,data,data,data,data,data', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'channel_number', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'data', 'field_type' => 'byte', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	81 => ['mesg_name' => 'ant_tx', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'fractional_timestamp', 'field_type' => 'uint16', 'scale' => 32768, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'mesg_id', 'field_type' => 'byte', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'mesg_data', 'field_type' => 'byte', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '8,8,8,8,8,8,8,8,8', 'accumulate' => '', 'component' => 'channel_number,data,data,data,data,data,data,data,data', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'channel_number', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'data', 'field_type' => 'byte', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	200 => ['mesg_name' => 'exd_screen_configuration', 'field_defns' => [
		0 => ['field_name' => 'screen_index', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'field_count', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // number of fields in screen (e.g. 1)
		2 => ['field_name' => 'layout', 'field_type' => 'exd_layout', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'screen_enabled', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	201 => ['mesg_name' => 'exd_data_field_configuration', 'field_defns' => [
		0 => ['field_name' => 'screen_index', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'concept_field', 'field_type' => 'byte', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '4,4', 'accumulate' => '', 'component' => 'field_id,concept_count', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'field_id', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'concept_count', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'display_type', 'field_type' => 'exd_display_type', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'title', 'field_type' => 'string', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	202 => ['mesg_name' => 'exd_data_concept_configuration', 'field_defns' => [
		0 => ['field_name' => 'screen_index', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'concept_field', 'field_type' => 'byte', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '4,4', 'accumulate' => '', 'component' => 'field_id,concept_index', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'field_id', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		3 => ['field_name' => 'concept_index', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		4 => ['field_name' => 'data_page', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		5 => ['field_name' => 'concept_key', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'scaling', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		8 => ['field_name' => 'data_units', 'field_type' => 'exd_data_units', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		9 => ['field_name' => 'qualifier', 'field_type' => 'exd_qualifiers', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		10 => ['field_name' => 'descriptor', 'field_type' => 'exd_descriptors', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		11 => ['field_name' => 'is_signed', 'field_type' => 'bool', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
	]],
	268 => ['mesg_name' => 'dive_summary', 'field_defns' => [
		253 => ['field_name' => 'timestamp', 'field_type' => 'date_time', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		0 => ['field_name' => 'reference_mesg', 'field_type' => 'mesg_num', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		1 => ['field_name' => 'reference_index', 'field_type' => 'message_index', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		2 => ['field_name' => 'avg_depth', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // 0 if above water (e.g. )
		3 => ['field_name' => 'max_depth', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // 0 if above water (e.g. )
		4 => ['field_name' => 'surface_interval', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Time since end of last dive (e.g. )
		5 => ['field_name' => 'start_cns', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		6 => ['field_name' => 'end_cns', 'field_type' => 'uint8', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		7 => ['field_name' => 'start_n2', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		8 => ['field_name' => 'end_n2', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'percent', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		9 => ['field_name' => 'o2_toxicity', 'field_type' => 'uint16', 'scale' => 1, 'offset' => 0, 'units' => 'OTUs', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		10 => ['field_name' => 'dive_number', 'field_type' => 'uint32', 'scale' => 1, 'offset' => 0, 'units' => '', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		11 => ['field_name' => 'bottom_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''],
		17 => ['field_name' => 'avg_ascent_rate', 'field_type' => 'sint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average ascent rate, not including descents or stops (e.g. )
		22 => ['field_name' => 'avg_descent_rate', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Average descent rate, not including ascents or stops (e.g. )
		23 => ['field_name' => 'max_ascent_rate', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Maximum ascent rate (e.g. )
		24 => ['field_name' => 'max_descent_rate', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 'm/s', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Maximum descent rate (e.g. )
		25 => ['field_name' => 'hang_time', 'field_type' => 'uint32', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Time spent neither ascending nor descending (e.g. )
	]],
	78 => [
		'mesg_name' => 'hrv', 'field_defns' => [
			0 => ['field_name' => 'time', 'field_type' => 'uint16', 'scale' => 1000, 'offset' => 0, 'units' => 's', 'bits' => '', 'accumulate' => '', 'ref_field_type' => '', 'ref_field_name' => ''], // Time between beats (e.g. 1)
		]
	]
];
