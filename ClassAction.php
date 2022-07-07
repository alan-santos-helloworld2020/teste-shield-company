<?php

class Action
{
	public function doSomething($vetor)
	{

        $return['vlr_type'] = "";

        for($c=0; $c < count($vetor); $c++ )
        {
            for($d=0; $d<count($vetor[$c]); $d++)
            {
                if($vetor[$c]['vlr'] == 0.00)
                {
                    $return['vlr_type'] = "FREE";
                }
                elseif($vetor[$c]['vlr'] >= 0.01 and $vetor[$c]['vlr'] <= 10)
                {
                    $return['vlr_type'] = "CHEAP";
                }
                elseif($vetor[$c]['vlr'] > 10 and $vetor[$c]['vlr'] <= 20)
                {
                    $return['vlr_type'] = "GOOD_VALUE";
                }
                elseif($vetor[$c]['vlr'] > 20)
                {
                    $return['vlr_type'] = "EXPENSIVE";
                }
            }
        }

        return $return;
	}
}
