<div class="article-page ">
  <!--<h1><?php echo $title ?></h1>-->
  <div class="container ">
    <h1 class="title"><?php echo $article["title"];?>
</h1>
    <div class="article-info "> 
    <span class="article-author"> <i class="fa fa-user"></i> A C </span> 
    <span class="article-date"> <i class="fa fa-clock-o"></i> <?php echo date_format(date_create($article['cd']), "Fd,Y");?></span> 
    <span> <i class="fa fa-comments"></i> <c class="comments-nr"></c> Comments </span> <span class="article-category"> <i class="fa fa-tags"></i> </span> </div>
    <div class="margint30 article-preview">
      <?php echo shorten($article["content"], 100);?>
    </div>
  </div>
  <hr>
  <div class="container">
    <div class="article-content">
      <?php echo $article["content"];?>
    </div>
    
    <div class="post-tools margint30 modern-post-share clearfix">
        <div class="col-xs-12 col-sm-8">
            <div class="pull-left ">
                <div class="blog-post-tag clearfix ">
                <span><i class="fa fa-tags"></i></span><b class="tag-title-post">TAGS :</b>  <a href="http://www.2035themes.com/blogy/modern/tag/design/" rel="tag">design</a> | <a href="http://www.2035themes.com/blogy/modern/tag/interface/" rel="tag">interface</a> | <a href="http://www.2035themes.com/blogy/modern/tag/modern/" rel="tag">modern</a>  <div class="clear"></div>                                    </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 share-mobile-check ">
            <div class="">
                <div class="blog-post-share clearfix nav nav-tabs">
                    <div class="pull-left"><i class="fa fa-share-alt"></i><span class="tag-title-post"><b>SHARE :<b> </span></div>
                    <div class="share-tools pull-left">
                        <ul class="nav nav-tabs">
                            <li><a href="http://www.facebook.com/sharer.php?u=http://www.2035themes.com/blogy/modern/2014/10/09/modern-interface/&amp;t=Modern Interface" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/share?url=http://www.2035themes.com/blogy/modern/2014/10/09/modern-interface/&amp;text=Modern Interface" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://pinterest.com/pin/create/button/?source_url=http://www.2035themes.com/blogy/modern/2014/10/09/modern-interface/&amp;media=http://www.2035themes.com/blogy/modern/wp-content/uploads/2014/10/modern-slide-2-300x200.jpg&amp;description=Modern Interface" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="https://plus.google.com/share?url=http://www.2035themes.com/blogy/modern/2014/10/09/modern-interface/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Google Plus"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row margint30 author-snippet">
      <div class="col-sm-2">
        <div class=" author-avatar"> <img src="<?php echo IMG.'me.jpg';?>" class="img-circle"> </div>
      </div>
      <div class="col-sm-10">
        <p>
          <h2>A C</h2> <em>Developer</em> </p>
        <p>Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas faucibus mollis interdum.</p>
        <div class="margint30 author-social-media">
          <ul class="nav nav-tabs">
            <li class="home"><a target="_blank" href="http://2035themes.com"><i class="fa fa-home"></i></a></li>
            <li class="behance"><a class="has-tooltip" data-toggle="tooltip" data-placement="top" title="behance" target="_blank" href="http://behance.net/22035themes" data-original-title="Behance"><i class="fa fa-behance "></i></a></li>
            <li class="dribbble"><a class="has-tooltip" data-toggle="tooltip" data-placement="top" title="" target="_blank" href="http://dribbble.com/alidemirci" data-original-title="Dribbble"><i class="fa fa-dribbble "></i></a></li>
            <li class="facebook"><a class="has-tooltip" data-toggle="tooltip" data-placement="top" title="" target="_blank" href="httpp://facebook.com/2035themes" data-original-title="Facebook"><i class="fa fa-facebook "></i></a></li>
            <li class="twitter"><a class="has-tooltip" data-toggle="tooltip" data-placement="top" title="" target="_blank" href="httpp://twitter.com/2035themes" data-original-title="Twitter"><i class="fa fa-twitter "></i></a></li>
            <li class="user_email"><a class="has-tooltip" data-toggle="tooltip" data-placement="top" title="" href="mailto:info2@2035themes.com" data-original-title="Send E-mail"><i class="fa fa-envelope "></i></a></li>
            <li class="rss"><a class="has-tooltip" data-toggle="tooltip" data-placement="top" title="" target="_blank" href="http://www.2035themes.com/blogy/modern/author/admin/feed/" data-original-title="Rss Feed"><i class="fa fa-rss"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <h3 class="margintb40">COMMENTS</h3>
    <div class="row">
      <div class="col-sm-12 coments-wrapper">
        <p class="col-sm-12 comments-info"> <b> <a href="#comments-list "><span class="comments-nr"></span> COMMENTS</a> </b> <b> <a class=" pull-right" href="#submit-comment">LEAVE A COMMENT</a> </b> </p>
        <div class="col-sm-12 comments-list " id="comments-list"></div>
      </div>
    </div>
    <h3 class="margintb40">LEAVE A REPLY</h3>
    <!--<form id="comment-form" method="POST" onsubmit="return false">-->
    <!-- <input type="hidden" name="id" value="<?php //echo $article['id'] ?>"> -->
    <!-- <input type="name" name="name" placeholder="Enter your name"/>-->
    <!-- <input type="email" name="email" placeholder="Enter your email"/>-->
    <!-- <input type="text" name="comment" placeholder="Enter your comment"/>-->
    <!-- <button id="submit-comment">Submit</button>-->
    <!--</form>-->
    <div class="row marginb30 comment-form-wrapper">
      <div class="col-sm-12">
        <form id="comment-form" method="POST" onsubmit="return false">
          <p>
            <h4>WRITE A COMMENT</h4> <i>Your email address will not be published. Required fields are marked *</i> </p> 
            <input type="hidden" name="id" value="<?php echo $article['id'] ?>">
          <div class="form-group">
            <div class="row">
              <div class="col-sm-7"> <label for="contactName"></label> 
              <input type="text" class="form-control" id="contactName" name="name" placeholder="NAME*" required /> </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-7"> <label for="contactEmail"></label> 
              <input type="email" class="form-control" id="email" name="email" placeholder="EMAIL*" required /> </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-8"> <label for="contactMessage"></label> 
              <textarea class="form-control" rows="4" cols="22" id="comment" name="comment" placeholder="COMMENT" required></textarea> </div>
            </div>
          </div> <button type="submit" name="submit" id="submit-comment" class="btn btn-default btn-red">Submit</button> </form>
      </div>
    </div>
  </div>
</div>