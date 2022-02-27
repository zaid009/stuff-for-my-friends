


     
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
<h3 style="margin-left:10%">Add Product</h3><br>
            <!-- Page Heading -->
            <form method="POST" action="addproduct.php" enctype="multipart/form-data" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 ">
    <div class="input-group">
        <input type="text" class="form-control bg-light small" placeholder="Product Name" name="name" required>
        </div><br><br>
        <div class="input-group">
        <input type="file" class="form-control bg-light small" name="image"  required><br><br>
        </div> <br><br>
       
       <div class="input-group">
        <input type="number" class="form-control bg-light small" name="price" placeholder="Product Price"  required><br><br>
        </div><br> <br>
       <div class="input-group">
           <textarea name="description" class="form-control bg-light  small" cols="10" rows="8" required></textarea>
       </div><br> <br>
       <?php
include 'connect.php';
if (isset($_POST['btn'])) {
$name = $_POST['name'];
$image = $_FILES['image']['name'];
$tmpimage = $_FILES['image']['tmp_name'];
$price = $_POST['price'];
$description = $_POST['description'];
$upid=rand(10000, 99999);
    # code...

if(move_uploaded_file($tmpimage,"images/".$image)){
    $qu = mysqli_query($con,"INSERT INTO product_detail values('','07$upid','$name','$image','PKR: $price','$description')");



if ($qu) {
    echo "Product has been Successfully Added :)";

}

else {
    echo "Hmm! Something Wrong"."<br>";
}}
else {
    echo "Image Error". "<br>";
}
}
        
        
        ?><br><br>
       <input type="submit"  class="btn btn-primary " name="btn" value="Add Product">
</form>    

      
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
