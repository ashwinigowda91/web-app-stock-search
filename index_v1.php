<?php
        
         //call for stock search
         if(isset($_GET['symbolName']))
         {
             $symbol = $_GET['symbolName'];
             if (strpos($symbol,"-") > 0) 
             {
                $symName = explode(" - ",$symbol,-1);
                $symbol = implode($symName);
             }  
             $search = "http://dev.markitondemand.com/MODApis/Api/v2/Quote/json?symbol=";
             $searchURL = $search.$symbol;
             
             $jsonResp = file_get_contents($searchURL);
             echo $jsonResp;
         }

        //call for lookup
        if(isset($_GET['input']))
        {
            $in = $_GET['input'];
            if (!empty($in)) 
             {
                $lookup = "http://dev.markitondemand.com/MODApis/Api/v2/Lookup/json?input=";
                $lookupURL = $lookup.$in;
                $jsonResp = file_get_contents($lookupURL);
                echo $jsonResp;
             }  
        }

    if(isset($_GET['parameters']))
    {
        $params = $_GET['parameters'];
        $chartParams = rawurlencode($params);
        $chart = "http://dev.markitondemand.com/MODApis/Api/v2/InteractiveChart/json?parameters=";
        $chartURL = $chart.$chartParams;
        $jsonRes = file_get_contents($chartURL);
        echo $jsonRes;
    }
    
?>




