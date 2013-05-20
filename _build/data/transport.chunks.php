<?php
/**
 * Add chunks to build
 * 
 * @package office
 * @subpackage build
 */

$chunks = array();

$tmp = array(
	'tpl.Office.item' => array(
		'file' => 'item'
		,'description' => 'Chunk for Items.'
	)
);

foreach ($tmp as $k => $v) {
	/* @avr modChunk $chunk */
	$chunk = $modx->newObject('modChunk');
	$chunk->fromArray(array(
		'id' => 0
		,'name' => $k
		,'description' => @$v['description']
		,'snippet' => file_get_contents($sources['source_core'].'/elements/chunks/chunk.'.$v['file'].'.tpl')
		//,'static' => 1
		//,'static_file' => 'core/components/office/elements/chunks/chunk.'.$v['file'].'.tpl'
	),'',true,true);

	$chunks[] = $chunk;
}

unset($tmp);
return $chunks;