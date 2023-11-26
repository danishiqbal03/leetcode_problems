class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight(int $n): int {
        $count = 0;
         
        // Iterate through each bit of the binary representation
        while ($n != 0) {
            echo $n." ";
            // Use bitwise AND to check the least significant bit
            $count += $n & 1;
            echo $count."\n";
            // Right shift the binary representation by 1
            $n = $n >> 1;
        }
        
        return $count;
    }

}