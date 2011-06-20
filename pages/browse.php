<?php require_once( 'core.php' ); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo plugin_lang_get( 'browse' ); ?></title>
<script type="text/javascript" src="<?php echo plugin_file("flashobject.js"); ?>"></script>
<style type="text/css">

	/* hide from ie on mac \*/
	html {
		height: 100%;
		overflow: hidden;
	}

	#flashcontent {
		height: 100%;
	}
	/* end hide */

	body {
		height: 100%;
		margin: 0;
		padding: 0;
		background-color: #9999ff;
	}

</style>
<script language="javascript">
function giveFocus()
    {
      document.visorFreeMind.focus();
    }
</script></head>
<body onLoad="giveFocus();">

	<div id="flashcontent" onmouseover="giveFocus();">
		 Flash plugin or Javascript are turned off.
		 Activate both  and reload to view the mindmap
	</div>

	<script type="text/javascript">
		// <![CDATA[
		var fo = new FlashObject("<?php echo plugin_file("visorFreemind.swf"); ?>", "<?php echo plugin_lang_get( 'browse' ); ?>", "100%", "100%", 6, "#9999ff");
		fo.addParam("quality", "high");
		fo.addParam("bgcolor", "#a0a0f0");
		fo.addVariable("openUrl", "_blank");
		fo.addVariable("startCollapsedToLevel","3");
		fo.addVariable("maxNodeWidth","200");
		//
		fo.addVariable("mainNodeShape","elipse");
		fo.addVariable("justMap","false");
		fo.addVariable("initLoadFile", "<?php echo plugin_page( 'freemind' ); ?>");
		fo.addVariable("defaultToolTipWordWrap",200);
		//fo.addVariable("offsetX","left");
		//fo.addVariable("offsetY","top");
		fo.addVariable("buttonsPos","top");
		fo.addVariable("min_alpha_buttons",20);
		fo.addVariable("max_alpha_buttons",100);
		fo.addVariable("scaleTooltips","false");

		fo.write("flashcontent");
		// ]]>
	</script>
</body>
</html>
