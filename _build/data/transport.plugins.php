<?php

$plugins = array();

$tmp = array(
	'main' => array(
		'officeProfile' => array(
			'file' => 'office.profile'
			,'description' => ''
			,'events' => array(
					'OnLoadWebDocument'
				)
		)
	)
);

foreach ($tmp as $controller => $values) {
	if (in_array($controller, $BUILD_CONTROLLERS)) {
		foreach ($values as $k => $v) {
			/* @avr modplugin $plugin */
			$plugin = $modx->newObject('modPlugin');
			$plugin->fromArray(array(
				'id' => 0
				,'name' => $k
				,'category' => 0
				,'description' => @$v['description']
				,'plugincode' => getSnippetContent($sources['source_core'].'/elements/plugins/plugin.'.$v['file'].'.php')
				,'static' => BUILD_PLUGIN_STATIC
				,'source' => 1
				,'static_file' => 'core/components/'.PKG_NAME_LOWER.'/elements/plugins/plugin.'.$v['file'].'.php'
			),'',true,true);

			$events = array();
			if (!empty($v['events'])) {
				foreach ($v['events'] as $k2 => $v2) {
					$events[$k2] = $modx->newObject('modPluginEvent');
					$events[$k2]->fromArray(array(
						'event' => $v2,
						'priority' => 0,
						'propertyset' => 0,
					),'',true,true);
				}
				unset($v['events']);
			}

			if (!empty($events)) {
				$plugin->addMany($events);
			}

			$plugins[] = $plugin;
		}
	}
}

unset($tmp, $properties);
return $plugins;