<?php 
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if(isset($_POST["Submit"]) && $_POST["Submit"] == "ע��")  
    {  
        $user = $_POST["username"];  
        $psw = $_POST["password"];  
        $psw_confirm = $_POST["confirm"];  
        if($user == "" || $psw == "" || $psw_confirm == "")  
        {  
            echo "<script>alert('��ȷ����Ϣ�����ԣ�'); history.go(-1);</script>";  
        }  
        else  
        {  
            if($psw == $psw_confirm)  
            {  
                $sql = "select user_name from loginUer where user_name = '$_POST[username]'"; //SQL���  
				$data = mysqli_query($dbc, $sql);  //ִ��SQL���  
                $num = mysqli_num_rows($data); //ͳ��ִ�н��Ӱ�������  
                if($num)    //����Ѿ����ڸ��û�  
                {  
                    echo "<script>alert('�û����Ѵ���'); history.go(-1);</script>";  
                }  
                else    //�����ڵ�ǰע���û�����  
                {  
                    $sql_insert = "insert into loginUer(id,user_name,user_password)VALUES(NULL,'$user',SHA1('$psw'))";  
                    $res_insert = mysqli_query($dbc,$sql_insert);  
                    //$num_insert = mysql_num_rows($res_insert);  
                    if($res_insert)  
                    {  
                        echo "<script>alert('ע��ɹ���'); history.go(-1);</script>";  
                    }  
                    else  
                    {  
                        echo "<script>alert('ϵͳ��æ�����Ժ�'); history.go(-1);</script>";  
                    }  
                }  
            }  
            else  
            {  
                echo "<script>alert('���벻һ�£�'); history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('�ύδ�ɹ���'); history.go(-1);</script>";  
    }  
?>  