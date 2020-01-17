<div class="row mt-3">
  <div class="col-12">
    <h3>All Disbursement</h3>
    <button type="button" class="btn btn-primary btn-sm my-1" data-toggle="modal" data-target="#formModalAdd">
  Add Disbursement 
    </button>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Bank Code</th>
          <th scope="col">Beneficiary Name</th>
          <th scope="col">Amount</th>
          <th scope="col">Timestamp</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach( $data['disbursement'] as $data ) : ?>
          <tr>
            <td scope="row"><?= $data['id']; ?></td>
            <td><?= $data['bank_code']; ?></td>
            <td><?= $data['beneficiary_name']; ?></td>
            <td><?= $data['amount']; ?></td>
            <td><?= $data['timestamp']; ?></td>
            <td><a href="<?= BASEURL; ?>/disburse/detail/<?= $data['id']; ?>" class="badge badge-primary">detail</a></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</div>


<!-- Modal Add Disbursement -->
<div class="modal fade" id="formModalAdd" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Add Disbursement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/disburse/create" method="post">
          <div class="form-group">
            <label for="bank_code">Bank_code</label>
            <input type="text" class="form-control" id="bank_code" name="bank_code">
          </div>
          <div class="form-group">
            <label for="account_number">Acount_number</label>
            <input type="number" class="form-control" id="account_number" name="account_number">
          </div>
          <div class="form-group">
            <label for="remark">Amount</label>
            <input type="number" class="form-control" id="amount" name="amount">
          </div>
          <div class="form-group">
            <label for="remark">Remark</label>
            <input type="text" class="form-control" id="remark" name="remark">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>
