<script type="text/javascript">
  window.setLatestBlagPost = function(tumblr_json) {
    var title = 'Untitled';
    
    // Grab latest blag post headline
    if (tumblr_json['posts'][0]['link-text']) {
      title = tumblr_json['posts'][0]['link-text'];
    } 
    else if (tumblr_json['posts'][0]['regular-title']) {
      title = tumblr_json['posts'][0]['regular-title'];
    }
    else if (tumblr_json['posts'][0]['slug']) {
      title = tumblr_json['posts'][0]['slug'];
    }
    else {
      title += ' ' + tumblr_json['posts'][0]['type'];
    }
    
    document.getElementById('blagLink').innerHTML = '<a href="' + tumblr_json['posts'][0]['url-with-slug'] + '">&nbsp;' + title +'&nbsp;</a>';
  }
</script>
<nav>
  <div class="mainNavContainer">
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
      <span id="blagLink">
        <noscript>
          <a href="http://huertanix.tumblr.com/">Visit Blag.dh</a>
        </noscript>
      </span>
      <!-- TODO: Redo this in PHP for Lynx users...-->
    </div>
  </div>
</nav>