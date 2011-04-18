<nav class="mainNavContainer">
	<a href="volunteerism.php">&nbsp;david volunteers&nbsp;</a>
	<br />
	<br />
	<a href="resume.php">&nbsp;david works&nbsp;</a>
	<br />
	<br />
	<a href="talks.php">&nbsp;david speaks&nbsp;</a>
	<br />
	<br />
	<a href="creations.php">&nbsp;david creates&nbsp;</a>
	<br />
	<br />
	<a href="contact.php">&nbsp;contact david&nbsp;</a>
	<br />
	<div class="currentStatuses">
		<b>blag.dh:</b>
		<script type="text/javascript">
			// Check for tumblebeasts
			if (tumblr_api_read)
			{		
	    		// Grab latest blag post headline
	    		document.write('<a href="' + tumblr_api_read['posts'][0]['url-with-slug'] + '">&nbsp;' 
					+ tumblr_api_read['posts'][0]['link-text'] +'&nbsp;</a>');
			}
			else
			{
				document.write('brb tumblebeasts');
			}
		</script>
		<noscript>
			<a href="http://huertanix.tumblr.com/">Visit Blag.dh</a>
		</noscript>
		<!-- TODO: Redo this in PHP for Lynx users...-->
	</div>
</nav>