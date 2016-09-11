<!--<h1>Articles Page</h1>-->
<!--
<ul>
  <*/?php foreach ($articles as $article) { ?>
  
  <li> 
      <h3> <*/?php echo $article['title'];?></h3>
      <p> <*/?php echo $article['content']  ;?></p>
     <form>
       <input type="text" name="comment" placeholder="Add Comment..."/>
       <input type="submit" value="Submit"/>
     </form>
  </li>
    
  <*/?php } ;?>
  
</ul>

-->
<!--<input type="text" name="searchP" placeholder="Search Title..."/><br><br>-->


<!--<div class="articles-list " ></div>-->
<?php 

$params['page']=2;
$params['limit']=3;
$articles2 = $articlesModel->getArticlesPaginated($params);

// print_r($page2 );
// print_r($articles);
?>

<div class="" id='articles'>
  <!--<nav aria-label="...">-->
  <!--  <ul class="pager">-->
  <!--    <li class="<?php // echo $this->ifPageNotExist($params['page'] - 1); ?>"><a href="<?php // echo BASE_URL . "articles?page=" . ($params['page'] - 1).$sQuery; ?>">Previous</a></li>-->
  <!--    <li class="<?php //  echo $this->ifPageNotExist($params['page'] + 1); ?>"><a href="<?php //  echo BASE_URL . "articles?page=" . ($params['page'] + 1).$sQuery;  ?>">Next</a></li>-->
  <!--  </ul>-->
  <!--</nav>  -->

  <?php  foreach($articles as $article) { ?>

  <div class="row article">
    <div class="col-md-6 col-xs-12 pull-right">
      <div class="panel panel-default info">
        <div class="panel-body ">

          <button class="btn category">CATEGORY</button>
          <h1>
            <?php echo $article["title"] ;?>
          </h1>
          <div class="row">
            <div class="col-sm-9">
              <?php echo shorten($article["content"],250) ;?>
            </div>
          </div>

        </div>
        <a data-id='<?php echo $article['id'] ;?>' class="btn read-more">Read more <i class="glyphicon glyphicon-chevron-right"></i> </a>

      </div>
    </div>
  </div>
  <?php } ?>
</div>

<div class="content">
  <div class="container">
    <div class="post-center">
      <h1>OTHER POSTS</h1>
      <hr>
    </div>

    <div class="row art">
      <?php foreach ($articles2 as $article) { ?>
    
      <div class="col-sm-4  item">
        <div class="cover">
          <img class="" src="http://www.2035themes.com/blogy/modern/wp-content/uploads/2014/10/modern-slide-5-470x370.jpg">
          <div class="cat">
            <a href="http://www.2035themes.com/blogy/modern/category/uncategorized/" rel="category tag">Uncategorized</a></li>
          </div>
        </div>
        <h1 class="artTitle"><?php echo shorten($article['title'], 18)  ;?></h1>
        
        <p>by A C | <?php echo date_format(date_create($article['cd']), "Fd,Y") ;?></p>
        
        <div><?php echo shorten($article["content"], 300);?></div>
        
        <a data-id='<?php echo $article['id'] ;?>' class="btn read-more">Read more <i class="glyphicon glyphicon-chevron-right"></i> </a>
      </div>
      
<?php  }; ?>

      <!--<div class="col-lg-4 col-sm-4 item">-->
      <!--  <div class="cover">-->
      <!--    <img class="" src="http://www.2035themes.com/blogy/modern/wp-content/uploads/2014/10/modern-slide-6-470x370.jpg">-->
      <!--    <div class="cat">-->
      <!--      <a href="http://www.2035themes.com/blogy/modern/category/uncategorized/" rel="category tag">Uncategorized</a></li>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--  <h1>Title</h1>-->
      <!--  <p>by name date</p>-->
      <!--  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip-->
      <!--    ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,-->
      <!--  </p>-->
      <!--  <a data-id='<?php// echo $article[' id ']?>' class="btn read-more">Read more <i class="glyphicon glyphicon-chevron-right"></i> </a>-->
      <!--</div>-->

      <!--<div class="col-lg-4 col-sm-4 item">-->
      <!--  <div class="cover">-->
      <!--    <img class="" src="http://www.2035themes.com/blogy/modern/wp-content/uploads/2014/10/modern-slide-7-470x370.jpg">-->
      <!--    <div class="cat">-->
      <!--      <a href="http://www.2035themes.com/blogy/modern/category/uncategorized/" rel="category tag">Uncategorized</a></li>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--  <h1>Title</h1>-->
      <!--  <p>by name date</p>-->
      <!--  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip-->
      <!--    ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,-->
      <!--  </p>-->
      <!--  <a data-id='<?php// echo $article[' id ']?>' class="btn read-more">Read more <i class="glyphicon glyphicon-chevron-right"></i> </a>-->
      <!--</div>-->

    </div>
  </div>
      <div class="message">No more Post!</div>
    <div class="loadergif asc"></div>
    
  <div class="load-more">
    <h1 class="loadMoreBtn">Load More</h1>
  </div>

  <footer>
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-sm-4">
          <div class="footer-widget">
            <h1>ABOUT BLOGY</h1>
            <hr>
            <img class="margint20" src='http://www.2035themes.com/blogy/modern/wp-content/uploads/2014/10/logo-light1.png'>
            <p class="margint20">Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, torta justo sit amet risus.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="footer-widget">
            <h1>MOST POPULAR</h1>
            <hr>
            <div class="row recent-post-box clearfix">
              <div class="col-lg-2 col-xs-2 recent-post-image">
                <img width="50" height="50" src="http://www.2035themes.com/blogy/modern/wp-content/uploads/2014/10/modern-slide-1-50x50.jpg" class="attachment-thumbnail wp-post-image" alt="modern-slide-1">
              </div>
              <div class="col-lg-10 col-xs-10 recent-post-title-cont ">

                <a href="http://www.2035themes.com/blogy/modern/2014/10/09/its-new-generation-blog/"> It’s new generation blog </a>
                <span class="recent-post-materials">
                      <p>
                          <a href="http://www.2035themes.com/blogy/modern/2014/10/09/modern-interface/">October 9</a>
                          &nbsp;&nbsp;&nbsp;<a href="http://www.2035themes.com/blogy/modern/category/uncategorized/" rel="category tag">Uncategorized</a>
                      </p>
                    </span>
              </div>
            </div>
            <div class="row recent-post-box clearfix">
              <div class="col-lg-2 col-xs-2 recent-post-image">
                <img width="50" height="50" src="http://www.2035themes.com/blogy/modern/wp-content/uploads/2014/10/modern-slide-2-50x50.jpg" class="attachment-thumbnail wp-post-image" alt="modern-slide-2">
              </div>
              <div class="col-lg-10 col-xs-10 recent-post-title-cont ">

                <a href="http://www.2035themes.com/blogy/modern/2014/10/09/modern-interface/"> Modern Interface </a>
                <span class="recent-post-materials">
                      <p>
                          <a href="http://www.2035themes.com/blogy/modern/2014/10/09/modern-interface/">October 9</a>
                          &nbsp;&nbsp;&nbsp;<a href="http://www.2035themes.com/blogy/modern/category/uncategorized/" rel="category tag">Uncategorized</a>
                      </p>
                  </span>
              </div>
            </div>
            <div class="row recent-post-box clearfix">
              <div class="col-lg-2 col-xs-2 recent-post-image">
                <img width="50" height="50" src="http://www.2035themes.com/blogy/modern/wp-content/uploads/2014/10/modern-slide-8-50x50.jpg" class="attachment-thumbnail wp-post-image" alt="modern-slide-8">
              </div>
              <div class="col-lg-10 col-xs-10 recent-post-title-cont ">

                <a href="http://www.2035themes.com/blogy/modern/2014/09/08/fermentum-aenean/"> Fermentum Aenean </a>
                <span class="recent-post-materials">
                        <p>
                          <a href="http://www.2035themes.com/blogy/modern/2014/10/09/modern-interface/">October 9</a>
                          &nbsp;&nbsp;&nbsp;<a href="http://www.2035themes.com/blogy/modern/category/uncategorized/" rel="category tag">Uncategorized</a>
                      </p>
                    </span>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </footer>
