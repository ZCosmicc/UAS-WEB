<html>
<head>
    <title>{{ $title ?? 'Layout Page' }}</title>
    <link href="app.css" rel="stylesheet" />
    <link href="{{ \Illuminate\Support\Facades\URL::asset('/fontawesome-free-6.1.1-web/css/all.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <ul class="kiri">
            <li>
                <i class="fa-solid fa-skull-crossbones"></i>
            </li>
            <li><a href="{{ route('site.index') }}">Welcome to Forum</a></li>
        </ul>
        <ul class="kanan">
        <li><p>Have an account?</p></li>
        <li><a class="sign-in" href="{{ route('site.login') }}">Sign in</a></li>
        <li><a class="join" href="{{ route('site.register') }}">Join now</a></li>
        </ul>
    </header>
    <main id="content">
    {{ $slot }}
    </main>
    <footer>
        <div class="footer-l2">
            <div class="sitemap">
                <div class="list">
                    <h3>About Us</h3>
                    <ul>
                        <li><a href="https://instagram.com/farizfadillah._?igshid=YmMyMTA2M2Y=">Fariz Fadillah</li>
                        <li><a href="https://instagram.com/first_braincell?igshid=YmMyMTA2M2Y=">Pramudia Fitrian Alvarisqi</li>
                    </ul>
                </div>
            </div>
            <div class="kopirek">© 2022 Forummmm, All Rights Reserved.</div>
        </div>
    </footer>
</body>
</html>