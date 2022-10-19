<!-- Main Wrapper -->
<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        BLOG SHOW
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Blog Show</h4>
                    <div class="row">
                        <div class="col-md-10">

                            <div class="main-content bg-light">


                                <div class=" my-container active-cont">
                                    <!-- Top Nav -->

                                    <!--End Top Nav -->

                                    <br>
                                    <br>
                                    <div class="col-md-10">

                                        <div class="main-content">

                                            <br>
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-body  text-center">
                                                        <div class=" w-100 ">
                                                            <div class=" px-2">
                                                                <label for="caregory" class="mb-4 h1 text-dark"> Blog Info</label>




                                                                <p>Blog Id: {{$blogShow->id}}</p>
                                                                <p>Title: {{$blogShow->title}}</p>
                                                                <p> Picture :<img src="{{ url('upload/images', $blogShow->image)}}"  height="200" alt="Profile Picture"> </p>
                                                                <p>{{$blogShow->blog}}</p>
                                                                <p>Total Like: {{$blogShow->like}}</p>
                                                                <p>Total Comment: {{$blogShow->comment}}</p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>



                </div>
            </div>

            <x-admin.partials.footer />

        </div>
        </x-admin>