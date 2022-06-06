<x-layout>
    <x-slot name="title">Login Page</x-slot>
    <section class="container-loginform">
        <h1>Sign in</h1>
        <form>
            <div class="form-control">
                <label>Your Email</label>
                <input type="text" required />
            </div>
            <div class="form-control">
                <label>Your Password</label>
                <input type="password" required />
            </div>
            <button class="btn">Submit</button>
            <p class="text">Don't have an account?
                <a href="{{ route('site.register') }}">Create Account</a>
            </p>
        </form>
    </section>  
</x-layout>