<?php include '../EWSDcoursework/Top.php'; ?>

<body>
    <!-- our -->
    <div id="txtarea" class="our">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Student Form</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 margin_bottom">
                    <div class="row">

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="two-box">
                                <figure><img style="width:300px;height:250px;" src="../EWSDcoursework/Layout/mainpage/images/gradurate.jpg" alt="#" /></figure>
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">

                            <div class="txtarea">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Information</label>
                                    <input type="text" class="form-control" id="inputinfo" placeholder="Type" required>
                                </div>
                                <label for="Image" class="form-label">Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile04">
                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                </div>

                                <label for="file" class="form-label">File</label>
                                <div class="custom-file" style="margin: 20px 0">
                                    <input type="file" class="custom-file-input" id="inputGroupFile04">
                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                </div>
                                
                                <div class="row" style="float:right;">
                                <button type="button" class="btn btn-primary">Save Draft</button>
                                <button style="margin-left:20px;" type="button" class="btn btn-success" onclick="">Submit</button>
                                </div>

                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
   
    <!-- end our -->

</body>

<?php include '../EWSDcoursework/footer.php' ?>
