<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        ADD BLOG
        </x-slot>

        <!-- Main Wrapper -->

        <!-- Main Wrapper -->
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title"> New Blog</h4>
                    <form action="{{route('admin.blogStore')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="title">Title</label>
                                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Blog name" value="">

                                                </div>
                                                <div class="form-group">
                                                    <label for="ProcuctDetels">Blog Detels</label>
                                                    <textarea name="blog" id="ProcuctDetels" class="w-100 "></textarea>

                                                </div>

                                            </div>
                                            <div class="card-action">
                                                <button class="btn btn-success">Submit</button>
                                                <button class="btn btn-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="category">Category</label>
                                                    <label for="category_id">Category</label>
                                                    <select name="category" id="category_id" class="form-control">
                                                        <option value="" disabled selected>(Select Category)</option>
                                                        @foreach($categories as $category)
                                                        <option>{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="image">Thumbnail Image</label>
                                                    <input type="file" name="image" id="image">

                                                </div>
                                               
                                             

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>






        <x-admin.partials.footer />

        </div>
        </x-admin>