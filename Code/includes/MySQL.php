<?php
	
	class SQL {
		public $bdd;
		public function __construct() {
			$this->bdd=mysqli_connect(SQL_HOST,SQL_USER,SQL_PASSWORD,SQL_DB);
		}
		public function req($req) {
			return mysqli_query($this->bdd,$req);
		}
		public function prepStr($str) {
			return mysqli_real_escape_string($this->bdd,$str);
		}
		public function fetch($req) {
			return mysqli_fetch_assoc($req);
		}
		public function freeReq($req) {
			return mysqli_free_result($req);
		}
		public function exec($req) {
			return mysqli_real_query($this->bdd,req);
		}
		public function fetchAll($req) {
			$n=0;
			$ret=array();
			while($data=$this->fetch($req)) {
				$ret[$n]=$data;
				$n++;
			}
			$this->freereq($req);
			return $ret;
		}
	}
	
	$SQL_DB=new SQL();