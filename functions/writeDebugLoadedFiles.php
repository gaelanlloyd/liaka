<?php

function writeDebugLoadedFiles() {

	global $loadFile;

	ob_start();

	echo "<h5>" . __t('LoadedFiles') . "</h5>";
	echo "<pre>";

	foreach ($loadFile as $file) {
		echo $file;
		echo "\n";
	}

	echo "</pre>";

	$out = ob_get_clean();
	return $out;

}