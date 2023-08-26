<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/png">
  <title>Medicare Medical</title>

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/linericon/style1.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/lightbox/simpleLightbox.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/nice-select/css/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate-css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield("content")
  <script nonce="765c3066-71f3-4299-8e00-ced1dac210e5">
      (function(w, d) {
          ! function(j, k, l, m) {
              j[l] = j[l] || {};
              j[l].executed = [];
              j.zaraz = {
                  deferred: [],
                  listeners: []
              };
              j.zaraz.q = [];
              j.zaraz._f = function(n) {
                  return async function() {
                      var o = Array.prototype.slice.call(arguments);
                      j.zaraz.q.push({
                          m: n,
                          a: o
                      })
                  }
              };
              for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
              j.zaraz.init = () => {
                  var q = k.getElementsByTagName(m)[0],
                      r = k.createElement(m),
                      s = k.getElementsByTagName("title")[0];
                  s && (j[l].t = k.getElementsByTagName("title")[0].text);
                  j[l].x = Math.random();
                  j[l].w = j.screen.width;
                  j[l].h = j.screen.height;
                  j[l].j = j.innerHeight;
                  j[l].e = j.innerWidth;
                  j[l].l = j.location.href;
                  j[l].r = k.referrer;
                  j[l].k = j.screen.colorDepth;
                  j[l].n = k.characterSet;
                  j[l].o = (new Date).getTimezoneOffset();
                  if (j.dataLayer)
                      for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({
                              ...x[1],
                              ...y[1]
                          })), {}))) zaraz.set(w[0], w[1], {
                          scope: "page"
                      });
                  j[l].q = [];
                  for (; j.zaraz.q.length;) {
                      const z = j.zaraz.q.shift();
                      j[l].q.push(z)
                  }
                  r.defer = !0;
                  for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C.startsWith(
                      "_zaraz_"))).forEach((B => {
                      try {
                          j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B))
                      } catch {
                          j[l]["z_" + B.slice(7)] = A.getItem(B)
                      }
                  }));
                  r.referrerPolicy = "origin";
                  r.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
                  q.parentNode.insertBefore(r, q)
              };
              ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener(
                  "DOMContentLoaded", zaraz.init)
          }(w, d, "zarazData", "script");
      })(window, document);
  </script>
</head> 