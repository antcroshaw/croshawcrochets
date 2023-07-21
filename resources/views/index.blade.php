<x-layout>

 

    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Become a <span class="text-warning">Web Developer</span></h1>
                    <p class="lead my-4">We focus on teaching our students the fundamentals of the latest and greatest 
                    technologies to prepare them for their first dev role</p>
                    <button class="btn btn-primary btn-lg">Start the Enrollment</button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="{{ asset('img/showcase.svg') }}" alt="">
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">Sign up for our Newsletter</h3>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">

                @foreach ($products as $product )
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="bi bi-laptop"></i>
                            </div> 
                            <h3 class="card-title mb-3">
                                {{ $product->name }}
                            </h3> 
                            <img src="{{ asset($product->image) }}" class="img-fluid" alt="">
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, laborum nemo. Nobis voluptatibus labore ut.
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
             
                {{-- <div class="col-md">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="bi bi-person-square"></i>
                            </div> 
                            <h3 class="card-title mb-3">
                                Hybrid
                            </h3> 
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, laborum nemo. Nobis voluptatibus labore ut.
                            </p>
                            <a href="#" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="bi bi-people"></i>
                            </div> 
                            <h3 class="card-title mb-3">
                                In Person
                            </h3> 
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, laborum nemo. Nobis voluptatibus labore ut.
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- Learn Sections -->

    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="img/fundamentals.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md p-5">
                    <h2>Learn the Fundamentals</h2>
                    <p class="lead">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab facere mollitia dolorem magnam totam iste.
                    </p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate quis temporibus qui nemo itaque. Dicta recusandae, voluptatibus qui facere illo deleniti modi adipisci, velit eos corrupti ab porro aliquid illum.</p>
                <a href="#" class="btn btn-light mt-3">
                    <i class="bi bi-chevron-right">Read More</i>
                </a>
                </div>
            </div>
        </div>
    </section>

    <section id="learn" class="p-5 bg-dark text-light">
        <div class="container">
            <div class="row align-items-center justify-content-between">
               
                <div class="col-md p-5">
                    <h2>Learn React</h2>
                    <p class="lead">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab facere mollitia dolorem magnam totam iste.
                    </p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate quis temporibus qui nemo itaque. Dicta recusandae, voluptatibus qui facere illo deleniti modi adipisci, velit eos corrupti ab porro aliquid illum.</p>
                <a href="#" class="btn btn-light mt-3">
                    <i class="bi bi-chevron-right">Read More</i>
                </a>
                </div>
                <div class="col-md">
                    <img src="img/react.svg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

</x-layout>