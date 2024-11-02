<?php require_once ADMIN_PATH . "views/inc/header.php"; ?>
<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-12 my-5">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> View All Posts</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php if(has_session('success')): ?>
                            <div class="alert alert-success p-2">
                                <?php echo flash_session('success'); ?>
                            </div>
                    <?php endif; ?>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>
                      <th>Content</th>
                      <th style="width: 40px">Edit</th>
                      <th style="width: 40px">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; foreach($all_data as $post): ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?php echo $post['title']; ?></td>
                      <td><?php echo $post['content']; ?></td>
                      <td>
                        <a href="<?php echo admin_url("edit-post&id=".$post['id']); ?>" class="btn btn-info">Edit</a>
                      </td>
                      <td>
                        <a href="<?php echo admin_url("delete-post&id=".$post['id']); ?>" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    <?php endforeach;?>
          
                  </tbody>
                </table>
              </div>
       
            </div>
            <!-- /.card -->


            <!-- /.card -->
          </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once ADMIN_PATH . "views/inc/footer.php"; ?>