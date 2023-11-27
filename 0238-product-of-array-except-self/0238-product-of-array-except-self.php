class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $arr_left = array();
        $arr_right = array();
        $arr_final = array();
        $len = count($nums);
        $prod_l = 1;
        $prod_r = 1;
        for($i = 0; $i<$len; $i++){

            if($i == 0){
                $arr_left[$i] = 1;
            } else {
                $prod_l = $prod_l * $nums[$i-1];
                $arr_left[$i] = $prod_l;
            }
        }
        for($i = $len - 1; $i>=0; $i--){

            if($i == $len - 1){
                $arr_right[$i] = 1;
            } else {
                $prod_r = $prod_r * $nums[$i+1];
                $arr_right[$i] = $prod_r;
            }
        }

        for($i = 0; $i<$len; $i++){
            $arr_final[$i] = $arr_left[$i] * $arr_right[$i];
        }

       return $arr_final;

    }
}