<?php
    include '_templates/sitewide.php';
    $page['title'] = 'Copying & Terms';
    include $template['header'];
?>

<!-- Header -->
<header>
    <div class="header-items">
        <a href="/" class="header-item header-link left" title="back"><i class="fa fa-angle-left"></i>Back</a>
    </div>
</header>

<!-- Main -->
<div class="row first" id='main'>
    <section>
        <h1>Copying &amp; Terms</h1>
        <p>This website is copyright © 2015 Sam Hewitt, with some rights reserved (very little actually).</p>
        <p>The site's contents (written &amp; drawn stuff) are licensed under the <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/legalcode" target="_blank">Creative Commons Attribution-ShareAlike 4.0</a>, unless otherwise noted.</p>
        <p>Any unique source code (which is most of the site) is free software, licensed under the terms of the <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>, unless otherwise noted. Any non-unique elements (such as bundled JavaScript resources) are licensed under the terms of their accompanying licenses, or stated within their source code.</p>
        <p>All logos used are trademarks of their respective projects and this site has been in no way endorsed by any of the featured projects.</p>
        <p>Thanks! &#x1F60A;</p>
    </section>
</div>

<?php
    include $template['footer'];
?>