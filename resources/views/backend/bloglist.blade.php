<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        BLOG LIST
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Blogs</h4>
                    <div class="row">
                        <div class=" my-container active-cont">
                            <!-- Top Nav -->

                            <!--End Top Nav -->

                            <br>
                            <br>
                            <div class="col-md-10">

                                <div class="main-content">

                                    <a href="{{route('admin.addblog')}}"><button class="btn btn-success text-right">Add A New Blog</button></a>
                                  
                                    <div class="col-md-12 mx-5">
                                    @if(session('success'))
                                    <small class="text-success text-center">{{ session('success') }}</small>
                                    @endif
                                        <div class="card">
                                            <div class="card-body  text-center">
                                                <div class=" w-100 ">
                                                    <div class=" px-2">
                                                        <label for="caregory" class=" h1 text-dark">List Blog</label><br>
                                                        <span class=" mb-4 text-danger">Total Blog ({{$blogs->count()}} )</span>
                                                        <table class="table table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Title</th>
                                                                    <th scope="col">Image</th>
                                                                    <th scope="col">Like</th>
                                                                    <th scope="col">Comment</th>
                                                                    <th scope="col">Created At</th>
                                                                    <th colspan="2" scope="col">Action</th>

                                                            </thead>
                                                            <tbody>
                                                                @foreach ($blogs as $blog)
                                                                <tr>
                                                                    <th scope="row">{{$loop->iteration}}</th>
                                                                    <td>{{$blog->title}}</td>
                                                                    <td><img src="{{ url('upload/images', $blog->image)}}" height="40px" alt="abcd"></td>
                                                                    <td>{{$blog->like}}</td>
                                                                    <td>{{$blog->comment}}</td>
                                                                    <td>{{$blog->created_at}}</td>
                                                                    <td><a href="{{route('admin.blogshow',$blog->id)}}"><button type="submit" class="btn-sm btn-outline-info w-100">Show</button></a></td>
                                                                    <td><a href="{{route('admin.blogdelete',$blog->id)}}"><button type="submit" class="btn-sm btn-outline-danger w-100">Delete</button></a></td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>

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
        <!-- Main Wrapper -->