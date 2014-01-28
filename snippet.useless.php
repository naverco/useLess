<?php
#
#  Snippet: useLess
#
#  Description: Use Less with MODx Evolution.
#
#  Version: 0.5 (2014/01/27)
#
#  Author: Holger Meier
#  
#  Purpose: This snippet calls the lessphp compiler by Leaf Corcoran.
#
#  Usage: [!useLess? &lessString=`{{AllYourLessCode}}` &lessCompress=`yes` !]
#
#  Parameters:
#    lessString    =   Less source code
#    lessCompress  =   Set to "yes" to compress all the unrequired whitespace.
#
#  Notes:
#  1. Not all lessphp parameters are supported, yet.
#  2. MODx uses gzip compression when transfering documents to the browser. While
#     this is a good thing, older versions of Internet Explorer do not load those
#     documents when they are called using <link>-elements. Load these documents
#     directly in the local CSS using the @import at-rule instead.
#     
#
###################################	
	
# path and filename of lessphp #
$useLess_base = isset($useLess_base) ? $modx->config['base_path'].$useLess_base : $modx->config['base_path']."assets/snippets/useLess/";
$useLess_Include=$useLess_base.'lessc.inc.php';

if (file_exists($useLess_Include)) {
	# include lessphp #
	require_once($useLess_Include);

	# new less object #
	$less = new lessc;

	# Compression ? #
	if ('yes'==$lessCompress) { $less->setFormatter("compressed"); }

	# If there is something to compile, compile it ... #
	if ( (isset($lessString)) && (!isset($cssOtputFile)) ) {
		$useLess_Output=$less->compile($lessString);
	}

} else {
	# Error #
	$useLess_Output='ERROR: Less compiler not found!';
}

return $useLess_Output;
?>