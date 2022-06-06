<x-layout>
    <x-slot name="title">Register Page</x-slot>
    <section class="container-registerform">
        <h1>Sign up your account</h1>
        <form>
            <div class="form-control">
                <label>Your Name</label>
                <input type="text" required />
            </div>
            <div class="form-control">
                <label>Your Email</label>
                <input type="text" required />
            </div>
            <div class="form-control">
                <label>Your Password</label>
                <input type="password" required />
            </div>
            <div class="form-control">
                <label>Confirm Password</label>
                <input type="password" required />
            </div>
            <button class="btn">Create account</button>
            <p class="text">Have an account already?
                <a href="{{ route('site.login') }}">Sign in here</a>
            </p>
        </form>
    </section>  
</x-layout>