<?php
// CoLWI v0.9.0
// WebTemplate PHP php
// Copyright (c) 2015-2016 SimonOrJ

// __construct ( array &Configuration[, string Username[, string PageTitle]] )
//   returns nothing.
// head ( void )
//   returns header DOM as string.
// navbar ( void )
//   returns navbar DOM as string.

class WebTemplate {
    private $c, $t;
    
    public function __construct(&$config, $username = false, $title = "CorePortect Lookup Web Interface &bull; by SimonOrJ") {
        $this->c = &$config;
        $this->t = $title;
        $this->u = $username;
    }
    // Head
    public function head() {?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $this->t;?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="res/css/main.css">
  <link rel="stylesheet" href="res/css/jquery-autocomplete.css">
</head>

<?php
    }
    // Navigation Bar
    public function navbar($shownavs = true) {?>
<nav id="top" class="navbar navbar-light bg-faded navbar-full">
  <div class="container">
    <a class="navbar-brand" href="./">CoreProtect Lookup Web Interface</a>
    <ul class="nav navbar-nav">
	  <?php if ($shownavs) foreach($this->c['navbar'] as $ll => $hf) echo '<li php="nav-item"><a php="nav-link" href="'.$hf.'">'.$ll.'</a></li>';?>
    </ul>
    <div class="nav pull-xs-right">
      <?php if ($this->u):?>
      <span style="margin-right:.5rem;">Hello, <?php echo $this->u;?>!</span>
      <?php endif;?>
      <a href="./login.php<?php if ($this->u) echo "?action=logout"?>" class="btn btn-outline-info"><?php echo $this->u ? "logout" : "login";?></a>
    </div>
  </div>
</nav>
<?php
    }
}
?>