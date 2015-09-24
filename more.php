<?php
    include '_templates/sitewide.php';
    $page['name'] = 'More';
    $page['title'] = 'More – Compute Freely';
    include $template['header'];
?>

<!-- Header -->
<header>
    <div class="header-items">
        <a href="/#distros" class="header-item header-link left" title="back"><i class="fa fa-angle-left"></i>Back</a>
    </div>
</header>

<!-- CSS Import -->
<style type="text/css">@import url(/css/distros.css);</style>
<style type="text/css">@import url(/css/more.css);</style>

<!-- More Section -->
<div class="row first" id='more'>
    <section class="distro-section">
        <h1>More options!</h1>
        <h3>Stuff</h3>
        <div id="more-list">
            <a href="http://mageia.org/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-mageia.svg" alt="" title="Mageia">
                <h1 class="name">Mageia</h1>
                <p class="difficulty easy">Beginner</p>
                <p class="distro-text">Kubuntu is a spin of Ubuntu that uses the Plasma desktop environment as default.</p>
                <p class="distro-text">Plasma Desktop offers a beautiful looking desktop that takes complete advantage of modern computing technology.</p>
            </a>
            <a href="https://manjaro.github.io/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-manjaro.svg" alt="" title="Manjaro">
                <h1 class="name">Manjaro</h1>
                <p class="difficulty medium">Intermediate</p>
                <p class="distro-text">Manjaro is a user-friendly GNU/Linux distribution based on the independently developed Arch Linux.</p>
            </a>
            <a href="http://www.slackware.com/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-slackware.svg" alt="" title="Slackware">
                <h1 class="name">Slackware</h1>
                <p class="difficulty hard">Advanced</p>
                <p class="distro-text">Slackware aims for design stability and simplicity and it makes as few modifications as possible to software packages from upstream and tries not to anticipate use cases or preclude user decisions.</p>
            </a>
            <a href="https://www.centos.org/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-centos.svg" alt="" title="CentOS">
                <h1 class="name">CentOS</h1>
                <p class="difficulty medium">Intermediate</p>
                <p class="distro-text">CentOS is a free of cost, enterprise-class Linux distribution. Created as an alternative to Red Hat Enterprise Linux</p>
            </a>
        </div>
        <!-- Randomize list -->
        <script type="text/javascript">
        // For those who may scream "This is biased! Why is [X] first?!"
        var list = document.getElementById('more-list');
        for (var i = list.children.length; i >= 0; i--) {
            list.appendChild(list.children[Math.random() * i | 0]);
        }
        </script>
    </section>
</div>

<!-- Ubuntu-Based Section -->
<div class="row" id='ubuntu-based'>
    <section class="distro-section">
        <h1>Ubuntu Based</h1>
        <h3>Ubuntu itself is frequently used as the basis for many other Linux distributions, most are created and development by members of Ubuntu's massive community.</h3>
        <div id="distro-list">
            <a href="https://kubuntu.org/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-kubuntu.svg" alt="" title="Kubuntu">
                <h1 class="name">Kubuntu</h1>
                <p class="difficulty ubuntu">Ubuntu-Based</p>
                <p class="distro-text">Kubuntu is a spin of Ubuntu that uses the Plasma desktop environment as default.</p>
                <p class="distro-text">Plasma Desktop offers a beautiful looking desktop that takes complete advantage of modern computing technology.</p>
            </a>
            <a href="http://xubuntu.org/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-xubuntu.svg" alt="" title="Xubuntu">
                <h1 class="name">Xubuntu</h1>
                <p class="difficulty ubuntu">Ubuntu-Based</p>
                <p class="distro-text">Xubuntu is an elegant and easy to use operating system. Xubuntu comes with Xfce, which is a stable, light and configurable desktop environment.</p>
            </a>
            <a href="http://lubuntu.net/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-lubuntu.svg" alt="" title="Lubuntu">
                <h1 class="name">Lubuntu</h1>
                <p class="difficulty ubuntu">Ubuntu-Based</p>
                <p class="distro-text">Lubuntu uses the minimal desktop LXDE, and a selection of lightweight application to focus on speed and energy-efficiency</p>
            </a>
            <a href="https://ubuntu-mate.org/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-ubuntu-mate.svg" alt="" title="Ubuntu MATE">
                <h1 class="name">Ubuntu MATE</h1>
                <p class="difficulty ubuntu">Ubuntu-Based</p>
                <p class="distro-text">Ubuntu has a very large userbase and community, as such it has a wealth of contributed support resources.</p>
                <p class="distro-text">Ubuntu also receives the most attention from third-party app developers and companies.</p>
            </a>
            <a href="https://ubuntugnome.org/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-ubuntu-gnome.svg" alt="" title="Ubuntu GNOME">
                <h1 class="name">Ubuntu GNOME</h1>
                <p class="difficulty ubuntu">Ubuntu-Based</p>
                <p class="distro-text">Ubuntu GNOME is a flavour of Ubuntu that features the GNOME desktop environment.</p>
            </a>
        </div>
        <!-- Randomize list -->
        <script type="text/javascript">
        // For those who may scream "This is biased! Why is [X] first?!"
        var list = document.getElementById('distro-list');
        for (var i = list.children.length; i >= 0; i--) {
            list.appendChild(list.children[Math.random() * i | 0]);
        }
        </script>
    </section>
</div>

<!-- Servers Section -->
<div class="row" id='servers'>
    <section class="distro-section">
        <h1>Server Operating Systems</h1>
        <h3>Linux is the most used server operating system, and if you're into building a server these are a few good ones.</h3>
        <div id="server-list">
            <a href="https://debian.org/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-debian.svg" alt="" title="Debian">
                <h1 class="name">Debian</h1>
                <p class="difficulty server">Server</p>
                <p class="distro-text">Debian's rock-stable nature and long development cycle make it perfect for server use.</p>
                <p class="distro-text"></p>
            </a>
            <a href="https://ubuntu.com/server" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-ubuntu.svg" alt="" title="Ubuntu">
                <h1 class="name">Ubuntu Server</h1>
                <p class="difficulty server">Server</p>
                <p class="distro-text">Ubuntu Server</p>
            </a>
            <a href="https://getfedora.org/server" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-fedora.svg" alt="" title="Fedora">
                <h1 class="name">Fedora Server</h1>
                <p class="difficulty server">Server</p>
                <p class="distro-text">Fedora Server is a server operating system that enables seasoned system administrators experienced with any OS to make use of the very latest server-based technologies available in the open source community.</p>
            </a>
            <a href="https://www.centos.org/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-centos.svg" alt="" title="CentOS">
                <h1 class="name">Cent OS</h1>
                <p class="difficulty server">Server</p>
                <p class="distro-text">Cent OS is a free of cost, enterprise-class Linux distribution. Created as an alternative to Red Hat Enterprise Linux</p>
            </a>
        </div>
        <!-- Randomize list -->
        <script type="text/javascript">
        // For those who may scream "This is biased! Why is [X] first?!"
        var list = document.getElementById('server-list');
        for (var i = list.children.length; i >= 0; i--) {
            list.appendChild(list.children[Math.random() * i | 0]);
        }
        </script>
    </section>
</div>

<!-- bsd Section -->
<div class="row last" id='bsd'>
    <section class="distro-section">
        <h1>The BSD Operating Systems</h1>
        <h3>Free and open source BSD (Berkeley Software Distribution) operating systems are not Linux but they deserve an honorable mention.</h3>
        <div id="bsd-list">
            <a href="https://freebsd.org" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/freebsd.png" alt="" title="FreeBSD">
                <h1 class="name">FreeBSD</h1>
                <p class="difficulty bsd">BSD</p>
                <p class="distro-text">FreeBSD is an advanced computer operating system used to power modern servers, desktops and embedded platforms. </p>
            </a>
        </div>
        <!-- Randomize list -->
        <script type="text/javascript">
        // For those who may scream "This is biased! Why is [X] first?!"
        var list = document.getElementById('bsd-list');
        for (var i = list.children.length; i >= 0; i--) {
            list.appendChild(list.children[Math.random() * i | 0]);
        }
        </script>
    </section>
</div>

<?php
    include $template['footer'];
?>