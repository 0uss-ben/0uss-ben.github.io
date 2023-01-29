<?php
        function &connection()
        {
            $servername = "DESKTOP-SJ9A2CE";
            $connectionInfo = array(
                "UID"   =>"sa",
                "PWD"   =>"LyceeAlkindY2022",
                "Database"  =>"VoltaElectrogene");
            $conn = sqlsrv_connect($servername,$connectionInfo);
            if( $conn === false )  
            {  
                 echo "Unable to connect.</br>";  
                 die( print_r( sqlsrv_errors(), true));  
            }
            return $conn;
        }
?>