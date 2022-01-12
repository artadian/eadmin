<?php

class Mmaster extends CI_Model
{
    var $last_table='';
   
    function response($responseType,$responseMessage="",$data=null){


        if ($responseType=="success"){
            $res["responseCode"] = 200;
            $res["responseMsg"]  = $responseMessage==""?"Data saved successfully":$responseMessage;
            if ($data!=null && $data!=""){
                $res["data"] = $data;
            }
        }else{
            $res["responseCode"] = 401;
            $res["responseMsg"]  = $responseMessage==""?"Unable to save data":$responseMessage;            
        }
        return $res;
    }

    function getcontent($url)
    {
				//var_dump($url);
			   //ini_set('default_socket_timeout', 900);
			   $ctx = stream_context_create(array( 
					'http' => array( 
						'timeout' => 900 
						) 
					) 
			   ); 
               $ret = file_get_contents($url,0,$ctx);
                //var_dump($ret);
				//exit;
               if ($url!="php://input"){
                $url.="&logid=".$this->maccount->loggedID();
                $data = array("requrl"=>$url,"respondtext"=>$ret,"createdby"=>$this->maccount->loggedID(),"createdon"=>date("Y-m-d H:i:s"));
                $this->db->insert('logbapi', $data);
                
               }

                return $ret;
    }

    function getMenuSistem($pid = 0, $group = "")
    {
        $dblokal = $this->load->database("default", true);
      

        $dblokal->select('*');
        $dblokal->from("menu");
        $dblokal->where("parentid", $pid);
        $dblokal->where("published", 1);
        if ($pid == 0)
        {
            $dblokal->order_by("mcategoryorder", "ASC");
        }
        $dblokal->order_by("ordering", "ASC");

        $query = $dblokal->get()->result_array();
        // var_dump($query);exit;
        return $query;
    }
    function getBranchList($restrictUser=0)
    {
        $this->db->select('c.citycode,b.*');
        $this->db->join('city c', 'c.id = b.cityid');
        $this->db->order_by('c.citycode', 'asc');
        $this->db->order_by('b.branchname', 'asc');
        if ($restrictUser==1){
            $user = $this->maccount->userdata();
            $this->db->where_in('b.id', $user->branch);
            
        } 	
        $q = $this->db->get('branch b');
        return $q;
    }

    function getSingleRecord($table,$where)
    {
        $this->db->where($where);
        $q = $this->db->get($table);
        if ($q->num_rows()>0){
            $q = $q->row();
        }else{
            $q = null;
        }
        return $q;
    }


    function getParamValue($paramCode, $paramKey)
    {
        $result = $this->db->get_where('param', array("paramcode" => $paramCode,
                "paramkey" => $paramKey))->row();
        return $result;
    }
    function getComboList($tableName, $param, $withID = false,$order="")
    {
        if ($order==""){
            $order = $param["value"];
        }

        $this->db->select($param["key"]);
        $this->db->select($param["value"]);
        $this->db->order_by($order, 'asc');
        $query = $this->db->get($tableName)->result_array();
        $arrData = array();
        foreach ($query as $row)
        {
            if ($withID == true)
            {
                $strTeks = $row[$param["key"]] . " - " . $row[$param["value"]];
            } else
            {
                $strTeks = $row[$param["value"]];
            }
            // $arrData = array_merge($arrData,array($row[$param["key"]]=>$strTeks));
            $arrData[$row[$param["key"]]] = $strTeks;
        }

        return $arrData;
    }

    function getComboListCustomQuery($query, $withID = false)
    {
        $query = $this->db->query($query)->result_array();
        $arrData = array();
        foreach ($query as $row)
        {
            if ($withID == true)
            {
                $strTeks = $row["key"] . " - " . $row["value"];
            } else
            {
                $strTeks = $row["value"];
            }
            // $arrData = array_merge($arrData,array($row[$param["key"]]=>$strTeks));
            $arrData[$row["key"]] = $strTeks;
        }

        return $arrData;
    }

    
    function getComboListWithCondition($tableName, $param, $where, $whereType = "default",$withID=false)
    {
        if ($whereType == "in")
        {
        	$this->db->where_in($param["key"], $where);
        } else
        {
            $this->db->where($where);
        }
        
        $query = $this->db->get($tableName)->result_array();
        $arrData = array();
        if ($withID == false)
        {
        	foreach ($query as $row)
        	{
        		$strTeks = $row[$param["value"]];
        		$arrData[$row[$param["key"]]] = $strTeks;
        	}
        }
        else 
        {
        	foreach ($query as $row)
        	{
        		$strTeks = $row[$param["key"]] . " - " . $row[$param["value"]];
        		//			$arrData = array_merge($arrData,array($row[$param["key"]]=>$strTeks));
        		$arrData[$row[$param["key"]]] = $strTeks;
        	}
        }
        

        return $arrData;
    }

    function retrieveData($table, $fields, $where = '',$limit='',$ordering='')
    {
        $this->db->select($fields);
        if ($where != '')
        {
            $this->db->where($where);
        }
        if($limit!=''){
                $this->db->limit($limit);
        }
        if($ordering!=''){
            if(is_array($ordering)){
                foreach($ordering as $key=>$value){
                     $this->db->order_by($key,$value);
                }
            }else{
                $this->db->order_by($ordering);
            }
        }
        $query = $this->db->get($table);
        return $query;
    }

    function validateSQLParam($key, $param, $type = 'string', $operator = '=')
    {
        $ci = &get_instance();
        if ($param !== '')
        {
            
            if ($type == 'string')
            {
                
                if (strpos($param, "%") !== false)
                {
                    $ci->db->like($key, $param, 'none', false);
                } else
                {
                    $ci->db->where($key, $param);
                }
            } elseif ($type == 'date')
            {
                if (strpos($key, "StartDate"))
                {
                    $key = substr($key, 0, -9) . "Date"; // shipmentStartDate -> shipmentDate
                    $operator = '>=';

                } elseif (strpos($key, "EndDate"))
                {
                    $key = substr($key, 0, -7) . "Date"; // shipmentEndDate -> shipmentDate
                    $operator = '<=';
                }
                $ci->db->where(" DATEADD(day, DATEDIFF(day, 0, $key), 0) $operator DATEADD(day, DATEDIFF(day, 0, '$param'), 0) ");
            }
            elseif ($type == 'datenew')
            {
            	if (strpos($key, "StartDate"))
            	{
            		$key = substr($key, 0, -9) . "date"; // shipmentStartDate -> shipmentDate
            		$operator = '<=';
            		
            	} elseif (strpos($key, "EndDate"))
            	{
            		$key = substr($key, 0, -7) . "date"; // shipmentEndDate -> shipmentDate
            		$operator = '>=';
            	}
            	$ci->db->where (" $key $operator  '$param' ");
            }
            elseif ($type == 'number')
            {
                $ci->db->where($key . " " . $operator, $param);
            }
        }
        return $this;
    }
    function deleteData($table,$where,$soft=TRUE){
        $session = $this->session->userdata("user");
        $this->db->select('id')->where($where);
        $before =$this->db->get($table);

        $this->db->where($where);
        if ($soft==TRUE){
            $update["updatedon"] =date("Y-m-d H:i:s");
            $update["updatedby"] =$session['userid']; 
            $update["status"] = -1; 
            $x = $this->db->update($table,$update);         
        }else{
            $x = $this->db->delete($table);
        }

        foreach($before->result() as $key=>$value){
            $tablelog['table']=$table;
            $tablelog['event']='delete';
            $tablelog['tablekey']=$value->id;
            $tablelog['jsondata']=json_encode($before->row());
            $tablelog['jsonconstrain']=json_encode($where);
            $tablelog["createdby"] = $session['userid'];
            $tablelog["createdon"] = date("Y-m-d H:i:s");
            $this->db->insert('tablelog',$tablelog);
        }        

        if ($x){
            $ret["status"] =1;
        }else{
            $ret["status"] =0;
        }
        return $ret;
    }
    
    function updateData($table,$data,$where){
        $session = $this->session->userdata("user");
        $this->db->select('id')->where($where);
        $before =$this->db->get($table);
        $this->db->where($where);
        $data["updatedon"] =date("Y-m-d H:i:s");
        $data["updatedby"] =$session['userid']; 
        $this->db->update($table,$data);   
        foreach($before->result() as $key=>$value){
            $tablelog['table']=$table;
            $tablelog['event']='update';
            $tablelog['tablekey']=$value->id;
            $tablelog['jsondata']=json_encode($data);
            $tablelog['jsonconstrain']=json_encode($where);
            $tablelog["createdby"] = $session['userid'];
            $tablelog["createdon"] = date("Y-m-d H:i:s");
            $this->db->insert('tablelog',$tablelog);
        }        
        return $this->db->affected_rows();       
    }



    function saveData($table, $data, $whereKey=null)
    {
        $session = $this->session->userdata("user");      
        $res = array();  

        if ($data['id'] == "")
        {
            unset($data['id']);
            $data["createdon"] = date("Y-m-d H:i:s");
            $data["createdby"] = $session['userid'];

            $x = $this->db->insert($table, $data);
            $id = $this->db->insert_id();
            
                if ($id >= 0 or $id!=='')
                {
                    $tablelog = array(
                        "table"             => $table,
                        "event"             => "insert",
                        "tablekey"          => $id,
                        "jsondata"          => json_encode($data),
                        "jsonconstrain"    => "",
                        "createdby"         => $session['userid'],
                        "createdon"         => date("Y-m-d H:i:s")
                    );
                    $this->db->insert('tablelog',$tablelog);
                    
                    $res["status"]        = 1;
                    $res["affected_rows"] = $this->db->affected_rows();
                    $res["responseID"]    = $id;

                }else{
                    $res["status"]        = 0;
                    $res["affected_rows"] = 0;
                }


        } 
        else 
        {      
            if ($whereKey==null){
                $whereKey=array("id"=>$data["id"]);
            }
       
            $this->db->where($whereKey);
            $before=$this->db->get($table);

            $data["updatedon"] =date("Y-m-d H:i:s");
            $data["updatedby"] =$session['userid'];          
                
                $this->db->where($whereKey);                                
                $x = $this->db->update($table, $data);
                if ($x){

                    $res["status"]        = 1;
                    $res["responseID"]    = $before->row()->id;
                    $res["affected_rows"] = $this->db->affected_rows();
                    
                    foreach($before->result() as $key=>$value){
                        $tablelog = array(
                            "table"             => $table,
                            "event"             => "insert",
                            "tablekey"          => $value->id,
                            "jsondata"          => json_encode($data),
                            "jsonconstrain"    => json_encode($whereKey),
                            "createdby"         => $session['userid'],
                            "createdon"         => date("Y-m-d H:i:s")
                        );
                        $this->db->insert('tablelog',$tablelog);

                    }                    
                }else{
                    $res["status"]        = 0;
                    $res["affected_rows"] = 0;
                }
                
        }
        
            return $res;

    }

    function saveDataTemp($table, $data, $whereKey=null)
    {
        $session = $this->session->userdata("user");      
        $res = array();  

        if ($data['id'] == "")
        {
            unset($data['id']);
            $data["createdon"] = date("Y-m-d H:i:s");
            // $data["createdby"] = $session['userid'];

            $x = $this->db->insert($table, $data);
            $id = $this->db->insert_id();
            
                if ($id >= 0 or $id!=='')
                {
                    $tablelog = array(
                        "table"             => $table,
                        "event"             => "insert",
                        "tablekey"          => $id,
                        "jsondata"          => json_encode($data),
                        "jsonconstrain"    => "",
                        "createdby"         => $session['userid'],
                        "createdon"         => date("Y-m-d H:i:s")
                    );
                    $this->db->insert('tablelog',$tablelog);
                    
                    $res["status"]        = 1;
                    $res["affected_rows"] = $this->db->affected_rows();
                    $res["responseID"]    = $id;

                }else{
                    $res["status"]        = 0;
                    $res["affected_rows"] = 0;
                }


        } 
        else 
        {      
            if ($whereKey==null){
                $whereKey=array("id"=>$data["id"]);
            }
       
            $this->db->where($whereKey);
            $before=$this->db->get($table);

            $data["updatedon"] =date("Y-m-d H:i:s");
            $data["updatedby"] =$session['userid'];          
                
                $this->db->where($whereKey);                                
                $x = $this->db->update($table, $data);
                if ($x){

                    $res["status"]        = 1;
                    $res["responseID"]    = $before->row()->id;
                    $res["affected_rows"] = $this->db->affected_rows();
                    
                    foreach($before->result() as $key=>$value){
                        $tablelog = array(
                            "table"             => $table,
                            "event"             => "insert",
                            "tablekey"          => $value->id,
                            "jsondata"          => json_encode($data),
                            "jsonconstrain"    => json_encode($whereKey),
                            "createdby"         => $session['userid'],
                            "createdon"         => date("Y-m-d H:i:s")
                        );
                        $this->db->insert('tablelog',$tablelog);

                    }                    
                }else{
                    $res["status"]        = 0;
                    $res["affected_rows"] = 0;
                }
                
        }
        
            return $res;

    }
    
    function saveDataDoubleCover($table, $data, $whereKey=null)
    {
    	$session = $this->session->userdata("user");
    	$res = array();
    	
    	if ($data['id'] == "")
    	{
    		unset($data['id']);
    		$data["createdon"] = date("Y-m-d H:i:s");
    		
    		$x = $this->db->insert($table, $data);
    		$id = $this->db->insert_id();
    		
    		if ($id >= 0 or $id!=='')
    		{
    			$tablelog = array(
    					"table"             => $table,
    					"event"             => "insert",
    					"tablekey"          => $id,
    					"jsondata"          => json_encode($data),
    					"jsonconstrain"    => "",
    					"createdby"         => $session['userid'],
    					"createdon"         => date("Y-m-d H:i:s")
    			);
    			$this->db->insert('tablelog',$tablelog);
    			
    			$res["status"]        = 1;
    			$res["affected_rows"] = $this->db->affected_rows();
    			$res["responseID"]    = $id;
    			
    		}else{
    			$res["status"]        = 0;
    			$res["affected_rows"] = 0;
    		}
    		
    		
    	}
    	else
    	{
    		if ($whereKey==null){
    			$whereKey=array("id"=>$data["id"]);
    		}
    		
    		$this->db->where($whereKey);
    		$before=$this->db->get($table);
    		
    		$data["updatedon"] =date("Y-m-d H:i:s");
    		$data["updatedby"] =$session['userid'];
    		
    		$this->db->where($whereKey);
    		$x = $this->db->update($table, $data);
    		if ($x){
    			
    			$res["status"]        = 1;
    			$res["responseID"]    = $before->row()->id;
    			$res["affected_rows"] = $this->db->affected_rows();
    			
    			foreach($before->result() as $key=>$value){
    				$tablelog = array(
    						"table"             => $table,
    						"event"             => "insert",
    						"tablekey"          => $value->id,
    						"jsondata"          => json_encode($data),
    						"jsonconstrain"    => json_encode($whereKey),
    						"createdby"         => $session['userid'],
    						"createdon"         => date("Y-m-d H:i:s")
    				);
    				$this->db->insert('tablelog',$tablelog);
    				
    			}
    		}else{
    			$res["status"]        = 0;
    			$res["affected_rows"] = 0;
    		}
    		
    	}
    	
    	return $res;
    	
    }
    


}

?>