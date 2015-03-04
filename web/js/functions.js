$(document).ready(function(){

    console.log("Load script");
    /*
    $('#form').validate({
    submitHandler: function(form) {
          $.ajax("send_mail.php",{
        data:$("#form").serialize(),
        type:'post',
        cache:false,
        beforeSend: function(result){
            $("#response").html("Espere...")
        },
        success: function(result){
            //alert(result)
            $("#response").html(result);
              $("#form").each(function(){
                this.reset();

                });
        },
        error:function(result){

        }
        })
    }});*/

     //test for touch events support and if not supported, attach .no-touch class to the HTML tag.
 
    function detectmob(){
        if( navigator.userAgent.match(/Android/i)
        || navigator.userAgent.match(/webOS/i)
        || navigator.userAgent.match(/iPhone/i)
        || navigator.userAgent.match(/iPad/i)
        || navigator.userAgent.match(/iPod/i)
        || navigator.userAgent.match(/BlackBerry/i)
        || navigator.userAgent.match(/Windows Phone/i)
        ){
            return true;
        }
        else {
            return false;
        }
    }


    function share_content(social_network){
        var trackid,desc,share_url;
        //console.log(social_network)
        var metas = document.getElementsByTagName('meta'); 
        for (i=0; i<metas.length; i++) { 
              if (metas[i].getAttribute("property") == "og:url") { 
                 share_url= metas[i].getAttribute("content");
              }
              else if (metas[i].getAttribute("property") == "og:title") { 
                 title= metas[i].getAttribute("content");
              }      
              else if (metas[i].getAttribute("property") == "og:description") { 
                 description= metas[i].getAttribute("content");
              }            
              else if (metas[i].getAttribute("property") == "og:image") { 
                 img_url= metas[i].getAttribute("content");
              }            
        }   
        switch(social_network){
            case 'facebook':
            trackid="FBO";
            share_url="http://www.facebook.com/sharer.php?u="+share_url;
            shareurlmobile="http://www.facebook.com/sharer.php?u=#URL#&t=#TITLE#";
            desc="Facebook";
            break;
            case 'twitter':
            trackid="TWT";
            share_url="https://twitter.com/share?url="+share_url+"&text="+title+"&via=VanDutchStyle&hashtags=VanDutchStyle";  
            shareurlmobile="";
            desc="Twitter";     
            break;
            case 'digg':
            trackid="DIG";
            share_url="http://digg.com/submit?url="+share_url+"&title="+title;
            shareurlmobile="";
            desc="Digg";        
            break;  
            case 'linkedin':
            trackid="LIN";
            share_url="http://www.linkedin.com/shareArticle?url="+share_url+"&title="+title;
            shareurlmobile="";
            desc="Digg";        
            break;              
            case 'google':
            trackid="GOO";
            share_url="https://plus.google.com/share?url="+share_url;
            shareurlmobile="";
            desc="Google+";     
            break;
            case 'pinterest':
            trackid="PIN";
            share_url="https://pinterest.com/pin/create/bookmarklet/?media="+img_url+"&url="+share_url+"&description="+title;
            shareurlmobile="";
            desc="Pinterest";       
            break;                              
            default:
            break;
        }
        window.open(share_url);
              
    }


    function share_content_pop(social_network){
        var trackid,desc,share_url,title,img_url;
        //console.log(social_network)
        
        share_url = $('.modal-content[data-url]').attr("data-url");
        title = $('.modal-content[data-title]').attr("data-title");
        img_url = $('.modal-content[data-img]').attr("data-img");
        if (share_url === 'undefined') { share_url = $(this).data('url'); };
        if (title === 'undefined') { title = $(this).data('title'); };
        if (img_url === 'undefined') { img_url = $(this).data('img'); };
        
        console.log(share_url);
        console.log(img_url);
        console.log(title);

        console.log($(this));

        switch(social_network){
            case 'facebook':
            trackid="FBO";
            share_url="http://www.facebook.com/sharer.php?u="+share_url;
            shareurlmobile="http://www.facebook.com/sharer.php?u=#URL#&t=#TITLE#";
            desc="Facebook";
            break;
            case 'twitter':
            trackid="TWT";
            share_url="https://twitter.com/share?url="+share_url+"&text="+title+"&via=VanDutchStyle&hashtags=VanDutchStyle";  
            shareurlmobile="";
            desc="Twitter";     
            break;
            case 'digg':
            trackid="DIG";
            share_url="http://digg.com/submit?url="+share_url+"&title="+title;
            shareurlmobile="";
            desc="Digg";        
            break;  
            case 'linkedin':
            trackid="LIN";
            share_url="http://www.linkedin.com/shareArticle?url="+share_url+"&title="+title;
            shareurlmobile="";
            desc="Digg";        
            break;              
            case 'google':
            trackid="GOO";
            share_url="https://plus.google.com/share?url="+share_url;
            shareurlmobile="";
            desc="Google+";     
            break;
            case 'pinterest':
            trackid="PIN";
            share_url="https://pinterest.com/pin/create/bookmarklet/?media="+img_url+"&url="+share_url+"&description="+title;
            shareurlmobile="";
            desc="Pinterest";       
            break;                              
            default:
            break;
        }
        window.open(share_url);         
    }


    function share_content_note(social_network, share){
        var trackid,desc,share_url,title,img_url;
        //console.log(social_network)
        
        share_url = share.attr("data-url");
        title = share.attr("data-title");
        img_url = share.attr("data-img");


        switch(social_network){
            case 'facebook':
            trackid="FBO";
            share_url="http://www.facebook.com/sharer.php?u="+share_url;
            shareurlmobile="http://www.facebook.com/sharer.php?u=#URL#&t=#TITLE#";
            desc="Facebook";
            break;
            case 'twitter':
            trackid="TWT";
            share_url="https://twitter.com/share?url="+share_url+"&text="+title+"&via=VanDutchStyle&hashtags=VanDutchStyle";  
            shareurlmobile="";
            desc="Twitter";     
            break;
            case 'digg':
            trackid="DIG";
            share_url="http://digg.com/submit?url="+share_url+"&title="+title;
            shareurlmobile="";
            desc="Digg";        
            break;  
            case 'linkedin':
            trackid="LIN";
            share_url="http://www.linkedin.com/shareArticle?url="+share_url+"&title="+title;
            shareurlmobile="";
            desc="Digg";        
            break;              
            case 'google':
            trackid="GOO";
            share_url="https://plus.google.com/share?url="+share_url;
            shareurlmobile="";
            desc="Google+";     
            break;
            case 'pinterest':
            trackid="PIN";
            share_url="https://pinterest.com/pin/create/bookmarklet/?media="+img_url+"&url="+share_url+"&description="+title;
            shareurlmobile="";
            desc="Pinterest";       
            break;                              
            default:
            break;
        }
        window.open(share_url);         
    }

/*
    window.fbAsyncInit = function() {
        FB.init({
          appId      : '1592449617657886',
          status: true, 
          cookie: true,
          xfbml: true,
        });
    };

    (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    function urldecode(url) {
      return decodeURIComponent(url.replace(/\+/g, ' '));
    }


    function feed(){
        FB.ui(
          {
            method: 'feed',
            name: $(this).data('title'), // name of the product or content you want to share
            link: $(this).data('url'), // link back to the product or content you are sharing
            picture: $(this).data('image'), // path to an image you would like to share with this content
            caption: 'Vandutch', // caption
            description: $(this).data('description')  // description of your product or content
          },
          function() {
            
          }
        );       
    }

    function sendRequestViaMultiFriendSelector() {
        FB.ui({
                    method: 'apprequests',
                    message: 'Comparte con tus amigos'
        },requestCallback);
    }

    function requestCallback(request) {    
    }
 
    // add twitter bootstrap classes and color based on how many times tag is used
    function addTwitterBSClass(thisObj) {
      var title = $(thisObj).attr('title');
      if (title) {
        var titles = title.split(' ');
        if (titles[0]) {
          var num = parseInt(titles[0]);
          if (num > 0)
            $(thisObj).addClass('label');
          if (num == 2)
            $(thisObj).addClass('label label-info');
          if (num > 2 && num < 4)
            $(thisObj).addClass('label label-success');
          if (num >= 5 && num < 10)
            $(thisObj).addClass('label label-warning');
          if (num >=10)
            $(thisObj).addClass('label label-important');
        }
      }
      else
        $(thisObj).addClass('label');
      return true;
    }
*/



    //Youtube controllers 
    


    function onYouTubePlayerReady(playerId) {
        ytplayer = document.getElementById("myytplayer");
        ytplayer.mute();
        ytplayer.setPlaybackQuality("hd720");
    }

    function playthevideo() {
      if (ytplayer) {
        ytplayer.setPlaybackQuality("hd720");
        ytplayer.playVideo();
      }
    }

    function stopthevideo(){
      if (ytplayer) {
            ytplayer.stopVideo();
      }
    }

    function pausethevideo(){
        if (ytplayer) {
            ytplayer.pauseVideo();
            console.log(ytplayer.getPlaybackQuality());
        }
    }
    function mutethevideo(){
        if (ytplayer) {
            ytplayer.mute();
        }
    }

    function unmutethevideo(){
        if (ytplayer) {
            ytplayer.unMute();
        }
    }


    // Init-video youtube 

    console.log("Valor: " + detectmob());
    if (!detectmob()){
        var player; 
        var params = { scale: "Scale", allowScriptAccess: 'always', allowFullScreen: 'true', wmode: "transparent"};
        var atts = { id: 'myytplayer' };
        player = swfobject.embedSWF("https://www.youtube.com/v/h3wF63c36uc?VQ=HD720&autoplay=1&modestbranding=1&controls=0&showinfo=0&fs=0&rel=0&version=3&allowfullscreen=true&wmode=transparent&iv_load_policy=3&html5=1&loop=1&playlist=h3wF63c36uc&enablejsapi=1&playerapiid=ytplayer", 'ytapiplayer', '100%', 'auto', '8', null, null, params, atts);
        //ytplayer = document.getElementById("myytplayer");
        if (player) {
            console.log("Video found...");
            ytplayer.setPlaybackQuality("hd720");
            player.mute();
        };
    };


});