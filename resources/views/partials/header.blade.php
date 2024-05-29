<header>
    <section class="bg-light">
        <div class="container">
            <h1 class="text-success text-center">
                Header
            </h1>
        </div>
        <nav class="py-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-2 text-center">
                        <a href="{{route('home')}}">Home</a>
                    </div>
                    <div class="col-2 text-center">
                        <a href="{{route('comics.index')}}">Comics</a>
                    </div>
                    <div class="col-2 text-center">
                        <a href="{{route('comics.create')}}">Create</a>
                    </div>
                </div>
            </div>
        </nav>

    </section>
</header>