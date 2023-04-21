<?php

class PacientData {
	public static $tablename = "pacient";
	public function PacientData(){
		$this->title = "";
		$this->email = "";
		$this->image = "";
		$this->password = "";
		$this->is_public = "0";
		$this->created_at = "NOW()";
	
	}
        public function getPacient(){ return PacientData::getById($this->pacient_id); }
        
	public function add(){
		$sql = "insert into ".self::$tablename." (dni,name,lastname,represent,gender,age,email,address,phone,created_at) ";
		$sql .= "value (\"$this->dni\",\"$this->name\",\"$this->lastname\",\"$this->represent\",\"$this->gender\",\"$this->age\",\"$this->email\",\"$this->address\",\"$this->phone\",$this->created_at)";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto PacientData previamente utilizamos el contexto
	public function update_active(){
		$sql = "update ".self::$tablename." set last_active_at=NOW() where id=$this->id";
		Executor::doit($sql);
	
	}

	
	public function update(){
		$sql = "update ".self::$tablename." set dni=\"$this->dni\",name=\"$this->name\",lastname=\"$this->lastname\",represent=\"$this->represent\",address=\"$this->address\",phone=\"$this->phone\",gender=\"$this->gender\",email=\"$this->email\",age=\"$this->age\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new PacientData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by created_at desc";
		$query = Executor::doit($sql);
                
		return Model::many($query[0],new PacientData());
	}
        
	public static function getAllActive(){
		$sql = "select * from client where last_active_at>=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientData());
	}

	public static function getAllUnActive(){
		$sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientData());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientData());
	}
	
	public static function getAllByPacientId($id){
		$sql = "select * from ".self::$tablename." where id=$id order by pacient";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientData());
	}
}