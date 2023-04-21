<?php

class FichaData {
	public static $tablename = "fichamedic";
	public function FichaData(){
		$this->title = "";
		$this->email = "";
		$this->image = "";
		$this->password = "";
		$this->is_public = "0";
		$this->created_at = "NOW()";
	}

	public function getMedic(){ return MedicData::getById($this->medic_id); }
	public function getPacient(){ return PacientData::getById($this->pacient_id); }
       
        
	public function add(){
		$sql = "insert into ".self::$tablename." (category_id,dni,name,lastname,address,phone,email,created_at) ";
		$sql .= "value ($this->category_id,\"$this->dni\",\"$this->name\",\"$this->lastname\",\"$this->address\",\"$this->phone\",\"$this->email\",$this->created_at)";
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

// partiendo de que ya tenemos creado un objecto MedicData previamente utilizamos el contexto
	public function update_active(){
		$sql = "update ".self::$tablename." set last_active_at=NOW() where id=$this->id";
		Executor::doit($sql);
	}


	public function update(){
		$sql = "update ".self::$tablename." set ocupation=\"$this->ocupation\",date_born=\"$this->date_born\",tratamient=\"$this->tratamient\",date_at=\"$this->date_at\",nacionality=\"$this->nacionality\",est_civil=\"$this->est_civil\",mot_consult=\"$this->mot_consult\",antecedents=\"$this->antecedents\",fathers=\"$this->fathers\",liveP=\"$this->liveP\",brothers=\"$this->brothers\",liveH=\"$this->liveH\",sons=\"$this->sons\",liveS=\"$this->liveS\",dbt=\"$this->dbt\",hta=\"$this->hta\",tbc=\"$this->tbc\",gamelar=\"$this->gamelar\",othersHF=\"$this->othersHF\",alcohol=\"$this->alcohol\",tabaco=\"$this->tabaco\",drugs=\"$this->drugs\",eat=\"$this->eat\",dipsia=\"$this->dipsia\",diuresis=\"$this->diuresis\",catarsis=\"$this->catarsis\",somnia=\"$this->somnia\",othersF=\"$this->othersF\",child=\"$this->child\",adult=\"$this->adult\",quirurgycs=\"$this->quirurgycs\",traumatologycs=\"$this->traumatologycs\",alergy=\"$this->alergy\",othersP=\"$this->othersP\",sex=\"$this->sex\",medic_id=\"$this->medic_id\",pacient_id=\"$this->pacient_id\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new FichaData());
	}
        public static function getBySQL($sql){
		$query = Executor::doit($sql);
		return Model::many($query[0],new FichaData());
	}   

	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by pacient_id desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new FichaData());
	}
        public static function getEvery(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new FichaData());
	}

	public static function getAllActive(){
		$sql = "select * from client where last_active_at>=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new FichaData());
	}

	public static function getAllUnActive(){
		$sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new FichaData());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new FichaData());
	}
        public static function getAllByFichaMedicId($id){
		$sql = "select * from ".self::$tablename." where id=$id order by pacient_id";
		$query = Executor::doit($sql);
		return Model::many($query[0],new FichaData());
	}


}


