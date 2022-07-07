<?php

class Action
{
        
	public function doSomething($param1,$vetor,$param3,$param4,$param5,$param6)
	{
        $return['calc_factor'] = ($param1 + $param3 + $param4 + $param5) * $param6;

        $return['vlr_type'] = "";

        for($count=0; $count < count($vetor); $count++ )
        {
            for($iterator=0; $iterator < count($vetor[$count]); $iterator++)
            {
                if($vetor[$count]['vlr'] == 0.00)
                {
                    $return['vlr_type'] = "FREE";
                }
                elseif($vetor[$count]['vlr'] >= 0.01 and $vetor[$count]['vlr'] <= 10)
                {
                    $return['vlr_type'] = "CHEAP";
                }
                elseif($vetor[$count]['vlr'] > 10 and $vetor[$count]['vlr'] <= 20)
                {
                    $return['vlr_type'] = "GOOD_VALUE";
                }
                elseif($vetor[$count]['vlr'] > 20)
                {
                    $return['vlr_type'] = "EXPENSIVE";
                }
            }
        }

        return $return;
	}
}
