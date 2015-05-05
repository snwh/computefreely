<?php
    include '_templates/sitewide.php';
    $page['name'] = '404';
    $page['title'] = 'Page Not Found – Compute Freely';
    include $template['header'];
?>

<!-- Header -->
<header>
    <div class="header-items">
        <a href="/" class="header-item header-link left" title="Home">Home</a>
    </div>
</header>

<!-- Main -->
<div id='main'>
    <section >
        <h1>404 - Page Not Found</h1>
        <h3>This is not the page you're looking for.</h3>
    </section>
</div>

<?php
    include $template['footer'];
?>