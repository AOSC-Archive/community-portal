<!DOCTYPE html>
<html lang=zh-CN>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Summary of AOSC OS">
    <meta name="author" content="Junde Yi<lmy441900@gmail.com>, Jeff Bai <jeffbaichina@members.fsf.org>">
    <link rel="icon" href="/img/favicons/aosc-os.ico">

    <title>AOSC OS - OOBP</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">

  </head>

  <body>

    <?php include '../../templates/aosc-os/navbar.php';?>

    <div class="container">

      <div class="blog-header">
      <img src="/img/os3.svg" height="150" width="150" align=right hspace="40" >
        <h1 class="blog-title">Out Of Box Preview</h1>
        <p class="lead blog-description">Alpha-level release of AOSC OS3</p>
      </div>

      <div class="row">

        <div class="col-sm-9 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Be Brave...</h2>
            <p class="lead blog-description">It looks fresh, and clean this time</p>
            <p>It's almost 2 months since the official start of AOSC OS3 project, while we are still struggling
			to maintain AOSC OS2 with loads of its issues coming, we are ready to show off some of our maintained 
			AOSC OS3 releases.
			<p>These Out Of Box Preview, for now, comes in the form of tarball (for now); a variety of editions
			(spins if you prefer) are released.
			<p>The following editions are ready for OOBP:
            <br /><br />
			<?php
            for ($a=1;$a<=3;$a++)
              echo '<img src="/img/oobp-logo/'.$a.'.png" id="img'.$a.'" alt="img'.$a.'" width="48">';
            ?>
			<br /><br />
			<p><h4><b>And here are the download links:</b></h4></p>
            <ul>
              <li> OOBP with Enlightenment, <a href="http://repo.anthonos.org/os3-releases/os3-next/OOBP/aosc-os3_oobp-enlightenment_mountain-of-faith_amd64_dpkg_stripped_20140821.tar.xz">DPKG/Apt</a>, <a href="http://repo.anthonos.org/os3-releases/os3-next/OOBP/aosc-os3_oobp-enlightenment_mountain-of-faith_amd64_rpm_stripped_20140821.tar.xz">RPM/Yum</a></li>
              <li> OOBP with Pantheon, <a href="http://repo.anthonos.org/os3-releases/os3-next/OOBP/aosc-os3_oobp-pantheon_fairy-wars_amd64_dpkg_stripped_20140821.tar.xz">DPKG/Apt</a>, <a href="http://repo.anthonos.org/os3-releases/os3-next/OOBP/aosc-os3_oobp-pantheon_fairy-wars_amd64_rpm_stripped_20140821.tar.xz">RPM/Yum</a></li>
              <li> OOBP with Xfce, <a href="http://repo.anthonos.org/os3-releases/os3-next/OOBP/aosc-os3_oobp-xfce_scarlet-devil_amd64_dpkg_stripped_20140821.tar.xz">DPKG/Apt</a>, <a href="http://repo.anthonos.org/os3-releases/os3-next/OOBP/aosc-os3_oobp-xfce_scarlet-devil_amd64_rpm_stripped_20140821.tar.xz">RPM/Yum</a></li>
            </ul>
			<br />
			<p><h4><b>How do I use them?</b></h4></p>
			<p>If you would really want to use a distribution in its Alpha stage, the mandatory skill would be
			RTFM (no, we mean Read The Fine Manuals). Basic steps to install and use these tarball releases were
			shown as below:
			<ul>
			  <li> Get a LiveCD or boot up another Linux distribution (must be x86_64);</li>
			  <li> Download the tarball(s);</li>
			  <li> Clear a partition (of course you can seperate /home, /boot, etc);</li>
			  <li> Mount the partition (TFM for "mount" command, <a href="http://linux.die.net/man/8/mount">here</a>);</li>
			  <li> Untar the tarball(s) (TFM for "tar" command, <a href="http://linux.die.net/man/1/tar">here</a>);</li>
			  <li> Configure domain name resolver (cp /etc/resolv.conf /path/to/mount/point/etc/);</li>
			  <li> Mount and bind /dev /proc /sys to OOBP;</li>
			  <li> "chroot" into OOBP (TFM for "chroot" command, <a href="http://linux.die.net/man/2/chroot">here</a>);</li>
			  <li> Install GRUB (search it up, man...);</li>
			  <li> Unmount the partition, and reboot;</li>
			  <li> Boom (if this happenned, report it on IRC or throw it on the <a href="http://bugs.anthonos.org">bug tracker</a>);</li>
			</ul><br />
			<p>Happy hacking...</p>
          </div>

        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <?php include '../../templates/portal/footer.php';?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery-min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
