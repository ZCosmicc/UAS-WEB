<x-layout>
    <x-slot name="title">Create Post</x-slot>
    <section class="container-createform">
        <h1>Add post</h1>
        <form>
            <div class="form-control">
                <label>Title</label>
                <input type="text" required />
            </div>
            <div class="form-control">
                <label>Description</label>
                <input type="text" name="description" required />
            </div>
            <button class="btn">Submit</button>
        </form>
    </section>  
</x-layout>