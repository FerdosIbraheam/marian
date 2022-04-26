

    <div class="container">
        <h2>add blog</h2>

        <form action="<?php echo  url('/create');?>" method="post" enctype="multipart/form-data" >
        <input type="hidden"   name="_token" value="<?php echo csrf_token();?>" >

            <div class="form-group">
                <label for="exampleInputName">title</label>
                <input type="text" class="form-control"  id="exampleInputName" aria-describedby="" name="title" placeholder="Enter title">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">content</label>
                <input type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" name="content" placeholder="Enter content">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">image</label>
                <input type="file" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" name="image" placeholder="Enter content">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



