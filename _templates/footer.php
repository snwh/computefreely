<!-- Jump links -->
<script type="text/javascript">
     // This is a functions that scrolls to #{blah}link
    function goToByScroll(id){
          // Remove "-link" from the ID
        id = id.replace("-link", "");
          // Scroll
        $('html,body').animate({
            scrollTop:$("#"+id).offset().top - 64},
            'slow');
    }

    $(".jump-link").click(function(e) { 
        // Prevent a page reload when a link is pressed
        e.preventDefault(); 
        // Call the scroll function
        goToByScroll($(this).attr("id"));         
    });
</script>

<!-- Footer -->
<footer>
    <p><a href="/" style="border:none;font-weight:bold;">Compute Freely</a> – a friendly place to start for the Free &amp; Open Source Software and Linux curious.</p>
    <p>Brought to you and created by <a href="http://samuelhewitt.com/" target="_blank">Sam Hewitt</a>, thank him with a <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=M5X9J2ED2PF66" target="_blank">coffee</a>. &#x1F60A;</p>
    <p>This site has been in no way endorsed by any of the featured projects.</p>  
    <div class="footer-list">
        <span><a href="/terms">Terms</a></span>
        <span><a href="/privacy-policy">Privacy Policy</a></span>
        <span><a href="https://github.com/snwh/computefreely/" target="_blank">Source Code</a></span>
        <span><a href="https://github.com/snwh/computefreely/issues" target="_blank">Site Issues</a></span>
    </div> 
</footer>
<!--[if lt IE 9]>
    <div id="legacy-warning">
        <h1>The Compute Freely website is built on modern web technologies your browser doesn&rsquo;t support.</h1>

        <p>This version of Internet Explorer is out of date and may contain bugs or security vulnerabilities. Please <a href="http://browsehappy.com/">upgrade</a> to IE 11 or an alternative web browser.</p>

        <div id="legacy-warning-buttons">
            <a href="#" onClick="document.getElementById('legacy-warning').style.display = 'none';">Dismiss</a>

            <a class="suggested-action" href="http://browsehappy.com/" target="_blank">Learn More</a>
        </div>
    </div>
<![endif]-->
</body>
</html>