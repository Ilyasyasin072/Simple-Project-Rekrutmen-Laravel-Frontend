<!DOCTYPE html>
<html>
<head>
<title>Latihan Membuat notifikasi</title>
<script type="text/javascript">
function notifyMe(msg_title, msg_body, redirect_onclick) {
var granted = 0;
// Let's check if the browser supports notifications
if (!("Notification" in window)) {
alert("This browser does not support desktop notification");
}
// Let's check if the user is okay to get some notification
else if (Notification.permission === "granted") {
granted = 1;}
// Otherwise, we need to ask the user for permission
else if (Notification.permission !== 'denied') {
Notification.requestPermission(function (permission) {
// If the user is okay, let's create a notification
if (permission === "granted") {
granted = 1;}
});
}
  if (granted == 1) {
      var notification = new Notification(msg_title, {
          body: msg_body,
              icon: 'icon1.png'
            });
              if (redirect_onclick) {notification.onclick = function() {window.location.href = redirect_onclick;}}}}
</script>
</head>
<body>
klik disini<hr/>
<button onclick="notifyMe('terima Kasih')" <a href="{{url('/perusahaan')}}" >Notify me!</button></a>
</body>
</html>
