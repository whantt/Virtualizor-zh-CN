<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addvs_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('Hacking Attempt');

}

$l['server_locked_title'] = 'Server is Locked';
$l['server_locked'] = 'Cannot create VPS on Locked Server';
$l['slave_cant'] = 'Add Virtual Server Error';
$l['slave_cant_exp'] = 'Slave servers are not allowed to add Virtual Server !';
$l['masteronly_cant_exp'] = 'VPS creation is not allowed on Master Only servers. Choose another slave server.';
$l['none_plan'] = 'None';
$l['no_hname'] = 'Please specify the Hostname';
$l['no_os'] = 'Please choose a OS for the VPS';
$l['no_rootpass'] = 'Please specify a Root Password';
$l['no_vncpass'] = 'Please specify a VNC Password';
$l['no_disk_space'] = 'Please specify the disk space to be allocated';
$l['no_ram'] = 'Please specify the RAM memory';
$l['no_bandwidth'] = 'Please specify the Bandwidth';
$l['no_cpu_units'] = 'Please specify the CPU Units';
$l['no_cpu_cores'] = 'Please specify the Number of Cores';
$l['no_percent_cpu'] = 'Please specify the Percent CPU utilization allowed';
$l['no_swap_ram'] = 'Please specify the SWAP RAM';
$l['no_burst_ram'] = 'Please specify the Burstable RAM limit';
$l['no_inodes'] = 'Please specify the number of Inodes allowed';
$l['no_io'] = 'Please choose the I/O Priority';
$l['invalid_os'] = 'The OS you submitted is invalid';
$l['no_ip'] = 'Please specify atleast one IP for the VPS';
$l['invalid_ip'] = 'The following IP(s) are invalid : ';
$l['invalid_ip_subnet'] = 'The following IP Subnet(s) are invalid : ';
$l['subnet_mismatch'] = 'Some IPv6 Subnet(s) were not found in the database';
$l['used_ip'] = 'The following IP(s) are used by another VPS : ';
$l['used_ip_subnet'] = 'The following IP Subnet(s) are used by another VPS : ';
$l['err_insert'] = 'There was an error while saving the new VPS information.';
$l['err_create'] = 'There was an error in creating the VPS. <a href="'.$globals['index'].'act=rebuild&vpsid=&soft-1;">Click here to reinstall the Virtual Server</a>';
$l['err_rootpass'] = 'There was an error in setting the Root Password of the new VPS';
$l['err_vncpass'] = 'There was an error in setting the Password of the new VNC';
$l['invalid_uid'] = 'The User you submitted does not exist';
$l['no_user'] = 'You did not specify the user email';
$l['no_user_pass'] = 'You did not specify the user password';
$l['invalid_email'] = 'The user email address is invalid';
$l['emailexist'] = 'The new user email you specified already exists';
$l['err_user'] = 'There was an error while adding the user';
$l['err_start'] = 'There was an error while starting the new VPS';
$l['err_numvs'] = 'Your license does not permit the creation of more VPS';
$l['err_mac'] = 'Please specify the MAC Address';
$l['err_dns'] = 'Please specify the correct Nameserver';
$l['err_tccreate'] = 'There was an error while setting the Network Limit for the VPS';
$l['invalid_hostname'] = 'The hostname you submitted is not valid';
$l['no_nonalphanumeric'] = 'No Non-Alphanumeric characters are allowed for the VNC Password';
$l['no_shadow'] = 'You did not specify the shadow memory';
$l['err_save_slave'] = 'There was an error while saving the VPS Data on the slave. Please make sure that the Slave server is working.';
$l['less_ram'] = 'The Node doesn\'t have enough ram to create this VPS';
$l['less_space'] = 'The Node doesn\'t have enough Disk Space to create this VPS';
$l['less_inodes'] = 'The inodes should not be less than 50000';
$l['no_webuzo_template'] = 'The OS Template you selected is not a Webuzo Template';
$l['err_swapsize'] = 'The SWAP size specified cannot be greater than or equal to the total disk space specified';
$l['inv_kvm_cache'] = 'The Disk Cache submitted is invalid';
$l['inv_io_mode'] = 'The I/O Policy submitted is invalid';
$l['inv_vnc_keymap'] = 'The VNC keymap submitted is invalid';
$l['err_vpslimit'] = 'VPS creation limit exceeded';
$l['in_queue'] = 'Waiting for other processes to finish';
$l['inv_storage'] = 'The storage you submitted is invalid';
$l['no_storage'] = 'The primary storage could not be found';
$l['xen_pv_file_support'] = 'Xen PV doesn\'t support file level disks';
$l['inv_space'] = 'The space format you submitted is invalid';
$l['mul_storage'] = 'Secondary disk option not available for this Virtualization type';
$l['inv_cpu_mode'] = 'The CPU Mode Specified is invalid';
$l['no_ipv4'] = 'Insufficient number of IPv4';
$l['no_ipv6'] = 'Insufficient number of IPv6';
$l['no_ipv6_subnet'] = 'Insufficient number of IPv6 Subnet';
$l['no_int_ips'] = 'Insufficient number of Internal IPs';

$l['<title>'] = 'Add Virtual Server';
$l['add_vs'] = 'Add Virtual Server';
$l['done'] = 'The Virtual Server has been created. Return to <a href="'.$globals['index'].'act=vs">Virtual Server Overview</a>';
$l['newvs_vpsid'] = 'VPS ID';
$l['newvs_vps_name'] = 'VPS Name';
$l['newvs_rootpass'] = 'Root Password';
$l['newvs_vnc'] = 'VNC Details';
$l['newvs_vncpass'] = 'VNC Password';
$l['newvs_ips'] = 'IPs';
$l['newvs_ips6'] = 'IPv6';
$l['newvs_ips6_subnet'] = 'IPv6 Subnet';
$l['vs_server'] = 'Server';
$l['exp_server'] = 'Change the current server to change the server';
$l['vs_virt'] = 'Select Virtualization';
$l['vs_virt_exp'] = 'The Virtualizationn technology of the VPS to be created.';
$l['vs_ser_id'] = 'ID';
$l['vs_user'] = 'User';
$l['vs_user_exp'] = 'Select an existing user OR add a user';
$l['user_email'] = 'User Email';
$l['user_pass'] = 'Password';
$l['add_user'] = 'Add User';
$l['vs_plan'] = 'Select Plan';
$l['plan_exp'] = 'Select a pre-defined plan';
$l['hvm'] = 'Xen HVM';
$l['hvm_exp'] = 'Do you want to enable full virtualization for this VPS ?';
$l['vsos'] = 'Operating System';
$l['vsos_exp'] = 'Select the Operating System for the VPS';
$l['vsiso'] = 'ISO';
$l['vsiso_exp'] = 'If an ISO is selected the machine will be booted from that ISO';
$l['sec_vsiso'] = 'ISO for secondary CDROM ';
$l['sec_vsiso_exp'] = 'Select an ISO for secondary CDROM';
$l['none'] = 'None';
$l['rootpass'] = 'VPS Root Password';
$l['rootpass_exp'] = 'The Password of the Root User / Administrator of the VPS';
$l['randpass'] = 'Make another Random Password';
$l['hostname'] = 'Hostname';
$l['hostname_exp'] = 'Enter the hostname for the VPS. e.g. www.domain.com';
$l['ip'] = 'IP Address';
$l['ips_exp'] = 'You can choose from the IP Pool or specify other IPs';
$l['ips6'] = 'IPv6 Addresses';
$l['ips6_exp'] = 'You can specify the number of IPv6 to assign';
$l['ips6_subnet'] = 'IPv6 Subnet';
$l['ips6_subnet_exp'] = 'You can specify the number of IPv6 Subnet to assign';
$l['ips_int'] = 'Internal IP Addresses';
$l['ips_int_exp'] = 'You can choose from the Internal IP Addresses List';
$l['add_ip'] = '+';
$l['remove_ip'] = '-';
$l['add_to_ips'] = '<<';
$l['rem_from_ips'] = 'Remove this IP';
$l['add_dns'] = '+';
$l['hdd'] = 'Disk Space';
$l['exp_hdd'] = 'The allowed disk space for the VPS';
$l['mac'] = 'MAC Address';
$l['exp_mac'] = 'Six groups of two hexadecimal digits separated by colons (:), Eg like 01:23:45:67:89:ab';
$l['space_gb'] = 'GB';
$l['inodes'] = 'Inodes';
$l['iondisk'] = 'The maximum number of Inodes (i.e. Files) allowed within the VPS. Recommended value : 500000+';
$l['gram'] = 'Guaranteed RAM';
$l['exp_gram'] = 'The amount of RAM which the VPS will always have';
$l['ram_mb'] = 'MB';
$l['bram'] = 'Burstable RAM';
$l['exp_bram'] = 'The maximum amount of RAM which the VPS can use';
$l['swap'] = 'Swap RAM';
$l['exp_swap'] = '';
$l['exp_swap_hvm'] = 'An attempt will be made to create a SWAP partition if there is a OS Template selected above';
$l['band'] = 'Bandwidth';
$l['exp_band'] = 'Monthly Bandwidth limit of the VPS. 0 (Zero) for unlimited';
$l['band_gb'] = 'GB';
$l['cpunit'] = 'CPU Units';
$l['cpalloc'] = 'CPU units to be allocated';
$l['cpalloc_xen'] = 'Recommended Value : 256';
$l['cpalloc_openvz'] = 'Recommended Value : 1000';
$l['cpalloc_kvm'] = 'Recommended Value : 1024';
$l['units'] = 'units';
$l['cores'] = 'CPU Cores';
$l['cpucore_exp'] = 'Recommended Value : 4';
$l['percent'] = 'CPU %';
$l['cpuperutil'] = 'The CPU time in percent the corresponding VPS is not allowed to exceed. <br />Set <b>0</b> for no restriction. <br />Recommended Value : 10';
$l['io'] = 'I/O Priority';
$l['io0-7'] = 'Choose priority from 0-7';
$l['na'] = 'Network Speed';
$l['na_exp'] = 'Please Mention the Network Speed';
$l['ubcsettings'] = 'UBC Settings';
$l['exp_ubc'] = 'If checked then you will be redirected to edit the UBC Settings of the VPS';
$l['submit'] = 'Add Virtual Server';
$l['addvoption'] = 'Advanced Options';
$l['addvhide']	= 'Hide Advance option';
$l['network_speed'] = 'Network Speed';
$l['network_speed_exp'] = 'Enter 0 or leave empty for no restriction. <br />Use the select box for easy options';
$l['net_kb'] = 'KB/s';
$l['upload_speed'] = 'Upload Speed';
$l['upload_speed_exp'] = 'Enter 0 or leave empty for no restriction. <br />Use the select box for easy options';
$l['no_limit'] = 'No Restriction';
$l['shadow'] = 'Shadow Memory';
$l['shadow_exp'] = 'Recommended value : 8 MB';
$l['vncpass'] = 'VNC Password';
$l['vncpass_exp'] = 'The VNC Password for the VPS. Click on the icon to generate a new random password';
$l['free'] = 'Free';
$l['band_suspend']= 'Bandwidth suspend ';
$l['exp_band_suspend'] = 'Suspend the VPS if it is uses more than specified bandwidth';
$l['tuntap'] = 'Tun/Tap';
$l['ppp'] = 'PPP';
$l['exp_tuntap'] = 'Enable Tun/Tap for a VPS';
$l['exp_ppp'] = 'Enable PPP (Point to Point Protocol) for a VPS';
$l['osreinstall'] = 'OS Reinstall Limit';
$l['exp_osreinstall'] = 'If you want to limit the number of OS re-installs per month. <br />Eg. 0 - is unlimited';
$l['changenic'] = 'Virtual Network Interface Type';
$l['exp_changenic'] = 'If you want to change the network interface type. Options are default or E1000. <b>virtio</b> will be used as the virtual nic type if <b>virtio</b> is enabled';
$l['add_route'] = 'Use routed network';
$l['exp_add_route'] = 'If checked, it will use routed networking.';
$l['nic_default'] = 'Realtek 8139(default)';
$l['nic_e1000'] = 'Intel E1000';
$l['nic_novell'] = 'Novell NE2000';
$l['nic_i82559er'] = 'Intel i82559er';
$l['nic_pcnet'] = 'AMD PCNET';
$l['nic_ne2k_isa'] = 'Novell E2000 ISA';
$l['change_vif_type'] = 'Virtual Network Interface Emulation type';
$l['exp_change_vif_type'] = 'If you want to change the network interface emulation type. Options are <b>netfront</b> or <b>ioemu</b>.';
$l['viftype_ioemu'] = 'ioemu';
$l['viftype_netfront'] = 'netfront (default)';
$l['usevirtio'] = 'Enable virtio';
$l['exp_usevirtio'] = 'Use <b>virtio</b> as the IO virtualization';	
$l['usesec_cdrom'] = 'Enable Secondary CD ROM';
$l['exp_usesec_cdrom'] = 'Enable this to attach a secondary ISO to the virtual machine.';	
$l['kvm_cache'] = 'Disk Caching';
$l['exp_kvm_cache'] = 'Controls the cache mechanism';
$l['io_mode'] = 'I/O Policy';
$l['vnc_keymap'] = 'VNC Console Keymap';
$l['dns'] = 'DNS Nameservers';
$l['exp_dns'] = 'If not aware then use 4.2.2.1 and 4.2.2.2';
$l['mg'] = 'Media Groups';
$l['mg_exp'] = 'If no Media Group is assigned then all Media will be available to this VPS.';
$l['apps'] = 'Applications';
$l['apps_exp'] = 'Choose the Webuzo application you want to install';
$l['ploop'] = 'Ploop';
$l['ploop_exp'] = 'If enabled, VPS will be created with the Ploop format';
$l['dnsplid'] = 'DNS Plan';
$l['dnsplid_exp'] = 'Choose a DNS Plan for the User.';
$l['disable_ebtables'] = 'Disable ebtables';

$l['mac_temp_vncdetails'] = 'MAC Address :';
$l['mail_temp_vnctitle'] = 'The VNC details are :';
$l['mail_temp_vncdetails'] = 'VNC Details :';
$l['mail_temp_vncpasswd'] = 'VNC Password :';
$l['mail_temp_vncusername'] = 'VNC Username :';

$l['reinstall'] = 'Reinstall Virtual Server';
$l['cpupin'] = 'CPU Affinity';
$l['cpupin_exp'] = 'Pin the particular CPU Cores to this VPS. You can choose multiple CPU Cores.';
$l['cpupin_select'] = 'Select the vCPU';

$l['pv_on_hvm'] = 'PV-on-HVM driver Support';
$l['exp_pv_on_hvm'] = 'The primary goal of PV on HVM is to boost performance of fully virtualized HVM guests through use of specially optimized paravirtual device drivers';

$l['control_panel'] = 'Web Control Panel';
$l['control_panel_exp'] = 'This option will install selected web control panel in the VPS';

//Progress Updates
$l['checking_data'] = 'Checking submitted data...';
$l['beginning_creation'] = 'Beginning VPS creation...';
$l['building_vps'] = 'Building the VPS...';
$l['setting_mac'] = 'Inserting into database...';
$l['setting_pass'] = 'Setting the root password...';
$l['starting_vps'] = 'Starting the VPS...';
$l['verfying_vps'] = 'Verfiying VPS build...';
$l['final_steps'] = 'Performing final steps...';
$l['pbar_notice'] = 'Note: This process may take a while.';
$l['pbar_tip'] = 'Navigating away from this page, will not affect this process.';
$l['overcomit_free'] = 'Overcommitted Free RAM';
$l['oversell_free'] = 'Overcommitted Free Space';
$l['strength_indicator'] = 'Strength Indicator';
$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['weak_pass'] = 'Password must contain atleast 3 of the following : An uppercase letter, a lower case letter, a number or a special symbol';
$l['total_iops_sec'] = 'Total I/O\'s per sec';
$l['read_bytes_sec'] = 'Read Mega Byte\'s/s';
$l['write_bytes_sec'] = 'Write Mega Byte\'s/s';
$l['no_space_storage'] = 'The total space specified for the storage exceeds the actual free space of the storage';
$l['no_space'] = 'Please specify the space to be allotted';
$l['inv_cpu_cores'] = 'Invalid CPU cores specified';
$l['kvm_vga'] = 'Enable VGA';
$l['acceleration'] = 'Enable Acceleration';
$l['acceleration_exp'] = 'If checked then 2D and 3D acceleration will be enabled for the VPS';
$l['cpu_mode'] = 'CPU Mode';
$l['user_details'] = 'User details';
$l['networksettings'] = 'Network Settings';
$l['ubcsettings'] = 'UBC Settings';
$l['exp_ubc'] = 'If checked then you will be redirected to edit the UBC Settings of this Plan';
// Ubc related Settings
$l['no_bkmemsize'] = '<b>kmemsize</b> barrier not specified';
$l['no_blockedpages'] = '<b>lockedpages</b> barrier not specified';
$l['no_bnumproc'] = '<b>numproc</b> barrier not specified';
$l['no_bphyspages'] = '<b>physpages</b> barrier not specified';
$l['no_bnumtcpsock'] = '<b>numtcpsock</b> barrier not specified';
$l['no_bnumflock'] = '<b>numflock</b> barrier not specified';
$l['no_bnumpty'] = '<b>numpty</b> barrier not specified';
$l['no_bnumsiginfo'] = '<b>numsiginfo</b> barrier not specified';
$l['no_btcpsndbuf'] = '<b>tcpsndbuf</b> barrier not specified';
$l['no_btcprcvbuf'] = '<b>tcprcvbuf</b> barrier not specified';
$l['no_bothersockbuf'] = '<b>othersockbuf</b> barrier not specified';
$l['no_bdgramrcvbuf'] = '<b>dgramrcvbuf</b> barrier not specified';
$l['no_bnumothersock'] = '<b>numothersock</b> barrier not specified';
$l['no_bdcachesize'] = '<b>dcachesize</b> barrier not specified';
$l['no_bnumfile'] = '<b>numfile</b> barrier not specified';
$l['no_bnumiptent'] = '<b>numiptent</b> barrier not specified';
$l['no_bswappages'] = '<b>swappages</b> barrier not specified';
$l['no_bdiskinodes'] = '<b>diskinodes</b> barrier not specified';
$l['no_bdcachsize'] = '<b>dcachsize</b> barrier not specified';
$l['no_bquotaugidlimit'] = '<b>quotaugidlimit</b> barrier not specified';
$l['no_bmeminfo'] = '<b>meminfo</b> barrier not specified';

$l['no_lkmemsize'] = '<b>kmemsize</b> limit not specified';
$l['no_llockedpages'] = '<b>lockedpages</b> limit not specified';
$l['no_lnumproc'] = '<b>numproc</b> limit not specified';
$l['no_lphyspages'] = '<b>physpages</b> limit not specified';
$l['no_lnumtcpsock'] = '<b>numtcpsock</b> limit not specified';
$l['no_lnumflock'] = '<b>numflock</b> limit not specified';
$l['no_lnumpty'] = '<b>numpty</b> limit not specified';
$l['no_lnumsiginfo'] = '<b>numsiginfo</b> limit not specified';
$l['no_ltcpsndbuf'] = '<b>tcpsndbuf</b> limit not specified';
$l['no_ltcprcvbuf'] = '<b>tcprcvbuf</b> limit not specified';
$l['no_lothersockbuf'] = '<b>othersockbuf</b> limit not specified';
$l['no_ldgramrcvbuf'] = '<b>dgramrcvbuf</b> limit not specified';
$l['no_lnumothersock'] = '<b>numothersock</b> limit not specified';
$l['no_ldcachesize'] = '<b>dcachesize</b> limit not specified';
$l['no_lnumfile'] = '<b>numfile</b> limit not specified';
$l['no_lnumiptent'] = '<b>numiptent</b> limit not specified';
$l['no_lswappages'] = '<b>swappages</b> limit not specified';
$l['no_ldiskinodes'] = '<b>diskinodes</b> limit not specified';
$l['no_ldcachsize'] = '<b>dcachsize</b> limit not specified';
$l['no_lquotaugidlimit'] = '<b>quotaugidlimit</b> limit not specified';
$l['no_lmeminfo'] = '<b>meminfo</b> limit not specified';
$l['err_edit_vps'] = 'There was an error while applying the UBC settings to the VPS';
$l['err_save_slave'] = 'There was an error while saving the VPS Data on the slave. Please make sure that the Slave server is working.';

//THEME Settings
$l['ubcsetting'] = 'UBC Settings';
$l['plan_name'] = 'Plan';
$l['vps_name'] = 'VPS';
$l['id'] = 'Id';
$l['barrier'] = 'Barrier';
$l['limit'] = 'Limit';
$l['kmemsize'] = 'kmemsize';
$l['lockedpages'] = 'lockedpages';
$l['numproc'] = 'numproc';
$l['physpages'] = 'physpages';
$l['numtcpsock'] = 'numtcpsock';
$l['numflock'] = 'numflock';
$l['numpty']= 'numpty';
$l['numsiginfo'] = 'numsiginfo';
$l['tcpsndbuf'] = 'tcpsndbuf';
$l['tcprcvbuf'] = 'tcprcvbuf';
$l['othersockbuf'] = 'othersockbuf';
$l['dgramrcvbuf'] = 'dgramrcvbuf';
$l['numothersock'] = 'numothersock';
$l['dcachesize'] = 'dcachesize';
$l['numfile'] = 'numfile';
$l['numiptent'] = 'numiptent';
$l['swappages'] = 'swappages'; 
$l['diskinodes'] = 'diskinodes';
$l['dcachsize'] = 'dcachsize';
$l['quotaugidlimit'] = 'quotaugidlimit';
$l['meminfo'] = 'meminfo';
$l['admin_managed'] = 'Managed by Admin';
$l['exp_admin_managed'] = 'If checked, VPS can not be managed from Enduser Panel.';

//Errors for WHMCS
$l['no_serverfound'] = 'No server found which fits in the criteria for your vps configuration : ';
$l['exclude_server'] = 'Following servers were excluded - ';
$l['no_slaveserver'] = 'Please correct the Plan with the right slave server name. There is no slave server';
$l['sg_notfound'] = 'Please correct the <b>Product / Service</b> with the right slave server name. Could not find the server group';
$l['virtserver_notfound'] = 'Please correct the Plan with the right slave server name. No server present in the Server Group which has the resources required as per the parameters set and is of the Virtualization Type';

?>