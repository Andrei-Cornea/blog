/*global $*/

$(function(){
  // comments id 
  var com_id = $('#comment-form > [name="id"]').val();
  // articole render admin/username
  var username = $("#a").attr("id");
  var articles = $('#articles').attr('id');
  
  // ==== TOOLTIP ====
  
    $('.has-tooltip').tooltip()
  
  // ARTICLE PAGE GET COMMENTS
  if(com_id !== undefined){
      getComments(com_id);
  }
  
  // === MODALS  === 
  
  $('#myModal').modal('show');
  
  $('.glyphicon-search').click(function(){
        $('#SearchModal').modal('show');
  })
  
  // Articles ADMIN PAGE
  
  if(username !== undefined){
      getArticles('',username);
  }
  
  // ARTICLES PAGE PAGINATED 
   if(articles !== undefined){
    // getArticlesPaginated({});
  }
  
  
  $(".disabled a").click(function(e){
    e.preventDefault();
  })
  // ==== SUBMIT BUTTON CLICK ===
  
  $('#article-submit').click(function(){
    var id = $('[name="id"]');
    var form = $('#article-form');
       addArticle(id.val(),username);
       formReset(form);
       id.val('');  
  });
  
  // Read more buttons
  $('.search-results, .art, .article').on('click','[data-id]', function(){
        var id = $(this).data('id');
        window.location.href = urlToCall + 'article?id=' + id;
        // getComments(id);
    });
  
  // ==== EDIT BUTTON CLICK ===
  
  $(".articles-list").on('click','[data-edit-id]',function(){
    var id = $(this).data('edit-id');
    var title = $("#article-form [name='title']");
    
    articleToEdit(id);
    title.focus();
  });
  
  
   // ==== SEARCH INPUT KEY-UP ===
  
  $('[name=search]').keyup(function(){
    var search = $(this).val();
    
    if(search.length >= 2){
        getArticles(search,username);
    } else if(search == ''){
      getArticles('',username);
    }
  })
  
  $('[name=searchP]').keyup(function(){
    var search = $(this).val();
    // console.log(search);
    if(search.length >= 2){
        getArticlesPaginated({ search:search });
    } else if(search == ''){
        getArticlesPaginated({});
    }
  })
  
  $(".menu-button,.menu-close").click(function(){
    
    $(".side-menu").toggleClass("hide-bar ");
    
      $('body').toggleClass("open");

    
    $(".menu-button").toggleClass("glyphicon-remove glyphicon-menu-hamburger");
  });
  
  // ADD COMMENTS

 $('#submit-comment').on('click', function(){
        var id = $('#comment-form > [name="id"]').val();
        var Form = $('#comment-form');
        // console.log(Form);
        var dataForm= Form.serialize();
        $.ajax({
            url: urlToCall + 'article/addComment',
            method: 'POST',
            data: dataForm, 
            success: function (response) {
              // alert("CRISTII!!")
                if (response.add_Com == 1) {
                    getComments(id);
                    formReset(Form);
                    
                }
            }
        });
    });
    
    // === LOAD MORE ==
    (function(){
      var page = 2;
      
      $('.loadMoreBtn').on("click",function(){
        $('.loadergif').removeClass('asc');
          page++;
          setTimeout(function(){            
              moreArticles(page);  
          }, 100);  
      })
    })();
    
    
    
    
    (function(){
      
       $.validator.setDefaults({
        // redenumirea addClass
        // errorClass:'form-control-feedback',
        
        // adaugarea claselor la error
        highlight:function(element){
          $(element)
              .addClass("form-control-danger")
              .closest(".form-group")
              .addClass("has-danger");
        },
        
        // scoaterea lor si adaugarea de success
        unhighlight:function(element){
          $(element)
              .addClass("form-control-success")
              .closest(".form-group")
              .removeClass("has-danger")
              .addClass("");
        },
         errorClass: 'text-danger'
       })
            $('#contactForm').validate({
        rules:{
          name:{
            required:true,
            minlength:2
          },
          msg:{
             required:true,
              minlength:2
          },
          email:{
             required:true,
             email:true
          },
        },
        messages:{
          name:{
            required:"Don't forget your name!",
            minlength: $.validator.format("Your minlength of {0} is not right!")
          },
          emai:{
            required:"And your email!"
          },
          msg:{
             required:"I think you want to send me a message !",
             minlength: $.validator.format("Your minlength of {0} is not right!")
          }
        },
      
  submitHandler: function(form) {
    
        var formdata=$(form).serialize();
        
        $.ajax({
          url:urlToCall+"contact",
          method:"POST",
          data:formdata
        })
    }
    
    
      })
    
      
      })();
  
});

// ==== SLIDE MENU TOGGLE

// function slideMenu(){
//   // incepe cu 0 deci M = 300
//   var M = (M == 300)? 0: 300;
//   var s = (s == -300)? -300: 0 ;
  
    // $(".menu-button").click(function(){
    //   // console.log("s1",s)
    //     $("body").animate({"right": M}, 350,"swing", 
    //     // M = 0
    //     function() {M = (M == 300)? 0: 300;});
       
         
    //     $('.side-menu').animate({"right": s}, 350,"swing",  function(){
    //         s = (s == -300)? 0: -300 ;
    //         console.log("s2",s);
    //       }); 
    // });
    
// }


var urlToCall = 'https://andrei-cornea-andreic15.c9users.io/Practice/MVC/Blog/';

//===== GET ARTICLES / SEARCH ARTICLES BY TITLE =====

function getArticlesPaginated(params){
  var searchQ = (params["search"] !== undefined )? "?search="+params["search"]:'';
  
  $.ajax({
        url: urlToCall+"articles/get"+searchQ,

        success: function(response) {
            
        //   console.log("response ", response);
            var art='';
            var result;
            
              for(var i in response){
                art+='<h1 data-id = "'+response[i].id +'" >'+ response[i].title+'</h1>';
              
            }
              
            result = (params["search"] == undefined)? '': art;
            // console.log("result",result, "\n art",art);
              
              $(".search-results").html(result);
          
        },
        
        error: function(xhr, status, errorMessage) {
            alert("There was an error, pls try again");
            console.log("error", xhr, status, errorMessage);
        },
        
        complete: function(xhr, status) {
        }
    });
}

function getArticles(search,username){
  var searchQ = (search === "" || search === undefined)? ""  : "?search="+search;
  
     $.ajax({
        url: urlToCall+"articles/get"+searchQ,
        
        success: function(response) {
            
        //   console.log("response ", response);
          
          renderArticles(response,username);
        },
        
        error: function(xhr, status, errorMessage) {
            alert("There was an error, pls try again");
            console.log("error", xhr, status, errorMessage);
        },
        
        complete: function(xhr, status) {
        }
    });
}

//===== RENDER ARTICLES =====

function renderArticles(articles,user){
  
  var username = (typeof user !== "undefined")? user : "" ;
  var table = ''; 
  
  for(var i in articles){
    
    table+='<div data-id='+ articles[i]['id']+' class="panel panel-default">';
    table+='<div class="panel-heading"><h3>TITLE: '+articles[i]['title']+'</h3></div>';
    table+='<div class="panel-body">';
     table+='<p><b>CONTENT : </b> '+articles[i]['content']+'</p>';
    

    
    // table+='<tr data-id='+ articles[i]['id']+'>';
    // // table+='<td>'+articles[i]['id']+'</td>';
    // table+='<td><h3>'+articles[i]['title']+'</h3>';
    // table+='<p>'+articles[i]['content']+'</p>';
    // table+='<p>'+articles[i]['comments']+'</p>';
    
    table+=(username !== 'a')?'<form>\
                                    <input type="text" name="name" placeholder="Name..."/><br>\
                                    <textarea  name="comment" placeholder="Add Comment..."></textarea><br>\
                                    <input type="submit" value="Submit"/>\
                                  </form>':'';
    table+= '</td>';
    table+=(username === 'a')?'<button class="btn btn-danger" data-delete-id='+ articles[i]['id']+'>Delete</button>\
                                   <button class="btn btn-warning" data-edit-id='+ articles[i]['id']+'>Edit</button>':'';
                                   
    table+='</div>';                               
   table+='</div>';
  }
  // table += '</table>'; 
   
  $(".articles-list").html(table);
  
  $('[data-delete-id]').click(function(e){
    var id = $(this).data('delete-id');
    deleteArticle(id);
  })
}

//===== DELETE ARTICLES =====

function deleteArticle(id){
  
     $.ajax({
        url: urlToCall+"articles/delete",
        data:{
          id:id
        },
        method:"DELETE",
        success: function(response) {
            
        //   console.log("response ", response);
                  if(response.deleted){
                    
                    // sau getArticles('',username);
                    $("[data-id='"+id+"']").remove();
                  }          
        },
        
        error: function(xhr, status, errorMessage) {
            alert("There was an error, pls try again");
            console.log("error", xhr, status, errorMessage);
        },
        
        complete: function(xhr, status) {
        }
    });
  
  
}

//===== ADD/UPDATE ARTICLES =====

function addArticle(id,username){
  var formData = $('#article-form').serialize();
  
  var method = (id !== '') ? "update":"add";
  
  // console.log(method);
  $.ajax({
    url:urlToCall+'articles/'+ method,
    data:formData,
    method:"POST",
     success: function(response) {
            
        //   console.log("response ", response);
                  if(response.added){
                    getArticles('',username);
                  }else if(response.updated){
                     getArticles('',username);
                  }          
        },
        
        error: function(xhr, status, errorMessage) {
            alert("There was an error, pls try again");
            console.log("error", xhr, status, errorMessage);
        },
        
        complete: function(xhr, status) {
        }
  });
};

 // ===== GET article to edit =====
function articleToEdit(id){
   
   $.ajax({
     
     url:urlToCall+"admin/article?id="+id,
     
     success:function(response){
       $('[name="id"]').val(response.id);
       $('[name="title"]').val(response.title);
       $('[name="content"]').val(response.content);
     
      }
     
   });
  
}


// GET COMMENTS

function getComments(article_id){
  $.ajax({
    url:urlToCall+"article/Comments?id="+article_id,
     success: function (response) {
      console.log(response);
            var comentsLength = response.length;
            var comments = "";
                for(var i=0; i < response.length; i++) {
                    comments += '<div class="row  comment-post">' +
                                    '<div class="col-sm-2"><img alt="" src="http://2.gravatar.com/avatar/298bedc2b8fd96a22fd0bee3733ad9b5?s=130&amp;d=mm&amp;r=g" class="avatar avatar-130 photo" height="130" width="130"></div>'+
                                    '<div class="col-sm-10"> <h2 class="comment-username">' + response[i].name + '</h2>' +
                                    '<span>'+ response[i].creation_date +'</span>'+
                                    '<p class="comment-body">' + response[i].comment + '</p></div>' +
                                '</div><hr>';
                }
            $('.comments-list').html(comments);
            $('.comments-nr').append(comentsLength);
            $('.article-category').append(" Uncategorized");
            
            }
  })
}


function moreArticles(page){
  
  $.ajax({
    url:urlToCall+"/articles/getP?page="+page,
    success: function (response) {
          
        
           
              if(response.length !== 0){
                console.log(response);
                var articleHTML='<div class="row">';
                  for(var i in response){
                    articleHTML +='<div class="col-lg-4 col-sm-4  item">';
                    articleHTML +='<div class="cover">';
                    articleHTML +='    <img class="" src="http://www.2035themes.com/blogy/modern/wp-content/uploads/2014/10/modern-slide-6-470x370.jpg">';
                    articleHTML +='  <div class="cat">';
                    articleHTML +='<a href="http://www.2035themes.com/blogy/modern/category/uncategorized/" rel="category tag">Uncategorized</a></li>';
                    articleHTML +='    </div>';
                    articleHTML +='</div> ';
                    articleHTML +='<h1 class="artTitle">' +shorten(response[i]['title'], 18)+'</h1>';
                    articleHTML +='<p>by A C |'+ response[i]['cd']+'</p>';
                    articleHTML +='<div>'+shorten(response[i]['content'], 300)+'</div>';
                    articleHTML +='<a data-id='+ response[i]['id'] +' class="btn read-more">Read more <i class="glyphicon glyphicon-chevron-right"></i> </a>';
                    articleHTML +='</div>';
                  }
                  articleHTML +='</div>';
                 $('.art').append(articleHTML);

              }else{
                $('.message').css({opacity: 0.0, visibility: "visible"}).animate({opacity: 1.0});
                $('.message').css({opacity: 1.0, visibility: "visible"}).animate({opacity: 0}, 3000);
                
                 console.log('se fini la melody!');  
              }    
           
         
    },
     error: function(xhr, status, errorMessage) {
            alert("There was an error, pls try again");
            console.log("error", xhr, status, errorMessage);
        },
    complete:function(){
      $('.loadergif').addClass('asc');
    }
  })
}

// === contact validation



// // === TOGGLE FUNCTIONS ===
// $.fn.clickToggle = function(a,b) {
//   var ab = [b,a];
//   return this.on("click", function(){ ab[this._tog^=1].call(this); });
// };

//  ===== SHORT TEXT ====

function shorten(text, maxLength) {
    var ret = text;
    if (ret.length > maxLength) {
        ret = ret.substr(0,maxLength-3) + "...";
    }
    return ret;
}

//===== FORM RESET =====.

function formReset(form){
  $(form)[0].reset();
}