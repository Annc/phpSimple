<?php  
if(isset($_POST["submit"]) && $_POST["submit"] == "��½")  
    {  
        $user = $_POST["username"];  
        $psw = $_POST["password"];  
		echo $psw;
        if($user == "" || $psw == "")  
        {  
            echo "<script>alert('�������û��������룡'); history.go(-1);</script>";  
        }  
        else  
        {  
            include('conn.php');
            $sql = "select user_name,user_password from loginUser where user_name = '$user' and user_password = MD5('$_POST[password]')";  
            $result = mysql_query($sql);  
            $num = mysql_num_rows($result);  
            if($num)  
            {  
                $row = mysql_fetch_array($result);  //��������������ʽ������������  
                echo $row[0];  
            }  
            else  
            {  
                echo "<script>alert('�û��������벻��ȷ��');history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('�ύδ�ɹ���'); history.go(-1);</script>";  
    }  
?>  