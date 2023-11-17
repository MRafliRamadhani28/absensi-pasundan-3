<?php

return [
	[
		'code'		 => 'dashboard',
		'name'		 => "Dashboard",
		'label'		 => "dashboard",
		'icon'		 => "dashboard",
		'route_name' => "cmsDashboard",
		'module'	 => [
			'code' => 'dashboard',
			'task' => [
				[
					'code' => 'add',
					'name' => 'Add'
				]
			]
		],
		'child'      => [],
	],
	[
		'code'		 => 'system',
		'name'		 => "System",
		'label'		 => "system",
		'icon'		 => "cog",
		'route_name' => "",
		'module' 	 => [],
		'child'      => [
			[
				'code'		 => "user-level",
				'name'		 => "User Level",
				'label'		 => "userLevel",
				'icon'		 => "",
				'route_name' => "cmsUserLevel",
				'module' 	 => [
					'code' => 'user-level',
					'task' => [
						[
							'code' => 'add',
							'name' => 'Add'
						]
					]
				]
			],
			[
				'code'		 => "user",
				'name'		 => "User",
				'label'		 => "user",
				'icon'		 => "",
				'route_name' => "cmsUser",
				'module' 	 => [
					'code' => 'user',
					'task' => []
				]
			],
		],
	],
	[
		'code'		 => 'master',
		'name'		 => "Master",
		'label'		 => "master",
		'icon'		 => "cog",
		'route_name' => "",
		'module' 	 => [],
		'child'      => [
			[
				'code'		 => "master-guru",
				'name'		 => "Guru",
				'label'		 => "masterGuru",
				'icon'		 => "",
				'route_name' => "cmsMasterGuru",
				'module' 	 => [
					'code' => 'master-guru',
					'task' => [
						[
							'code' => 'add',
							'name' => 'Add'
						]
					]
				]
			],
		],
	],
];