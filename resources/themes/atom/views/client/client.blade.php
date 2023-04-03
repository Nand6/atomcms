<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" crossorigin="use-credentials" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">
    <meta name="apple-mobile-web-app-title" content="Nitro">
    <meta name="application-name" content="Nitro">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#000000" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <base href="./">
    <title>Nitro</title>
    <script type="module" crossorigin src="/nitro/assets/index-4ae5ef8b.js"></script>
    <link rel="modulepreload" crossorigin href="/nitro/assets/vendor-56d266b8.js">
    <link rel="modulepreload" crossorigin href="/nitro/assets/nitro-renderer-0af3579c.js">
    <link rel="stylesheet" href="/nitro/src/assets/index.css">
    <link href="/nitro/assets/app.965b18bc.css" rel="preload" as="style">
    <link href="/nitro/assets/app.a6750032.js" rel="preload" as="script">
    <link href="/nitro/assets/js/chunk-vendors.836f93a9.js" rel="preload" as="script">
    <link rel="stylesheet" href="/nitro/assets/css/app.965b18bc.css" as="style">

    <script type="text/javascript">
        console.log(`


HHHHHHHHH     HHHHHHHHH               AAA               BBBBBBBBBBBBBBBBB   BBBBBBBBBBBBBBBBB   IIIIIIIIII   SSSSSSSSSSSSSSS
H:::::::H     H:::::::H              A:::A              B::::::::::::::::B  B::::::::::::::::B  I::::::::I SS:::::::::::::::S
H:::::::H     H:::::::H             A:::::A             B::::::BBBBBB:::::B B::::::BBBBBB:::::B I::::::::IS:::::SSSSSS::::::S
HH::::::H     H::::::HH            A:::::::A            BB:::::B     B:::::BBB:::::B     B:::::BII::::::IIS:::::S     SSSSSSS
  H:::::H     H:::::H             A:::::::::A             B::::B     B:::::B  B::::B     B:::::B  I::::I  S:::::S
  H:::::H     H:::::H            A:::::A:::::A            B::::B     B:::::B  B::::B     B:::::B  I::::I  S:::::S
  H::::::HHHHH::::::H           A:::::A A:::::A           B::::BBBBBB:::::B   B::::BBBBBB:::::B   I::::I   S::::SSSS
  H:::::::::::::::::H          A:::::A   A:::::A          B:::::::::::::BB    B:::::::::::::BB    I::::I    SS::::::SSSSS
  H:::::::::::::::::H         A:::::A     A:::::A         B::::BBBBBB:::::B   B::::BBBBBB:::::B   I::::I      SSS::::::::SS
  H::::::HHHHH::::::H        A:::::AAAAAAAAA:::::A        B::::B     B:::::B  B::::B     B:::::B  I::::I         SSSSSS::::S
  H:::::H     H:::::H       A:::::::::::::::::::::A       B::::B     B:::::B  B::::B     B:::::B  I::::I              S:::::S
  H:::::H     H:::::H      A:::::AAAAAAAAAAAAA:::::A      B::::B     B:::::B  B::::B     B:::::B  I::::I              S:::::S
HH::::::H     H::::::HH   A:::::A             A:::::A   BB:::::BBBBBB::::::BBB:::::BBBBBB::::::BII::::::IISSSSSSS     S:::::S
H:::::::H     H:::::::H  A:::::A               A:::::A  B:::::::::::::::::B B:::::::::::::::::B I::::::::IS::::::SSSSSS:::::S
H:::::::H     H:::::::H A:::::A                 A:::::A B::::::::::::::::B  B::::::::::::::::B  I::::::::IS:::::::::::::::SS
HHHHHHHHH     HHHHHHHHHAAAAAAA                   AAAAAAABBBBBBBBBBBBBBBBB   BBBBBBBBBBBBBBBBB   IIIIIIIIII SSSSSSSSSSSSSSS


`);
    </script>
</head>
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="root" class="w-100 h-100"></div>
<div id="app"></div>
<script>
    const NitroConfig = {
        "config.urls": [ '/nitro/renderer-config.json', '/nitro/ui-config.json' ],
        "sso.ticket": "{{ session('sso') }}",
        "forward.type": (new URLSearchParams(window.location.search).get('room') ? 2 : -1),
        "forward.id": (new URLSearchParams(window.location.search).get('room') || 0),
        "friend.id": (new URLSearchParams(window.location.search).get('friend') || 0),
    };
</script>
<script src="/nitro/assets/js/chunk-vendors.836f93a9.js"></script><script src="/nitro/assets/app.a6750032.js"></script>
</body>
</html>
