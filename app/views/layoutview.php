<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php echo $title ;?>
  </title>
  <script src="//code.jquery.com/jquery-3.1.0.js" integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.css" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo CSS ;?>style.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
</head>

<body>

  <div class="side-menu hide-bar">
    <nav class="navbar navbar-default  ">
      <div class="col-xs-12">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a class="glyphicon glyphicon-remove  menu-close"></a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="author-section ">
      <p class="title">INSTAGRAM SLIDER</p>

      <div class=" margint20" style="overflow: hidden; position: relative;">
        <ul class="slides" style="width: 800%; transition-duration: 0s; transform: translate3d(-900px, 0px, 0px);">
          <li class="" style="width: 283px; float: left; display: block;">
            <a href="https://instagram.com/p/BJSG0Ncj4tS" target="_blank" title="">
              <img src="https://scontent.cdninstagram.com/t51.2885-15/e35/13671244_1293401647337822_149459502_n.jpg?ig_cache_key=MTMyMDE0NzYxNjkwMjY0NjYxMA%3D%3D.2" alt="" title="" draggable="false">
            </a>
          </li>
          <li style="width: 283px; float: left; display: block;" class="">
            <a href="https://instagram.com/p/9n8arUoVzm" target="_blank" title="">
              <img src="https://scontent.cdninstagram.com/t51.2885-15/e35/11909236_1671937493077955_804964107_n.jpg?ig_cache_key=MTExMDEyMTU0OTE4NDE5NTgxNA%3D%3D.2" alt="" title="" draggable="false">
            </a>
          </li>
          <li style="width: 283px; float: left; display: block;" class="">
            <a href="https://instagram.com/p/9n8ZfrIVzg" target="_blank" title="">
              <img src="https://scontent.cdninstagram.com/t51.2885-15/e35/11909188_1684215351794779_786295789_n.jpg?ig_cache_key=MTExMDEyMTQ2Nzk1NzMwNDU0NA%3D%3D.2" alt="" title="" draggable="false">
            </a>
          </li>
          <li style="width: 283px; float: left; display: block;" class="flex-active-slide">
            <a href="https://instagram.com/p/9n8XpDoVza" target="_blank" title="">
              <img src="https://scontent.cdninstagram.com/t51.2885-15/e35/10296896_426520644208934_1396807173_n.jpg?ig_cache_key=MTExMDEyMTM0MDU5MzA2OTI3NA%3D%3D.2" alt="" title="" draggable="false">
            </a>
          </li>
        </ul>
      </div>

      <div class="author-cover-background margint20" style="background: url('http://www.2035themes.com/blogy/modern/wp-content/uploads/2014/10/dark-background-1.jpg'); background-size:cover;">
      </div>
      <div class="author-avatar">
        <img height="100" width="100" src="<?php echo IMG.'me.jpg';?>" class="img-circle">
      </div>
      <div class="author-details text-center">
        <h2>ANDREI</h2>
        <p class="margint20">Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
      </div>
      <form>
        <fieldset>
          <legend>CURRENTLY</legend>
          <div class="works-details">
            <p><i class="fa fa-apple"></i>Web Developer TO BE!</p>
            <p><i class="fa fa-map-marker f-icon"></i>in <span class="active-color">Cluj-Napoca</span></p>
            <p><i class="fa fa-circle f-icontwo"></i>Avaible for Freelance</p>
          </div>
        </fieldset>
      </form>
    </div>
  </div>

  <div class="body-section">

    <?php 
        include VIEWS."menuview.php";
        
        include $PageContent;
      ?>
    <!-- The Modal -->
    <div id="SearchModal" class="modal">

      <!-- Modal content -->
      <p class="closeBtn" data-dismiss="modal" aria-label="Close">x</p>
      <div class="modal-content">
        <input autofocus type="text" id="search" name="searchP" placeholder="Search Title..." /><br><br>
        <div class="search-results"></div>
      </div>

    </div>
  </div>


  <script rel="stylesheet" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.15.1/jquery.validate.js" /></script>
  <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.15.1/additional-methods.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/umd/tooltip.js" integrity="sha256-ziCfLy91WAidvbK53uuAfylbZ/UvOKVn/X+Q32qBfxI=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo JS ;?>main.js"></script>
</body>

</html>