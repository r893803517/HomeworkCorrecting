<?php
	header("Content-type: text/html; charset=utf-8");
	include 'dbconn.php';
	
	
	function query($sql,$type,$parameter1){
		$stmt = conn::getconn()->prepare($sql);
		if(!$stmt){
			die('sql语句错误');
		}
		$stmt->bind_param($type,$parameter1);
		if(!$stmt->execute()){
			die('查询失败');
		}
        
    	$result = $stmt->get_result();
	 	if( ($rows = $result->num_rows) == 1){
			$stmt->close();	
			return true;
		}
		$stmt->close();	
		return false;
		
		//		 $stmt->store_result();
//       //$stmt->bind_result($id,$name,$author,$price);
//       while ($stmt->fetch()){
//               //printf("%s:%s,%s,%s<br/>",$id,$name,$author,$price);
//         }
	}
	
	//写入数据库
	function update(){
		
	}
	
	
	//删除
	function delete(){
		
	}
	
//	$sql = 'select * from survey_info where id = ?';
//	$parameter2 = 86;
//	$type = 'i';
//	
//	if(query($sql,$type,$parameter2)){
//		echo "ID has been used";
//	}
//	
//	$result = $stmt->get_result();
//	 $rows = $result->num_rows;
//      while ($row = $result->fetch_array(MYSQLI_NUM))
//      {
//          foreach ($row as $r)
//          {
//              print "$r ";
//          }
//          print "\n";
//      }
//	
?>