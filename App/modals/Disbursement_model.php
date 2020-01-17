<?php

class Disbursement_model {
  private $table = 'disbursement';
  private $url = 'https://nextar.flip.id/disburse';
  private $key = 'HyzioY7LP6ZoO7nTYKbG8O4ISkyWnX1JvAEVAhtWKZumooCzqp41';
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function create($data) {
    $ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
		curl_setopt($ch, CURLOPT_USERPWD, "$this->key:");
    $result = curl_exec($ch);
    $result = json_decode($result, true);
		curl_close($ch);

    // Add To Db Local
    $query = 'INSERT INTO ' . $this->table . ' value (:id, :amount, :status, :timestamp, :bank_code, :account_number, :beneficiary_name, :remark, :receipt, :time_served, :fee)';
    $this->db->query($query);
    $this->db->bind('id', $result['id']);
    $this->db->bind('amount', $result['amount']);
    $this->db->bind('status', $result['status']);
    $this->db->bind('timestamp', $result['timestamp']);
    $this->db->bind('bank_code', $result['bank_code']);
    $this->db->bind('account_number', $result['account_number']);
    $this->db->bind('beneficiary_name', $result['beneficiary_name']);
    $this->db->bind('remark', $result['remark']);
    $this->db->bind('receipt', $result['receipt']);
    $this->db->bind('time_served', $result['time_served']);
    $this->db->bind('fee', $result['fee']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function findAll() {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }
}