<h3 class="mt-3">Detail</h3>
<hr>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Account Number</th>
      <th scope="col">Bank Code</th>
      <th scope="col">Beneficiary Name</th>
      <th scope="col">Amount</th>
      <th scope="col">Receipt</th>
      <th scope="col">Remark</th>
      <th scope="col">Timestamp</th>
      <th scope="col">Time Served</th>
      <th scope="col">Fee</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row"><?= $data['disbursement']['id']; ?></td>
      <td><?= $data['disbursement']['account_number']; ?></td>
      <td><?= $data['disbursement']['bank_code']; ?></td>
      <td><?= $data['disbursement']['beneficiary_name']; ?></td>
      <td><?= $data['disbursement']['amount']; ?></td>
      <td><?= $data['disbursement']['receipt']; ?></td>
      <td><?= $data['disbursement']['remark']; ?></td>
      <td><?= $data['disbursement']['timestamp']; ?></td>
      <td><?= $data['disbursement']['time_served']; ?></td>
      <td><?= $data['disbursement']['fee']; ?></td>
      <th><?= $data['disbursement']['status']; ?></th>
    </tr>
  </tbody>
</table>
<--<a href="<?= BASEURL; ?>/disburse" class="card-link">back</a>