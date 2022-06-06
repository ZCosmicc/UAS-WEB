<x-layout>
    <x-slot name="title">Landing Page</x-slot>
    <div class="content-home biru">
        <div class="content-home-atas">
            Diharapkan kepada user untuk saling menggunakan kasar dengan sopan, segala perbuatan yang tidak pantas tidak akan ditoleransi! <br />
            User harus setuju untuk mematuhi persyaratan layanan untuk menggunakan layanan yang ditawarkan. Learn more
        </div>
    </div>

    <div class="content-home biru">
        <div class="base">
            <div class="list">
                <div class="image">
                    <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/gambar1.webp') }}" alt="base-1">
                </div>
            </div>
            <div class="list">
                <div class="desc">
                    <h1>LOREM IPSUM DOLOR SIT AMET</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#">Explore</a>
                </div>
            </div>
        </div>
    </div>

    <div class="content-home">
        <div class="base">
            <div class="list">
                <div class="more left biru">
                    <div class="image">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/gambar2.webp') }}" alt="base-4">
                    </div>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                    <p>The lazy fox can jump through the bush, with fluffy tail and shiny fur</p>
                    <a href="#">Learn more</a>
                </div>
            </div>
            <div class="list">
                <div class="more right biru">
                    <div class="image">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/gambar2.webp') }}" alt="base-5">
                    </div>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                    <p>The lazy fox can jump through the bush, with fluffy tail and shiny fur</p>
                    <a href="#">Learn more</a>
                </div>
            </div>
        </div>

    <div class="content-home biru-2 font-putih">
        <div class="base">
            <div class="list">
                <div class="desc">
                    <h2>LOREM IPSUM DOLOR SIT AMET</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <button class="btn-putih">Explore</button>
                </div>
            </div>
            <div class="list">
                <div class="image">
                    <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/gambar2.webp') }}" alt="base-2">
                </div>
            </div>
        </div>
    </div>

        <div class="content-home orange">
        <div class="base">
            <div class="list">
                <div class="image">
                    <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/gambar3.webp') }}" alt="base-3">
                </div>
            </div>
            <div class="list">
                <div class="desc">
                    <h2>LOREM IPSUM DOLOR SIT AMET</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <button>Find out more</button>
                </div>
            </div>
        </div>
    </div>
        <div class="note">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
    </div>
</x-layout>