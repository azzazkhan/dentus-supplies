<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <!-- Main content -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>Add Promo Code</h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Home</a></li>
            <li class="breadcrumb-item active">Promo Code</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <!-- form start -->
            <form class="form-horizontal form-submit-event" action="<?= base_url('admin/promo_code/add_promo_code'); ?>" method="POST">

              <div class="card-body">
                <?php
                if (isset($fetched_details[0]['id']) && !empty($fetched_details[0]['id'])) {
                ?>
                  <input type="hidden" name="edit_promo_code" value="<?= $fetched_details[0]['id'] ?>">
                <?php
                }
                ?>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">Promo Code <span class='text-danger text-sm'>*</span></label>
                    <input type="text" class="form-control" name="promo_code" value="<?= @$fetched_details[0]['promo_code'] ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Message <span class='text-danger text-sm'>*</span></label>
                    <input type="text" class="form-control" name="message" value="<?= @$fetched_details[0]['message'] ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Start Date <span class='text-danger text-sm'>*</span></label>
                    <input type="date" class="form-control" name="start_date" id="start_date" value="<?= @$fetched_details[0]['start_date'] ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">End Date <span class='text-danger text-sm'>*</span></label>
                    <input type="date" class="form-control" name="end_date" id="end_date" value="<?= @$fetched_details[0]['end_date'] ?>">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="">No. Of Users <span class='text-danger text-sm'>*</span></label>
                    <input type="number" class="form-control" name="no_of_users" value="<?= @$fetched_details[0]['no_of_users'] ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Minimum Order Amount <span class='text-danger text-sm'>*</span></label>
                    <input type="number" class="form-control" name="minimum_order_amount" value="<?= @$fetched_details[0]['minimum_order_amount'] ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Discount <span class='text-danger text-sm'>*</span></label>
                    <input type="number" class="form-control" name="discount" id="discount" value="<?= @$fetched_details[0]['discount'] ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Discount Type <span class='text-danger text-sm'>*</span></label>
                    <select name="discount_type" class="form-control">
                      <option value="">Select</option>
                      <option value="percentage" <?= (isset($fetched_details[0]['discount_type']) && $fetched_details[0]['discount_type'] == 'percentage') ? 'selected' : '' ?>>Percentage</option>
                      <option value="amount" <?= (isset($fetched_details[0]['discount_type']) && $fetched_details[0]['discount_type'] == 'amount') ? 'selected' : '' ?>>Amount</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Max Discount Amount <span class='text-danger text-sm'>*</span></label>
                    <input type="number" class="form-control" name="max_discount_amount" id="max_discount_amount" value="<?= @$fetched_details[0]['max_discount_amount'] ?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Repeat Usage <span class='text-danger text-sm'>*</span></label>
                    <select name="repeat_usage" id="repeat_usage" class="form-control">
                      <option value="">Select</option>
                      <option value="1" <?= (isset($fetched_details[0]['repeat_usage']) && $fetched_details[0]['repeat_usage'] == '1') ? 'selected' : '' ?>>Allowed</option>
                      <option value="0" <?= (isset($fetched_details[0]['repeat_usage']) && $fetched_details[0]['repeat_usage'] == '0') ? 'selected' : '' ?>>Not Allowed</option>
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="">Status <span class='text-danger text-sm'>*</span></label>
                    <select name="status" id="status" class="form-control">
                      <option value="">Select</option>
                      <option value="1" <?= (isset($fetched_details[0]['status']) && $fetched_details[0]['status'] == '1') ? 'selected' : '' ?>>Active</option>
                      <option value="0" <?= (isset($fetched_details[0]['status']) && $fetched_details[0]['status'] == '0') ? 'selected' : '' ?>>Deactive</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6 <?= (isset($fetched_details[0]['repeat_usage']) && $fetched_details[0]['repeat_usage'] == '1') ? '' : 'd-none' ?>" id="repeat_usage_html">
                    <label for=""> No of repeat usage </label>
                    <input type="number" class="form-control" name="no_of_repeat_usage" id="no_of_repeat_usage" value="<?= @$fetched_details[0]['no_of_repeat_usage'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <button type="reset" class="btn btn-warning">Reset</button>
                  <button type="submit" class="btn btn-success" id="submit_btn"><?= (isset($fetched_details[0]['id'])) ? 'Update Promo Code' : 'Add Promo Code' ?></button>
                </div>
              </div>
              <div class="d-flex justify-content-center">
                <div class="form-group" id="error_box">
                </div>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!--/.card-->
        </div>
        <!--/.col-md-12-->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>