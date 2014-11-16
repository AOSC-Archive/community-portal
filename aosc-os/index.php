<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" />
    <meta name="description" content="Homepage of AOSC OS" />
    <meta name="author" content="Junde Yi&lt;lmy441900@gmail.com&gt;, Jeff Bai &lt;jeffbacihina@members.fsf.org&gt;" />
    <link rel="icon" href="/img/favicons/aosc-os.ico" />
    <title>AOSC OS - Home</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet" />
    <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/font.php'; ?>
  </head>
  <body><?php include $_SERVER['DOCUMENT_ROOT'].'/templates/aosc-os/navbar.php';?>
  <div class="jumbotron">
    <div class="container section-welcome">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-8 col-xs-12">
            <h1>AOSC OS</h1>
            <p>The Origin of Better and Faster Linux Distribution</p>
          </div>
          <div class="col-sm-3 col-sm-offset-1 shortcuts hidden-xs">
            <img src="/img/os3.png" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="col-sm-9 col-sm-offset-1 blog-main">
      <div class="row">
        <h1>What is AOSC OS?</h1>
        <p>AOSC OS is the Linux distribution project of AOSC.</p>
        <p>AOSC OS is built independently, with some reference from some of the greatest Linux distributions from all over the
        world, namely Fedora, Arch Linux and Debian, etc. The system was initially built with bits and parts from the Linux from
        Scratch instruction workbook.</p>
        <p>While studying from other great role models, AOSC OS has its own feature set.</p>
        <ul>
          <li>AOSC OS is adapted to most of the newest technologies;</li>
          <li>AOSC OS is systemd centric, and has fully deprecated Init compatibility modules (as of AOSC OS3);</li>
          <li>AOSC OS has a number of user experience improvements, while preserving the basic gene of Linux desktop (no Windows
          clones here!);</li>
          <li>AOSC OS supports both DPKG and RPM as default package manager (as of AOSC OS3), and we have plans for more Package
          Manager support;</li>
        </ul>
        <p>While mainly being a desktop oriented Linux distribution, AOSC OS has plans on support for small scaled server, too.
        CentralPoint, as a predecessor, will become AOSC OS for Servers (as an edition of AOSC OS3).</p>
        <p>AOSC OS tries to be anything it can be, with its standardized system infrastructure and rich software selection. AOSC OS
        can be a good choice for your daily Linux usage!</p>
      </div>
    </div>
  </div>
  <hr class="divider" />
  <div class="container">
    <div class="col-sm-9 col-sm-offset-1 blog-main">
      <div class="row">
        <h1>How do you develop AOSC OS?</h1>
        <p>AOSC OS develops in a year round cycle. For example, 2013 - 2014 our outcome was AOSC OS2, with AnthonOS based on it.</p>
        <p>AOSC OS was built with a toolkit called Autobuild, to help us build software packages. Autobuild is capable of abstracting package managers in a configuration file manner. One package comes with one Autobuild configuration archive.</p>
        <p>Prior to AOSC OS3, AOSC OS will divide into different distributions like the former AnthonOS and CentralPoint in the following spring after the start of the cycle. Starting from AOSC OS3, no division will be made all around the year, and here is a conversion list of the distribution names.</p>
        <ul>
          <li><b>AOSC OS with $DE (Desktop Environment name) is the former AnthonOS;</b></li>
          <li><b>AOSC OS for Servers is the former CentralPoint;</b></li>
        </ul>
        <p>Overall AOSC OS was developed in cycles, in every cycle we bring in new improvements and changes to the system distribution, for good of course.</p>
      </div>
    </div>
  </div>
  <br />

  <!-- /.container -->
  <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php';?>
  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="/js/jquery-min.js"></script> 
  <script src="/js/bootstrap.min.js"></script></body>
</html>
