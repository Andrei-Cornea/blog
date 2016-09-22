<div class="admin-page">
  
<!--<h1>Admin Page</h1>-->

<?php// var_dump($result); ?>
<div class="container">
  
  <div class="row">
    <h1 class="col-sm-11">Welcome <?php echo $_SESSION["name"] ?> </h1>
    <h1 class="col-sm-1 ">
        <a  class="btn btn-default btn-lg btn-red" href="<?php echo BASE_URL;?>logout">LogOut</a>
    </h1>
  </div><br><br>
  <div class="row">
    
    <div class="form-panel panel panel-default article-form-wrapper" >
      <div class="panel-body ">
        <form class="form-horizontal " id="article-form" onsubmit="return false;">
          <input type="hidden" name="id" >
          <div class="form-group">
              <input type="text" class="form-control" name="title" placeholder="Title..."/><br>
          </div>
           <div class="form-group">
              <textarea class="form-control" rows="4" cols="21" name="content" placeholder="Content..."></textarea><br>
           </div>
          <input type="submit" class="btn btn-default btn-red"id="article-submit" name="submit" value="SUBMIT"/>
        </form>
      </div>
    </div><br><br>
  
  </div>
  <hr>
  <div class="row">
    <div class=" col-sm-3 pull-right input-group input-group-lg search-bar">
      <input type="text" class="form-control" name="search" placeholder="Search Title..."/><br><br>
      <span class="input-group-addon" id="sizing-addon1"> <i class="glyphicon glyphicon-search"></i> </span>
    </div>
  </div>

</div><br><br>


<div class="container">
  <div class="articles-list" id="a"></div>
</div>
  
</div>
