<?php
    include '_templates/sitewide.php';
    $page['name'] = 'More Options';
    $page['title'] = 'More Options – Compute Freely';
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
        <h3>The possibilities are virtually endless in the free and open source operating ecosystem, these are a few more.</h3>
        <div id="more-list">
           <a href="https://www.gentoo.org/" target="_blank" class="distro" title="Visit project homepage for more information">
               <img class="logo" src="/img/logos/distro-gentoo.svg" alt="" title="Gentoo">
               <h1 class="name">Gentoo</h1>
               <p class="difficulty hard">Advanced</p>
               <p class="distro-text">Gentoo is a free operating system based on either Linux or FreeBSD that has extreme configurability, performance and a top-notch user and developer community.</p>
           </a>
            <a href="http://mageia.org/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-mageia.svg" alt="" title="Mageia">
                <h1 class="name">Mageia</h1>
                <p class="difficulty easy">Beginner</p>
                <p class="distro-text">The Mageia project aims to deliver a secure, stable and sustainable operating system. It's goal is to set up a stable and trustable governance to direct collaborative projects.</p>
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
            <a href="https://freebsd.org" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/freebsd.png" alt="" title="FreeBSD">
                <h1 class="name">FreeBSD</h1>
                <p class="difficulty bsd">BSD-Based</p>
                <p class="distro-text">FreeBSD is an advanced computer operating system used to power modern servers, desktops and embedded platforms. </p>
                <p class="distro-text">While it's not a Linux-based operating system it nevertheless deserves an honorable mention.</p>
            </a>
        </div>
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
                <p class="distro-text">Ubuntu MATE is a spin of Ubuntu that features the MATE desktop environment.</p>
                <p class="distro-text">MATE provides an intuitive and attractive desktop environment while using traditional desktop metaphors.</p>
            </a>
            <a href="https://ubuntugnome.org/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-ubuntu-gnome.svg" alt="" title="Ubuntu GNOME">
                <h1 class="name">Ubuntu GNOME</h1>
                <p class="difficulty ubuntu">Ubuntu-Based</p>
                <p class="distro-text">Ubuntu GNOME is a flavour of Ubuntu that features the GNOME desktop environment.</p>
                <p class="distro-text">The easy and elegant GNOME desktop is designed to put you in control and bring freedom to everybody.</p>
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
        <h3>Linux is the most used server operating system, and if you building a server these are a few worth mentioning.</h3>
        <div id="server-list">
            <a href="https://debian.org/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-debian.svg" alt="" title="Debian">
                <h1 class="name">Debian</h1>
                <p class="difficulty server">Server</p>
                <p class="distro-text">Debian's rock-stable and lower-powered nature make it perfect for server use.</p>
                <p class="distro-text"></p>
            </a>
            <a href="https://ubuntu.com/server" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-ubuntu.svg" alt="" title="Ubuntu">
                <h1 class="name">Ubuntu Server</h1>
                <p class="difficulty server">Server</p>
                <p class="distro-text">It's Ubuntu but for servers. Ubuntu's long-term support releases are oriented for server-use.</p>
            </a>
            <a href="https://getfedora.org/server" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-fedora.svg" alt="" title="Fedora">
                <h1 class="name">Fedora Server</h1>
                <p class="difficulty server">Server</p>
                <p class="distro-text">Fedora Server enables seasoned system administrators to make use of the very latest open source server-based technologies available.</p>
            </a>
            <a href="http://www.freenas.org/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-freenas.png" alt="" title="FreeNAS">
                <h1 class="name">FreeNAS</h1>
                <p class="difficulty server">Server</p>
                <p class="distro-text">FreeNAS is an operating system for can be used to turn any computer into a centralized and easily-accessible home for your data.</p>
            </a>
            <a href="http://www.openmediavault.org/" target="_blank" class="distro" title="Visit project homepage for more information">
                <img class="logo" src="/img/logos/distro-openmediavault.svg" alt="" title="OpenMediaVault">
                <h1 class="name">OpenMediaVault</h1>
                <p class="difficulty server">Server</p>
                <p class="distro-text">OpenMediaVault is a simple out-of-the-box solution for a home server or Network Attached Storage device that allows for ease management without deeper knowledge.</p>
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

<?php
    include $template['footer'];
?>