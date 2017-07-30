<?php

return [
	'appname' => 'ESPTerm',

	'menu.cfg_wifi' => 'WiFi Settings',
	'menu.cfg_network' => 'Network Settings',
	'menu.cfg_term' => 'Terminal Settings',
	'menu.about' => 'About ESPTerm',
	'menu.help' => 'Quick Reference',
	'menu.term' => 'Back to Terminal',
	'menu.cfg_system' => 'System Settings',
	'menu.cfg_wifi_conn' => 'Connecting to Network',

	'menu.settings' => 'Settings',

	'title.term' => 'Terminal',

	'net.ap' => 'DHCP Server (AP)',
	'net.sta' => 'DHCP Client (Station)',
	'net.sta_mac' => 'Station MAC',
	'net.ap_mac' => 'AP MAC',
	'net.details' => 'MAC addresses',

	'term.defaults' => 'Initial Settings',
	'term.explain_initials' => '
		Those are the initial settings used after ESPTerm powers on. They
		will also be applied immediately after you submit this form.',

	'term.example' => 'Default colors preview',

	'term.term_title' => 'Header text',
	'term.term_width' => 'Screen width / height',
	'term.default_fg_bg' => 'Text / background',
	'term.buttons' => 'Button labels',
	'term.theme' => 'Color scheme',

	// terminal color labels
	'color.0' => 'Black',
	'color.1' => 'Red',
	'color.2' => 'Green',
	'color.3' => 'Yellow',
	'color.4' => 'Blue',
	'color.5' => 'Purple',
	'color.6' => 'Cyan',
	'color.7' => 'Silver',
	'color.8' => 'Gray',
	'color.9' => 'Light Red',
	'color.10' => 'Light Green',
	'color.11' => 'Light Yellow',
	'color.12' => 'Light Blue',
	'color.13' => 'Light Purple',
	'color.14' => 'Light Cyan',
	'color.15' => 'White',

	'net.explain_sta' => '
		Switch off Dynamic IP to configure the static IP address.',

	'net.explain_ap' => '
		Those settings affect the built-in DHCP server in AP mode.',

	'net.ap_dhcp_time' => 'Lease time',
	'net.ap_dhcp_start' => 'Pool start IP',
	'net.ap_dhcp_end' => 'Pool end IP',
	'net.ap_addr_ip' => 'Own IP address',
	'net.ap_addr_mask' => 'Subnet mask',

	'net.sta_dhcp_enable' => 'Use dynamic IP',
	'net.sta_addr_ip' => 'ESPTerm static IP',
	'net.sta_addr_mask' => 'Subnet mask',
	'net.sta_addr_gw' => 'Gateway IP',

	'wifi.ap' => 'Built-in Access Point',
	'wifi.sta' => 'Join Existing Network',

	'wifi.enable' => 'Enabled',
	'wifi.tpw' => 'Transmit power',
	'wifi.ap_channel' => 'Channel',
	'wifi.ap_ssid' => 'AP SSID',
	'wifi.ap_password' => 'Password',
	'wifi.ap_hidden' => 'Hide SSID',
	'wifi.sta_info' => 'Selected',

	'wifi.not_conn' => 'Not connected.',
	'wifi.sta_none' => 'None',
	'wifi.sta_active_pw' => '🔒',
	'wifi.sta_active_nopw' => '🔓 Open access',
	'wifi.connected_ip_is' => 'Connected, IP is ',
	'wifi.sta_password' => 'Password:',

	'wifi.scanning' => 'Scanning',
	'wifi.scan_now' => 'Click here to start scanning!',
	'wifi.cant_scan_no_sta' => 'Click here to enable client mode and start scanning!',
	'wifi.select_ssid' => 'Available networks:',
	'wifi.enter_passwd' => 'Enter password for ":ssid:"',
	'wifi.sta_explain' => 'After selecting a network, press Apply to connect.',

	'wifi.conn.status' => 'Status:',
	'wifi.conn.back_to_config' => 'Back to WiFi config',
	'wifi.conn.telemetry_lost' => 'Telemetry lost, something went wrong. Try again...',

	'wifi.conn.disabled' =>"Station mode is disabled.",
	'wifi.conn.idle' =>"Idle, not connected and with no IP.",
	'wifi.conn.success' => "Connected! Received IP ",
	'wifi.conn.working' => "Connecting to selected AP",
	'wifi.conn.fail' => "Connection failed, check settings & try again. Cause: ",

	'system.save_restore' => 'Save & Restore',
	'system.confirm_restore' => 'Restore all settings to their default values?',
	'system.confirm_restore_hard' =>
		'Restore to firmware default settings? This will reset ' .
		'all active settings and switch to AP mode with the default SSID.',
	'system.confirm_store_defaults' =>
		'Enter admin password to confirm you want to store the current settings as defaults.',
	'system.password' => 'Admin password:',
	'system.restore_defaults' => 'Reset to default settings',
	'system.write_defaults' => 'Save current settings as default',
	'system.restore_hard' => 'Reset to firmware default settings',
	'system.explain_persist' => '
		ESPTerm contains two persistent memory banks, one for default and 
		one for active settings. Active settings can be stored as defaults 
		by the administrator. Use the following button to revert all 
		active settings to their stored default values.  
		',
	'system.uart' => 'Serial Port',
	'system.explain_uart' => '
		This form controls the primary UART. The debug port is fixed at 115200 baud, one stop-bit and no parity.
		',
	'uart.baud' => 'Baud rate',
	'uart.parity' => 'Parity',
	'uart.parity.none' => 'None',
	'uart.parity.odd' => 'Odd',
	'uart.parity.even' => 'Even',
	'uart.stop_bits' => 'Stop-bits',
	'uart.stop_bits.one' => 'One',
	'uart.stop_bits.one_and_half' => 'One and half',
	'uart.stop_bits.two' => 'Two',

	'apply' => 'Apply!',
	'enabled' => 'Enabled',
	'disabled' => 'Disabled',
	'yes' => 'Yes',
	'no' => 'No',
	'confirm' => 'OK',
	'form_errors' => 'Validation errors for:',
];
