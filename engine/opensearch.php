<?php
/*
=====================================================
 DataLife Engine v14.0
-----------------------------------------------------
 Persian support site: http://datalifeengine.ir
-----------------------------------------------------
 Contact us with: info@datalifeengine.ir
=====================================================
 Copyright (c) 2006-2020, All rights reserved.
=====================================================
 File: opensearch.php
-----------------------------------------------------
 Use: OpenSearch
=====================================================
*/

if( !defined( 'DATALIFEENGINE' ) ) {
	header( "HTTP/1.1 403 Forbidden" );
	header ( 'Location: ../' );
	die( "Hacking attempt!" );
}

require_once (DLEPlugins::Check(ENGINE_DIR . '/classes/templates.class.php'));

$tpl = new dle_template();
$tpl->dir = ROOT_DIR . '/templates';
define( 'TEMPLATE_DIR', $tpl->dir );

$tpl->load_template( 'opensearch.tpl' );

$tpl->set( '{path}', $config['http_home_url'] );

$tpl->compile( 'main' );

header( 'Content-type: application/xml' );

echo $tpl->result['main'];

die();
?>